<?php 
  if(empty($_SESSION['username'])){
  	session_start();
  }
  $errors = array();
  $servername = "localhost";
  $user = "root";
  $pass = "";
  $dbname = "adm_kominfo";
  $db_con = mysql_connect($servername,$user,$pass);
  if(!$db_con){
  	echo "<script>alert('Failed to connect');</script>";
  }
  mysql_select_db($dbname);
 ?>