<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css\bootstrap4.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<script src="js\jquery4.js"></script>
  	<script src="js\bootstrap4.bundle.js"></script>
</head>

<body>
	<header class="nav-header navbar navbar-expand-md container-fluid fixed-top">
		<div class="header container">
			<a class="" href="#" >
				<img class="img-fluid" src="jatim.png" alt="logo" style="width:60px;">
			</a>
			<div class="nav-link">
				<li>DINAS KOMUNIKASI DAN INFOMATIKA PROVINSI JAWA TIMUR</li>
				<li>Jl. Ahmad Yani 242 - 244 Surabya</li>
				<li>Telp : (031)8294608 / Fax : (031)8294517 / Email : kominfo@jatimprov.go.id</li>
			</div>
		</div>
	</header>
	<nav class="nav-fixed justify-content-end navbar navbar-expand-md bg-dark navbar-dark fixed-top">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="collapsibleNavbar">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link active" href="userProfile.php">Profile</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="userPengajuan.php">Pengajuan Aplikasi</a>
				</li>
			</ul>
		</div>  
	</nav>
	<section class="content container-fluid">
		<div class="row">
			<div class="col-sm-8 col-md-8 col-lg-8">
				<div class="content-judul rounded-top text-white">
					<a>Edit Profile</a>
				</div>
				<div class="conten-edit rounded-bottom bg-light text-dark table">
					<table>
						<tr>
							<td>NIP / HP</td>
							<td>:</td>
							<td></td>
						</tr>
						<tr>
							<td>NAMA</td>
							<td>:</td>
							<td></td>
						</tr>
						<tr>
							<td>NAMA INSTANSI</td>
							<td>:</td>
							<td></td>
						</tr>
						<tr>
							<td>BIDANG / BAGIAN</td>
							<td>:</td>
							<td></td>
						</tr>
						<tr>
							<td>SUB BIDANG / SUB BAGIAN</td>
							<td>:</td>
							<td></td>
						</tr>
						<tr>
							<td>JABATAN</td>
							<td>:</td>
							<td></td>
						</tr>
						<tr>
							<td>NOMOR HP</td>
							<td>:</td>
							<td></td>
						</tr>
						<tr>
							<td>EMAIL</td>
							<td>:</td>
							<td></td>
						</tr>
						<tr>
							<td>WEB / BLOG</td>
							<td>:</td>
							<td></td>
						</tr>
					</table>
				</div>
			</div>
			<div class="col-sm-4 col-md-4 col-lg-4">
				<div class="content-judul rounded-top text-white">
					<a>Edit User Password</a>
				</div>
				<div class="conten-edit rounded-bottom bg-light text-dark table">
					<table>
						<tr>
							<td><label for="usr">Username :</label></td>
							<td><input type="text" class="form-control" id="usr"></td>
						</tr>
						<tr>
							<td><label for="pwd">Password :</label></td>
							<td><input type="password" class="form-control" id="pwd"></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</section>
</body>
</html>