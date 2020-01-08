<!DOCTYPE html>
<html lang="th">

<head>
    <title>Prik Pao - อาหารเผ็ดร้อนฉบับคนไทย</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="img/chilli-pepper.png">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <link rel="stylesheet" href="css/animation.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>
    /* Font thai kanit */
    @import 'https://fonts.googleapis.com/css?family=Kanit';

    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: "Kanit", sans-serif;
    }

    /* Start! Navigator bar (sit on top) */

    .menu-icon-hamberger {
        display: inline-block;
        cursor: pointer;
    }

    a {
        text-decoration: none;
    }

    .bar1,
    .bar2,
    .bar3 {
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

    * {
        box-sizing: border-box;
    }

    /* Create three equal columns that floats next to each other */
    .column {
        float: left;
        width: 33.33%;
        padding: 10px;
        height: 300px;
        /* Should be removed. Only for demonstration */
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    .column:hover {}

    .icon-bar,
    a {
        display: inline;
        margin-left: 10px;
    }

    .facebook:hover {
        color: #3B5998;
    }

    .twitter:hover {
        color: #55ACEE;
    }

    .google:hover {
        color: #dd4b39;
    }

</style>

<body class="animated fadeIn slower">

    <!-- Navbar (sit on top)-->
    <div class="w3-top">
        <div class="w3-bar w3-white w3-padding w3-card">
            <a href="index.php" class="w3-display-middle" style="letter-spacing:4px;">พริก <img src="img/chilli-pepper.png"> เผา</a>
            <!-- Right-sided navbar links. Hide them on small screens -->
            <div class="w3-bar-item w3-hide-small">
                <div onclick="menu_icon_hamberger_func(this)">
                    <div onclick="w3_open()">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </div>
                </div>
            </div>
            <div class="w3-display-right w3-padding-large"><a href="login-page.php" class="w3-btn">เข้าสู่ระบบ</a><a href="register-page.php" class="w3-btn">สมัครสมาชิก</a>
            </div>
        </div>
    </div>

    <!-- Sidebar -->
    <div class="w3-sidebar w3-light-white w3-bar-block w3-center w3-animate-left" style="width:20%; display:none" id="mySidebar">
        <button class="w3-bar-item w3-button w3-large w3-hover-red" onclick="w3_close()">ปิด &times;</button>
        <h3 class="w3-bar-item w3-center">เมนูอาหาร</h3>
        <a href="menu-fried-page.php" class="w3-bar-item w3-button w3-hover-red">ผัด</a>
        <a href="menu-boiled-page.php" class="w3-bar-item w3-button w3-hover-red">ต้ม</a>
        <a href="menu-mix-page.php" class="w3-bar-item w3-button w3-hover-red">ยำ</a>
        <a href="menu-fried-2-page.php" class="w3-bar-item w3-button w3-hover-red">ทอด</a>
        <a href="menu-grill-page.php" class="w3-bar-item w3-button w3-hover-red">ปิ้งย่าง</a>
        <hr>
        <a href="home-page.php" class="w3-bar-item w3-button w3-hover-red">หน้าแรก</a>
        <a href="#about.php" class="w3-bar-item w3-button w3-hover-red">เกี่ยวกับเรา</a>
        <a href="#contact.php" class="w3-bar-item w3-button w3-hover-red">ติดต่อเรา</a>
        <a href="#faqs.php" class="w3-bar-item w3-button w3-hover-red">คำถามที่พบบ่อย</a>
        <hr>
        <!-- I got these buttons from simplesharebuttons.com -->
        <div id="share-buttons">
            <!-- Facebook -->
            <a href="http://www.facebook.com/sharer.php?u=https://simplesharebuttons.com" target="_blank">
                <div class="icon-bar">
                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                </div>
            </a>
            <!-- Google+ -->
            <a href="https://plus.google.com/share?url=https://simplesharebuttons.com" target="_blank">
                <div class="icon-bar">
                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                </div>
            </a>
            <!-- Twitter -->
            <a href="https://twitter.com/share?url=https://simplesharebuttons.com&amp;text=Simple%20Share%20Buttons&amp;hashtags=simplesharebuttons" target="_blank">
                <div class="icon-bar">
                    <a href="#" class="google"><i class="fa fa-google"></i></a>
                </div>
            </a>
        </div>
    </div>

    <!-- Header -->
    <div class="w3-container" style="margin-top: 50px">
        <h2 class="w3-center" style="margin: 50px 0 20px 0">เมนูประเภท - ผัด</h2>
        <!-- Grid layout -->
        <div class="row">
            <div class="column w3-center" style="background-color:#fff;">
                <!-- ผัดเผ็ดปลาไหล -->
                <a href="#fried-frog.php">
                    <h3 class="">ผัดเผ็ดปลาไหล</h3>
                    <img src="img/img-fried-page-2/Img__fried__eel.PNG" style="width: 300px; height: 300px" alt="ผัดเผ็ดปลาไหล">
                </a>
                <p>อาหารประเภท : ผัด</p>
                <p>อัพเดทเมื่อวันที่ : 7-พฤษภาคม-2562</p>
            </div>
            <!-- กะเพราเป็ดย่าง -->
            <div class="column w3-center" style="background-color: #fff;">
                <a href="#Roasted-pork.php">
                    <h3>กะเพราเป็ดย่าง</h3>
                    <img src="img/img-fried-page-2/Img__fried__durk.PNG" style="width: 300px; height: 300px" alt="กะเพราเป็ดย่าง">
                </a>
                <p>อาหารประเภท : ผัด</p>
                <p>อัพเดทเมื่อวันที่ : 7-พฤษภาคม-2562</p>
            </div>
            <!-- ผัดเผ็ดหนูนา-->
            <div class="column w3-center" style="background-color: #fff;">
                <a href="#Boiled-chicken-legs.php">
                    <h3>ผัดเผ็ดหนูนา</h3>
                    <img src="img/img-fried-page-2/Img__fried__mouse.PNG" style="width: 300px; height: 300px" alt="ผัดเผ็ดหนูนา">
                </a>
                <p>อาหารประเภท : ผัด</p>
                <p>อัพเดทเมื่อวันที่ : 7-พฤษภาคม-2562</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="w3-bottom w3-light-white w3-card">
        <p class="w3-center" title="prikpao">&copy;2019 Prik Pao, All rights reserved</p>
    </footer>

    <script>
        function w3_open() {
            document.getElementById("mySidebar").style.display = "block";
        }

        function w3_close() {
            document.getElementById("mySidebar").style.display = "none";
        }

    </script>

    <script type="text/javascript" src="js/js.js"></script>

</body>

</html>
