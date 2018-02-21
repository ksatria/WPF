<html>
	<head>
		<title>Dropdown</title>
	</head>
	<body>
		<form method="POST">
			<label for="sekolah">Pendidikan : </label>
			<select name="sekolah[]" multiple>
				<option value="1">1. TK</option>
				<option value="2">2. SD</option>
				<option value="3">3. SMP</option>
				<option value="4">4. SMA</option>
				<option value="5">5. Diploma</option>
				<option value="6">6. Sarjana</option>
				<option value="7">7. Magister</option>
				<option value="8">8. Doktor</option>
			</select>
			<input type="submit" value="Kirim"/>
		</form>
		<?php
		if(isset($_POST["sekolah"])){
			echo "Pilihan pendidikan : ".$_POST["sekolah"];
		}
		?>
	</body>
</html>
