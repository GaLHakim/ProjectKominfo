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
                <li class="ul-li"><a href="userProfile.php"><i class="" style="padding-right:10px;"></i>Data User</a></li>
                <li class="ul-li dropdown"><a class="dropbtn"><i class="" style="padding-right:10px"></i>Laporan Tahunan</a>
                    <div class="dropdown-content">
                        <a href="#input">Input</a>
                        <a href="#laporan">Laporan</a>
                    </div>
                </li>
                <li class="ul-li active"><a href="userPengajuan.html"><i class="" style="padding-right:10px;"></i>Pengajuan Aplikasi</a></li>
            </ul>
		</div>
    </header>
    <div class="content container">
        <div class="peng-proposal">
			<a>TAHAP 2 PENGAJUAN PROPOSAL</a>
		</div>
		<div class="proposal-content">
            <div>
                <form id="formDropFile" action="" method="POST"
                      onsubmit="uploadFile(event)">
                    <input type="file" name="files[]" id="fileInput"
                           multiple onchange="addFile(event)">
                    <label for="fileInput" id="label_fileInput"
                        ondragover="overrideDefault(event); fileHover(event);"
                        ondragenter="overrideDefault(event); fileHover(event);"
                        ondragleave="overrideDefault(event); fileHoverEnd(event);"
                        ondrop="overrideDefault(event); fileHoverEnd(event); addFile(event);">
                        <span id="labelText_fileInput">
                            Choose a file or drag it here
                        </span>
                        <br>
                        <span id="uploadStatus"></span>
                    </label>
                    <input type="submit" value="Upload" class="uploadBtn">
                </form>

                <script>
                    var formDropFile=document.getElementById("formDropFile");
                    var labelText_fileInput=document.getElementById("labelText_fileInput");
                    var uploadStatus=document.getElementById("uploadStatus");
                    var fileInput=document.getElementById("fileInput");
                    var dropFile;

                    function overrideDefault(event){
                        event.preventDefault();
                        event.stopPropagation();
                    }

                    function fileHover(){
                        formDropFile.classList.add("fileHover");
                    }

                    function fileHoverEnd(){
                        formDropFile.classList.remove("fileHover");
                    }

                    function addFile(event){
                        dropFile=event.target.files || event.dataTransfer.files;
                        showFile(dropFile);
                    }

                    function showFile(files){
                        if(files.length > 1){
                            labelText_fileInput.innerText=files.length + " files selected";
                        }
                        else{
                            labelText_fileInput.innerText=files[0].name;
                        }
                    }

                    function uploadFile(event){
                        event.preventDefault();
                        changeStatus("Upload Loading . . .");

                        var formData=new FormData();

                        for(var i=0,file; file=dropFIle[i]; i++){
                            formData.append(fileInput.name,file,file.name);
                        }

                        var xhr=new XMLHttpRequest();
                        xhr.onreadystatechange-function(data){
                            
                        }
                    }

                    function changeStatus(text){
                        uploadStatus.innerText=text;
                    }
                </script>
            </div>
            <div>
                <form style="float:right;" action="">
                    <input type="submit" id="submit-proposal" value="Submit">
                </form>
            </div>  
        </div>
    </div>
</body>