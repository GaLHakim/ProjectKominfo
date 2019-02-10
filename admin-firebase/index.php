<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" >
	<meta name="viewport" content="width=device-width,initial-scale=1">

	
	<title>Admin Firebase</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	<script src="../css/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet"  href="../css/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<script src="https://www.gstatic.com/firebasejs/5.8.2/firebase.js"></script>

</head>
<body>
	<script src="firebase.js"></script>
	<script src="index.js"></script>
	<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="#" class="navbar-brand"><i class="fa fa-user"></i></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsupportcontent">
					<span class="navbar-toggler-icon"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="navbarsupportcontent">
				<ul class="nav navbar-nav mr-auto">
					<li class="nav-item  <?php echo $_GET['activedash']; ?>">
						<a class="nav-link" href="index.php?page=home&&activedash=active">Dashboard</a>
					</li>
					<li class="nav-item dropdown <?php echo $_GET['actived']; ?>">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">Quesioner <span class="caret"></span></a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="index.php?page=listpertanyaan&&actived=active">Input Pertanayaan</a>
							<a class="dropdown-item" href="index.php?page=laporan&&actived=active">Laporan</a>
						</div>
					</li> 
					<li class="nav-item dropdown <?php echo $_GET['db']; ?>">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">Database <span class="caret"></span></a>
						<div class="dropdown-menu bg-dark">
							<a href="index.php?page=create&&db=active" class="dropdown-item text-muted">Create Table</a>
							<a href="index.php?page=show&&db=active" class="dropdown-item text-muted">Show Table</a>
						</div>
					</li>
				</ul>
				<ul class="nav justify-content-end mr-sm-0" style="padding-right: 20px">
					<li class="nav-item">
						<a class="nav-link btn btn-danger" onclick="mainApp.logOut()" role="button">
							<span class="fa fa-sign-out"></span>&nbspLogout
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container-fluid">
		<?php
			if ($_GET['page']== 'listpertanyaan') {
				include("modul/list-pertanyaan.php");
			}
			elseif ($_GET['page']=='show') {
				include("dbase/show_table.php");
			}
			elseif($_GET['page'] == 'laporan'){
				include("modul/laporan.php");
			}
			else{
				include("homepage.php");
			}
		 ?>
	</div>
</body>
</html>