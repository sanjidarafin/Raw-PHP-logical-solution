<html>
<head>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>

<body>




<div class="container">
    <div class=" well">
        <div class="row">
            <div align = "center">
                <h1> Give your upper case srting to convert lower case  </h1>
                <form action = "upperLowerFunc.php" method = "get">
                    <input type="text" name="str" placeholder= "Your string"/> </br> </br>
                    <button type="submit">submit</button>
                </form>



                <?php
                include  "C:/xampp/htdocs/Training/PHP/functions.php";
                if(isset($_GET['str']))
                {
                    $string = $_GET["str"];

                    $result = upperToLower($string);
                    echo $result;
                }
                /*
                 $string = "saNJida" ;

                 $length = strlen($string);
                  echo $length."<br>";
                 function upperToLower($string)
                 {

                     $length = strlen($string);
                     $string1 = "";
                     for($i=0;$i<$length;$i++)
                     {
                         // echo $string[$i]."<br>";
                         // echo  ord( $string[$i])."<br>";

                         if(ord($string[$i])>=ord('A') && ord( $string[$i])<=ord('Z '))
                         {

                             $upper = chr(ord($string[$i])+ord('a')-ord('A'));


                         }
                         else
                         {

                             $upper = $string[$i];
                         }

                         $string1.= $upper;
                     }

                     return $string1;

                     // echo $result;

                 }
                 $result =  upperToLower($string);
                 echo $result;
               */

                ?>

            </div>
        </div>
    </div>
</div>
</body>



</html>