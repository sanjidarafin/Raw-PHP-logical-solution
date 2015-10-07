<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["name"])) {
echo  $nameErr = "Name is required<br>";
} else {
$Name = $_POST["name"] ;
    echo $Name;
}

if (empty($_POST["email"])) {
echo  $nameErr = "email is required<br>";
} else {
$email = $_POST["email"] ;
    echo $email;
}



if (empty($_POST["mobile"])) {
echo $nameErr = "Mobile is required<br>";
} else {
$mobile =md5( $_POST["mobile"]);
    echo $mobile;
}

if (empty($_POST["country"])) {
echo $nameErr = "Country is required<br>";
} else {
$country = $_POST["country"] ;
}
}
?>