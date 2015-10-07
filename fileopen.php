<?php
    $myPointer = fopen("sentence.txt","r");
    echo fgets($myPointer);
echo fread($myPointer,filesize("sentence.txt"));




?>