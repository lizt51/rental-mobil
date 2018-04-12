<?php
	include("koneksi.php");
	$db = new KoneksiDatabase();
	$data = isset($_GET['data']) ? $_GET['data'] : '~';
	$id = isset($_GET['id']) ? $_GET['id'] : '~';
	$pesan = "Anda dilarang mengakses halaman ini!";
	$landingpage = "./";
	
	if($data=='mobil'&& $id != '~'){

		$strSQL = "DELETE FROM tb_mobil WHERE id_mobil=$id";
	
	if($db->hapus($strSQL)){
			$pesan = "Berhasil Menghapus dengan id $id";
			$landingpage = "./index.php?halaman=mobil";
	}else{
		$pesan = "Gagal Menghapus dengan id $id!".$db->lihatError();
		$landingpage = "./index.php?halaman=mobil";
	}
}
//pelanggan
if($data=='pelanggan' && $id !='~'){
	
			$strSQL = "DELETE FROM tb_pelanggan WHERE id_pelanggan=$id";

	if($db->tambah($strSQL)){
			$pesan = "Berhasil Menghapus dengan id $id";
			$landingpage = "./index.php?halaman=pelanggan";
	}else{
		$pesan = "Gagal Menghapus dengan id $id!".$db->lihatError();
		$landingpage = "./index.php?halaman=pelanggan";
	}
}
	
	echo '
			<script>
					alert("'.$pesan.'");
					window.location = "'.$landingpage.'";
			</script>
		';
?>