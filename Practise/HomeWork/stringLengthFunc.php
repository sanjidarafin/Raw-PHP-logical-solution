<?php
    include  "C:/xampp/htdocs/Training/PHP/functions.php";
    if(isset($_GET['string'])){
       $string = $_GET['string'];
        $result = myStringLength($string);
        echo " Length of '".$string."' is: ".$result;
    }
   /* $string = "My name is sanjida rafin ";

   function myStringLength($string){
       $strLength = "";
           for($i = 0;$string[$i] !=  null;$i++)
           {
               //echo $string[$i]."<br>";
               $strLength++;
           }

        return $strLength;
      // echo $strLength ;
   }
*/
?>

<html>
    <head>

    </head>
    <body>
        <form action = stringLengthFunc.php method = "get">
            <input type = "text" name = "string" placeholder = "Enter your string "/>
            <button type = "submit" value = "submit">submit</button>

        </form>
    </body>
</html>