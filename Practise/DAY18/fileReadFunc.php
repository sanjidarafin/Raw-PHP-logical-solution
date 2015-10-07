<?php

$myPointer = fopen("sentence.txt","r");
    function myFileRead($myPointer)
    {

        echo fread($myPointer,filesize("sentence.txt"));
        return  fgets($myPointer);


    }
   $result = myFileRead($myPointer);
     echo $result;
?>