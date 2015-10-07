
<html>
<head>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>

<body>




<div class="container">
    <div class=" well">
        <div class="row">
            <div align = "center">
                <h1> Show your summation </h1>
                <form action = "series2.php" method = "get">
                    <input type="number" name="number1" placeholder= "Your number"/> </br> </br>
                    <button type="submit">submit</button>
                </form>



                <?php
                if(isset($_GET['number1']))
                {
                    $number = $_GET["number1"];


                             $sum = 0;
                              $i = 1;
                            while($number--)
                            {
                                $sum = $sum + $i;
                                $i = $i + 3;
                             }
                                echo $sum;


                }
                ?>

            </div>
        </div>
    </div>
</div>
</body>



</html>