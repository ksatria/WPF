<?php
	$p = true;
	$q = false;
	
	echo "true AND true = ".($p AND $p)."<br />";
	echo "true AND false = ".($p AND $q)."<br />";
	echo "false AND true = ".($q AND $p)."<br />";
	echo "false AND false = ".($q AND $q)."<br />";
	
	echo "true OR true = ".($p OR $p)."<br />";
	echo "true OR false = ".($p OR $q)."<br />";
	echo "false OR true = ".($q OR $p)."<br />";
	echo "false OR false = ".($q OR $q)."<br />";
	
	echo "true XOR true = ".($p XOR $p)."<br />";
	echo "true XOR false = ".($p XOR $q)."<br />";
	echo "false XOR true = ".($q XOR $p)."<br />";
	echo "false XOR false = ".($q XOR $q)."<br />";
	
	echo "NOT true = ".!$p."<br />";
	echo "NOT false = ".!$q."<br />";
?>
