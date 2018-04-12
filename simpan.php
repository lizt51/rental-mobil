<?php
	include("koneksi.php");
	$db = new KoneksiDatabase();
	$data = isset($_GET['data']) ? $_GET['data'] : '~';
	$pesan = "Anda dilarang mengakses halaman ini!";
	$landingpage = "./";
	
	if($data=='mobil'){
		$merek 		= $_POST['merek'];
		$no_polisi  = $_POST['no_polisi'];
		$warna 		= $_POST['warna'];
		$tahun 		= $_POST['tahun'];
		
		
		//cara pertama
		//$strSQL1 = "INSERT INTO tb_mobil (merek,no_polisi,warna,tahun)
		//			VALUES ('$merek','$no_polisi','$warna','$tahun')";
	
		//cara kedua
		$strSQL = "INSERT INTO tb_mobil VALUES('','$merek','$no_polisi','$warna','$tahun','Tersedia')";
	
	if($db->tambah($strSQL)){
			$pesan = "Sukses menyimpan mobil baru";
			$landingpage = "./index.php?halaman=mobil";
	}else{
		$pesan = "Gagal menyimpan mobil baru".$db->lihatError();
		$landingpage = "./index.php?halaman=form-mobil";
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
	
	echo '
			<script>
					alert("'.$pesan.'");
					window.location = "'.$landingpage.'";
			</script>
		';
?>