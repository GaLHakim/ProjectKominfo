<?php 
if(isset($_POST['update'])){
	mysql_query("UPDATE tbl_kuesioner SET Soal='$_REQUEST[essaysoal]' WHERE Id='$_REQUEST[id]'");
}
if(isset($_POST['simpan'])){
	$sql = "INSERT INTO tbl_kuesioner VALUES ('','$_REQUEST[pertanyaan]')";
	
	if(mysql_query($sql)){
		header("location:index.php?page=buatquesioner&&activequest=1");
	}
	else{
		echo "<script>
		alert('Failed to insert data');
		</script>";
	}

}

 ?>