<?php

    $n = 3;
    $lower = 1;
    $upper = 3;


    /* for($i = 0; $i<=$n; $i++)
        {
            $middle =((($middle *$middle) + $n) / (2 * $middle));
            echo $middle."<br>";
        }
      */
        while(($upper - $lower)>0.001)
        {

            $middle = ($lower + $upper)/2;
            $midSqrt = $middle * $middle ;

            if($midSqrt> $n)
            {
                $upper = $middle;
            }
            else
            {
                $lower = $middle;
            }

            echo $middle."<br>";

        }

?>