<!DOCTYPE html>
<html>
<head>
<title>PERATURAN GUBERNUR JAWA TIMUR</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="cssUser.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>
<body>
    <header>
		<div>
		<ul>
            <li class="ul-li"><a class="active" href="admin-dashboard.html"><i class="fas fa-home" style="padding-right:10px;"></i>Data User</a></li>
            <li class="ul-li dropdown"><a class="dropbtn"><i class="fas fa-list-ul" style="padding-right:10px"></i>Laporan Tahunan</a>
			<div class="dropdown-content">
                <a href="input-pertanyaan.html">Input</a>
                <a href="#laporan">Laporan</a>
            </div>
        	</li>
		</ul>
		</div>
    </header>
    <div class="content container">
		<table>
		<tr>
			<td id="profil-content">
				<div class="profil-judul">
					<a>DISHBOARD</a>
				</div>
				<div class="profil-down">
					<table id="tableprofil">
						<tr>
							<td id="profil">NIP / HP</td>
							<td id="profil1">:</td>
							<td></td>
						</tr>
						<tr>
							<td id="profil">NAMA</td>
							<td id="profil1">:</td>
							<td></td>
						</tr>
						<tr>
							<td id="profil">NAMA INSTANSI</td>
							<td id="profil1">:</td>
							<td></td>
						</tr>
						<tr>
							<td id="profil">BIDANG / BAGIAN</td>
							<td id="profil1">:</td>
							<td></td>
						</tr>
						<tr>
							<td id="profil">SUB BIDANG / SUB BAGIAN</td>
							<td id="profil1">:</td>
							<td></td>
						</tr>
						<tr>
							<td id="profil">JABATAN</td>
							<td id="profil1">:</td>
							<td></td>
						</tr>
						<tr>
							<td id="profil">NOMOR HP</td>
							<td id="profil1">:</td>
							<td></td>
						</tr>
						<tr>
							<td id="profil">EMAIL</td>
							<td id="profil1">:</td>
							<td></td>
						</tr>
						<tr>
							<td id="profil">WEB / BLOG</td>
							<td id="profil1">:</td>
							<td></td>
						</tr>
						<tr><td style="border:none;"></td></tr>
						<tr>
							<td style="border:none;">
								<form action="">
									<input id="submit-profil" type="submit" value="submit">
									<label for="submit-profil" id="label-submit">Ubah Password</label>
								</form>
							</td>
							<td style="border:none;">
								<form action="">
									<input id="reset-profil" type="reset" value="reset">
									<label for="reser-profil" id="label-reset"> Reset</label>
								</form>
							</td>
						</tr>
					</table>
				</div>
			</td>
			<td></td>
			<td id="editprofil-content">
				<div class="editprofil-judul">
					<a>DISHBOARD</a>
				</div>
				<div class="editprofil-down">
					<table id="tableedit">
						<tr>
							<td id="editprofil">Username</td>
							<td><input type="text"></td>
						</tr>
						<tr>
							<td>Password</td>
							<td><input type="password"></td>
						</tr>
						<tr><td></td></tr>
						<tr>
							<td>
								<form action="">
									<input id="submit-editprofil" type="submit" value="submit">
									<label for="submit-editprofil" id="label-submit">Ubah Password</label>
								</form>
							</td>
							<td>
								<form action="">
									<input id="reset-editprofil" type="reset" value="reset">
									<label for="reser-editprofil" id="label-editreset"> Reset</label>
								</form>
							</td>
						</tr>
					</table>
				</div>
			</td>
		</tr>
		</table>
    </div>
</body>