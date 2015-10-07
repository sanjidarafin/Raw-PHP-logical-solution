<html>
    <head>
        <style>
            .error {
                color: #FF0000;
            }

        </style>

         <link rel="stylesheet"type="text/css"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
    </head>

    <?php
        if (isset($_POST['name']) && !empty($_POST['name']))
        {
            echo "Welcome ",$_POST["name"],"<br>";
            echo "Your email is: ", $_POST["email"],"<br>";
            echo "Your mobile is: ", $_POST["mobile"],"<br>";
            echo "Your country is: ", $_POST["country"],"<br>";
        }
        else
        { ?>

            $textbo


            <div class="alert alert-warning">
             <strong>Warning!</strong> Please fill the form.</div>
        <?
        }
       ?>
    <body>

        <div class="well">



                <h2 align="center">Contact Me</h2>
                <h2 align="center">For any issue, you can contact.</h2>

                </br></br>

                <form action= "register.php" method="post"> </br> </br>

                   mafs:  <input type="text" name="name"
                           value="<?php echo htmlspecialchars($name);?>">
                    <span class="error"><?php echo $nameErr;?></span>

                    My name:<input type="text" name="name"/> </br> </br>
                    E-mail Id:<input type="text" name="email"/> </br> </br>
                    Mobile :<input type="text" name="mobile"/> </br> </br>
                    Country :<input type="text" name="country"/> </br> </br>
                    <button type="submit">submit</button>
                </form>


        </div>
    </body>
</html>