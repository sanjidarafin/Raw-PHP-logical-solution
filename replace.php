<?php
 
$str1="FTIL";
$str2="FT";
$str3="GG";

$len1 = strlen($str1);
$len2 = strlen($str2);


for($i=0;$i<$len1;$i++)
{
   if($str1[$i]=$str2[0])
   {
     $t=$i;
     $b=true;
	 
     for($j=0;$j<$len2;$j++)
     {
        if($str1[$t] != $str2[$j])
     {
        $b=false;

     }
        $t++;
     }
	 
        if($b=true)
        {
            $p=$i;
			
           for($k=0;$k<$len2;$k++)
           {
               $str1[$p]=$str3[$k];
               $p++;
            }
        }
    }
}

echo $str1;
 
?>