<html>
	<head>
		<title>Masa Hidup</title>
	</head>
	<body>
		<form method="POST">
			<label for="lahir">Kapan Anda lahir?</label>
			<input type="date" name="lahir"/>
			<input type="submit" value="Proses"/>
		</form>
		<?php
		if(isset($_POST["lahir"])){
			$hariini	= date_create(date("Y-m-d"));
			$harilahir	= date_create($_POST["lahir"]);
			
			$masahidup = date_diff($harilahir,$hariini);
			
			echo "Anda telah hidup selama ".$masahidup->format('%a hari');
		}
		?>
	</body>
</html>