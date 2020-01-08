<?php

session_start();

if($_SESSION['username'] == "")
{
    header("Location: register-page.php");
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
    <link rel="shortcut icon" type="image/png" href="img/chilli-pepper.png">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <link rel="stylesheet" href="css/animation.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<style>
    /* Font thai kanit */
    @import 'https://fonts.googleapis.com/css?family=Kanit';

    body {
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

    #myBtn {
        display: none;
        position: fixed;
        bottom: 5px;
        right: 30px;
        z-index: 99;
        border: none;
        outline: none;
        background-color: #bf0000;
        color: white;
        cursor: pointer;
        padding: 15px;
        border-radius: 50%;
        font-size: 18px;
    }

    #myBtn:hover {
        background-color: red;
    }

</style>

<body class="animated fadeIn slower" style="font-family: Kanit">

    <div class="w3-top">
        <div class="w3-bar w3-white w3-padding w3-card">
            <a href="index.php" class="w3-display-middle" style="letter-spacing:4px;">พริก <img src="img/chilli-pepper.png"> เผา</a>
            <!-- Right-sided navbar links. Hide them on small screens -->
            <div class="w3-bar-item w3-hide-small w3-bar-item">
                <div onclick="menu_icon_hamberger_func(this)">
                    <div onclick="w3_open()">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </div>
                </div>
            </div>
            <div class="w3-display-right w3-padding-large"><a href="edit-profiles-page.php" class="w3-btn"><?php echo $result['username'];?></a><a href="logout-page.php" class="w3-btn">ออกจากระบบ</a>
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
        <a href="#about" class="w3-bar-item w3-button w3-hover-red">เกี่ยวกับเรา</a>
        <a href="#contact" class="w3-bar-item w3-button w3-hover-red">ติดต่อเรา</a>
        <a href="#faqs" class="w3-bar-item w3-button w3-hover-red">คำถามที่พบบ่อย</a>
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
    <!-- End Sildebar -->

    <!-- Content -->
    <div class="container content" style="margin-top: 100px; margin-bottom: 50px">
        <div class="w3-row">
            <div class="w3-col s6 w3-white w3-center">
                <img src="img/img__papaya__salad.png" style="width: 475px; height: 475px">
            </div>
            <div class="w3-col s6 w3-white ">
                <h3>ยำปลาหมึกกรอบ</h3>
                <h4>ส่วนผสม</h4>
                <ul>
                    <li>ปลาหมึกแห้ง (Salted Eggs Yolk) - 150g</li>
                    <li>พริก (Chilli) - 50g</li>
                    <li>คื่นช่าย (Celery) - 20g</li>
                    <li>หอมแดงซอย (Sliced Shallots) - 40g</li>
                    <li>น้ำปลาร้า (Fermented Fish Sauce) - 1/4cup</li>
                    <li>น้ำปลา (Fish Suace) - 1tbsp</li>
                    <li>น้ำมะนาว (Lime Juice) - 6tbsp</li>
                    <li>น้ำตาล (Sugar) - 2tbsp</li>
                </ul>
                <h4>วิธีทำ</h4>
                <ol>
                    <li>ใส่น้ำปลา น้ำมะนาว น้ำปลาร้า หอมซอย คื่นช่าย พริกลงไปในภาชนะคนส่วนผสมให้เข้ากัน</li>
                    <li>นำปลาหมึกแห้งไปหั่นเป็นชิ้นพอดีคำ แล้วนำไปทอดให้สุก</li>
                    <li>ผสมปลาหมึแห้งและคลุกเคล้าเครื่องปรุงเข้าด้วยกัน</li>
                    <li>จัดใส่จานพร้อมขึ้นเสริฟพร้อมกับเบียร์เย็นๆซักแก้ว</li>
                </ol>
                <div class="w3-col s1 w3-white">
                    <!-- Facebook -->
                    <a href="http://www.facebook.com/sharer.php?u=https://simplesharebuttons.com" target="_blank">
                        <img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" style="sidth: 30px; height: 30px" />
                    </a>
                </div>
                <div class="w3-col s1 w3-white">
                    <!-- Google+ -->
                    <a href="https://plus.google.com/share?url=https://simplesharebuttons.com" target="_blank">
                        <img src="https://simplesharebuttons.com/images/somacro/google.png" alt="Google" style="sidth: 30px; height: 30px" />
                    </a>
                </div>
                <div class="w3-col s1 w3-white">
                    <!-- Twitter -->
                    <a href="https://twitter.com/share?url=https://simplesharebuttons.com&amp;text=Simple%20Share%20Buttons&amp;hashtags=simplesharebuttons" target="_blank">
                        <img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" style="sidth: 30px; height: 30px" />
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll to top button -->
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

    <!-- Footer -->
    <footer class="w3-padding w3-white w3-card " style="margin-bottom: 0">
        <p class="w3-center" title="prikpao">&copy;2019 Prik Pao, All rights reserved</p>
    </footer>

    <script>
        function w3_open() {
            document.getElementById("mySidebar").style.display = "block";
        }

        function w3_close() {
            document.getElementById("mySidebar").style.display = "none";
        }

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("myBtn").style.display = "block";
            } else {
                document.getElementById("myBtn").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }
        
        $(document).ready(function() {
            // Add smooth scrolling to all links
            $("a").on('click', function(event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 1200, function() {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });
        });

    </script>

    <script type="text/javascript" src="js/js.js"></script>

</body>

</html>


<?php

mysqli_close($con);

?>