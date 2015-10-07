<html>
<head>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>

<body>




<div class="container">
    <div class=" well">
        <div class="row">
            <div align = "center">
                <h1> Show your number is Even or Odd </h1>
                <form action = "number.php" method = "get">
                    <input type="number" name="number1" placeholder= "Your number"/> </br> </br>
                    <button type="submit">submit</button>
                </form>



                <?php
                if(isset($_GET['number1'])) {
                    $number = $_GET["number1"];
                    $i = 0;
                    if($number%2 == 0){
                        echo "Your number is Even";
                    }
                    else
                    {
                        echo "Your number is Odd";
                    }
                }
                ?>

            </div>
        </div>
    </div>
</div>
</body>



</html>