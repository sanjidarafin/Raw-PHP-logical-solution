<html>
<head>
</head>

<?php
if(isset($_GET['name']) && $_GET["name"] !== " ")
{
   echo "Welcome ",$_GET["name"],"<br>";

    //echo "Your email is: ", $_GET["email"],"<br>";



    $sentence =$_GET['name'];
    echo $sentence."<br>";
    $words= explode(" ","$sentence");
    $frequency= array(" ");
    $i=0;
    $count=count($words);
    foreach($words as $word){

        if(array_key_exists($word,$frequency)){

            $frequency[$word]++;
        }
        else {
            $frequency[$word]=1;
        }
    }
    foreach($frequency as $key=>$value){
        echo "$key=>$value";

    }







}else
{
    echo "Please filll in the form";
}
?>
<body>

<form action= "frequency.php" method="get">
    My sentence:<input type="text" name="name" value= ""/> </br>

    <button type="submit">submit</button>
</form>




</body>
</html>