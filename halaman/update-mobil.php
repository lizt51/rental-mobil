<div class="row">
	<div class="col-md-8">
		
		<div class="panel panel-primary">
			<div class="panel panel-heading">
				<span class="panel-title">Form Mobil</span>
			</div>
			<div class="panel-body">
				<form class="form-horizontal" action="./simpan.php?data=mobil" methOd="POST">
					
					<div class="form-group">
						<label class="control-label col-md-4">Merek Mobil</label>
						<div class="col-md-4">
						<input type="text" class="form-control" name="merek" required>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-4">No Polisi</label>
							<div class="col-md-2">
								<input type="text" class="form-control" name="no_polisi" required>
							</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-4">Warna</label>
							<div class="col-md-3">
								<input type="text" class="form-control" name="warna" required>
							</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-4 col-sm-3">Tahun</label>
						<div class="col-md-2 col-sm-4">
						<input type="text" class="form-control" value="2019" name="tahun" required>
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