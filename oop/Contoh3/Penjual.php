<?php
	include_once("Pengguna.php");
	
	class Penjual extends Pengguna{
		public function __construct($user,$pass,$nama){
			parent::__construct($user,$pass,$nama);
			
			echo "<p>Penjual baru :: username = ".$this->username." | password = ".$this->password." | nama = ".$this->nama."</p>";
		}
		
		public function tambahBarang($nama,$stok){
			echo "<p>".$this->nama." menambahkan barang ${nama} sejumlah ${stok} buah</p>";
		}
	}
?>
