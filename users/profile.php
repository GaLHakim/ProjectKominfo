<?php 
$query = "SELECT * FROM tbl_usr WHERE username = '$_SESSION['username']'";
$result = mysqli_query($query);
$data = mysqli_fetch_array($result);
 ?>

 <div>
 	<div>
 		<div><h3>Profile</h3></div>
 		<div class="body-panel">
 			<div class="table-panel">
 				<table class="table profile-table">
 					<tr>
 						<td>Nama</td><td>:</td>
 						<td><<?php echo $data['name']; ?></td>
 					</tr>
 				</table>
 			</div>
 		</div>
 	</div>
 </div>