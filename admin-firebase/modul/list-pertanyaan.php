<div class="card border-info my-sm-4">
	<div class="card-body">
		<div class="btn-toolbar" role="toolbar">
			<div class="btn-group mr-2" role="group">
				<a class="btn btn-primary text-light" role="button" data-toggle="modal" data-target="#input-pertanyaan" id="tambah">Tambah Pertanyaan</a>
			</div>
			<div class="btn-group mx-2" role="group">
				<a class="btn btn-danger text-light" role="button" href="index.php?page=listtopik&&actived=active">Close</a>
			</div>
		</div>
	</div>
</div>
<div class="card border-primary mb-sm-2">
	<div class="card-header bg-info">
		<h5 class="card-text text-white-50">Soal</h5>
	</div>
	<div class="card-body">
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Soal</th>
					<th colspan="2">Aksi</th>
				</tr>
			</thead>
			<tbody id="table_soal">
				
			</tbody>
		</table>
	</div>
</div>
<div class="modal fade" id="input-pertanyaan" tabindex="-1" role="dialog" arialabelledby="modalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalLabel">Tambah Pertanyaan</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="input-group">
					<input type="text" name="soal" id="soal" class="form-control">
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary" id="save">Save</button>
			</div>
		</div>
	</div>
</div>
<script>
    $(document).ready(function(){
		var idx = 1;
		var key = "";
        var rootRef = firebase.database().ref();
		  console.log(rootRef);
        var soalRef = rootRef.child("Soal");
		  console.log(soalRef);
		soalRef.once("value", function(snap){
			snap.forEach(function(data){
				var key = data.key;
				var hasil = data.val();
				var txt = '<tr>\
				<td><input type="hidden" id="keying'+idx+'" value="'+key+'">'+idx+'</td>\
				<td><input type="hidden" id="soal_'+idx+'" value="'+hasil+'">'+hasil+'</td>\
				<td><button type="button" class="btn btn-success edit_soal" id="'+idx+'">Edit</td>\
	</tr>';
				idx = idx + 1;
				console.log(txt);
				$("#table_soal").append(txt);
			});
		});
		$('#tambah').click(function(){
			$('#soal').val('');
			$('#save').text('Save')
		});
		$(document).on('click','.edit_soal',function(){
			var row_id = $(this).attr("id");
			key = $('#keying'+row_id+'').val();
			var soal = $('#soal_'+row_id).val();

			$('#soal').val(soal);
			$('#save').text('Change');
			$('#input-pertanyaan').modal("show");
		});
		$('#save').click(function(){
			var txt = $(this).text();
			if(txt == 'Save'){
				var newsoal = $('#soal').val();
				if(newsoal != ''){
				  	soalRef.push().set(newsoal);
				  	location.reload(true);
					$('#input-pertanyaan').modal("hide");
				}
				else{
					alert("pertanyaan belum dimasukkan");
				}
			}
			else if(txt == 'Change'){
				var newsoal = $('#soal').val();
				var keydata = key;
				soalRef.child(keydata).set(newsoal);
				location.reload(true);
				
			}
		});
    });
</script>
