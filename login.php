<?php include('\users\login.php'); 
    
    if(isset($_SESSION['username'])){
        header('location:home.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
<title>PERATURAN GUBERNUR JAWA TIMUR</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css\cssHome.css">
</head>
<body>
    <div class="gal-container login">
        <img src="jatim.png">
        <form method="post" action="login.php">
            <?php include('errors.php'); ?>    
            <div class="gal-input">
                <label for="UName">Username :</label>
                <input type="text" name="username"
                placeholder="Username">
            </div>
            <div>
                <label for="Pass">Password :</label>
                <input type="password" name="password"
                placeholder="Password">
            </div>
            <input type="submit" name="login"
            value="LOGIN" class="gal-btn login"><br><br>
            <a href="#"> Lost your Password ?</a>
        </form>
    </div>
    
</body>