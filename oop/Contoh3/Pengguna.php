<?php
	class Pengguna{
		protected $username;
		protected $password;
		protected $nama;
		
		public function __construct($user,$pass,$nama){
			$this->username = $user;
			$this->password = md5($pass);
			$this->nama		= $nama;
		}
		
		public function login(){
			echo "<p>Pengguna bernama ".$this->nama." melakukan login menggunakan username ".$this->username." dan password ".$this->password."</p>";
		}
	}
?>
