<?php
       //string reeverse using while loop
        $string = "sanjida" ;
        $string1 = "";
        $length = strlen($string);
       // echo $length."<br>";
        $i = $length;
        while($i>0)
        {
          $i--;
          $string1.= $string{$i};
        }
        echo $string1;


        /*
         //string reverse using for loop
        $string = "sanjida";
        $strlen = strlen($string);
        for($i = $strlen;$i>=0;$i--)
        {
           echo $string[$i];
        }

        */



?>
