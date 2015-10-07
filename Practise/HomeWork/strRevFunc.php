

<?php

            $string = "sanjida" ;
         function strRevFunction($string)
         {
             $string1 = "";
             $length = strlen($string);
             // echo $length."<br>";
             $i = $length;
             while ($i > 0) {
                 $i--;
                 $string1 .= $string{$i};
             }
            // echo $string1;
             return $string1;

         }
         $result = strRevFunction($string);
        echo $result;





?>