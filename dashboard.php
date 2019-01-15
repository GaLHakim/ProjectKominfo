<?php include('session.php');
    if(empty($_SESSION['username'])){
        header('location:home.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
<title>PERATURAN GUBERNUR JAWA TIMUR</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/cssHome.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header>
        <div class="gal-container">
            <div class="gal-logo">
                <img src="jatim.png" alt="logo" width="60" height="80">
            </div>
            <nav>
                <li><a href="registrasi.php">Pengajuan Document</a></li>
                <li><a href="home.php?logout='1'">Logout</a></li>
                <li><i class="fa fa-user" style="font-size: 40px"></i></li>
            </nav>
        </div>
    </header>
    <div class="gal-container home">
        
    </div>
</body>

</html>