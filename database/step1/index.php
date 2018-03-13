<?php
	include("configs/config_db.php");
	include("classes/Database.php");
	
	$db 			= new Database;
	$peranPengguna 	= $db->getDaftarPeranPengguna();
	
	// Untuk PHP versi 5.4 ke atas
	foreach($peranPengguna as $peran){
		echo $peran["kode_peran"]." : ".$peran["nama_peran"]."<br />";
	}
	
	// Untuk PHP di bawah versi 5.4
	// while($peran = $peranPengguna->fetch_array()){
		// echo $peran["kode_peran"]." : ".$peran["nama_peran"]."<br />";
	// }
?>