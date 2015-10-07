<?php

   /* $sentence = fopen("sentence.txt","r");
    echo fgets($sentence)."<br>";
    echo fgets($sentence)."<br>";
    echo fgets($sentence)."<br>";
    echo fread($sentence,filesize("sentence.txt"));
        */
    include "functions.php";
    $file = fopen("sentence.txt","r");
$sentence = fread($file,filesize("sentence.txt"));



$words = myExplode($sentence);
$frequency = myFrequency($sentence);
//my explode function


/*
    $words = array();
    $word = " ";
    $strLength = strlen($sentence);
   // print_r($strLength);
    //echo "<br>";




    for($i=0;$i<$strLength;$i++)
    {

            if(ord($sentence[$i] == 13))
            {
                continue;
            }


        //echo ord($sentence[$i])."<br>";
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

   // print_r($words);
    echo "<br>";


    // counting the frequency of words


    $frequency= array(" ");
    $i=0;
    $count=count($words);
        foreach($words as $word)
        {
            if(array_key_exists($word,$frequency)){
                $frequency[$word]++;
                }
                else
                {
                    $frequency[$word]=1;
                }
        }

        foreach($frequency as $key=>$value){
        echo "$key=>$value";

        }
*/
    echo "<br>";
    print_r( $frequency);

$string = fopen("sanjida.txt","w");
foreach($frequency as $key => $value){
    echo "$key=> $value", "</br>";
    fwrite($string,"$key=> $value");



}
?>


