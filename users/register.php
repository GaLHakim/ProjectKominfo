<?php 
	
	include('acess.php');
	$name="";
	if(isset($_POST['register'])){
		$username = mysql_real_escape_string($_POST['username']);
		$name = mysql_real_escape_string($_POST['name']);
		$password_1 = mysql_real_escape_string($_POST['password_1']);
		$password_2 = mysql_real_escape_string($_POST['password_2']);


		//memastikan form tersisi semua
		if(empty($username)){
			array_push($errors,"Username is required");
		}						
		if(empty($name)){
			array_push($errors,"Insert your name");
		}						
		if(empty($password_1)){
			array_push($errors,"Password is required");
		}
		if($password_1 != $password_2){
			array_push($errors,"Password do not match");
		}

		if(count($errors) == 0){
			$password = $password_1;
			$sql = "INSERT INTO tbl_user (name,username,password) 
					VALUES ('$name','$username','$password')";
			if(mysqli_query($db,$sql)){
				echo "New record successs";
			}else{
				echo "Error: ".$sql."<br>".mysqli_error($db);
			}
		}
	}
?>