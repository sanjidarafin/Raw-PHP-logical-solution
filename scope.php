<?php  

	
    
	
	function sample(){
		static $x = 90;
		$x=$x+1;
		echo "value of x inside sample is" ,var_dump($x),"<br>";
	}
	sample();
	sample();
	sample();
	echo"value of x outside sample is" ,var_dump($x),"<br>";


	
	
	
	
		 $x = 0;
		$x=$x+10;
		$x="sanjida" ;
		
		echo "value of x outside is" ,var_dump($x)."<br>";
		
		//array
		$x=array(1,"hel lo",4);
		echo "The value at index 0 is $x[0]","<br>";
	
	
		//string function
		$count=strlen($x[1]);
		$countword=str_word_count($x[1]);
		echo "Value at index[1] is $x[1] and value of function is $count","<br>";
		echo "Value at index[1] is $x[1] and value of function is $countword","<br>";
		
		//constant-- SAMPLE is global variable here
		
		$operand1= 90;
		
		define("BASEURL","http://www.google.com");
		
		echo BASEURL;
				//file1
				echo "commect BASEURL/user ";
				
				//file2
				echo "commect BASEURL/user ";
				
				//file3
				echo "commect BASEURL/user ";
	
	
?>