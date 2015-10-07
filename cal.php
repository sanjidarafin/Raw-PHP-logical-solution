<?php


function calculator(){
	$operand1=20;
	$operand2=10;
	//$operator="+";
	//$operator="-";
	//$operator="*";
	//$operator="/";
	$operator="%";
	
	if($operator=="+")
	{
		$res=$operand1+$operand2;
		echo "Addition is ",$res;
	}
	    
		elseif($operator=="-")
		{
		
		   $res=$operand1-$operand2;
		   echo "Subtraction is ",$res;
	    }
	     
		    elseif($operator=="*")
			{
		
		        $res=$operand1*$operand2;
		        echo "Multiplication is ",$res;
	        }
	            
				elseif($operator=="/")
				{
		
		           $res=$operand1/$operand2;
		           echo "Division is ",$res;
	            }
	
	                elseif($operator=="%")
					{
		
		               $res=$operand1%$operand2;
		               echo "Modulus is ",$res;
	                }
	
	                     else
						 {
		                    
							echo "Invalid";
	                     }
}

calculator();
?>