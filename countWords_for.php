<?php
 
 $sentence ="Dhaka is our capital city it is a big city";
 echo $sentence,"<br>";
 
 $words = explode(" ",$sentence);
 print_r($words);
 echo "<br>";
 
 $frequency =array();
 
 $count = count($words);
 echo $count,"<br>";
 
 
 for($i=0; $i<$count; $i++)
 {
	 if(array_key_exists($words[$i],$frequency))
	 {
		 $frequency[$words[$i]]++; 
	 }
	 else
	 {
		 $frequency[$words[$i]]=1;
	 }
		 
 }
 
 print_r($frequency);
?>