<?php
	define("PHI",22/7);
	
	if(isset($_POST["diameter"])){
		$d 		= $_POST["diameter"];
		$r 		= $d/2;
		$volume = 4/3*PHI*pow($r,3);
		$luas 	= 4*PHI*pow($r,2);
	}
?>

<html>
	<head>
		<title>Penghitung Bola</title>
	</head>
	<body>
		<h2>Aplikasi Penghitung Volume dan Luas Penampang Bola</h2>
		<p>
			<form action="" method="POST">
				Masukkan panjang diameter bola (cm) : <input type="number" name="diameter" min="0" />
			</form>
		</p>
		<p>##############################################</p>
		<?php
		if(isset($volume) AND isset($luas)){
		?>
		<p>
			<table>
				<tr>
					<td>Diameter</td>
					<td>:</td>
					<td><strong><?php echo $d;?> cm</strong></td>
				</tr>
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
			</table>
		</p>
		<?php
		}
		?>
	</body>
</html>