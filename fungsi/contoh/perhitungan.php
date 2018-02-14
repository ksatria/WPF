<?php
	include("aritmatika.php");
	
	if(isset($_POST["bil1"]) AND isset($_POST["bil2"])){
		$bil1 = $_POST["bil1"];
		$bil2 = $_POST["bil2"];
		
		$hasil = penjumlahan($bil1,$bil2);
	}
?>
<html>
	<head>
		<title>Perhitungan</title>
	</head>
	<body>
		<h2>Kalkulator Sederhana</h2>
		<form method="POST">
			<input type="number" name="bil1" value="<?php echo isset($bil1) ? $bil1 : "";?>"/>
			<select name="operator">
				<option value="tambah">+</option>
				<option value="kurang">-</option>
				<option value="kali">x</option>
				<option value="bagi">:</option>
			</select>
			<input type="number" name="bil2" value="<?php echo isset($bil2) ? $bil2 : "";?>"/>
			<input type="submit" value="="/>
			<input type="number" readonly value="<?php echo isset($hasil) ? $hasil : "";?>"/>
		</form>
	</body>
</html>
