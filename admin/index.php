<?php 
session_start();
if(empty($_SESSION['username'])){
    header("location:../login_admin.php");
}
else{
    include "connect.php";
    include "core.php";

    if(isset($_REQUEST['addquest'])){
    header("location:index.php?page=tambahpertanyaan&&activequest=1");
}
elseif (isset($_REQUEST['tmbquit'])) {
    header("location:index.php?page=buatquesioner&&activequest=1");
}
?>

<html>
<head>
<title>PERATURAN GUBERNUR JAWA TIMUR</title>
<meta charset="UTF-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css-admin.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
    <header>
            <ul>
                <li class="ul-li"><a class="<?php if($_GET[activedash] == 1){echo 'active';} ?>" href="index.php?page=dashboard&&activedash=1"><i class="fas fa-home">&nbspDashboard</i></a>
                </li>
                <li class="dropdown">
                    <a class="dropbtn  <?php if($_GET[activequest] == 1){echo 'active';} ?>">
                    <i class="fas fa-list-ul" ></i>&nbspQuisoner</a>
                        <div class="dropdown-content">
                            <a href="index.php?page=buatquesioner&&activequest=1">Input</a>
                            <a href="#laporan">Laporan</a>
                        </div>
                </li>
                <li class="ul-li"><a  class="<?php if($_GET[actived] == 1){echo 'active';} ?>" href="index.php?page=userdata&&actived=1"><i class="fas fa-database"></i>&nbspData User</a></li>
            </ul>
    </header>
    <div class="content container">
        <?php
            if($_GET['page'] == 'quest'){
                include "admin-quisoner.php";
            } 
            elseif ($_GET['page'] == 'userdata') {
                include "admin-datauser.php";
            }
            elseif ($_GET['page'] == 'buatquesioner') {
                include "input-pertanyaan.php";
            }
            elseif ($_GET['page'] == 'tambahpertanyaan') {
                include "tambahpertanyaan.php";
            }
            else{
                include "admin-dashboard.php";
            }
         ?>
    </div>
</body>
<?php } ?>
