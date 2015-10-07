<?php

$a = array(1,2,3,4,5);
$i=0;
foreach($a as $number)
{

	echo "index of ",$number,"is", $i++,"<br>"

	// frequency using foreach

	$sentence ="hi hi hih hi";
	echo $sentence."<br>";
	 $words= explode(" ","$sentence");
	 $frequency= array(" ");
	 $i=0;
	 $count=count($words);
	 foreach($words as $word){
		 
		 if(array_key_exists($word,$frequency)){
			 
			 $frequency[$word]++;
		 }
		 else {
			 $frequency[$word]=1;
		 }
	 }
	  foreach($frequency as $key=>$value){
     echo "$key=>$value";

	  }



?>