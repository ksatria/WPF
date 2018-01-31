<html>
	<head>
		<title>Pilihan</title>
	</head>
	<body>
		<form method="POST">
			<label for="pilihan">Pilihan : </label>
			<input type="checkbox" name="pilihan[]" value="1" /> Satu
			<input type="checkbox" name="pilihan[]" value="2" /> Dua
			<input type="checkbox" name="pilihan[]" value="3" /> Tiga
			<input type="checkbox" name="pilihan[]" value="4" /> Empat
			<input type="checkbox" name="pilihan[]" value="5" /> Lima
			<input type="submit" value="Kirim" />
		</form>
		<?php
		if(isset($_POST["pilihan"])){
			$jumlah = count($_POST["pilihan"]);
			
			echo "Jumlah pilihan = ${jumlah}<br />";
			echo "Data yang dipilih: <br />";
			
			foreach($_POST["pilihan"] as $x)
				echo "- ${x}<br />";
		}
		?>
	</body>
</html>
