<?php 
	include('admin/connect.php');
	
	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		if(empty($username)){
			array_push($errors, 'Username is required');
		}
		if(empty($password)){
			array_push($errors, 'Password is required');
		}
		if(count($errors) == 0){
			$query = "SELECT * FROM admin WHERE username = '$username' AND password = md5('$password')";
			$result = mysql_query($query);
			if(mysql_num_rows($result) == 1){
				$_SESSION['username'] = $username;
				
				header('location:admin/index.php?page=dashboard&&activedash=1');			
			}else{
				array_push($errors,"wrong username/password combination".mysqli_error($db_con));
			}
		}
	}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Login Admin</title>
 	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 	<link rel="stylesheet" type="text/css" href="css\bootstrap-3.3.7-dist\css\bootstrap-theme.css">
 	<link rel="stylesheet" type="text/css" href="css\bootstrap-3.3.7-dist\css\bootstrap.css">
 	<link rel="stylesheet" type="text/css" href="css\bootstrap-3.3.7-dist\css\bootstrap-min.css">	
 </head>
 <body>
 	<div class="col-sm-4"></div>
 	<div class="col-sm-4"><br>
 		<div class="panel panel-primary">
 			<div class="panel panel-heading">
 				<h3 class="panel-title">&nbsp&nbspLogin Admin Diskominfo</p>
 			</div>
 			<div class="panel-body">
 			<?php include('errors.php') ?>
 			<form method="POST">
 				<div class="row">
 				 <div class="col-lg-12">
 					<div class="input-group">
 						<span class="input-group-addon"><i class="fa fa-user"></i></span>
 						<input type="text" name="username" placeholder="Username Admin" class="form-control">
 					</div><br>
 				 </div>
 				 <div class="col-lg-12">
 					<div class="input-group ">
 					<span class="input-group-addon"><i class="fa fa-lock"></i></span>
 					<input type="password" name="password" placeholder="Password" class="form-control">
 					</div><br>
 				 </div>
 				 <div class="col-lg-12">
 				 	<div class="input-group">
 				 		<input type="submit" name="login" value="LOG IN" class="btn btn-primary">
 				 	</div>
 				 </div>
 				</div>
 			</form>
 			</div>
 		</div>
 	</div>
 </body>
 </html>