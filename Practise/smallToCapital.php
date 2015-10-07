<?php

            $string = "sanjida" ;

            $length = strlen($string);
            // echo $length."<br>";

           for($i=0;$i<$length;$i++)
           {
             // echo $string[$i]."<br>";
              //echo  ord( $string[$i])."<br>";

               echo  chr(ord( $string[$i]) - ord('a') + ord('A') );


           }






?>
