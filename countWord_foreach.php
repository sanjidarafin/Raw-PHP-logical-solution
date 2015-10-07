<?php
 
 $sentence ="Dhaka is our capital city it is a big city";
 echo $sentence,"<br>";
 
 $words = explode(" ",$sentence);
 print_r($words);
 echo "<br>";
 
 $frequency =array();
 
foreach($words as $word)
 {
	  
	 if(array_key_exists($word,$frequency))
	 {
		 $frequency[$word]++; 
	 }
	 else
	 {
		 $frequency[$word]=1;
	 }
		 
 }
 
 foreach($frequency as $key => $value)
 {
	 echo "$key => $value","<br>";
 }
 
 
?>