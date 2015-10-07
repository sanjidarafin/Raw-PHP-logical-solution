<?php
     $sentence = "hi how are you
    rafin how are you";
    //file read
  //  $file = fopen("sentence.txt","r");
    //$sentence = fread($file,filesize("sentence.txt"));
    $words = array();
    $word = " ";
    $strLength = strlen($sentence);
        // print_r($strLength);
     // echo "<br>";

    //explode function
    for ($i = 0; $i < $strLength; $i++)
    {

        if(ord($sentence[$i] == 13))
        {
            continue;
        }
        echo ord($sentence[$i])."<br>";
            if ($sentence[$i] == " " || $i == $strLength - 1 || $sentence[$i] == "\n")
                {
                    if ($i == $strLength - 1)
                    {
                        $word = $word . $sentence[$i];

                    }
                    array_push($words, $word);
                    $word = " ";

                }
                 else
                 {

                   $word = $word . $sentence{$i};
                 }
             }

            print_r($words);
?>