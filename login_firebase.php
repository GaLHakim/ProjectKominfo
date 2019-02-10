<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Admin Firebase</title>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	<script src="css/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap-3.3.7-dist/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://www.gstatic.com/firebasejs/5.8.2/firebase.js"></script>
	<script src="https://cdn.firebase.com/libs/firebaseui/3.1.1/firebaseui.js"></script>
	<link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/3.1.1/firebaseui.css" />
</head>
<body>
	<div id="firebaseui-auth-container"></div>
	<div id="loader">Loading...</div>
	<script src="admin-firebase/firebase.js"></script>
	<script src="admin-firebase/login.js"></script>
	<div class="container">
		<div class="col-sm-4"></div>
		<div class="col-sm-4 align-self-center" style="margin-top: 30px;">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h2 class="panel-title"><i class="fa fa-user"></i>&nbspLogin Admin</h2>
				</div>
				<div class="panel-body">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user" style="font-size: 16px;"></i></span>
					<input type="text" name="username" placeholder="Email...." class="form-control" id="email_field"></div><br>
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-lock" style="font-size: 16px;"></i></span>
					<input type="password" name="password" placeholder="Password...." class="form-control" id="pass_field"></div>
				</div>
				<div class="panel-footer">
					<button class="btn btn-primary" id='login'>Log In</button>
				</div>
			</div>
		</div>
	</div>
</body>
</html>