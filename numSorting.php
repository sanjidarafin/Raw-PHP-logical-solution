<?php

$numbers = array(5,2,8,1,7,6);

print_r($numbers);
echo "<br>";

$length = count($numbers);

for($i=0; $i<$length; $i++)
{
    for($j=$i; $j<$length; $j++)
    {
        if($numbers[$i]>$numbers[$j])
        {
            $temp = $numbers[$i];
            $numbers[$i] = $numbers[$j];
            $numbers[$j] = $temp;
        }


    }

}
print_r($numbers);
echo "<br>";

for($i=0; $i<$length; $i++)
{
    for($j=$i; $j<$length; $j++)
    {
        if($numbers[$i]<$numbers[$j])
        {
            $temp = $numbers[$i];
            $numbers[$i] = $numbers[$j];
            $numbers[$j] = $temp;
        }


    }
}
print_r($numbers);
echo "<br>";




?>