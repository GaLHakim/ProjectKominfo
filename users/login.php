<?php 
	include('acess.php');
	if(isset($_POST['login'])){
		$username = mysql_real_escape_string($_POST['username']);
		$password = mysql_real_escape_string($_POST['password']);

		if(empty($username)){
			array_push($errors, 'Username is required');
		}
		if(empty($password)){
			array_push($errors, 'Password is required');
		}

		if(count($errors) == 0){
			$query = "SELECT * FROM tbl_user WHERE username = '$username' AND password = '$password'";
			$result = mysqli_query($db,$query);
			if(mysqli_num_rows($result) == 1){
				$_SESSION['username'] = $username;
				header('location:dashboard.php');
			}else{
				array_push($errors,"wrong username/password combination");
				
			}
		}
	}
 ?>