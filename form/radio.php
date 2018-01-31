<html>
	<head>
		<title>Tingkat Pendidikan</title>
	</head>
	<body>
		<form method="POST">
			<label for="kelamin">Jenis Kelamin</label>
				<input type="radio" name="kelamin" value="L"/> Pria
				<input type="radio" name="kelamin" value="P"/> Wanita
				
			<br />
			
			<label for="pendidikan">Pendidikan terakhir</label>
				<input type="radio" name="pendidikan" value="PAUD"/> PAUD
				<input type="radio" name="pendidikan" value="TK"/> TK
				<input type="radio" name="pendidikan" value="SD"/> SD
				<input type="radio" name="pendidikan" value="SMP"/> SMP
				<input type="radio" name="pendidikan" value="SMA"/> SMA
				<input type="radio" name="pendidikan" value="D1"/> D1
				<input type="radio" name="pendidikan" value="D2"/> D2
				<input type="radio" name="pendidikan" value="D3"/> D3
				<input type="radio" name="pendidikan" value="S1"/> S1
				<input type="radio" name="pendidikan" value="S2"/> S2
				<input type="radio" name="pendidikan" value="S3"/> S3
			
			<br />
			
			<input type="submit" value="Kirim" />
		</form>
		
		<?php
			if(isset($_POST["kelamin"]) AND isset($_POST["pendidikan"])){
				if($_POST["kelamin"] == "L") $jenis_kelamin = "Pria";
				else						 $jenis_kelamin = "Wanita";
				
				$pendidikan = $_POST["pendidikan"];
				
				echo "<strong>Seorang ${jenis_kelamin} dengan pendidikan terakhir ${pendidikan}</strong>";
			}
		?>
	</body>
</html>