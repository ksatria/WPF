<?php
	include("currency.php");
	
	if(isset($_GET["nominal"]) AND isset($_GET["asal"]) AND isset($_GET["tujuan"])){
		$nominal = $_GET["nominal"];
		$asal	 = $_GET["asal"];
		$tujuan  = $_GET["tujuan"];
		
		$hasil = hitung($asal,$tujuan,$nominal);
	}
?>
<html>
	<head>
		<title>Penukaran Uang</title>
	</head>
	<body>
		<h2>Aplikasi Penukaran Mata Uang</h2>
		<form method="GET">
			<table cellpadding="10">
				<tr>
					<td>
						<label for="nominal">Nominal</label>
					</td>
					<td>
						<input type="number" min="0" name="nominal" value="<?php echo (isset($nominal) ? $nominal : "");?>"/>
					</td>
				</tr>
				<tr>
					<td>
						<label for="asal">Dari</label>
					</td>
					<td>
						<select name="asal">
							<?php
							foreach(getCurrency() as $kode => $matauang){
								?>
								<option value="<?php echo $kode;?>" <?php echo ((isset($asal) AND $asal == $kode) ? "selected" : "");?>><?php echo $matauang["nama"];?></option>
								<?php
							}
							?>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						<label for="tujuan">Ke</label>
					</td>
					<td>
						<select name="tujuan">
							<?php
							foreach(getCurrency() as $kode => $matauang){
								?>
								<option value="<?php echo $kode;?>" <?php echo ((isset($tujuan) AND $tujuan == $kode) ? "selected" : "");?>><?php echo $matauang["nama"];?></option>
								<?php
							}
							?>
						</select>
					</td>
				</tr>
				<tr>
					<td><label for="hasil">Hasil</label></td>
					<td>
						<input type="number" min="0" value="<?php echo ((isset($hasil) AND $hasil !== FALSE) ? $hasil : "");?>" readonly/>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="reset" value="Reset"/>
						<input type="submit" value="Hitung"/>
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>