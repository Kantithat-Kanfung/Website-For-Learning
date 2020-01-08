<!DOCTYPE html>
<html lang="th">
<head>
    <title>Prik Pao - อาหารเผ็ดร้อนฉบับคนไทย</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="img/chilli-pepper.png">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <link rel="stylesheet" href="css/css-register-page.css" type="text/css">
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


 a {
     text-decoration: none;
 }

hr {
     width: 20%;
     height: 2px;
     margin-left: 95px;
     background-color: #fff;
 }
 .input-container {
     display: -ms-flexbox;
     /* IE10 */
     display: flex;
     width: 100%;
     margin-bottom: 40px;
     text-align: center;
 }

 ::placeholder {
     color: #fff;
     opacity: 1;
     /* Firefox */
 }

 :-ms-input-placeholder {
     /* Internet Explorer 10-11 */
     color: #fff;
 }

 ::-ms-input-placeholder {
     /* Microsoft Edge */
     color: #fff;
 }

 .w3-input {
     color: #fff;
     background-color: transparent;
 }

 .w3-input,
 input[type="text"] {
     text-align: center;
 }

 .w3-button {
     width: 100%;
     color: #000;
     background-color: #F5F5DC;
 }
</style>

<body>
    <!-- video background -->
    <video loop muted autoplay id="myVideo">
        <source src="video/video-bg.mp4" type="video/mp4">
        <p>Video not supported in this browser</p>
    </video>
    <!-- logo -->
    <div class="bgimg w3-display-container w3-text-white">
        <div class="w3-display-topleft w3-padding-large w3-xlarge"><a href="index.php">พริก <img src="img/chilli-pepper.png"> เผา</a></div>
        <div class="w3-display-topright w3-padding-large "><a href="login-page.php" class="w3-btn">เข้าสู่ระบบ</a><a href="register-page.php" class="w3-btn">สมัครสมาชิก</a></div>
    </div>
    <div class="w3-display-middle  w3-text-white">
        <form action="check-register.php" method="post">
            <h1 class="w3-xxlarge" style="text-align: center">สมัครสมาชิก</h1>
            <p style="text-align: center">(ค้นหาสูตรอาหารที่คุณต้องการฟรี)</p>
            <hr>
            <div class="input-container">
                <input class="w3-input w3-border" type="text" placeholder="-- ชื่อผู้ใช้ --" name="username" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$" required>
            </div>

            <div class="input-container">
                <input class="w3-input w3-border" type="email" placeholder="-- อีเมล --" name="email" required>
            </div>

            <div class="input-container">
                <input class="w3-input w3-border" type="password" placeholder="-- รหัสผ่าน --" name="password" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$" required>
            </div>
            <button type="submit" class="w3-button w3-border w3-round-xxlarge w3-hover-sand">ตกลง</button>
        </form>
    </div>
    <div class="link-buttom-left">
        <p class=" w3-left">Powered by <a href="mailto:kantithat.kanfung@gmail.com">Student</a></p>
        <p class=" w3-right">&copy;2019 Prik Pao, All rights reserved</p>
    </div>
</body>
</html>
