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
    <link rel="shortcut icon" type="image/png" href="img/chilli-pepper.png">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <link rel="stylesheet" href="css/css-home-page.css" type="text/css">
    <link rel="stylesheet" href="css/animation.css" type="text/css">
</head>
<style>
 /* Font thai kanit */
@import 'https://fonts.googleapis.com/css?family=Kanit';
    
body, h1, h2, h3, h4, h5, h6, p{
    font-family: "Kanit", sans-serif;
}

/* Start! Navigator bar (sit on top) */
    
.menu-icon-hamberger {
    display: inline-block;
    cursor: pointer;
}

a{
    text-decoration: none;
}

.bar1, .bar2, .bar3 {
    width: 35px;
    height: 3px;
    background-color: #333;
    margin: 3px 0;
    transition: 0.4s;
}

.change .bar1 {
    -webkit-transform: rotate(-45deg) translate(-9px);
    transform: rotate(-45deg) translate(-9px, 7px);
}

.change .bar2 {
    opacity: 0;
}

.change .bar3 {
    -webkit-transform: rotate(45deg) translate(-8px);
    transform: rotate(45deg) translate(-1px, 0px);
}
    
table, th, td {
    border: 1px solid black;
    text-align: center;
    border-collapse: collapse;
}


</style>

<body class="animated fadeIn slower" style="font-family: Kanit">

    <div class="w3-top">
        <div class="w3-bar w3-white w3-padding w3-card">
            <a href="index.php" class="w3-display-middle" style="letter-spacing:4px;">ข้อมูลส่วนตัว</a>
            <!-- Right-sided navbar links. Hide them on small screens -->
            <div class="w3-bar-item w3-hide-small w3-bar-item">
                <div onclick="menu_icon_hamberger_func(this)">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
            </div>
            <div class="w3-display-right w3-padding-large"><a href="logout-page.php" class="w3-btn">ออกจากระบบ</a>
            </div>
        </div>
    </div>

    <div class="w3-container w3-display-middle">
        <form name="form1" method="post" action="save-profiles.php">
    <div class="w3-center">
        <h4>แก้ไขข้อมูลส่วนตัว</h4><br>
    </div>
    <table width="400" border="1" style="width: 400px">
        <tbody>
            <tr>
                <td width="125"> &nbsp;ไอดี</td>
                <td width="180">
                    <?php echo $result["id"];?>
                </td>
            </tr>
            <tr>
                <td> &nbsp;ชื่อผู้ใช้</td>
                <td>
                    <?php echo $result["username"];?>
                </td>
            </tr>
            <tr>
                <td> &nbsp;สถานะ</td>
                <td>
                    <?php echo $result["status"];?>
                </td>
            </tr>
            <tr>
                <td> &nbsp;อีเมล</td>
                <td>
                    <?php echo $result["email"];?>
                </td>
            </tr>
            <tr>
                <td> &nbsp;รหัสผ่าน</td>
                <td><input name="txtPassword" type="password" id="Psw1" value="<?php echo $result["password"];?>" style="text-align: center">
                </td>
            </tr>
            <tr>
                <td> &nbsp;ยืนยันรหัสผ่านอีกครั้ง</td>
                <td><input name="txtConPassword" type="password" id="Psw2" value="<?php echo $result["password"];?>" style="text-align: center">
                </td>
            </tr>
        </tbody>
    </table>
    <div class="w3-center">
        <h6>Show Password</h6>
        <input type="checkbox" onclick="checkPasswordOne()">
        <input type="checkbox" onclick="checkPasswordTwo()">
    </div>
    <br>
    <div class="w3-center"><input type="submit" name="Submit" value="บันทึกข้อมูล"></div>
</form>
</div>
    
      <!-- Footer -->
    <footer class="w3-bottom w3-light-white w3-card">
        <p class="w3-center" title="prikpao">&copy;2019 Prik Pao, All rights reserved</p>
    </footer>

    <script type="text/javascript" src="js/js.js"></script>
    
    <script>
        // edit-profiles-pge.php check password
        function checkPasswordOne() {
            var x = document.getElementById("Psw1");

            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }

        // edit-profiles-pge.php check password
        function checkPasswordTwo() {
            var x = document.getElementById("Psw2");

            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }

    </script>

</body>

</html>

<?php

mysqli_close($con);

?>
