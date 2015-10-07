<html>
    <head>


    </head>
    <div class="container">
        <div class = "rows">
   <div class = "well">
          <h1> My Calculate </h1>
          <form action = "CalculPract.php" method = "get">

                     <input type="number" name="number1" value= ""/> </br> </br>
                     <input type="number" name="number2" value= ""/> </br> </br>
                     <input type = "text" name = "operator" value= ""/> </br> </br>
                     <button type="submit">submit</button>
          </form>


             </div>
        </div>
    </div>
         <?php
   // NORMAL CALCULATOR SOTUTION
              if (isset($_GET['number1']) && isset($_GET['number2']) )
                {

                     $number1 = $_GET['number1'];
                     $number2 = $_GET['number2'];
                     $operator = $_GET['operator'];
                   // echo $number1;

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

                }
                else
                {


                    echo "Enter your number ";
                }




       ?>

</html>