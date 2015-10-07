<html>
    <head>
        <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    </head>

    <body>




    <div class="container">
            <div class=" well">
                <div class="row">
                    <div align = "center">
                         <h1> Show your series from 1 to your given number </h1>
                          <form action = "series.php" method = "get">
                                <input type="number" name="number1" placeholder= "Your number"/> </br> </br>
                                <button type="submit">submit</button>
                         </form>



                            <?php
                            if(isset($_GET['number1'])) {
                                $number = $_GET["number1"];
                                $i = 0;
                                while ($i < $number) {
                                    echo "Series is : " . $i . "<br>";
                                    $i++;
                                }
                            }
                            ?>

                     </div>
                </div>
            </div>
        </div>
    </body>



</html>