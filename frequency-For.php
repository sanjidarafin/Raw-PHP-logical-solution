<?php 
/*
 	$string="hi i am sanjida .i am bangladeshi";   
	$words = explode(" ",$string);
	//print_r($words);
     $aa= array("ken"=> "developer","ben"=>"manager");
	//$a= array("3","4","2");
	print_r($a);
	
	print_r($aa);
	echo $aa["ken"];
	
	 $aa["gen"]="tester";
	 echo $aa["gen"];
	 */
	 
	 //frequency check of a word
	 $sentence ="hi hi hih hi";
	 $words= explode(" ","$sentence");
	 $frequency= array(" ");
	 
	 $count= count($words);
	 for($i=0;$i<$count;$i++){
		 
		 if(array_key_exists($words[$i],$frequency)){
			 
			 $frequency[$words[$i]]++;
		 }
		 else {
			 $frequency[$words[$i]]=1;
		 }
	 }
     print_r($frequency);
?>.