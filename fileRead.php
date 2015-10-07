<?php

  
/*  $myPointer = fopen("sentence.txt","w");
  fwrite($myPointer,"Line 1.\n");
  fwrite($myPointer,"Line 2.\n");
  //echo fgets($myPointer);
  fclose($myPointer);
  
  
  $myPointer = fopen("sentence.txt","a");
  fwrite($myPointer,"Line 3.\n");
  fwrite($myPointer,"Line 4.\n");
  //echo fgets($myPointer);
  fclose($myPointer);
  
  
  $myPointer = fopen("sentence.txt","r");
  echo fgets($myPointer);
  echo fgets($myPointer);
  fclose($myPointer);*/
  
  $myPointer = fopen("sentence.txt","r");
  while(!feof($myPointer))
  {
	//echo fgetc($myPointer),"<br>";  
	echo fgets($myPointer),"<br>";  
  }
  
  
  
  
  
  
  //$string = fgets($myPointer);
  
  //echo $string[0]. " ".$string[1];
  
  //echo fread($myPointer,filesize("sentence.txt"));
  
  //echo fgets($myPointer);
  
  //echo fgets($myPointer);
  
  //echo fgets($myPointer);
  
  
?>