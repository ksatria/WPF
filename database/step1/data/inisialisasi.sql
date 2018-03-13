CREATE TABLE peran_user(
	kode_peran	CHAR(1)		PRIMARY KEY,
	nama_peran	VARCHAR(20)	NOT NULL UNIQUE
);

INSERT INTO peran_user VALUES
('A','Administrator'),
('J','Penjual'),
('B','Pembeli');

CREATE TABLE `user`(
	username	VARCHAR(100)	PRIMARY KEY,
	`password`	CHAR(32)	NOT NULL,
	kode_peran	CHAR(1)		NOT NULL,
	`status`	BOOLEAN		NOT NULL DEFAULT TRUE
);

CREATE TABLE admin(
	username	VARCHAR(100)	PRIMARY KEY,
	nama		VARCHAR(100)	NOT NULL
);

CREATE TABLE pembeli(
	id_pembeli	INT 		PRIMARY KEY AUTO_INCREMENT,
	nama_pembeli	VARCHAR(100)	NOT NULL,
	alamat		TEXT		NOT NULL,
	no_telp		VARCHAR(15),
	email		VARCHAR(100) 	NOT NULL UNIQUE
);

CREATE TABLE penjual(
	id_penjual 	INT 		PRIMARY KEY AUTO_INCREMENT,
	nama_penjual 	VARCHAR(100) 	NOT NULL,
	nik 		CHAR(16)	UNIQUE,
	tempat_lahir 	VARCHAR(20) 	NOT NULL,
	tgl_lahir 	DATE 		NOT NULL,
	alamat 		TEXT,
	no_telp 	VARCHAR(15),
	email 		VARCHAR(100) 	NOT NULL UNIQUE,
	nama_toko 	VARCHAR(30)
);

CREATE TABLE kategori_barang(
	id_kategori	INT 		PRIMARY KEY AUTO_INCREMENT,
	kategori	VARCHAR(30)	NOT NULL UNIQUE
);

CREATE TABLE barang(
	id_barang	INT 		PRIMARY KEY AUTO_INCREMENT,
	nama_barang	VARCHAR(50)	NOT NULL,
	deskripsi	TEXT,
	harga		INT 		NOT NULL,
	stok		INT 		NOT NULL,
	id_penjual	INT 		NOT NULL,
	id_kategori 	INT 		NOT NULL
);

CREATE TABLE transaksi(
	id_trans 	INT 		PRIMARY KEY AUTO_INCREMENT,
	id_pembeli	INT 		NOT NULL,
	waktu 		TIMESTAMP 	NOT NULL DEFAULT CURRENT_TIMESTAMP,
	acc 		BOOLEAN 	NOT NULL DEFAULT FALSE,
	tagihan 	INT 		NOT NULL
);

CREATE TABLE pembelian_barang(
	id_pembelian 	INT 		PRIMARY KEY AUTO_INCREMENT,
	id_trans 	INT 		NOT NULL,
	id_barang 	INT 		NOT NULL,
	kuantitas 	INT 		NOT NULL
);