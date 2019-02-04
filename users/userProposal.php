    <section class="content container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="content-judul rounded-top text-white">
                    <a>TAHAP 2 PENGAJUAN APLIKASI</a>
                </div>
                <div class="conten-edit rounded-bottom bg-light text-dark">
                    <div class="container">
                        <form class="card-group" id="formDropFile" action="" method="POST"
                            onsubmit="uploadFile(event)">
                            <input type="file" name="files[]" id="fileInput"
                                multiple onchange="addFile(event)">
                            <label for="fileInput" class="card w-100 text-center rounded-top btn btn-light"
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
                            <input type="submit" value="Upload" class="w-100 text-center rounded-bottom btn-primary"
                                    id="uploadBtn">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="btn-next">
                <form class="form-group" action="">
                    <input type="submit" class="btn btn-success mb-2" value="Next">
                </form>
            </div>
        </div>
    </section>
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