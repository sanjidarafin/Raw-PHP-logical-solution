<?php 
	$x = 0; 
	$y = $x - 1;
	echo "x=$x,y=$y";
	$x = $y--;
	$z = --$x;
	echo "x=$x,y=$y,z=$z";
?>