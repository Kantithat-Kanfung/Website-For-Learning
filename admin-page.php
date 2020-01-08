<?php

session_start();

if($_SESSION['username'] == "")
{
    header("Location: login-page.php");
}
if($_SESSION['status'] == "ADMIN")
{
    //
}

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

mysqli_set_charset($con,"utf8");

$sql = mysqli_query($con, "SELECT * FROM users WHERE username = '".$_SESSION['username']."' ");

$result = mysqli_fetch_array($sql, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="th">
<head>
    <title>Prik Pao - อาหารเผ็ดร้อนฉบับคนไทย</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="shortcut icon" type="image/png" href="img/favicon.ico"> -->
    <link rel="shortcut icon" type="image/png" href="img/chilli-pepper.png">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <link rel="stylesheet" href="css/animation.css" type="text/css">
</head>
<body>
    
    <h2>Welcome to Admin Page!</h2> 
    <h3>Hello, <mark><?php echo $result['username'];?></mark> You are Admin the this is for website.</h3>

    <a href="edit-profiles-page.php">Edit Profiles</a>
    <br><br>
    <a href="logout-page.php">Logout</a>
    
</body>
</html>
    
<?php

mysqli_close($con);

?>
