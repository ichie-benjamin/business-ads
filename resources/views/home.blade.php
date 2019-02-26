<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <title>Amazon | eBay Dropshiping Software</title>
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta property="og:image" content="path/to/image.jpg">
    <!--Favicon-->
    <link rel="icon" href="{{ asset('img/favicon/favicon.ico') }}">
    <!--Libs css-->
    <link rel="stylesheet" href="{{ asset('css/libs.css') }}">
    <!--Main css-->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">


    <link rel="stylesheet" href="{{ asset('css/range.css') }}">
    <link rel="stylesheet" type="text/css" href="animate.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('animate.css') }}">
</head>
<body class="dark-load">
<header id="top-nav" class="top-nav page-header">
    <div class="container"><a href="#" class="logo smooth-scroll"><img src="{{ asset('img/mark.png') }}" alt="logo" class="logo-white"><img src="{{ asset('img/mark.png') }}" alt="logo" class="logo-dark"></a>
        <nav class="top-menu">
            <ul class="sf-menu">
                <!--Menu default-->
                <li><a href="">Home</a>

                </li>
                <li><a href="">Features</a>

                </li>
                <li><a href="">Prices</a>

                </li>
                <li><a href="">Blog</a>

                </li>
                <li><a href="">Affiliates</a>

                </li>
                @guest()
                    <li><a href="{{ url('login') }}">Sign in</a></li>
                    <li><a href="{{ url('login') }}" class="btn dark-btn large-btn" id="butn">Try Free Today</a></li>
                @endguest()


            </ul>

            <!--&lt;!&ndash; Start toggle menu&ndash;&gt;<a href="#" class="toggle-mnu"><span></span></a>-->
            <!--&lt;!&ndash; Start toggle menu&ndash;&gt;<a href="#" class="toggle-top"><span></span><span></span><span></span><span></span><span></span></a>-->
        </nav>
        <!-- Start mobile menu-->
        <div id="mobile-menu">
            <div class="inner-wrap">
                <nav>
                    <ul class="nav_menu">
                        <li class="menu-item-has-children current-menu-item"><a href="#">Home</a>

                        </li>

                        <li><a href="#about" class="smooth-scroll">About</a></li>

                    </ul>
                </nav>
            </div>
        </div>
        <!-- End mobile menu-->
    </div>
</header>
<div id="top" class="slider">

    <div class="full-slider intro" id="backend">
        <!-- Start slide-->
        <div data-image="img/bgn22.jpg" class="slide bg-mask background-image full-vh">
            <div class="container-slide vertical-align center head-desc">
                <div class="container">
                    <div class="row" id="designs">
                        <div class="col-md-12">
                            <div class="heading-title-big">Best <span>For Dropshipping</span></div>

                            <div id="types">
                                <div id="typewriters">  </div><div id="cursor"></div></div>
                            <!--<div class="animated fadeInRight">Repricing - allowing you to stay ahead of the competition.</div>-->
                            <!--<div class="buttons-section"><a href="login.html" class="btn dark-btn large-btn">Login</a></div>-->
                            <div class="buttons-section"><a href="admin/register.html" class="btn dark-btn large-btn">Create Account</a></div>

                        </div>
                    </div>
                </div>
            </div>
            <div id="particles-js" class="canvas-background"></div>
        </div>
    </div>
    <!--Contol slider-->
    <div id="dots-control-full-slider" class="dots-control-carousel"></div>
    <!-- Strat Control carousel-->
    <div id="control-full-slider" class="prev-next-block-rotate opacity-control">
        <div class="wrap-prev">
            <div class="prev"><i aria-hidden="true" class="fa fa-angle-left"></i></div>
        </div>
        <div class="wrap-next">
            <div class="next"><i aria-hidden="true" class="fa fa-angle-right"></i></div>
        </div>
    </div><a href="#into" class="smooth-scroll btn-down"><i aria-hidden="true" class="fa fa-angle-down"></i></a>
</div>
<!-- End slider section-->
<!--Start into slider-->
<div id="into" data-image="img/bgn1.jpg" class="into-slider background-image">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="item">
                    <img style="width: 75px;" src="assets/images/items/invent.png">
                    <h4>Inventory </h4>
                    <p>Get the best of services using a specialized inventory structure and platform.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="item"><img style="width: 75px;" src="assets/images/items/listin.png">
                    <h4>Auto-Order</h4>
                    <p>Create and maintain orders as you wish</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="item"><img style="width: 75px;" src="assets/images/items/order.png">
                    <h4>Listing Sensei</h4>
                    <p>Use the Sensei feature to manage your multiple accounts.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="item"><img style="width: 75px;" src="assets/images/items/ninja.png">
                    <h4>Ninja Scanner</h4>
                    <p>This platform is for you, explore and do more than dropshiping.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End into slider-->
<!-- Section about-->
<section id="about" class="about-us">
    <div class="container">
        <div class="row">

            <div class="col-md-8 col-md-push-2">
                <div class="heading-title center">
                    <h2>How it <span>Works</span></h2>
                    <div class="small-desd">Steps to  <span>a successful Dropshiping</span></div>
                    <p>Use the following steps to create a perfect dropshiping account</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="margin-bottom: 70px;">

                <div class="item-about">

                    <div class="col-md-6">
                        <div class="content">

                            <h6  class="sh1 ">
                                <p class="bigTexts"> <span class="symbols">AUTO-ORDER</span></p>
                                <p>Rake in more money by tracking your profits and growth by engaging with our auto-ordering feature. Automatically place orders on Amazon as soon as they come in on your eBay store. SellingSumo eradicates the possibility of price or stock changing inbetween the time you receive the order on eBay and places it rapidly on Amazon. Our platform will automatically track the orders for you; uploading all the tracking information for you and the buyer to view. Increase your positive feedback count with our automatic notifications and customer feedback requests. Helping you to reach Top Rated status - quicker.</p> <a href="admin/register.html">Try Free Now</a></h6>

                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="sh2 " style="text-align: center;">
                            <img style="width: 75%;" src="assets/images/big/Group-13.png">
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12" style="margin-bottom: 70px;">
                <div class="item-about">
                    <div class="col-md-6">
                        <div class="sh3" style="text-align: center;">

                            <img style="width: 75%;" src="assets/images/big/Group-13.png">
                        </div>
                    </div>
                    <div class="col-md-6">

                        <h5 class="sh4">
                            <div class="content">
                                <p class="bigTexts"><span class="symbols">REPRICING</span></p>
                                <p>Rely on our state-of-the-art repricer to discover changes in price and availability on Amazon amazingly fast; algorithmically adjusting your listing to ensure that you'll never make a sale at a loss or a sale that you cannot fulfill. Users of SellingSumo can create a specific Profit Range where any items that are listed on eBay using our software can enjoy their desired profit range. We bring products in and out of stock as availability changes on the source, and refill stock levels as you make sales. You also have the ability to automatically take items that are out-of-stock temporarily on account of issues with the source. Inventorying has never been this exhilarating!</p>
                                <a href="admin/register.html">Try Free Now</a>
                        </h5>
                    </div>
                </div>


            </div>
        </div>
    </div>


    </div>
    <div class="container">
        <div class="col-md-12" style="margin-bottom: 70px;">
            <div class="item-about">

                <div class="col-md-6">
                    <h5 class="sh5">
                        <div class="content">
                            <p class="bigTexts"><span class="symbols">VeRO PROTECTION</span></p>
                            <p>We have an internal VERO database, so every time you upload items to eBay using SellingSumo’s eBay account protection, we will check the brand and keywords of the product to ensure it isn’t part of the eBay VERO program. Also, you can also restrict certain keywords and brand names if you need to!</p><a href="admin/register.html">Try Free Now</a></h5>
                </div>
            </div>

            <div class="col-md-6">
                <div class="sh6" style="text-align: center;"><img style="width: 75%;" src="assets/images/big/Group-13.png"></div>
            </div>





        </div>
    </div>

    <div class="container">
        <div class="col-md-12" style="margin-bottom: 70px;">
            <div class="item-about">
                <div class="col-md-6">
                    <div class="sh7" style="text-align: center;"><img style="width: 75%;" src="assets/images/big/Group-13.png"></div>
                </div>
                <div class="col-md-6">
                    <h5 class="sh8">
                        <div class="content">

                            <p class="bigTexts"><span class="symbols">NINJA SCANNER</span></p>
                            <p>Another spectacular feature of the SellingSumo software is the Ninja Scanner that allows our users to find hot selling products on eBay that are available on Amazon at lower prices. It scans Amazon for items to list on eBay, which shows a profit after PayPal and eBay fees are deducted.  Users can scan specific category or niches and filter by the number of times items have been sold in the past 30 days. This hassle-free tool will help you reach thousands of listings easily to sell profitably on your store.</p><a href="admin/register.html">Try Free Now</a></h5>
                </div>
            </div>

        </div>
    </div>

    </div>


    </div>
</section>

<!--Section services-->
<h1>Our <span><a name="prices">prices</a></span></h1>
<!-- horizontal line-->
<span class="horizontal-line"></span><span></span>
<!-- description slider-->
<div class="description">
    <div class="budget-wrap">
        <div class="budget">
            <div class="header">
                <div class="title clearfix">
                    Our Price Range! <span class="pull-right">

				</span></div>
            </div>
            <div class="content">
                <input type="range" min="1" max="100" value="20" data-rangeslider>
                <p class="pricingValues">Our Values <span class="pull-left"></span></p>
            </div>
            <div class="footer clearfix">

            </div>
        </div>
    </div></div>
<!--Section how we work-->
<section data-image="img/bg2.jpg" class="section-how-we-work bg-white-section background-image">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-push-2">
                <div class="heading-title center">
                    <h2>Testimonies from Dropshipers</h2>
                    <div class="small-desd">We create <span>awesome stuff</span></div>
                    <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Item-->
            <div class="col-md-3 col-sm-6 col-xs-12 item-icon">
                <div class="icon-container">
                    <div class="icon icon-circle"><i class="pe-7s-look"></i></div>
                </div>
                <h3>Awesome</h3>
                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
            </div>
            <!-- Item-->
            <div class="col-md-3 col-sm-6 col-xs-12 item-icon">
                <div class="icon-container">
                    <div class="icon icon-circle"><i class="pe-7s-light"></i></div>
                </div>
                <h3>Innovative</h3>
                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
            </div>
            <!-- Item-->
            <div class="col-md-3 col-sm-6 col-xs-12 item-icon">
                <div class="icon-container">
                    <div class="icon icon-circle"><i class="pe-7s-like2"></i></div>
                </div>
                <h3>Creative</h3>
                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
            </div>
            <!-- Item-->
            <div class="col-md-3 col-sm-6 col-xs-12 item-icon">
                <div class="icon-container">
                    <div class="icon icon-circle"><i class="pe-7s-graph1"></i></div>
                </div>
                <h3>EXPERIMENTAL</h3>
                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
            </div>
            <!-- Edn items-->
        </div>
    </div>
</section>
<!--Section work progress-->
<!--Section our some work-->
<!--Section trigger-->
<!--Section we are in numbers-->
<!--Section our skills-->
<!--Section carousel trigger-->
<!--Section our team-->
<!--Section testimonials-->
<!--Section why chose us-->
<!--Section our clients-->
<!--Section contact with us-->
<!--Section our location-->
<!--<div class="map-section">-->
<!--  <div id="map" data-zoom="13" data-height="400" data-address="Konotop" data-address-details="Our location" class="map-content"></div>-->
<!--</div>-->
<!-- Old browsers support--><!--[if lt IE 9]>
<script src="libs/html5shiv/es5-shim.min.js"></script>
<script src="libs/html5shiv/html5shiv.min.js"></script>
<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="libs/respond/respond.min.js"></script>
<![endif]-->
<![endif]-->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <!--<div class="logo"><img src="img/mark.png" alt="logo" class="logo-white"></div>-->
                <p>We are a creative agency with a passion for design & developing beautiful creations.</p>
                <!--Start social links-->
                <ul class="social-links">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
                <!--End social links-->
            </div>
            <div class="col-md-3">
                <div class="links">
                    <h5>ADDITIONAL LINKS</h5>
                    <ul class="list">
                        <li><a href="">For Freelancer</a></li>
                        <li><a href="">For Photographs</a></li>
                        <li><a href="">Contact</a></li>
                        <li><a href="">FAQ</a></li>
                        <li><a href="">404 page</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="links">
                    <h5>Pages</h5>
                    <ul class="list">
                        <li><a href="">About page</a></li>
                        <li><a href="">Blog page</a></li>
                        <li><a href="">Price page</a></li>
                        <li><a href="">Portfolio page</a></li>
                        <li><a href="">Portfolio single</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="links">
                    <h5>Info</h5>
                </div>
                <div class="linked">

                    <ul class="list">
                        <li>Phone:  +44 7421 112063</li>
                        <li>Email:support@sellingsumo.com</li>

                        <li>Skype: live:sellingsumo_1</li></ul>
                </div>
            </div>
        </div>
    </div>
    <div class="down-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>© 2019 Copyright SellingSumo - All Rights Reserved.</p>
                    <ul class="footer-menu">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <!--<li><a href="about.html" class="smooth-scroll">About</a></li>-->
                        <!--<li><a href="services" class="smooth-scroll">Services</a></li>-->
                        <!--<li><a href="#portfolio" class="smooth-scroll">Our works</a></li>-->
                        <!--<li><a href="#skills" class="smooth-scroll">Skills</a></li>-->
                        <!--<li> <a href="contact" class="smooth-scroll">Contact</a></li>-->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--button to top-->
<div class="top icon-down toTopFromBottom"><a href="#top" class="smooth-scroll"><i class="pe-7s-angle-up"></i></a></div>
<!--end button to top-->
<!--Google map-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfIvcRb39yOu1OFOX2G0c4jemKpLgpJl0&amp;sensor=false"></script>
<!--Libs-->
<script src="{{ asset('js/libs.js') }}"></script>
<!--Use scripts-->
<script src="{{ asset('js/common.js') }}"></script>
<!--Use scripts-->
<script src="{{ asset('js/customs.js') }}"></script>

<!--Use scripts-->
<script src="{{ asset('js/wow.js') }}"></script>

<script src="{{ asset('js/range.js') }}"></script>
</body>
</html>