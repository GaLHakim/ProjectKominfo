<?php 
	include ('\users\login.php');
	
	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION['username']);
		header('location:home.php');
	}
	mysqli_close($db);
 ?>