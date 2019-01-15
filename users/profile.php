<?php 
$query = "SELECT * FROM tbl_usr WHERE username = '$_SESSION['username']'";
$result = mysqli_query($query);
$data = mysqli_fetch_array($result);
 ?>