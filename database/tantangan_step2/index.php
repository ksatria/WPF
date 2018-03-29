<?php
	include("configs/config_db.php");
	include("classes/Database.php");
	include("classes/Barang.php");
	
	$barang = new Barang;
	
	if(isset($_POST["kategori"]))
		$tambah = $barang->tambahKategori($_POST["kategori"]);
	
	$daftarKategori = $barang->daftarKategori();
?>
<html>
	<head>
		<title>Kelola Daftar Kategori Barang</title>
	</head>
	<body>
		<h2>Kategori Barang</h2>
		
		<form method="POST">
			<label for="kategori">Masukkan nama kategori baru : </label>
			<input type="text" name="kategori"/>
			<input type="submit" value="Simpan"/>
		</form>
		
		<?php
		if(isset($tambah) AND $tambah === FALSE){
			?>
			<p style="color:red">Kategori <strong><?php echo $_POST["kategori"];?></strong> gagal ditambahkan</p>
			<?php
		}
		elseif(isset($tambah) AND $tambah !== FALSE){
			?>
			<p style="color:green">Kategori <strong><?php echo $_POST["kategori"];?></strong> berhasil ditambahkan</p>
			<?php
		}
		?>
		
		<?php
		if($daftarKategori !== FALSE){
			?>
			<table border=1>
				<tr>
					<th>No.</th>
					<th>Kategori</th>
					<th>Jumlah Barang</th>
					<th>Opsi</th>
				</tr>
				<?php
				$no = 0;
				foreach($daftarKategori as $kategori){
					?>
					<tr>
						<td><?php echo ++$no;?></td>
						<td><?php echo $kategori["kategori"];?></td>
						<td><?php echo $kategori["jumlah"];?></td>
						<td>Ubah | Hapus</td>
					</tr>
					<?php
				}
				?>
			</table>
			<?php
		}
		else{
			?>
			<p><strong>Belum ada data di dalam daftar kategori barang</strong></p>
			<?php
		}
		?>
	</body>
</html>