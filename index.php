<!DOCTYPE html>
<html>

<head>
    <title>Prik Pao - สำรวจอาหารที่คุณชื่นชอบ</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="img/chilli-pepper.png">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/animation.css" type="text/css">
</head>

<style>
    /* Font thai kanit */
    @import 'https://fonts.googleapis.com/css?family=Kanit';

    body {
        font-family: "Kanit", sans-serif;
    }

    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        font-size: 17px;
        font-family: Arial;
        font-family: "Kanit", "Allerta";
    }

    a {
        text-decoration: none;
    }

    #myVideo {
        position: fixed;
        right: 0;
        bottom: 0;
        min-width: 100%;
        min-height: 100%;
    }

    .link-buttom-left {
        position: fixed;
        bottom: 0;
        color: #f1f1f1;
        width: 100%;
        padding: 10px;
    }

</style>

<body>
    <!-- video backgruond -->
    <video loop muted autoplay id="myVideo">
        <source src="video/video-bg.mp4" type="video/mp4">
    </video>
    <div class="w3-display-container w3-text-white">
        <div class="w3-display-topleft w3-padding-large w3-xlarge"><a href="index.php">พริก <img src="img/chilli-pepper.png"> เผา</a></div>
        <div class="w3-display-topright w3-padding-large "><a href="login-page.php" class="w3-btn">เข้าสู่ระบบ</a><a href="register-page.php" class="w3-btn">สมัครสมาชิก</a></div>
    </div>
    <div class="w3-display-middle  w3-text-white">
        <label class="w3-xxxlarge">
            <p>เริ่มต้นค้นหาสูตรอาหารของคุณ</p>
        </label><br><br>
        <div class="w3-xlarge w3-display-bottommiddle"><a href="home-page.php" class="w3-btn  w3-text-black w3-round-xxlarge w3-hover-sand" style="background-color: #fff">คลิกเข้าสู่หน้าเว็บไซต์</a></div>
    </div>
    <div class="link-buttom-left">
        <p class=" w3-left">Powered by <a href="mailto:kantithat.kanfung@gmail.com">Student</a></p>
        <p class=" w3-right">&copy;2019 Prik Pao, All rights reserved</p>
    </div>
    <!-- script -->
    <script src="/animsition-master/dist/css/animsition.min.css"></script>

</body>
</html>
