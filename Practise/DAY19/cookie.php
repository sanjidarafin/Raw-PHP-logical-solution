
<?php
         $displayForm = true;
        if(isset($_COOKIE["username"]))
        {
            $displayForm = false;
              //echo " Welcome " . $_COOKIE["username"];
           header("Location:home.php"); /* Redirect browser */
        }
        elseif(isset($_POST["name"]))
            {
                 $displayForm = false;
                setcookie("username",$_POST["name"],time()+ 1800);
                echo "Welcome ".$_POST["name"]."<br>";
            }

?>


    <?php if($displayForm) { ?>

    <form action = "cookie.php" method = "post">
            Username :<input type = "text" name = "name" /><br> <br>
            Password :<input type = "password" name = "pass"/> <br>
            <button type = "submit" value = "submit" >submit</button>
    </form>
  <?php } ?>



