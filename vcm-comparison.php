<?php
include('functions.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <!-- Document title -->
    <title>VC Sales and Service</title>
    <!-- Stylesheets & Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,800,700,600|Montserrat:400,500,600,700|Raleway:100,300,600,700,800" rel="stylesheet" type="text/css" />
    <link href="css/plugins.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
  </head>

<body class="fullscreen-review">


    <!-- Wrapper -->
    <div id="wrapper">


        <!-- Topbar -->
        <div id="topbar" class="topbar-transparent topbar-fullwidth dark visible-md visible-lg bg-earthred">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <ul class="top-menu">
                            <li><a href="#">Phone: 081-655-7828, 02-873-0663</a></li>
                            <!--<li><a href="#">Email: contact@inspiro-media.com</a></li>-->
                        </ul>
                    </div>
                    <div class="col-sm-6 hidden-xs">
                        <div class="social-icons social-icons-colored-hover">
                            <ul>
                                <li class="social-facebook"><a href="https://www.facebook.com/vc4you.official" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <!--
                                <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="social-google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="social-pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li class="social-vimeo"><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
                                <li class="social-linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li class="social-dribbble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li class="social-youtube"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                <li class="social-rss"><a href="#"><i class="fa fa-rss"></i></a></li>
                              -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end: Topbar -->

        <!-- Header -->
        <header id="header" class="header-fullwidth header-transparent bg-grdnt">
            <div id="header-wrap">
                <div class="container">
                    <!--Logo-->
                    <div id="logo">
                        <a href="index.html" class="logo" data-dark-logo="images/vc-logo-dark.png">
                            <img src="images/vc-logo.png" alt="VC Logo">
                        </a>
                    </div>
                    <!--End: Logo-->

                    <!--Top Search Form-->
                    <div id="top-search">
                        <form action="search-results-page.html" method="get">
                            <input type="text" name="q" class="form-control" value="" placeholder="Start typing & press  &quot;Enter&quot;">
                        </form>
                    </div>
                    <!--end: Top Search Form-->

                    <!--Header Extras-->
                    <div class="header-extras">
                        <ul>
                            <li>
                                <!--top search-->
                                <a id="top-search-trigger" href="#" class="toggle-item">
                                    <i class="fa fa-search"></i>
                                    <i class="fa fa-close"></i>
                                </a>
                                <!--end: top search-->
                            </li>
                            <li class="hidden-xs">
                                <!--shopping cart-->
                                <!--
                                <div id="shopping-cart">
                                    <a href="shop-cart.html">
                                        <span class="shopping-cart-items">8</span>

                                        <i class="fa fa-shopping-cart"></i></a>
                                </div>
                              -->
                                <!--end: shopping cart-->
                            </li>
                            <li>
                                <div class="topbar-dropdown">
                                    <a class="title"><i class="fa fa-globe"></i></a>
                                    <div class="dropdown-list">
                                        <a class="list-entry" href="#">French</a>
                                        <a class="list-entry" href="#">Spanish</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--end: Header Extras-->

                    <!--Navigation Resposnive Trigger-->
                    <div id="mainMenu-trigger">
                        <button class="lines-button x"> <span class="lines"></span> </button>
                    </div>
                    <!--end: Navigation Resposnive Trigger-->

                    <!--Navigation-->
                    <?php $menu =drawMenu(); echo $menu;?>
                    <!--end: Navigation-->
                </div>
            </div>
        </header>
        <!-- end: Header -->

        <!-- Content -->
        <section id="page-content">
            <div class="container">
                <!-- post content -->
                <div class="row">
                  <div class="col-md-12">
                    <h1 class="text-center">ข้อเปรียบเทียบ Server กับ Standalone</h1>
                  </div>

                  <div data-example-id="contextual-table" class="bs-example">
                    <table class="table">
                    <thead>
                    <tr>
                    <th>#</th>
                    <th>Comparison</th>
                    <th>Server</th>
                    <th>Standalone</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="active">
                    <th scope="row">1</th>
                    <td>ปัจจัยในการเลือก</td>
                    <td>ตั้งแต่ 6 ห้องขึ้นไป</td>
                    <td>ตั้งแต่ 1-5 ห้อง</td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>ลงทุนครั้งแรก</td>
                    <td>ความจุมาก จำนวนมาก ราคาถูก</td>
                    <td>ความจุมาก จำนวนมาก ราคาแพง</td>
                    </tr>
                    <tr class="success">
                    <th scope="row">3</th>
                    <td>ลงทุนครั้งต่อไป</td>
                    <td>ราคาถูก</td>
                    <td>ราคาคงที่</td>
                    </tr>
                    <tr>
                    <th scope="row">4</th>
                    <td>การขยายความจุ</td>
                    <td>ใส่ฮาร์ดดิสก์ได้ 4 ตัว</td>
                    <td>ใส่ฮาร์ดดิสก์ได้ 2 ตัว</td>
                    </tr>
                    <tr class="info">
                    <th scope="row">5</th>
                    <td>
                      <strong>การจัดการเพลง</strong>
                      <ul>
                        <li>เพิ่มเพลง</li>
                        <li>ขยายความจุ</li>
                        <li>พิมพ์สมุดเพลง</li>
                        <li>ค้นหาข้อมูลเพลง</li>
                      </ul>
                    </td>
                    <td>&nbsp;<br />
                      จุดเดียว<br />
                      จุดเดียว<br />
                      ได้<br />
                      ได้
                    </td>
                    <td>&nbsp;<br />
                      ทุกจุด<br />
                      ทุกจัด<br />
                      ไม่ได้<br />
                      ไม่ได้</td>
                    </tr>
                    <tr>
                    <th scope="row">6</th>
                    <td>ค่าเพิ่มเพลง</td>
                    <td>250 บาท</td>
                    <td>250 บาท + ถัดไป 150 บาท/เครื่อง</td>
                    </tr>
                    <tr class="warning">
                    <th scope="row">7</th>
                    <td>ค่าลิขสิทธิ์</td>
                    <td>เท่ากัน</td>
                    <td>เท่ากัน</td>
                    </tr>
                    <tr>
                    <th scope="row">8</th>
                    <td>
                      <strong>ความสามารถ</strong>
                      <ul>
                        <li>เปลี่ยนพื้นหลัง</li>
                        <li>ส่งข้อความ</li>
                        <li>สั่งปิดห้อง</li>
                        <li>เช็คสถิติ</li>
                        <li>เล่นเพลงเบรค</li>
                        <li>เล่นสดจากแผ่น</li>
                        <li>เรียกพนักงาน</li>
                        <li>แก้ไขคำแซว</li>
                      </ul>
                    </td>
                    <td>&nbsp;<br />
                      ได้<br />
                      ได้<br />
                      ได้<br />
                      ได้<br />
                      ได้<br />
                      ไม่ได้<br />
                      ได้<br />
                      ได้<br />
                    </td>
                    <td>&nbsp;<br />
                      ได้<br />
                      ไม่ได้<br />
                      ไม่ได้<br />
                      ไม่ได้<br />
                      ไม่ได้<br />
                      ได้<br />
                      ไม่ได้<br />
                      ไม่ได้<br />
                    </td>
                    </tr>
                    <tr class="danger">
                    <th scope="row">9</th>

                    <td>ความทนทาน</td>
                    <td>สูงพอกัน</td>
                    <td>สูงพอกัน</td>
                    </tr>
                    <tr>
                    <th scope="row"></th>
                      <td colspan=4 class="text-center">
                        <strong>*** กรณี SERVER เสีย เครื่องลูกมีเพลงสำรอง 12,000 เพลง ***</strong>
                      </td>
                  </tr>
                    </tbody>
                    </table>
                    </div>

                </div>





            </div>
            <!-- end: post content -->

        </section>
        <!-- end: Content -->
        <!-- Footer -->
        <?php
        drawFooter();
         ?>
        <!-- end: Footer -->

    </div>
    <!-- end: Wrapper -->

    <!-- Go to top button -->
    <a id="goToTop"><i class="fa fa-angle-up top-icon"></i><i class="fa fa-angle-up"></i></a>
    <!--Plugins-->
     <script src="js/jquery.js"></script>
     <script src="js/plugins.js"></script>

    <!--Template functions-->
     <script src="js/functions.js"></script>
</body>

</html>
