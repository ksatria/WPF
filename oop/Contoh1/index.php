<?php
	include("Pembeli.php");
	include("Penjual.php");
	
	$adi	= new Pembeli;
	$budi	= new Pembeli;
	$cahyo	= new Penjual;
	
	$adi->username	= "adicakep";
	$adi->password	= "adiisthebest";
	$adi->nama		= "Adi Sasmito";
	
	$budi->username	= "budikece";
	$budi->password	= "budianakhits";
	$budi->nama		= "Budianto";
	
	$cahyo->username	= "cahyo";
	$cahyo->password	= "cahyoselaludihati";
	$cahyo->nama		= "Cahyo Slamet Riyadi";
	
	$cahyo->login();
	$cahyo->tambahBarang("Bola Sepak",10);
	$cahyo->tambahBarang("Baju Koko",5);
	
	$adi->login();
	$adi->lihatBarang();
	
	$budi->login();
	$budi->lihatBarang();
	$budi->beliBarang("KOM");
?>