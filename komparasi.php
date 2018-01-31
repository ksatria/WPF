<?php
	$a = 10;
	$b = 5;
	
	echo "1.a. ".(($a > $b) === 1)."<br />";
	echo "1.b. ".(($a > $b) === true)."<br />";
	echo "1.c. ".(($a > $b) == 1)."<br />";
	echo "1.d. ".(($a > $b) == true)."<br />";
	
	echo "2.a. ".(($a < $b) === 0)."<br />";
	echo "2.b. ".(($a < $b) === false)."<br />";
	echo "2.c. ".(($a < $b) == 0)."<br />";
	echo "2.d. ".(($a < $b) == false)."<br />";
?>
