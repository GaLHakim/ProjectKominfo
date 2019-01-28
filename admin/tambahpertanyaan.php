<!DOCTYPE html>
<html>
<head>
<title>PERATURAN GUBERNUR JAWA TIMUR</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css-admin.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>

<body>
    <header>
        <ul>
            <li class="ul-li"><a href="admin-dashboard.html"><i class="fas fa-home" style="padding-right:10px;"></i>Dashboard</a></li>
            <li class="ul-li"><a href="input-pertanyaan.html" class="active dropbtn"><i class="fas fa-list-ul" style="padding-right:10px"></i>Quisoner</a></li>
            <li class="ul-li"><a href="admin-datauser.html"><i class="fas fa-database" style="padding-right:10px"></i>Data User</a></li>
        </ul>
    </header>
    <div class="content container">
        <div class="tambah-aksi">
            <a>AKSI</a>
        </div>
        <div class="tambah-btnaksi row">
            <div class="col-25">
                <p>Anda berada di halaman tambah pertanyaan</p>
            </div>
            <form action="input-pertanyaan.html" class="col-75">
                <input id="tambahclose-btn" type="submit" value="Close">
                <label for="tambahclose-btn" id="label-closebtn"><i class="fas fa-times"></i> Close</label>
            </form>
        </div>
        <div class="tambahquisoner-judul">
            <a>TAMBAH PERTANYAAN QUISONER</a>
        </div>
        <div class="tambah-isipertanyaan">
            <div id="upPertanyaan">
                <label for="isipertanyaan">Masukan Pertanyaan</label>
            </div>
            <div>
                <textarea id="isipertanyaan" name="isipertanyaan"></textarea>
            </div>
            <div>
                <input id="tambahsubmit-btn" type="submit" value="submit">
            </div>
        </div>
    </div>
</body>