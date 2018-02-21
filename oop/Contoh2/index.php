<?php
	include("Pembeli.php");
	include("Penjual.php");
	
	$adi	= new Pembeli("adicakep","adiisthebest","Adi Sasmito");
	$budi	= new Pembeli("budikece","budianakhits","Budianto");
	$cahyo	= new Penjual("cahyo","cahyoselaludihati","Cahyo Slamet Riyadi");
	
	$cahyo->login();
	$cahyo->tambahBarang("Bola Sepak",10);
	$cahyo->tambahBarang("Baju Koko",5);
	
	$adi->login();
	$adi->lihatBarang();
	
	$budi->login();
	$budi->lihatBarang();
	$budi->beliBarang("KOM");
?>
