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

    @media only screen and (max-width:800px) {

        .w3-top{
            width: 100%
        }
    }

    @media only screen and (max-width:500px) {

        /* For mobile phones: */
        .menu,
        .main,
        .right {
            width: 100%;
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

    <!-- Header -->
    <div class="w3-container" style="margin-top: 50px">
        <h2 class="w3-center" style="margin: 50px 0 50px 0">สำรวจอาหารที่คุณชื่นชอบ</h2>
        <!-- Grid layout -->
        <div class="row">
            <div class="column w3-center" style="background-color:#fff;">
                <!-- กบทอดกระเทียม -->
                <a href="fried-frog-page.php">
                    <h3 class="">กบทอดกระเทียม</h3>
                    <img src="img/img__fried_frog.png" style="width: 300px; height: 300px">
                </a>
                <p>อาหารประเภท : ทอด</p>
                <p>อัพเดทเมื่อวันที่ : 7-พฤษภาคม-2562</p>
            </div>
            <!-- สามชั้นคั่วกลิ้ง -->
            <div class="column w3-center" style="background-color: #fff;">
                <a href="roasted-pork-page.php">
                    <h3>สามชั้นคั่วกลิ้ง</h3>
                    <img src="img/img__Roasted__pork.png" style="width: 300px; height: 300px">
                </a>
                <p>อาหารประเภท : ผัด</p>
                <p>อัพเดทเมื่อวันที่ : 7-พฤษภาคม-2562</p>
            </div>
            <!-- ซุปเปอร์ตีนไก่ -->
            <div class="column w3-center" style="background-color: #fff;">
                <a href="soiled-chicken-legs-page.php">
                    <h3>ซุปเปอร์ตีนไก่</h3>
                    <img src="img/img__Boiled__%20chicken__%20legs.png" style="width: 300px; height: 300px">
                </a>
                <p>อาหารประเภท : ต้ม</p>
                <p>อัพเดทเมื่อวันที่ : 7-พฤษภาคม-2562</p>
            </div>
        </div>
        <div class="w3-center" style="margin: 200px 0 50px 0"></div>
        <!-- Grid layout -->
        <div class="row">
            <div class="column w3-center" style="background-color:#fff;">
                <!-- ยำลูกชิ้น -->
                <a href="spicy-fish-ball.php">
                    <h3 class="">ยำลูกชิ้น</h3>
                    <img src="img/img__Spicy__fish__%20ball.png" style="width: 300px; height: 300px" alt="ยำลูกชิ้น img__Spicy__fish__ball">
                </a>
                <p>อาหารประเภท : ยำ</p>
                <p>อัพเดทเมื่อวันที่ : 7-พฤษภาคม-2562</p>
            </div>
            <!-- ตำวุ้นเส้นกุ้งสด -->
            <div class="column w3-center" style="background-color: #fff;">
                <a href="vermicelli-salad-page.php">
                    <h3>ตำวุ้นเส้นกุ้งสด</h3>
                    <img src="img/img__vermicelli__salad.png" style="width: 300px; height: 300px" alt="ตำวุ้นเส้นกุ้งสด img__vermicelli__salad">
                </a>
                <p>อาหารประเภท : ยำ</p>
                <p>อัพเดทเมื่อวันที่ : 7-พฤษภาคม-2562</p>
            </div>
            <!-- ต้มแซ่บเอ็นแก้ว -->
            <div class="column w3-center" style="background-color: #fff;">
                <a href="spicy-pork-tendon-soup-page.php">
                    <h3>ต้มแซ่บเอ็นแก้ว</h3>
                    <img src="img/img__Spicy__%20pork__%20tendon__%20soup.png" style="width: 300px; height: 300px" alt="ต้มแซ่บเอ็นแก้ว mg__Spicy__pork__tendon__%20soup">
                </a>
                <p>อาหารประเภท : ต้ม</p>
                <p>อัพเดทเมื่อวันที่ : 7-พฤษภาคม-2562</p>
            </div>
        </div>
        <div class="w3-center" style="margin: 200px 0 50px 0"></div>
        <!-- Grid layout -->
        <div class="row">
            <div class="column w3-center" style="background-color:#fff;">
                <!-- หมูมะนาว -->
                <a href="pork-with-lemon-page.php">
                    <h3 class="">หมูมะนาว</h3>
                    <img src="img/img__Pork__with__%20lemon.png" style="width: 300px; height: 300px" alt="หมูนึ่งมะนาว หมูอบมะนาว img__Pork__with__lemon">
                </a>
                <p>อาหารประเภท : นึ่ง</p>
                <p>อัพเดทเมื่อวันที่ : 7-พฤษภาคม-2562</p>
            </div>
            <!-- ยำกุ้งแห้ง -->
            <div class="column w3-center" style="background-color: #fff;">
                <a href="spicy-shrimp-salad.php">
                    <h3>ยำกุ้งแห้ง</h3>
                    <img src="img/img__%20Spicy__shrimp__salad.png" style="width: 300px; height: 300px" alt="ยำกุ้งแห้ง img__Spicy__shrimp__salad">
                </a>
                <p>อาหารประเภท : ยำ</p>
                <p>อัพเดทเมื่อวันที่ : 7-พฤษภาคม-2562</p>
            </div>
            <!-- ส้มตำปูปลาร้า -->
            <div class="column w3-center" style="background-color: #fff;">
                <a href="papaya-salad-page.php">
                    <h3>ยำปลาหมึกกรอบ</h3>
                    <img src="img/img__papaya__salad.png" style="width: 300px; height: 300px" alt="ส้มตำปูปลาร้า img__papaya__salad.png">
                </a>
                <p>อาหารประเภท : ยำ</p>
                <p>อัพเดทเมื่อวันที่ : 7-พฤษภาคม-2562</p>
            </div>
        </div>
    </div>

    <!-- End Header -->

    <!-- About -->
    <div class="w3-container w3-center about" style="margin: 250px 0 50px 0">
        <h2 id="about">เกี่ยวกับเรา</h2>
        <p>เว็บไซต์นี้สร้างขึ้นมาเพื่อการศึกษาเท่านั้น</p>
        <div class="w3-row w3-container" style="margin: 50px 0 50px 0">
            <div class="w3-col s6 w3-white w3-center">
                <div class="w3-card">
                    <img src="img/profile-student.jpg" alt="profile student" style="width:45.5%">
                    <h1>Kantithat Kanfung</h1>
                    <p class="title">(Student)</p>
                    <p>Rajabhat MahaSarakham University</p>
                    <div style="margin: 24px 0;">
                        <a href="https://www.facebook.com/people/Kantithats-Kanfung/"><i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/search?q=henrypirlo211&src=typd"><i class="fa fa-twitter"></i></a>
                        <a href="mailto:kantithat.kanfung@gmail.com"><i class="fa fa-google"></i></a>
                    </div>
                </div>
            </div>
            <div class="w3-col s6 w3-white w3-center ">
                <h4>PROFILE</h4>
                <hr style="height:2.5px;width:10%;margin-left: 45%;border:none;color:#333;background-color:#333;" />
                <!-- Qualification -->
                <div class="w3-col s6 w3-border-right">
                    <h6 style="color: red">QUALIFICATION</h6>
                    <p>Basic HTML</p>
                    <p>Basic CSS</p>
                    <p>Basic SQL</p>
                    <p>Basic Python Programming</p>
                </div>
                <!-- Interests -->
                <div class="w3-col s6 ">
                    <h6 style="color: red">INTERESTS</h6>
                    <p>Web Design</p>
                    <p>Graphic Design</p>
                    <p>Web Responsive</p>
                    <p>Digital Image Processing</p>
                </div>
                <!-- Experiance -->
                <h5 style="color: red">EXPERIENCE</h5>
                <div class="w3-col s6 w3-dark-sand">
                    <h6>Thesis</h6>
                    <p>ตู้ยาสำหรับผู้บกพร่องทางการมองเห็น</p>
                    <a href="https://www.youtube.com/watch?v=-zHe8-u8GrM"><i class='fas fa-file' style='font-size:16px'></i></a>
                </div>
                <div class="w3-col s6 w3-white">
                    <h6>Internship</h6>
                    <p>โปรแกรมนับสี (Counting Color Program)</p>
                    <a href="https://www.youtube.com/watch?v=ry0hAKvxdFM"><i class='fas fa-file' style='font-size:16px'></i></a>
                </div>
                <!-- Referances -->
                <h5 style="color: red">REFERANCES</h5>
                <div class="w3-col s12 w3-white w3-center">
                    <p>Prof.Songpol Namkun, Rajaphat Mahasarakham University, 01-23456789</p>
                    <p>Prof.Wuttikon Anuntasirichai, Rajaphat Mahasarakham University, 01-23456789</p>

                </div>
            </div>
        </div>
    </div>

    <!-- Contact -->
    <div class="w3-container w3-center contact" style="margin: 50px 0 50px 0">
        <h2 id="contact">ติดต่อเรา</h2>
        <p style="margin: 0 0 50px 0">เว็บไซต์นี้สร้างขึ้นมาเพื่อการศึกษาเท่านั้น</p>
        <div class="w3-container">
            <div class="w3-row">
                <div class="w3-col s6 w3-White w3-center">
                    <!-- Google Map -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3831.4005234225574!2d103.27023951451508!3d16.19983614022829!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2c2be3336a2b1d73!2z4Liq4Liz4LiZ4Lix4LiB4Lin4Li04LiX4Lii4Lia4Lij4Li04LiB4Liy4Lij4LmB4Lil4Liw4LmA4LiX4LiE4LmC4LiZ4LmC4Lil4Lii4Li14Liq4Liy4Lij4Liq4LiZ4LmA4LiX4LioIOC4oeC4q-C4suC4p-C4tOC4l-C4ouC4suC4peC4seC4ouC4o-C4suC4iuC4oOC4seC4j-C4oeC4q-C4suC4quC4suC4o-C4hOC4suC4oSA6IEFSQ00sIFJNVSwgQVJJVA!5e0!3m2!1sth!2sth!4v1557400256191!5m2!1sth!2sth" width="600" height="390" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="w3-col s6 w3-White">
                    <!-- Users Comments -->
                    <form class="w3-container w3-card-4 " action="check-comm-page.php" method="post">
                        <h2 class="w3-text-black">ข้อเสนอแนะ</h2>
                        <p>แสดงความคิดเห็นของคุณเกี่ยวกับเว็บไซต์นี้</p>
                        <p><label class="w3-text-black"><b>ชื่อ</b></label><input class="w3-input w3-border" name="fname" type="text" style="text-align: center" required></p>
                        <p><label class="w3-text-black"><b>นามสกุล</b></label> <input class="w3-input w3-border" name="lname" type="text" style="text-align: center" required></p>
                        <p><label class="w3-text-black"><b>ความคิดเห็นเกี่ยวกับเรา</b></label> <input class="w3-input w3-border" name="comments" type="text" style="text-align: center" required></p>
                        <p><button class="w3-btn w3-red" type="submit">เรียบร้อย</button></p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact -->
    <div class="w3-container w3-center contact" style="margin: 100px 0 20px 0">
        <h4 id="contact">รายละเอียด</h4>
        <div class="w3-container">
            <div class="w3-row">
                <div class="w3-col s6 w3-White w3-center">
                    <!-- Resume -->
                    <h6>Resume</h6>
                    <a href="files/Resume-Student.pdf" download>
                        <i class='fas fa-download' style='font-size:26px;color:green'></i>
                    </a>
                    <p>ดาวน์โหลด</p>
                </div>
                <div class="w3-col s6 w3-White">
                    <!-- Resume -->
                    <h6>Transcript</h6>
                    <a href="files/Transcript-Student.pdf" download>
                        <i class='fas fa-download' style='font-size:26px;color:green'></i>
                    </a>
                    <p>ดาวน์โหลด</p>
                </div>
            </div>
        </div>
    </div>
    <hr>

    <!-- Feedback -->
    <div class="w3-container w3-center contact" style="margin: 10px 0 50px 0">
        <h4 id="contact">ขอขอบคุณ</h4>
        <div class="w3-container">
            <div class="w3-row">
                <div class="w3-col s2 w3-White w3-center">
                    <p>www.w3school.com</p>
                </div>
                <div class="w3-col s4 w3-White w3-center">
                    <p>www.flaticon.com</p>
                </div>
                <div class="w3-col s4 w3-White w3-center">
                    <p>www.daneden.github.io</p>
                </div>
                <div class="w3-col s2 w3-White w3-center">
                    <p>ภาพจากเพจ FB/<a href="https://bit.ly/2Hg4deO" style="color: red">กับแกล้ม</a></p>
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
