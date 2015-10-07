<?php

  $numbers = array(9,0,1,4,5,-1,10);
  $min = $numbers[0];
  $length = count($numbers);
  
 
 for($i=0; $i<$length; $i++)
 {
	 if($min > $numbers[$i])
	 {
        $min = $numbers[$i];	 
	   
	 }
  }
  
  echo "Minimum number is $min";

?>