<?php include 'users\register.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>PERATURAN GUBERNUR JAWA TIMUR</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="cssHome.css">
</head>
<body>
    <div class="gal-container registrasi">
        <img src="jatim.png">
        <form method="post" action="registrasi.php">
            <?php include('errors.php');?>    
            <div class="gal-input">
                <input type="text" name="name" value="<?php echo $name?>"
                placeholder="Name">
            </div>
            <div>
                <input type="text" name="username" value="<?php echo $username?>"
                placeholder="Username">
            </div>
            <div>
                <input type="password" name="password_1"
                placeholder="Password">
            </div>
            <div>
                <input type="password" name="password_2"
                placeholder="Re-Password">
            </div>
            <input type="submit" name="register"
            value="REGISTRASI" class="gal-btn registrasi"><br><br>
            <a>Back to</a>
            <a href="login.html" class="gal-font color blue">Login</a>
        </form>
    </div>
    
</body>