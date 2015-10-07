<?php

        include  "C:/xampp/htdocs/Training/PHP/functions.php";
        $numbers = array(9,0,1,4,5,-2,10);

        $result = arrayMin($numbers);
       echo "Minimum number is ".$result ;
       /*
        function arrayMin($numbers){


            $min = $numbers[0];
            $length = count($numbers);


            for($i=0; $i<$length; $i++)
            {
                if($min > $numbers[$i])
                {
                    $min = $numbers[$i];

                }
            }

           return $min;

        }
       */


?>