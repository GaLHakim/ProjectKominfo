
        <p style="margin-top:140px;"><a class="input-judul" href="admin-quisoner.html">Quisoner</a>/ Input Pertanyaan</p>
        <div class="input-aksi">
            <p>HALAMAN AKSI</p>
        </div>
        <div class="input-btnaksi">
            <form action="index.php" method="POST">
                <input class="input-btn tambah" name="addquest" type="submit" value="Tambahkan Quisoner"></input>
            </form>
        </div>
        <div class="input-soal">
                <p>SOAL ESSAY</p>
            </div>
            <div class="input-listsoal">
                <table id="table-soal">
                    <?php
                        $no = 1;
                        $sql = mysql_query("SELECT * FROM tbl_kuesioner");
                        while ($data = mysql_fetch_array($sql)) { ?>
                             <tr>
                                 <td><?php echo $no++; ?></td>
                                 <td><?php echo $data['Soal']; ?></td>
                                 <td><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal<?php echo $data['Id']; ?>">Edit Soal</button>
                                    <div class="modal fade" id="myModal<?php echo $data['Id']; ?>" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit Soal</h4>
                </div>
                <form method="POST">
                <div class="modal-body">
                    <?php
                       $rsql = mysql_query("SELECT * FROM tbl_kuesioner WHERE Id = '$data[Id]'");
                       while ($hasil = mysql_fetch_array($rsql)) {?>
                        <input type="hidden" name="id" value="<?php echo $hasil['Id']; ?>">
                    <div class="form-group">
                        <textarea name="essaysoal" class="form-control"> <?php echo $hasil['Soal']; ?> </textarea>
                    </div>
                      <?php } ?>
                </div>
                <div class="modal-footer">
                    <div class="form-group">
                        <button type="submit" name="update" class="btn btn-info">Update</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
                                 </td>
                             </tr>

                      <?php  } ?>
                </table>
            </div>


   
