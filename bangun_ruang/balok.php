<?php
	if(isset($_POST["panjang"]) AND isset($_POST["lebar"]) AND isset($_POST["tinggi"])){
		$p = $_POST["panjang"];
		$l = $_POST["lebar"];
		$t = $_POST["tinggi"];
		
		$volume = $p * $l * $t;
		$luas 	= 2*$p*$l + 2*$p*$t + 2*$l*$t;
		$rusuk 	= 4 * ($p+$l+$t);
	}
?>

<html>
	<head>
		<title>Penghitung Balok</title>
	</head>
	<body>
		<h2>Aplikasi Penghitung Volume, Luas Penampang, dan Panjang Rusuk Balok</h2>
		<p>
			<form method="POST">
				<p>Masukkan ukuran rusuk balok pada form berikut (dalam satuan <strong>cm</strong>):</p>
				<table>
					<tr>
						<td>Panjang</td>
						<td>:</td>
						<td><input type="number" min="0" name="panjang" value="<?php echo isset($p) ? $p : 0;?>"/></td>
					</tr>
					<tr>
						<td>Lebar</td>
						<td>:</td>
						<td><input type="number" min="0" name="lebar" value="<?php echo isset($l) ? $l : 0;?>"/></td>
					</tr>
					<tr>
						<td>Tinggi</td>
						<td>:</td>
						<td><input type="number" min="0" name="tinggi" value="<?php echo isset($t) ? $t : 0;?>"/></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td><input type="submit" value="Hitung" /></td>
					</tr>
				</table>
			</form>
		</p>
		<?php
		if(isset($volume) AND isset($luas) AND isset($rusuk)){
		?>
		<p>##############################################</p>
		<table>
			<tr>
				<td>Volume</td>
				<td>:</td>
				<td><strong><?php echo $volume;?> cm<sup>3</sup></strong></td>
			</tr>
			<tr>
				<td>Luas penampang</td>
				<td>:</td>
				<td><strong><?php echo $luas;?> cm<sup>2</sup></strong></td>
			</tr>
			<tr>
				<td>Panjang rusuk</td>
				<td>:</td>
				<td><strong><?php echo $rusuk;?> cm</strong></td>
			</tr>
		</table>
		<?php
		}
		?>
	</body>
</html>