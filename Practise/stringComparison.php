<html>
<head>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>

<body>




<div class="container">
    <div class=" well">
        <div class="row">
            <div align = "center">
                <h1> Give your strings to compare </h1>
                <form action = "stringComparison.php" method = "get">
                    <input type="text" name="str1" placeholder= "Your first string"/> </br> </br>
                    <input type="text" name="str2" placeholder= "Your second string"/> </br> </br>
                    <button type="submit">submit</button>
                </form>



                <?php
                if(isset($_GET['str1']) && ($_GET['str2']))
                {
                    $string1 = $_GET['str1'];
                    $string2 = $_GET['str2'];

                        if(is_string($string1) && is_string($string2))
                        {
                            echo "Your first string is " . $string1 . "<br>";
                            echo "Your second string is " . $string2 . "<br>";

                            if (strcmp($string1, $string2) == 0)
                            {
                                echo "Your string Match" . "<br>";

                            } else
                            {

                                echo "Your string Not match";
                            }
                        }

                        else
                       {
                          echo "Please ! Enter only string ";
                        }

                }
                else
                {
                    echo "Set your string";
                }




                ?>

            </div>
        </div>
    </div>
</div>
</body>



</html>