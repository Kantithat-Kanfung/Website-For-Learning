<?php

session_start();

if($_SESSION['username'] == "")
{
    header("Location: login-page.php");
}

/*
if($_SESSION['status'] == "USER")
{
    //
}
*/

$con = mysqli_connect("localhost","id9579798_prikpao","0653391533","id9579798_prikpao");

/*
if(mysqli_connect_errno())
{
    echo "Can not be connect database!";
    echo mysqli_connect_error();
}
else
{
    echo "Database connected! <br>";
}
*/

if($_POST["txtPassword"] != $_POST["txtConPassword"])
{
    echo "Password nor Match!";
    exit();
}

mysqli_set_charset($con,"utf8");

$sql = mysqli_query($con, "UPDATE users SET password = '".trim($_POST['txtPassword'])."' WHERE  username = '".$_SESSION["username"]."' ");

//$result = mysqli_fetch_array($sql, MYSQLI_ASSOC);

        
if($_SESSION["status"] == "ADMIN")
{
    header("Location: admin-page.php");
}
else
{
    header("Location: users-page.php");
}
    

?>

<?php

mysqli_close($con);

?>
