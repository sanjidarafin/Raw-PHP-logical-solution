<html>
    <head>
        <link rel="stylesheet"type="text/css"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
    </head>

<?php
if (isset($_POST['name']) && !empty($_POST['name']))
    {
        echo "Welcome ",$_POST["name"],"<br>";

        echo "Your email is: ", $_POST["email"],"<br>";
    }else
    { ?>

        <div class="alert alert-warning">
            <strong>Warning!</strong> Please fill the form.</div>
    <?
    }
    ?>
<body>






<div class="container">
    <div class="row">

        <div class="col-md-12">
            <div class="well">
                <h1 class="text-center"> My Contact</h1>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-4">

            <div class="well">

                <img src="ami.jpg" class="img-responsive" alt="Responsive image">
                <br /> <br />
                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="home.html">Home</a></li>
                    <li class="active"><a href="profile.html">Profile</a></li>
                    <li class="active"><a href="portfolio.html">Portfolio</a></li>
                    <li class="active"><a href="contacts.html">Contact Me</a></li>
                </ul>

            </div>

        </div>



        <div class="col-md-8">
            <div class="well">



                        <h2 align="center">Contact Me</h2>
                       <h2 align="center">For any issue, you can contact.</h2>

                    </br></br>

                <form action= "registeraction.php" method="post"> </br> </br>
                    My name:<input type="text" name="name"/> </br> </br>
                    E-mail Id:<input type="text" name="email"/> </br> </br>
                    Mobile :<input type="text" name="mobile"/> </br> </br>
                    Country :<input type="text" name="country"/> </br> </br>
                    <button type="submit">submit</button>
                </form>






                            </br><br /><br /><br />

            </div><br />


        </div>
    </div>

</div>



</body>
</html>