<?php
	$id= isset($_GET['id']) ? $_GET['id'] : null;
	$mobil = array(
					"id_mobil"  => "", 
					"merek"	    => "",
					"no_polisi" => "", 
					"warna" 	=> "", 
					"tahun" 	=> "", 
					"status" 	=> ""
				);
				
	$url = "./simpan.php?data=mobil";
	
	if($id!=null){
		$strQuery = "SELECT * FROM tb_mobil	WHERE id_mobil=$id";
		$mobil = $db->ambilSatu($strQuery);
		$url = "./ubah.php?data=mobil&id=$id";
	}
				
?>

<div class="row">
	<div class="col-md-8">
		
		<div class="panel panel-primary">
			<div class="panel panel-heading">
				<span class="panel-title">Form Mobil</span>
			</div>
			<div class="panel-body">
				<form class="form-horizontal" action="<?php echo $url; ?>" methOd="POST">
					
					<div class="form-group">
						<label class="control-label col-md-4">Merek Mobil</label>
						<div class="col-md-4">
						<input type="text" value="<?php echo $mobil['merek'];?>" class="form-control" name="merek" required>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-4">No Polisi</label>
							<div class="col-md-2">
								<input type="text" value="<?php echo $mobil['no_polisi'];?>" class="form-control" name="no_polisi" required>
							</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-4">Warna</label>
							<div class="col-md-3">
								<input type="text" value="<?php echo $mobil['warna'];?>" class="form-control" name="warna" required>
							</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-4 col-sm-3">Tahun</label>
						<div class="col-md-2 col-sm-4">
						<input type="text" class="form-control" value="<?php echo $mobil['tahun'];?>" name="tahun" required>
						</div>
						</div>
					
					
					<div class="coll-md-12 clearfix">
						<input type="submit" class="btn btn-primary pull-right" value="Simpan">
						<input type="reset" class="btn btn-warning pull-left" value="Batal">
					</div>
				</form>
		</div>
	
	</div>
</div>