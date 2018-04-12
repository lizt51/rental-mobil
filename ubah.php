<?php
	include("koneksi.php");
	$db = new KoneksiDatabase();
	$data = isset($_GET['data']) ? $_GET['data'] : '~';
	$id = isset($_GET['id']) ? $_GET['id'] : '~';
	$pesan = "Anda dilarang mengakses halaman ini!";
	$landingpage = "./";
	
	if($data=='mobil'&& $id != '~'){
		$merek 		= $_POST['merek'];
		$no_polisi  = $_POST['no_polisi'];
		$warna 		= $_POST['warna'];
		$tahun 		= $_POST['tahun'];
		
		
	//cara pertama
	//$strSQL1 = "INSERT INTO tb_mobil (merek,no_polisi,warna,tahun)
	//			VALUES ('$merek','$no_polisi','$warna','$tahun')";
	
	//cara kedua
	$strSQL = "UPDATE tb_mobil SET  merek='$merek', no_polisi='$no_polisi', warna='$warna', tahun='$tahun' WHERE id_mobil=$id";
	
	if($db->tambah($strSQL)){
			$pesan = "Sukses menyimpan perubahan mobil baru";
			$landingpage = "./index.php?halaman=mobil";
	}else{
		$pesan = "Gagal menyimpan perubahan mobil baru".$db->lihatError();
		$landingpage = "./index.php?halaman=form-mobil&id=$id";
	}
}

//pelanggan
if($data=='pelanggan'){
	$nama_pelanggan = $_POST['nama_pelanggan'];
	$nik = $_POST['nik'];
	$alamat = $_POST['alamat'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$nohp = $_POST['nohp'];
		
		
		$strSQL="INSERT INTO tb_pelanggan 
			VALUES('','$nama_pelanggan','$nik','$alamat','$jenis_kelamin','$no_hp')";
	
	if($db->tambah($strSQL)){
			$pesan = "Sukses menyimpan mobil baru";
			$landingpage = "./index.php?halaman=pelanggan";
	}else{
		$pesan = "Gagal menyimpan mobil baru".$db->lihatError();
		$landingpage = "./index.php?halaman=form-pelanggan";
	}
}

	//BARIS TERAHIR NDE
	echo '
			<script>
					alert("'.$pesan.'");
					window.location = "'.$landingpage.'";
			</script>
		';
?>