<?php
	$strSQL = "SELECT * FROM tb_pelanggan";
	$pelanggan = $db->ambilBanyak($strSQL);
?>

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading clearfix">
				<span class="panel-title">Daftar Mobil</span>
				<a href="index.php?halaman=pelanggan&subhalaman=form-pelanggan" class="btn btn-success pull-right">Tambah</a>
			</div>
			<div class="panel-body table-responsive">
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nama</th>
							<th>NIK</th>
							<th>Alamat</th>
							<th>Jenis Kelamin</th>
							<th>No.Hp</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php
						$i=0;
						foreach($pelanggan as $row){
							$i++;
							echo '
							<tr>
							<td>'.$i.'</td>
							<td>'.$row['nama_pelanggan'].'</td>
							<td>'.$row['nik'].'</td>
							<td>'.$row['alamat'].'</td>
							<td>'.$row['jenis_kelamin'].'</td>
							<td>'.$row['no_hp'].'</td>
							<td>
								<a href="./index.php?halaman=mobil&subhalaman=form-mobil&id='.$row['id_pelanggan'].'" class="btn btn-success btn-xs">Ubah</a>
								<a href="javascript:confirmHapus('.$row['id_pelanggan'].')" class="btn btn-danger btn-xs">Hapus</a>
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
			var yakin = confirm("Anda yakin menghapus pelanggan dengan id"+id);
			
			if(yakin){
				window.location="./hapus.php?data=pelanggan&id="+id;
			}
		}
</script>