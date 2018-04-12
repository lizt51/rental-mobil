<?php

	$strSQL = "SELECT * FROM tb_mobil";
	$mobil = $db->ambilBanyak($strSQL);
	
?>


<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading clearfix">
				<span class="panel-title">Daftar Mobil</span>
				<a href="index.php?halaman=mobil&subhalaman=form-mobil" class="btn btn-success pull-right">Tambah</a>
			</div>
			<div class="panel-body">
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>No</th>
							<th>Merk Mobil</th>
							<th>No Polisi</th>
							<th>Warna</th>
							<th>Tahun</th>
							<th>Status</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
					<?php
						$i=0;
						foreach($mobil as $row){
							$i++;
							echo '
							<tr>
							<td>'.$i.'</td>
							<td>'.$row['merek'].'</td>
							<td>'.$row['no_polisi'].'</td>
							<td>'.$row['warna'].'</td>
							<td>'.$row['tahun'].'</td>
							<td>'.$row['status'].'</td>
							<td>
								<a href="./index.php?halaman=mobil&subhalaman=form-mobil&id='.$row['id_mobil'].'" class="btn btn-success btn-xs">Ubah</a>
								<a href="javascript:confirmHapus('.$row['id_mobil'].')" class="btn btn-danger btn-xs">Hapus</a>
							</td>
							</tr>
							';
						}
					?>
					</tbody>
				</table>
			</div>
			<div class="panel-footer">
			
			</div>
		</div>
	</div>
</div>

<script>
		function confirmHapus(id){
			var yakin = confirm("Anda yakin menghapus mobil dengan id"+id);
			
			if(yakin){
				window.location="./hapus.php?data=mobil&id="+id;
			}
		}
</script>