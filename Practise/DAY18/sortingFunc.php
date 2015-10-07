<?php
        $array=array('2','4','8','5','1','7','6','9','10','3');
          function mySortingFunc($array)
          {
                $arrLength = count($array);
                    for($i = 0;$i<$arrLength;$i++)
                    {
                        for($j = $i;$j<$arrLength;$j++)
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
           $result = mySortingFunc($array);
          print_r($result);
?>
