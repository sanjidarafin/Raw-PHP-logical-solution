<html>
<head>

</head>
<body>
<form action = "dictionaryProb.php" method = "get">
    <input type = "text" name = "string1" placeholder = "Enter your first word "/></br></br>
    <input type = "text" name = "string2" placeholder = "Enter your second word "/></br>
    <button type = "submit" value = "submit">submit</button>

</form>
</body>
</html>


<?php
   // $string1 = "act";
    //$string2 = "bat";


    if(isset($_GET['string1']) && isset($_GET['string2']))
{
        $string1 = $_GET['string1'];
        $string2 = $_GET['string2'];

        $strlen1 = strlen($string1);
        $strlen2 = strlen($string2);


        if ($strlen1 == $strlen2) {
            $strSum1 = "";
            $strSum2 = "";
            for ($i = 0; $i < $strlen1; $i++) {
                // echo ord($string1[$i]);
                $strSum1 = $strSum1 + ord($string1[$i]);
            }
           // echo $strSum1;
            echo "<br>";
            for ($j = 0; $j < $strlen2; $j++) {
                // echo ord($string2[$i]);
                $strSum2 = $strSum2 + ord($string2[$j]);

            }
           // echo $strSum2;
            echo "<br>";

            if ($strSum2 < $strSum1) {
                echo $string2;
                echo "<br>";
                //echo $string1;
            }


        }
    }
?>