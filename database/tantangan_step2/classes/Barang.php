<?php
	class Barang{
		private $id;
		private $db;
		
		public function __construct($id = null){
			$this->id = $id;
			
			// Instansiasi objek koneksi DB
			$database = new Database;
			$this->db = $database->db;
		}
		
		public function daftarKategori(){
			// Dapatkan semua data kategori barang
			$daftar = $this->db->query("SELECT k.*, COUNT(b.id_barang) AS 'jumlah'
										FROM kategori_barang k
										LEFT OUTER JOIN barang b ON b.id_kategori = k.id_kategori
										GROUP BY k.id_kategori
										ORDER BY k.kategori");
			
			// Jika tabel kategori_barang kosong, maka berikan sinyal FALSE.
			// Jika tidak kosong, berikan daftarnya.
			return ($this->db->affected_rows > 0) ? $daftar : FALSE;
		}
		
		public function tambahKategori($kategori){
			return $this->db->query("INSERT INTO kategori_barang(kategori)
									 VALUES('${kategori}')");
		}
	}
?>