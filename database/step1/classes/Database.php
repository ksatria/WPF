<?php
	class Database{
		private $host = DB_HOSTNAME;
		private $user = DB_USERNAME;
		private $pass = DB_PASSWORD;
		private $name = DB_NAME;
		
		public $db;
		
		public function __construct(){
			$this->db = new mysqli($this->host,$this->user,$this->pass,$this->name);
		}
		
		public function getDaftarPeranPengguna(){
			$daftar = $this->db->query("SELECT * FROM peran_user");
			
			return $daftar;
		}
	}
?>
