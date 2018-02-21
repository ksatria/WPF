<?php
	function getCurrency($code = null){
		$currency = array("IDR" => array("nama" => "Indonesia Rupiah",		"konversi" => 1),
						  "USD" => array("nama" => "Amerika Dollar",		"konversi" => 14000),
						  "MYR" => array("nama" => "Malaysia Ringgit",		"konversi" => 2500),
						  "SGD" => array("nama" => "Singapura Dollar",		"konversi" => 13500),
						  "SAR" => array("nama" => "Saudi Arabia Riyal",	"konversi" => 5500),
						  "INR" => array("nama" => "India Rupee", 			"konversi" => 2450),
						  "JPY" => array("nama" => "Jepang Yen",			"konversi" => 7680),
						  "KRW" => array("nama" => "Korea Selatan Won",		"konversi" => 10),
						  "RMB" => array("nama" => "China Yuan",			"konversi" => 145));
		
		if(!empty($code))	return $currency[$code];
		else				return $currency;
	}
	
	function hitung($asal,$tujuan,$nominal){
		$mataUangAsal	= getCurrency($asal);
		$mataUangTujuan = getCurrency($tujuan);
		
		$hasil = $mataUangAsal["konversi"] / $mataUangTujuan["konversi"] * $nominal;
		
		return $hasil;
	}
?>