<?php
	include("configs/config_db.php");
	include("classes/Database.php");
	include("classes/Barang.php");
	
	// Objek barang untuk menambahkan data kategori
	$barang = new Barang;
	
	// Proses penambahan data kategori barang,
	// sekaligus pengecekan apakah data berhasil ditambahkan
	if($barang->tambahKategori("Komputer & Gadget"))	echo "<p>Kategori baru berhasil ditambahkan</p>";
	else												echo "<p>Kategori baru gagal ditambahkan</p>";
?>