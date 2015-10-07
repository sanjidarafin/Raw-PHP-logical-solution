<?php

            $string = "SANJIDA" ;
            $length = strlen($string);
            // echo $length."<br>";

            for($i=0;$i<$length;$i++)
            {
                // echo $string[$i]."<br>";
                //echo  ord( $string[$i])."<br>";


                //lower to upper
                $upperToLower = chr(ord( $string[$i]) + ord('a') - ord('A') );
                echo $upperToLower ;


            }






?>
