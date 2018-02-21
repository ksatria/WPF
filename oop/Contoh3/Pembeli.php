<?php
	include_once("Pengguna.php");
	
	class Pembeli extends Pengguna{
		public function __construct($user,$pass,$nama){
			parent::__construct($user,$pass,$nama);
			
			echo "<p>Pembeli baru :: username = ".$this->username." | password = ".$this->password." | nama = ".$this->nama."</p>";
		}
		
		public function lihatBarang(){
			echo "<p>Daftar barang yang dilihat oleh ".$this->nama." adalah sebagai berikut: </p>";
		}
		
		public function beliBarang($kode){
			echo "<p>".$this->nama." ingin membeli barang dengan kode ${kode}</p>";
		}
	}
?>
