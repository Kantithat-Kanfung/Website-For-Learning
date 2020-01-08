<?php

session_start();

$con = mysqli_connect("localhost","id9579798_prikpao","0653391533","id9579798_prikpao");

if(mysqli_connect_errno())
{
    echo "Can not be connect database!";
    echo mysqli_connect_error();
}
else
{
    header("Location: users-page.php");
}

mysqli_set_charset($con,"utf8");

$username  = $_POST['username'];
$password  = $_POST['password'];

$sql = mysqli_query($con, "SELECT * FROM users WHERE username = '$username' AND password = '$password'");

$result = mysqli_fetch_array($sql, MYSQLI_ASSOC);

if(mysqli_fetch_array($con , $result))
{
    header("Location: u-not-login.php");
}
else
{   
    $_SESSION["username"] = $result["username"];
    $_SESSION["status"]   = $result["status"];
    
    session_write_close();
    
    if($result["status"] == "ADMIN")
    {
        header("Location: admin-page.php");
    }
    else if($username == $result["username"] and $result["status"] == "USER")
    {
        header("Location: users-page.php");
    }
    else
    {
        header("Location: error-login-page.php");
    }
}

mysqli_close($con);

?>