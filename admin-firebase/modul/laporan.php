<div class="card border-primary my-sm-4">
	<div class="card-body mainviewer">
		<table class="table">
			<thead>
			<tr>
				<th>No</th>
				<th>Instansi</th>
				<th>Nama Staff</th>
				<th>Nama Aplikasi</th>
				<th>Attachment</th>
			</tr>
			</thead>
			<tbody id="tblbody">
				
			</tbody>
		</table>
	</div>
	<div class="card-body viewer" hidden>
		<div class="card-header">
			<button class="btn btn-danger" id="turnBack">Back</button>
		</div>
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Soal</th>
					<th>Jawaban</th>
					
				</tr>
			</thead>
			<tbody class="bodyview">
				
			</tbody>
		</table>
	</div>
	<div class="card-body fileviewer" hidden>
		<div class="card-header">
			<button class="btn btn-danger" id="turnBack">Back</button>
		</div>

	</div>
</div>
<script>
	$(document).ready(function(){
		var no = 1;
		var rootRef = app_firebase.database().ref();
		var userRef = rootRef.child("Biodata");
		userRef.on('child_added', snap => {
			var id = snap.key;
			console.log(id);
			var appname = '';
			var data = snap.val();
			var app = rootRef.child("Aplikasi/"+id);
			app.once('value', appsnap => {
				//appname = appsnap.val()['nama'];
				var txt = "<tr>\
				<td>"+no+"</td>\
				<td>"+data['Instansi']+"</td>\
				<td>"+data['Nama']+"</td>\
				<td>"+appname+"</td>\
				<td><button type='button' class='btn btn-success view-details' id='"+id+"'>View</button></td>\
				<td><button type='button' class='btn btn-success view-file' id='"+id+"'>File</button></td>"
				no = no+1;
				$('#tblbody').append(txt);
			});
		});
		$(document).on('click','.view-details',function(){
			
			var itter = 1;
			var row_id = $(this).attr("id");
			var appRef = rootRef.child('Aplikasi/'+row_id);
			appRef.once('value', snap => {
				var app = snap.val();
				var jawabRef = rootRef.child('Jawaban/'+snap.key);
				jawabRef.once('value', usersnap => {
					var soal = usersnap.child(app['sid']).val();
					$.each(soal,function(key,value){
						var txt = "<tr>\
						<td>"+itter+"</td>\
						<td>"+key+"</td>\
						<td>"+value+"</td>\
						</tr>"
						itter = itter+1;
						$('.bodyview').append(txt);
					});
				}).then(function(){
						$('.viewer').removeAttr('hidden');
						$('.mainviewer').prop('hidden',true);
				});
			});
			
		});
		$(document).on('click','.view-file',function(){
			var rootStorage = app_firebase.storage().ref();
			var bab1 = rootStorage.child('Bab 1 Pendahuluan/null/1Bab0.pdf');
			bab1.getMetadata().then(function(metadata){
				console.log(metadata);
			}).catch(function(err){

			});
			

		});
		$('#turnBack').click(function(){
			location.reload(true);
		});
	});
</script>