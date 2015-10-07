<html>
<head>

</head>
<body>
<form action = "dictionary.php" method = "get">
    <input type = "text" name = "string1" placeholder = "Enter your first word "/></br></br>
    <input type = "text" name = "string2" placeholder = "Enter your second word "/></br>
    <button type = "submit" value = "submit">submit</button>

</form>
</body>
</html>


<?php
 //$string1 = "bat";
//$string2 = "ball";



        function myDictionary($string1,$string2)
        {
            $strlen1 = strlen($string1);
            $strlen2 = strlen($string2);
            if ($strlen1 > $strlen2)
            {
                $minlength = $strlen2;
            }
            else
            {
                $minlength = $strlen1;
            }


            for ($i = 0; $i < $minlength; $i++)
            {

                if ($string1[$i] > $string2[$i])
                {
                    return $string2;
                }
               elseif($string1[$i] < $string2[$i])
               {

                    return $string1;

                }


            }
            if ($strlen1 > $strlen2)
            {
                return $string2;
            } else
            {
                return $string1;
            }

        }
//$result = myDictionary($string1,$string2);
//echo $result;
    // echo  myDictionary["cat","bat","batter","ball"];
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
        print_r($words);

?>