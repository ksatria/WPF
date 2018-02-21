<?php
	class Pembeli{
		private $username;
		private $password;
		private $nama;
		
		public function __construct($user,$pass,$nama){
			$this->username = $user;
			$this->password = md5($pass);
			$this->nama		= $nama;
			
			echo "<p>Pembeli baru :: username = ".$this->username." | password = ".$this->password." | nama = ".$this->nama."</p>";
		}
		
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
