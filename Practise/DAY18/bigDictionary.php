<?php
         include "dictionaryFunc.php";
            $words = array("cat","bat","batter","ball");
            $arrLength = count($words);

            for($i = 0;$i<$arrLength;$i++){

            for($j =$i;$j<$arrLength;$j++)
            {

            if(myDictionary($words[$i],$words[$j]) == 2)
            {

                $temp = $words[$i];
                $words[$i] = $words[$j];
                $words[$i] = $temp;


            }

            }


            }
           // print_r($words);
?>