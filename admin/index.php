<?php include('connect.php');
 ?>
<!DOCTYPE html>
<html>
<head>
<title>PERATURAN GUBERNUR JAWA TIMUR</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css-admin.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <img src="../jatim.png" alt="logo" width="60" height="80">
            </div>
            <nav>
                <li>DINAS KOMUNIKANI DAN INFORMATIKA PROVINSI JAWA TIMUR</li>
                <li>Jl. Ahmad Yani 242 - 244 Surabaya</li>
                <li>Telp : (031) 8294608 / Fax : (031) 8294517 / email : kominfo@jatimprov.go.id</li>
            </nav>
            <ul>
                <li class="ul-li"><a class="<?php if($_GET[activedash] == 1){echo 'active';}else{echo '';}?>" href="index.php?page=dashboard&&activedash=1">Dashboard</a></li>
                <li class="ul-li"><a class="<?php if($_GET[activeq] == 1){echo 'active';}else{echo '';} ?>" href="index.php?page=quesioner&&activeq=1">Quisoner</a></li>
                <li class="ul-li"><a class="<?php if($_GET[activedata] == 1){echo 'active';}else{echo '';}?>" href="index.php?page=datauser&&activedata=1">Data User</a></li>
            </ul>
        </div>
    </header>
    <div class="content container">
        <?php
        if ($_GET['page'] == 'dashboard') {
            include('admin-dashboard.php');
         } 
        elseif ($_GET['page'] == 'datauser') {
            include('admin-datauser.php');
        }
        elseif ($_GET['page'] == 'quesioner') {
            include('admin-quisoner.php');
        }
        else{
            include('admin-dashboard.php');
        }
         ?>
    </div>
</body>