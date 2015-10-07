<?php
    include "C:/xampp/htdocs/Training/PHP/functions.php";

        $str1 = "acct";
        $str2 ="act";

        $strlen1 =  strlen($str1);
        $strlen2 = strlen($str2);
        $arrString = array();
        if( $strlen1 ==  $strlen2)
        {// $strArray = " ";
            for($i=0;$i<$strlen1;$i++)
            {
               // echo $str1[$i];
                for ($j = 0; $j < $strlen2; $j++)
                {

                    // $strArray =  $str2[$j];
                    // echo $strArray;

                    if ($str1[$i] == $str2[$j])
                    {
                        if(my_in_array($j,$arrString))
                        {

                            continue;
                        }
                        else{

                            array_push($arrString,$j);
                        }

                        if ($i == $strlen1 - 1)
                        {
                            echo "True";

                        }
                        break;
                    }
                }

                    if ($j == $strlen2)
                    {
                    echo "False";
                    break;
                     }

                 }


       }
        else
        {
            echo "False ";
        }



      /*  function my_in_array($j,$arrString)
        {
            $lenth = count($arrString);
            for($i = 0;$i<$lenth;$i++)
            {

                if($j == $arrString[$i])
                {

                    return true;
                }else{

                    return false;
                }

            }

        }

        my_in_array($j,$arrString);
      */

?>