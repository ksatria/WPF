<html>
	<head>
		<title>Kubus</title>
	</head>
	<body>
		<h2>Aplikasi Penghitung Volume, Luas Penampang, dan Panjang Rusuk Kubus</h2>
		<form method="POST">
			<label for="sisi">Masukkan panjang sisi (cm)</label>
			<input type="number" min="0" name="sisi"/>
			<input type="submit" value="Hitung" />
		</form>
		<?php
		if(isset($_POST["sisi"])){
			$s = $_POST["sisi"];
			
			$volume = pow($s,3);
			$luas	= 6 * pow($s,2);
			$rusuk	= 12 * $s;
			
			?>
			<p>#####################################################</p>
			<table>
				<tr>
					<td>Volume</td>
					<td>:</td>
					<td><strong><?php echo $volume;?> cm<sup>3</sup></strong></td>
				</tr>
				<tr>
					<td>Luas Penampang</td>
					<td>:</td>
					<td><strong><?php echo $luas;?> cm<sup>2</sup></strong></td>
				</tr>
				<tr>
					<td>Panjang Rusuk</td>
					<td>:</td>
					<td><strong><?php echo $rusuk;?> cm</strong></td>
				</tr>
			</table>
			<?php
		}
		?>
	</body>
</html>