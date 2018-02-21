<html>
	<head>
		<title>Diskon</title>
	</head>
	<body>
		<form method="POST">
			<label for="total">Total pembelian : Rp</label>
			<input type="number" min="0" name="total" />
			<input type="submit" value="Proses"/>
		</form>
		
		<?php
		if(isset($_POST["total"])){
			$total  = $_POST["total"];
			$diskon = 0;
			
			if($total >= 250000){
				$diskon = 5/100*$total;
			}
			
			$bayar = $total - $diskon;
			?>
			<p>##############################</p>
			<table>
				<tr>
					<td>Total pembelian</td>
					<td>=</td>
					<td>Rp<?php echo $total;?></td>
				</tr>
				<tr>
					<td>Diskon</td>
					<td>=</td>
					<td>Rp<?php echo $diskon;?></td>
				</tr>
				<tr>
					<td>Pembayaran</td>
					<td>=</td>
					<td>Rp<?php echo $bayar;?></td>
				</tr>
			</table>
			<?php
		}
		?>
	</body>
</html>