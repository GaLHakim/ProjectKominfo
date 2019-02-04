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
					<a class="nav-link" href="userProfile.php">Profile</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" href="userPengajuan.php">Pengajuan Aplikasi</a>
				</li>
			</ul>
		</div>  
	</nav>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="content-judul rounded-top text-white">
                    <a>TAHAP 1 PENGAJUAN APLIKASI</a>
                </div>
                <div class="conten-edit rounded-bottom bg-light text-dark">
                    <table class=" table">
                        <tr>
                            <th id="no">No</th>
                            <th>Pertanyaan Terkait Pengajuan Aplikasi</th>
                        </tr>
                        <tr>
                            <td id="no">01.</td>
                            <td>Pertanyaan Terkait Pengajuan Aplikasi</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <div class="form-group">
                                    <textarea class="form-control" rows="5"></textarea><br>
                                    <button type="submit" class="btn-submit btn btn-primary mb-2">Submit</button>
                                    <button type="reset" class="btn-reset btn btn-danger mb-2">Reset</button>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="btn-next">
                <form action="userProposal.php">
                    <input type="submit" class="btn-reset btn btn-danger mb-2" value="Next">
                </form>
            </div>
        </div>
    </section>
</body>
</html>