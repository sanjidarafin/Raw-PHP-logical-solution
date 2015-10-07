<?php

    // my explode function
    function myExplode($sentence)
    {
        $words = array();
        $word = " ";
        $strLength = strlen($sentence);
       // print_r($strLength);
       // echo "<br>";



        for ($i = 0; $i < $strLength; $i++) {

            if(ord($sentence[$i] == 13))
            {
                continue;
            }
            if ($sentence[$i] == " " || $i == $strLength - 1 || $sentence[$i] == "\n") {
                if ($i == $strLength - 1) {

                    $word = $word . $sentence[$i];

                }
                array_push($words, $word);
                $word = " ";

            } else {

                $word = $word . $sentence{$i};
            }
        }
        return $words;
    }

    //my frequency function
    function myFrequency($sentence)
    {

        $words = myExplode($sentence);
        $frequency = array(" ");
        $i = 0;
        $count = count($words);
        foreach ($words as $word)
        {

            if (array_key_exists($word, $frequency))
            {

            $frequency[$word]++;
            }
            else
            {
            $frequency[$word] = 1;
            }
    }
    /* foreach ($frequency as $key => $value) {
        echo "$key=>$value";

    }*/
    return $frequency;
}

// print_r($words);

                                // My calculator function
                    function calculator($number1,$number2, $operator)  {



                        if($operator == "+")
                        {

                            $result = $number1 + $number2;
                            echo "Result of addition is ".$result;
                        }

                        elseif($operator == "-")
                        {

                            $result = $number1 - $number2;
                            echo "Result of subtraction is ".$result;
                        }

                        elseif($operator == "*")
                        {

                            $result = $number1 * $number2;
                            echo "Result of multiplication is ".$result;
                        }

                        elseif($operator == "/")
                        {

                            $result = $number1 / $number2;
                            echo "Result of division is ".$result;
                        }
                        elseif($operator == "%")
                        {

                            $result = $number1 % $number2;
                            echo "Result of reminder is ".$result;
                        }


                    else
                    {


                        echo "Enter your number ";
                    }

                    return  $result;
                }


          //my in array function
        function my_in_array($j,$arrString)
        {
            $arrlength = count($arrString);
            for($i = 0;$i<$arrlength;$i++)
            {

                if($j == $arrString[$i])
                {

                    return true;
                }
                else
                {

                    return false;
                }

            }

        }


        // my lower-to -upper function

        function lowerToUpper($string)
        {

            $length = strlen($string);
            $string1 = "";
            for($i=0;$i<$length;$i++)
            {
                // echo $string[$i]."<br>";
                // echo  ord( $string[$i])."<br>";

                if(ord($string[$i])>=ord('a') && ord( $string[$i])<=ord('z'))
                {

                    $upper = chr(ord($string[$i])-ord('a')+ord('A'));


                }
                else
                {

                    $upper = $string[$i];
                }

                $string1.= $upper;
            }

            return $string1;



        }
        //$result =  lowerToUpper($string);
        //echo $result;

     //My Upper to Lower function
            function upperToLower($string)
            {

                $length = strlen($string);
                $string1 = "";
                for($i=0;$i<$length;$i++)
                {
                    // echo $string[$i]."<br>";
                    // echo  ord( $string[$i])."<br>";

                    if(ord($string[$i])>=ord('A') && ord( $string[$i])<=ord('Z '))
                    {

                        $upper = chr(ord($string[$i])+ord('a')-ord('A'));


                    }
                    else
                    {

                        $upper = $string[$i];
                    }

                    $string1.= $upper;
                }

                return $string1;

                // echo $result;

            }
           // $result =  upperToLower($string);
            //echo $result;
       //end of upper lower function



        //My string reverse function
            // $string = "sanjida" ;
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
           // $result = strRevFunction($string);

           // echo $result;



       //My array min function
        $numbers = array(9,0,1,4,5,-1,10);
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
       // $result = arrayMin($numbers);
       // echo "Minimum number is ".$result ;

     //My string length function
        function myStringLength($string){
            $strLength = "";
            for($i = 0;isset($string[$i]);$i++)
            {
                //echo $string[$i]."<br>";
                $strLength++;
            }

            return $strLength;
            // echo $strLength ;
        }
        //My maximum number from array
        $numbers = array(9,0,1,4,5,-1,10);

        function myMaximFunc($numbers)
        {


            $max = $numbers[0];
            $length = count($numbers);
            // echo $length, "<br>";


            for ($i = 0; $i < $length; $i++) {
                if ($max < $numbers[$i]) {
                    $max = $numbers[$i];

                }
            }

            // echo "Maximum number is $max";
            return $max;
        }

//$result = myMaximFunc($numbers);
//echo $result;


  //My dictionary function
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

       //My sorting function
           // $array=array('2','4','8','5','1','7','6','9','10','3');
            function mySortingFunc($array)
            {
                $arrLength = count($array);
                for($i = 0;$i<$arrLength;$i++)
                {
                    for($j = 0;$j<$arrLength;$j++)
                    {

                        if($array[$i]<$array[$j])
                        {

                            $temp = $array[$j];
                            $array[$j] = $array[$i];
                            $array[$i] = $temp;
                        }

                    }

                }
                return $array;
            }
           // $result = mySortingFunc($array);
           // print_r($result);

?>