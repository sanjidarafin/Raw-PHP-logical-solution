<?php

  $numbers = array(9,0,1,4,5,-1,10);
  $max = $numbers[0];
  $length = count($numbers);
  echo $length,"<br>";
  
 
 for($i=0; $i<$length; $i++)
 {
	 if($max < $numbers[$i])
	 {
        $max = $numbers[$i];	 
	   
	 }
  }
  
  echo "Maximum number is $max";

?>