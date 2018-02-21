<?php
	class Pembeli{
		public $username;
		public $password;
		public $nama;
		
		public function lihatBarang(){
			echo "<p>Daftar barang yang dilihat oleh ".$this->nama." adalah sebagai berikut: </p>";
		}
		
		public function beliBarang($kode){
			echo "<p>".$this->nama." ingin membeli barang dengan kode ${kode}</p>";
		}
		
		public function login(){
			echo "<p>Pengguna bernama ".$this->nama." melakukan login menggunakan username ".$this->username." dan password ".$this->password."</p>";
		}
	}
?>
