<?php
	class Penjual{
		public $username;
		public $password;
		public $nama;
		
		public function tambahBarang($nama,$stok){
			echo "<p>".$this->nama." menambahkan barang ${nama} sejumlah ${stok} buah</p>";
		}
		
		public function login(){
			echo "<p>Pengguna bernama ".$this->nama." melakukan login menggunakan username ".$this->username." dan password ".$this->password."</p>";
		}
	}
?>
