<?php 
    include('session.php');
    if(isset($_SESSION['username'])){
        header('location:dashboard.php');
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
    <header>
        <div class="gal-container">
            <div class="gal-logo">
                <img src="jatim.png" alt="logo" width="60" height="80">
            </div>
            <nav>
                <li><a href="registrasi.php">Registrasi</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="tentang.html">Tentang</a></li>
                <li><a href="kontak.html">Kontak</a></li>
            </nav>
        </div>
    </header>
    <div class="gal-container home">
        <h1 class="gal-font size50">Selamat Datang<br>
            <a class="gal-font size30">Dinas Kominikasi dan Informatika Provinsi Jawa Timur</a>
        </h1>
    </div>
</body>

</html>