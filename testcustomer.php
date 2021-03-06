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

<body>


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



                <div id="tabs-05" class="tabs border">
                <h3>ลูกค้าของ VC Sales and Service</h3>
                <ul class="tabs-navigation">
                <li class="active"><a href="#bangkok"><i class="fa fa-home"></i>กรุงเทพ</a> </li>
                <li><a href="#district"><i class="fa fa-home"></i>ต่างจังหวัด</a> </li>
                <li><a href="#outct"><i class="fa fa-home"></i>ต่างประเทศ</a> </li>
                </ul>
                <div class="tabs-content">
                <div class="tab-pane active" id="bangkok">
                <h4>About Us</h4>
                <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                </div>
                <div class="tab-pane" id="district">
                <h4>Services</h4>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                </div>
                <div class="tab-pane" id="outct">
                <h4>Services</h4>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                </div>
                </div>
                </div>






            </div>
            <!-- end: post content -->

        </section>
        <!-- end: Content -->
        <!-- Footer -->
        <footer id="footer" class="footer-light">
            <div class="footer-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <!-- Footer widget area 1 -->
                            <div class="widget  widget-contact-us" style="background-image: url('images/world-map-dark.png'); background-position: 50% 20px; background-repeat: no-repeat">
                                <h4>About POLO</h4>
                                <ul class="list-icon">
                                    <li><i class="fa fa-map-marker"></i> 795 Folsom Ave, Suite 600
                                        <br> San Francisco, CA 94107</li>
                                    <li><i class="fa fa-phone"></i> (123) 456-7890 </li>
                                    <li><i class="fa fa-envelope"></i> <a href="mailto:first.last@example.com">first.last@example.com</a> </li>
                                    <li>
                                        <br>
                                        <i class="fa fa-clock-o"></i>Monday - Friday: <strong>08:00 - 22:00</strong>
                                        <br> Saturday, Sunday: <strong>Closed</strong> </li>
                                </ul>
                                <!-- Social icons -->
                                <div class="social-icons social-icons-border float-left m-t-20">
                                    <ul>
                                        <li class="social-rss"><a href="#"><i class="fa fa-rss"></i></a></li>
                                        <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="social-vimeo"><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                        <li class="social-youtube"><a href="#"><i class="fa fa-youtube"></i></a></li>
                                        <li class="social-pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li class="social-gplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                                <!-- end: Social icons -->
                            </div>
                            <!-- end: Footer widget area 1 -->
                        </div>
                        <div class="col-md-2">
                            <!-- Footer widget area 2 -->
                            <div class="widget">
                                <h4>Quick LInks</h4>
                                <ul class="list-icon list-icon-arrow">
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Contact</a></li>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Portfolio</a></li>
                                    <li><a href="#">Shortcodes</a></li>
                                </ul>
                            </div>
                            <!-- end: Footer widget area 2 -->
                        </div>
                        <div class="col-md-3">
                            <!-- Footer widget area 3 -->
                            <div class="widget">
                                <h4>Latest From Our Blog</h4>
                                <div class="post-thumbnail-list">
                                    <div class="post-thumbnail-entry">
                                        <div class="post-thumbnail-content">
                                            <a href="#">Suspendisse consectetur fringilla luctus</a>
                                            <span class="post-date"><i class="fa fa-clock-o"></i> 6m ago</span> <span class="post-category"><i class="fa fa-tag"></i> Technology</span> </div>
                                    </div>
                                    <div class="post-thumbnail-entry">
                                        <div class="post-thumbnail-content">
                                            <a href="#">Consectetur adipiscing elit</a>
                                            <span class="post-date"><i class="fa fa-clock-o"></i> 24h ago</span> <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span> </div>
                                    </div>
                                    <div class="post-thumbnail-entry">
                                        <div class="post-thumbnail-content">
                                            <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>
                                            <span class="post-date"><i class="fa fa-clock-o"></i> 11h ago</span> <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span> </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end: Footer widget area 3 -->
                        </div>
                        <div class="col-md-3">
                            <!-- Footer widget area 4 -->
                            <div class="widget widget-tweeter" data-username="ardianmusliu" data-limit="2">
                                <h4>Recent Tweets</h4>
                            </div>
                            <!-- end: Footer widget area 4 -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-content">
                <div class="container">
                    <div class="copyright-text text-center">&copy; 2017 POLO -  Responsive Multi-Purpose HTML5 Template. All Rights Reserved.<a href="http://www.inspiro-media.com" target="_blank">INSPIRO</a> </div>
                </div>
            </div>
        </footer>
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
