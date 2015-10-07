<?php
/*
	$x=3;
	while($x>5){
		 echo "$x <br>";
	}
		echo $x;
		
		$n=100;
		$sum = 0;
		
		while($n){
			//here $n-- ; post decrement
			$sum= $sum + $n--;
			
		
		}
		echo $sum;


		$n=5;
		//1+3+5+7+9
		$sum = 0;
		$i=1;
		while($n--){
			
			$sum= $sum + $i;
			$i=$i+ 2;
			
		
		}
		echo $sum;


		
		$n=3;
		//1+4+9+16+25
		$sum = 0;
		$i=1;
		while($n--){
			
			$sum= $sum + $i * $i;
			$i=$i+1;
			
		
		}
		echo $sum;




//1+4+9+16+25
$i=0;
while($i<5){
    echo $i;
    var_dump($i);
    $i=$i+1;
}



    //array max
    $numbers = array(1,2,9,4,5,6);

    $length= count($numbers);
    $max= $numbers[0];
    for($i=0;$i<$length;$i++)
    {

        if($max < $numbers[$i])
        {

            $max= $numbers[$i];

        }
    }
    echo $length ."<br>";
    echo $max;
/*
 //array min
 $numbers = array(1,2,9,4,5,6);

 $length= count($numbers);
 $max= $numbers[0];
 for($i=0;$i<$length;$i++)
 {

     if($max > $numbers[$i])
     {

         $max= $numbers[$i];

     }
 }
 echo $max;



 $a=7;
 $b=9;

 $temp = $a;
 $a= $b;
 $b= $temp ;

     echo $b ;
     //

     $a=$a+$b;
     //a=a+b
     $b=$a-$b;
     //b=a+b-b
     $b=$a+$b;
     //b=a+a
     $a=$a-$b;
     echo $a;
     echo $b;


     //ascending



*/

$number=array("5","7","3");
   for(i = 0; i < 6; i++)
 {
   for (j = i + 1; j < 6; j++)
{
 if (number[i] > number[j])
 {
     $a =  number[i];
     number[i] = number[j];
     number[j] = $a;
 }
}
}
ecoh $number;*/
                     
?>