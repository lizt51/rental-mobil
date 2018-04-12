<?php
include_once("koneksi.php");
$db = new KoneksiDatabase();

//menambahkan satu record
/*$strQuery = "
		INSERT INTO tb_mobil 
		(merek, no_polisi, warna, tahun, status) 
		VALUES 
		('Avansa', 'AD 1927 KT', 'Hitam', 2015, 'Tersedia')
	";*/
	
//menambahkan lebih dari satu record
/*
$strQuery = "
		INSERT INTO tb_mobil 
		(merek, no_polisi, warna, tahun, status) 
		VALUES 
		('Avansa', 'AD 1927 KT', 'Hitam', 2015, 'Tersedia'),
		('Terios', 'AD 4432 AY', 'Hitam', 2016, 'Tersedia')
	";

if(!$db->tambah($strQuery))
	$db->lihatError();
else
	echo 'sukses menambahkan record baru';
*/


	
	
	

