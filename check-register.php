<?php

$con = mysqli_connect("localhost","id9579798_prikpao","0653391533","id9579798_prikpao");

if(mysqli_connect_errno())
{
    echo "Can not be connect database!";
    echo mysqli_connect_error();
}
else
{
    header("Location: login-page.php");
}

mysqli_set_charset($con,"utf8");

$usrnm  = $_POST['username'];
$email  = $_POST['email'];
$psw  = $_POST['password'];

$usr = mysqli_query($con, "SELECT * FROM users WHERE username = '$usrnm'");

$result = mysqli_num_rows($usr);

if($result>0)
{
    header("Location: error-register-page.php");
}
else
{
    $sql = mysqli_query($con, "INSERT users (username , email, password) VALUES ('$usrnm', '$email', '$psw')");
    
    if(mysqli_query($con , $sql))
    {
    echo 'Not Inserted';
    }
    else
    {
        header("Location: login-page.php");
    }

}

?>