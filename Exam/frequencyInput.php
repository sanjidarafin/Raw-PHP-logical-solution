<html>
    <head>
    </head>

        <?php
            //if value is given or not
            if(isset($_GET['line']) && $_GET["line"] !== " ")
            {

                $sentence =$_GET['line'];
                echo $sentence."<br>";

                //my explode
                $words = array();
                $word = " ";
                $strLength = strlen($sentence);
                // print_r($strLength);
                // echo "<br>";

                for ($i = 0; $i < $strLength; $i++)
                {

                    if(ord($sentence[$i] == 13))
                    {
                        continue;
                    }
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

                 //print_r($words);

                   //frequency function

                    $frequency= array(" ");
                    $i=0;
                    $count=count($words);
                    foreach($words as $word)
                    {

                        if(array_key_exists($word,$frequency))
                        {
                            $frequency[$word]++;
                        }
                        else
                        {
                            $frequency[$word]=1;
                        }
                    }
                    foreach($frequency as $key=>$value){echo "$key=>$value";

             }

            }
            else
            {
                echo "Please filll in the form";
            }
        ?>
    <body>

        <form action= "frequencyInput.php" method="get">
             My sentence:<input type="text" name="line" value= ""/> </br>

            <button type="submit">submit</button>
        </form>




    </body>
</html>