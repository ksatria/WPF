<?php
	class Penjual{
		private $username;
		private $password;
		private $nama;
		
		public function __construct($user,$pass,$nama){
			$this->username = $user;
			$this->password = md5($pass);
			$this->nama		= $nama;
			
			echo "<p>Penjual baru :: username = ".$this->username." | password = ".$this->password." | nama = ".$this->nama."</p>";
		}
		
		public function tambahBarang($nama,$stok){
			echo "<p>".$this->nama." menambahkan barang ${nama} sejumlah ${stok} buah</p>";
		}
		
		public function login(){
			echo "<p>Pengguna bernama ".$this->nama." melakukan login menggunakan username ".$this->username." dan password ".$this->password."</p>";
		}
	}
?>
