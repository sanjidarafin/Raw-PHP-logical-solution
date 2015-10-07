<html>
    <head>

    </head>
         <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <body>

    <div class="container">
        <div class=" well">
            <div class="row">
                <div align = "center">
            <h1> My Calculator </h1>
            <form action = "calculator-Func.php." method = "get">

                <input type="number" name="number1" placeholder= "Enter your first number"/> </br> </br>
                <input type="number" name="number2"placeholder= "Enter your second number"/> </br> </br>
                <input type = "text" name = "operator" placeholder= "+ or - or * or / or % "/> </br> </br>
                <button type="submit">submit</button>
            </form>

                    <?php
                        // NORMAL CALCULATOR SOTUTION using function
                        $result = "" ;
                        include "C:/xampp/htdocs/Training/PHP/functions.php";
                        if (isset($_GET['number1']) && isset($_GET['number2']) )
                        {
                            $number1 = $_GET['number1'];
                            $number2 = $_GET['number2'];
                            $operator = $_GET['operator'];


                            $result = calculator($number1,$number2,$operator);
                            // echo $result;(function er vitor echo kora ache, tai echo korte hoche na ekhane )

                        }
                    ?>
              </div>
        </div>
    </div>
</div>

                       <?php
                       /* function calculator($number1,$number2, $operator)  {
                                        if($operator == "+")
                                        {

                                            $result = $number1 + $number2;
                                            echo "Result of addition is ".$result;
                                        }

                                        elseif($operator == "-")
                                        {

                                            $result = $number1 - $number2;
                                            echo "Result of subtraction is ".$result;
                                        }

                                        elseif($operator == "*")
                                        {

                                            $result = $number1 * $number2;
                                            echo "Result of multiplication is ".$result;
                                        }

                                        elseif($operator == "/")
                                        {

                                            $result = $number1 / $number2;
                                            echo "Result of division is ".$result;
                                        }
                                       elseif($operator == "%")
                                        {

                                            $result = $number1 % $number2;
                                            echo "Result of reminder is ".$result;
                                        }

                                    }
                                    else
                                    {


                                        echo "Enter your number ";
                                    }

                                      echo  $result;
                                }
                         */
                        ?>


</html>