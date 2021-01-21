<!doctype html>
<html lang="zxx <?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Specific Meta
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="HYIP Investment is a modern presentation HTML5 Business HTML Template.">
    <meta name="keywords" content="HTML5, Template, Design, Business, HYIP, HYIP Html, Hyip manager, bitcoin doubler, hyip builder, hyip design, hyip template, investment,money, money script, p2p, ponzi template, profit" />
    <meta name="author" content="rifat636">

    <!-- Titles
    ================================================== -->
    <title>Earners</title>

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/android-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/apple-icon-144x144.png">

    <!-- Custom Font
    ================================================== -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700%7COpen+Sans:300,400,600,700&amp;display=swap" rel="stylesheet">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="assets/css/simple-scrollbar.css">
    <link rel="stylesheet" href="assets/css/odometer-theme-default.css">
    <link rel="stylesheet" href="assets/css/fontawesome.all.min.css">
    <link rel="stylesheet" href="assets/css/lightcase.css">
    <link rel="stylesheet" href="assets/css/chartist.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <script src="assets/js/modernizr.min.js"></script>
</head>

<body>

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Preloader
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div><!-- /preloader-icon -->
        </div><!-- /preloader-inner -->
    </div><!-- /preloader -->

    <!--********************************************************-->
    <!--********************* SITE CONTENT *********************-->
    <!--********************************************************-->
    <div class="site-content">
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Site Header
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <header class="site-header header-style-one">
            <div class="site-navigation style-one">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="navbar navbar-expand-lg navigation-area">
                                <!-- Site Branding -->
                                <div class="site-branding">
                                    <a class="site-logo" href="/">
                                        <img src="/assets/images/logo-light-icon.png" alt="Site Logo" />earners
                                    </a>
                                </div><!-- /.site-branding -->

                                <div class="mainmenu-area">
                                    <nav class="menu">
                                        <ul id="nav">
                                            <li><a href="/">Home</a></li>
                                            <li><a class="active" href="/about">About</a></li>
                                            <li>
                                                <a href="/faqs">Faq</a>
                                            </li>

                                            <li>
                                                <a href="/support">Support</a>
                                            </li>
                                            <li>

                                                    <?php if(Route::has('login')): ?>
                                                    <div class="form-group-btn">
                                                    <?php if(auth()->guard()->check()): ?>
                                                    <a class="btn btn-default btn-white" href="<?php echo e(url('/home')); ?>">Home</a>
                                                    <?php else: ?>
                                                    <a class="btn btn-default btn-white" href="<?php echo e(route('login')); ?>">Login</a>

                                                        <?php if(Route::has('register')): ?>
                                                        <a class="btn btn-default btn-white" href="<?php echo e(route('register')); ?>">Register</a>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                </div>
                                            <?php endif; ?>



                                            </li>
                                        </ul> <!-- /.menu-list -->
                                    </nav><!--/.menu-->
                                </div><!--~./ mainmenu-wrap ~-->
                            </div><!--~./ navigation-area ~-->
                        </div><!--  /.col-12 -->
                    </div><!--  /.row -->
                </div><!-- /.container -->
            </div><!-- /.site-navigation -->

            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <!--~~~~~~~ Start Mobile Menu ~~~~~~~~-->
                            <div class="mobile-menu">
                                <a class="mobile-logo" href="/">
                                    <img src="assets/images/logo/logo2.png" alt="logo">
                                </a>
                            </div><!--~~./ end mobile menu ~~-->
                        </div><!--  /.col-12 -->
                    </div><!--  /.row -->
                </div><!-- /.container -->
            </div><!-- /.mobile-menu-area -->
        </header><!--~~./ end site header ~~-->
        <!--~~~ Sticky Header ~~~-->
        <div id="sticky-header"></div><!--~./ end sticky header ~-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Hero Block
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="hero-block bg-primary" style="background-image: url('assets/images/shape/shape-dot5.png')">
            <div class="element-effect">
                <img src="assets/images/vactor/line3.png" alt="Line">
                <img src="assets/images/vactor/line3.png" alt="Line">
                <img src="assets/images/vactor/line3.png" alt="Line">
                <img src="assets/images/vactor/line3.png" alt="Line">
                <img src="assets/images/vactor/line3.png" alt="Line">
            </div>
            <div class="hero-shape-top" style="background-image: url('assets/images/shape/hero-shape-top.png')"></div>
            <div class="hero-shape-bottom" style="background-image: url('assets/images/shape/header-shape.png')"></div>
            <div class="hero-block-inner">
                <div class="container">
                    <div class="row hero-content-info-area justify-content-end">
                        <div class="col-lg-9">
                            <div class="hero-mockup-thumb-area">
                                <div class="hero-info-list text-white">
                                    <div class="line-shape">
                                        <img src="assets/images/shape/line-shape.png" alt="Icon">
                                    </div><!-- /.line-shape -->
                                    <div class="hero-info-list-inner">
                                        <div class="hero-info">
                                            <div class="text">Get Profit</div>
                                            <div class="icon">
                                                <img src="assets/images/icon/Icon-4.png" alt="Icon">
                                            </div>
                                        </div><!-- /.hero-info -->
                                        <div class="hero-info">
                                            <div class="icon">
                                                <img src="assets/images/icon/Icon-2.png" alt="Icon">
                                            </div>
                                            <div class="text">Investment</div>
                                        </div><!-- /.hero-info -->
                                        <div class="hero-info">
                                            <div class="icon">
                                                <img src="assets/images/icon/Icon.png" alt="Icon">
                                            </div>
                                            <div class="text">Choose Plan</div>
                                        </div><!-- /.hero-info -->
                                        <div class="hero-info">
                                            <div class="icon">
                                                <img src="assets/images/icon/Icon-3.png" alt="Icon">
                                            </div>
                                            <div class="text">Create account</div>
                                        </div><!-- /.hero-info -->
                                    </div>
                                </div><!-- /.hero-info-list -->
                                <div class="hero-thumb-area">
                                    <div class="hero-thumb-inc">
                                        <img src="assets/images/others/profit-inc.png" alt="Inc">
                                    </div><!-- /.hero-thumb-inc -->
                                    <div class="hero-thumb">
                                        <img src="assets/images/others/hero-thumb.png" alt="Thumbnail">
                                    </div><!-- /.hero-thumb -->
                                </div>
                            </div><!-- /.hero-mockup-thumb-area -->
                        </div>
                    </div><!-- /.hero-content-info-area -->

                    <div class="row hero-content-area align-content-center">
                        <div class="col-lg-6">
                            <div class="hero-content">
                                <div class="hero-content-shape">
                                    <img src="assets/images/shape/shape-hero.png" alt="Shape">
                                </div>
                                <div class="hero-subtitle">Best Hyip</div>
                                <h2 class="hero-title">We provide is best investment platform</h2><!-- /.hero-title -->
                                <div class="form-group-btn">
                                    <a class="btn btn-default btn-primary" href="#">Open An Account</a>
                                    <a href="https://www.youtube.com/embed/GT6-H4BRyqQ" data-rel="lightcase" class="video-popup btn-video">
                                        <img src="assets/images/icon/video.png" alt="icon" />
                                        <span class="fa fa-play"></span>
                                    </a>
                                </div><!-- /.form-group-btn -->
                            </div><!-- /.hero-content -->
                        </div><!-- /.col-lg-6 -->
                    </div>
                </div><!--  /.container -->
            </div>
        </div><!-- /.hero-block -->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Features Block
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="features-block ptb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="feature-thumb-area" data-animate="hg-fadeInLeft">
                            <div class="feature-thumb">
                                <img src="assets/images/others/feature.png" alt="Shape Thumbnail">
                            </div><!-- /.feature-thumb -->
                            <div class="animated-element">
                                <div class="element">
                                    <img src="assets/images/vactor/element1.png" alt="Element">
                                </div>
                                <div class="element">
                                    <img src="assets/images/vactor/element2.png" alt="Element">
                                </div>
                                <div class="element">
                                    <img src="assets/images/vactor/element3.png" alt="Element">
                                </div>
                                <div class="element">
                                    <img src="assets/images/vactor/element4.png" alt="Element">
                                </div>
                            </div><!-- /.animated-element -->
                        </div><!-- /.feature-thumb-area -->
                    </div><!-- /.col-lg-5 -->

                    <div class="col-lg-7">
                        <div class="features-content">
                            <div class="section-title">
                                <div class="subtitle" data-animate="hg-fadeInUp">About Our Company</div>
                                <h2 class="title-main" data-animate="hg-fadeInUp">Awesome Features</h2><!-- /.title-main -->
                                <div class="title-text" data-animate="hg-fadeInUp">
                                    Blandit rutrum auctor eu quis euismod, eget porta feugiat, ut nec sit. Est fusce enim dapibus commodo  pulvinar con
                                </div><!-- /.title-text -->
                            </div><!-- /.section-title -->
                            <div class="features-info-list">
                                <div class="single-info" data-animate="hg-fadeInUp">
                                    <div class="info-header">
                                        <div class="icon-area icon-small icon-red">
                                            <div class="shape-icon"></div>
                                            <div class="icon">
                                                <span class="flaticon-save-money"></span>
                                            </div>
                                        </div><!-- /.icon-area-->
                                        <div class="info-title">
                                            <h3 class="heading">We Innovate</h3>
                                        </div><!-- /.info-icon -->
                                    </div><!-- /.info-title -->
                                    <div class="info">
                                        <p>Blandit rutrum auctor eu quis euismod, eget porta feugiat, ut nec sit. Est fusce enim dapibus commodo felis</p>
                                    </div><!-- /.info -->
                                </div><!-- /.single-info -->

                                <div class="single-info" data-animate="hg-fadeInUp">
                                    <div class="info-header">
                                        <div class="icon-area icon-small icon-green">
                                            <div class="shape-icon"></div>
                                            <div class="icon">
                                                <span class="flaticon-shield-1"></span>
                                            </div>
                                        </div><!-- /.icon-area-->
                                        <div class="info-title">
                                            <h3 class="heading">We,re Secure</h3>
                                        </div><!-- /.info-icon -->
                                    </div><!-- /.info-title -->
                                    <div class="info">
                                        <p>Blandit rutrum auctor eu quis euismod, eget porta feugiat, ut nec sit. Est fusce enim dapibus commodo felis</p>
                                    </div><!-- /.info -->
                                </div><!-- /.single-info -->

                                <div class="single-info" data-animate="hg-fadeInUp">
                                    <div class="info-header">
                                        <div class="icon-area icon-small">
                                            <div class="shape-icon"></div>
                                            <div class="icon">
                                                <span class="flaticon-employee"></span>
                                            </div>
                                        </div><!-- /.icon-area-->
                                        <div class="info-title">
                                            <h3 class="heading">Best Support</h3>
                                        </div><!-- /.info-icon -->
                                    </div><!-- /.info-title -->
                                    <div class="info">
                                        <p>Blandit rutrum auctor eu quis euismod, eget porta feugiat, ut nec sit. Est fusce enim dapibus commodo felis</p>
                                    </div><!-- /.info -->
                                </div><!-- /.single-info -->
                            </div>
                        </div><!-- /.features-content -->
                    </div><!-- /.col-lg-7 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!--~~./ end features block ~~-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Discount Block
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="discount-block ptb-120 bg-image bg-overlay-primary" style="background-image: url('assets/images/bg/discount-bg.jpg')">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="discount-content text-white text-center">
                            <h2 class="discount-title" data-animate="hg-fadeInUp">45% Referral Commission</h2><!-- /.discount-title -->
                            <div class="discount-text" data-animate="hg-fadeInUp">
                                Regular members who have an active deposit can participate in our affilire program which givesfor their active referrals
                            </div><!-- /.title-text -->
                            <div class="discount-btn-group" data-animate="hg-fadeInUp">
                                <a href="contact.html" class="btn btn-default btn-white">Get Start Now</a>
                            </div><!-- /.action-btn-group -->
                        </div><!-- /.discount-content-->
                    </div><!-- /.col-lg-8 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!--~~./ end discount block ~~-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Pricing Block
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="pricing-block ptb-120">
            <div class="container ml-b-30">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="section-title text-center">
                            <div class="subtitle" data-animate="hg-fadeInUp">Not hidden charge</div>
                            <h2 class="title-main" data-animate="hg-fadeInUp">Choose you Investment plan</h2><!-- /.title-main -->
                            <div class="title-text" data-animate="hg-fadeInUp">
                                Blandit rutrum auctor eu quis euismod, eget porta feugiat, ut nec sit. Est fusce enim dapibus commodo  pulvinar con
                            </div><!-- /.title-text -->
                        </div><!-- /.section-title -->
                    </div><!-- /.col-lg-10 -->
                </div><!-- /.row -->

                <div class="row pricing-table-list">
                    <div class="col-lg-4 col-md-6">
                        <!--~~~~~ Start Pricing Box ~~~~~-->
                        <div class="pricing-box pricing-green" data-animate="hg-fadeInUp">
                            <div class="pricing-icon icon-default icon-green">
                                <div class="shape-icon"></div>
                                <div class="icon">
                                    <span class="flaticon-profit"></span>
                                </div>
                            </div><!-- /.pricing-icon-->
                            <div class="package-price">
                                <div class="pricing">25%</div>
                                Daily For 5 Days
                                <div class="divider"></div>
                            </div><!-- /.pricing-price -->
                            <div class="pricing-content">
                                <ul class="list">
                                    <li>Earning On Mon - Fri</li>
                                    <li>Min Invest $25.00 usd</li>
                                    <li>Max Invest $40,000.00 usd</li>
                                    <li>Principal Return</li>
                                    <li>Compound Available</li>
                                </ul>
                            </div><!-- /.pricing-content -->
                            <div class="pricing-footer text-center">
                                <a href="#" class="btn btn-default">Invest Now</a>
                            </div><!-- /.pricing-footer -->
                        </div><!--~./ end pricing box ~-->
                    </div><!--~./ col-lg-4 ~-->

                    <div class="col-lg-4 col-md-6">
                        <!--~~~~~ Start Pricing Box ~~~~~-->
                        <div class="pricing-box pricing-red" data-animate="hg-fadeInUp">
                            <div class="pricing-icon icon-default icon-red">
                                <div class="shape-icon"></div>
                                <div class="icon">
                                    <span class="flaticon-startup"></span>
                                </div>
                            </div><!-- /.pricing-icon-->

                            <div class="package-price">
                                <div class="pricing">30%</div>
                                Daily For 5 Days
                                <div class="divider"></div>
                            </div><!-- /.pricing-price -->
                            <div class="pricing-content">
                                <ul class="list">
                                    <li>Earning On Mon - Fri</li>
                                    <li>Min Invest $25.00 usd</li>
                                    <li>Max Invest $40,000.00 usd</li>
                                    <li>Principal Return</li>
                                    <li>Compound Available</li>
                                </ul>
                            </div><!-- /.pricing-content -->
                            <div class="pricing-footer text-center">
                                <a href="#" class="btn btn-default">Invest Now</a>
                            </div><!-- /.pricing-footer -->
                        </div><!--~./ end pricing box ~-->
                    </div><!--~./ col-lg-4 ~-->

                    <div class="col-lg-4 col-md-6">
                        <!--~~~~~ Start Pricing Box ~~~~~-->
                        <div class="pricing-box" data-animate="hg-fadeInUp">
                            <div class="pricing-icon icon-default">
                                <div class="shape-icon"></div>
                                <div class="icon">
                                    <span class="flaticon-business-and-finance"></span>
                                </div>
                            </div><!-- /.pricing-icon-->

                            <div class="package-price">
                                <div class="pricing">45%</div>
                                Daily For 5 Days
                                <div class="divider"></div>
                            </div><!-- /.pricing-price -->
                            <div class="pricing-content">
                                <ul class="list">
                                    <li>Earning On Mon - Fri</li>
                                    <li>Min Invest $25.00 usd</li>
                                    <li>Max Invest $40,000.00 usd</li>
                                    <li>Principal Return</li>
                                    <li>Compound Available</li>
                                </ul>
                            </div><!-- /.pricing-content -->
                            <div class="pricing-footer text-center">
                                <a href="#" class="btn btn-default">Invest Now</a>
                            </div><!-- /.pricing-footer -->
                        </div><!--~./ end pricing box ~-->
                    </div><!--~./ col-lg-4 ~-->
                </div><!--~./ row ~-->
            </div><!-- /.container -->
        </div><!--~~./ end pricing block ~~-->



        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Work Process Block
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div id="work-process-block" class="work-process-block ptb-120">
            <div class="element-effect">
                <img class="star" src="assets/images/vactor/star2.png" alt="Icon">
                <img class="line" src="assets/images/vactor/line2.png" alt="Icon">
                <img class="triangle" src="assets/images/vactor/triangle2.png" alt="Icon">
                <img class="rectangle" src="assets/images/vactor/rectangle.png" alt="Icon">
                <img class="circle" src="assets/images/vactor/circle.png" alt="Icon">
                <img class="circle2" src="assets/images/vactor/circle2.png" alt="Icon">
            </div><!-- /.element-effect -->
            <div class="container ml-b-45">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="section-title text-center">
                            <h4 class="subtitle" data-animate="hg-fadeInUp">Fast & Easy  Process.</h4><!--  /.subtitle -->
                            <h2 class="title-main" data-animate="hg-fadeInUp">Easy Investment Process.</h2><!-- /.title-main -->
                            <p class="title-text" data-animate="hg-fadeInUp">Blandit rutrum auctor eu quis euismod, eget porta feugiat, ut nec sit. Est fusce enim dapibus commodo  pulvinar con</p>
                        </div><!-- /.section-title -->
                    </div>
                </div>

                <div class="row process-list">
                    <div class="bg-line" style="background-image:url('assets/images/others/linearrow.png')"></div><!-- /.bg-line -->

                    <!--~./ Start Single Process ~-->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-process" data-animate="hg-fadeInUp">
                            <div class="icon color-red">
                                <span class="flaticon-profile"></span>
                            </div>
                            <h2 class="process-step">Creat Account</h2>
                            <h3 class="process-no">Stape 01</h3>
                        </div>
                    </div><!--~./ end single process ~-->

                    <!--~./ Start Single Process ~-->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-process" data-animate="hg-fadeInUp">
                            <div class="icon color-blue">
                                <span class="flaticon-click"></span>
                            </div>
                            <h2 class="process-step">Choose plan</h2>
                            <h3 class="process-no">Stape 02</h3>
                        </div>
                    </div><!--~./ end single process ~-->

                    <!--~./ Start Single Process ~-->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-process" data-animate="hg-fadeInUp">
                            <div class="icon color-green">
                                <span class="flaticon-debit-card"></span>
                            </div>
                            <h2 class="process-step">Investment</h2>
                            <h3 class="process-no">Stape 03</h3>
                        </div>
                    </div><!--~./ end single process ~-->

                    <!--~./ Start Single Process ~-->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-process" data-animate="hg-fadeInUp">
                            <div class="icon color-yellow">
                                <span class="flaticon-bars"></span>
                            </div>
                            <h2 class="process-step">Get Profit</h2>
                            <h3 class="process-no">Stape 04</h3>
                        </div>
                    </div><!--~./ end single process ~-->
                </div>
            </div><!-- /.container -->
        </div><!--~~./ end work process block ~~-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Deposit Withdraw Block
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="deposit-withdraw-block bg-image bg-primary ptb-120" style="background-image: url('assets/images/shape/shape01.png')">
            <div class="coin-thumb" data-animate="hg-fadeInRight">
                <img src="assets/images/others/conis.png" alt="Thumbnail">
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="section-title text-center text-white">
                            <div class="subtitle" data-animate="hg-fadeInUp">Not hidden charge</div>
                            <h2 class="title-main" data-animate="hg-fadeInUp">Latest Deposits & Withdrawals</h2><!-- /.title-main -->
                            <div class="title-text" data-animate="hg-fadeInUp">
                                Blandit rutrum auctor eu quis euismod, eget porta feugiat, ut nec sit. Est fusce enim dapibus commodo  pulvinar con
                            </div><!-- /.title-text -->
                        </div><!-- /.section-title -->
                    </div><!-- /.col-lg-10 -->
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-12">
                        <div class="deposit-withdraw-content" data-animate="hg-fadeInUp">
                            <div class="table-responsive deposit-table">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th colspan="3">Latest Deposits</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="investor">
                                                <div class="thumb"><img src="assets/images/author/1.png" alt="Author"></div>
                                                <div class="name"><a href="#">Maxlis Jon</a></div>
                                            </td>
                                            <td class="amount">$150</td>
                                            <td class="date">2019 - 04 - 21 04:38:50</td>
                                        </tr>
                                        <tr>
                                            <td class="investor">
                                                <div class="thumb"><img src="assets/images/author/2.png" alt="Author"></div>
                                                <div class="name"><a href="#">Wagase</a></div>
                                            </td>
                                            <td class="amount">$869</td>
                                            <td class="date">2019 - 04 - 21 04:38:50</td>
                                        </tr>
                                        <tr>
                                            <td class="investor">
                                                <div class="thumb"><img src="assets/images/author/3.png" alt="Author"></div>
                                                <div class="name"><a href="#">Maktrek</a></div>
                                            </td>
                                            <td class="amount">$206</td>
                                            <td class="date">2019 - 04 - 21 04:38:50</td>
                                        </tr>
                                        <tr>
                                            <td class="investor">
                                                <div class="thumb"><img src="assets/images/author/2.png" alt="Author"></div>
                                                <div class="name"><a href="#">Natallia Moe</a></div>
                                            </td>
                                            <td class="amount">$893</td>
                                            <td class="date">2019 - 04 - 21 04:38:50</td>
                                        </tr>
                                        <tr>
                                            <td class="investor">
                                                <div class="thumb"><img src="assets/images/author/1.png" alt="Author"></div>
                                                <div class="name"><a href="#">David James</a></div>
                                            </td>
                                            <td class="amount">$789</td>
                                            <td class="date">2019 - 04 - 21 04:38:50</td>
                                        </tr>
                                        <tr>
                                            <td class="investor">
                                                <div class="thumb"><img src="assets/images/author/3.png" alt="Author"></div>
                                                <div class="name"><a href="#">Maxlis Jon</a></div>
                                            </td>
                                            <td class="amount">$369</td>
                                            <td class="date">2019 - 04 - 21 04:38:50</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div><!-- /.table-responsive -->

                            <div class="table-responsive withdraw-table">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th colspan="3">Latest Withdrawals</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="investor">
                                                <div class="thumb"><img src="assets/images/author/3.png" alt="Author"></div>
                                                <div class="name"><a href="#">Maxlis Jon</a></div>
                                            </td>
                                            <td class="amount">$150</td>
                                            <td class="date">2019 - 04 - 21 04:38:50</td>
                                        </tr>
                                        <tr>
                                            <td class="investor">
                                                <div class="thumb"><img src="assets/images/author/2.png" alt="Author"></div>
                                                <div class="name"><a href="#">Wagase</a></div>
                                            </td>
                                            <td class="amount">$869</td>
                                            <td class="date">2019 - 04 - 21 04:38:50</td>
                                        </tr>
                                        <tr>
                                            <td class="investor">
                                                <div class="thumb"><img src="assets/images/author/1.png" alt="Author"></div>
                                                <div class="name"><a href="#">Maktrek</a></div>
                                            </td>
                                            <td class="amount">$206</td>
                                            <td class="date">2019 - 04 - 21 04:38:50</td>
                                        </tr>
                                        <tr>
                                            <td class="investor">
                                                <div class="thumb"><img src="assets/images/author/2.png" alt="Author"></div>
                                                <div class="name"><a href="#">Natallia Moe</a></div>
                                            </td>
                                            <td class="amount">$893</td>
                                            <td class="date">2019 - 04 - 21 04:38:50</td>
                                        </tr>
                                        <tr>
                                            <td class="investor">
                                                <div class="thumb"><img src="assets/images/author/3.png" alt="Author"></div>
                                                <div class="name"><a href="#">David James</a></div>
                                            </td>
                                            <td class="amount">$789</td>
                                            <td class="date">2019 - 04 - 21 04:38:50</td>
                                        </tr>
                                        <tr>
                                            <td class="investor">
                                                <div class="thumb"><img src="assets/images/author/1.png" alt="Author"></div>
                                                <div class="name"><a href="#">Maxlis Jon</a></div>
                                            </td>
                                            <td class="amount">$369</td>
                                            <td class="date">2019 - 04 - 21 04:38:50</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div><!-- /.table-responsive -->
                        </div><!-- /.deposit-withdraw-content -->
                    </div>
                </div>
            </div>
        </div><!--~./ end deposit withdraw block ~-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Fan Fact Block
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="fanfact-block ptb-120">
            <div class="container ml-b-50">
                <div class="row fanfact-promo-numbers">
                    <div class="col-lg-3 col-md-6" data-animate="hg-fadeInUp">
                        <div class="promo-number">
                            <div class="odometer-wrap"><div class="odometer" data-odometer-final="58">0</div><sub>K</sub></div><!-- /.odometer-wrap -->
                            <h4 class="promo-title">Active Members</h4><!--  /.promo-title -->
                        </div><!-- /.promo-number -->
                    </div><!-- /.col-lg-3 -->
                    <div class="col-lg-3 col-md-6" data-animate="hg-fadeInUp">
                        <div class="promo-number number-turquoise">
                            <div class="odometer-wrap"><div class="odometer" data-odometer-final="259">0</div></div><!-- /.odometer-wrap -->
                            <h4 class="promo-title">Running Days</h4><!--  /.promo-title -->
                        </div><!-- /.promo-number -->
                    </div><!-- /.col-lg-3 -->
                    <div class="col-lg-3 col-md-6" data-animate="hg-fadeInUp">
                        <div class="promo-number number-green">
                            <div class="odometer-wrap"><div class="odometer" data-odometer-final="89">0</div><sub>M</sub></div><!-- /.odometer-wrap -->
                            <h4 class="promo-title">Total Deposit</h4><!--  /.promo-title -->
                        </div><!-- /.promo-number -->
                    </div><!-- /.col-lg-3 -->
                    <div class="col-lg-3 col-md-6" data-animate="hg-fadeInUp">
                        <div class="promo-number number-red">
                            <div class="odometer-wrap"><div class="odometer" data-odometer-final="62">0</div><sub>K</sub></div><!-- /.odometer-wrap -->
                            <h4 class="promo-title">Total Members</h4><!--  /.promo-title -->
                        </div><!-- /.promo-number -->
                    </div><!-- /.col-lg-3 -->
                </div><!-- /.fanfact-promo-numbers -->
            </div><!-- /.container -->
        </div><!--~~./ end fanfact block ~~-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Faqs Block
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="faqs-block style-one pd-b-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="faq-thumb" data-animate="hg-fadeInLeft">
                            <img src="assets/images/others/faq1.png" alt="Thumbnail">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-title">
                            <div class="subtitle" data-animate="hg-fadeInUp">frequently asked questions</div>
                            <h2 class="title-main" data-animate="hg-fadeInUp">Ask Your Question</h2><!-- /.title-main -->
                            <div class="title-text" data-animate="hg-fadeInUp">
                                Blandit rutrum auctor eu quis euismod, eget porta feugiat, ut nec sit. Est fusce enim dapibus commodo  pulvinar con
                            </div><!-- /.title-text -->
                        </div><!-- /.section-title -->
                        <div class="faq-wrapper" data-animate="hg-fadeInUp">
                            <div class="faq-item open active">
                                <div class="faq-title">
                                    <h4 class="title">Quam nibh viverra blandit praesent ?</h4>
                                </div>
                                <div class="faq-content">
                                    <p>Fusce nulla mus quam proin, eget vestibulum elementum potenti mus ipsum. Phasellus nulla inceptos. Et vivamus magna ac, amet quisque tortor.</p>
                                </div>
                            </div><!-- /.faq-item -->
                            <div class="faq-item">
                                <div class="faq-title">
                                    <h4 class="title">Praesent aliquet at volutpat conv llisvivamus ?</h4>
                                </div>
                                <div class="faq-content">
                                    <p>Fusce nulla mus quam proin, eget vestibulum elementum potenti mus ipsum. Phasellus nulla inceptos. Et vivamus magna ac, amet quisque tortor.</p>
                                </div>
                            </div><!-- /.faq-item -->
                            <div class="faq-item">
                                <div class="faq-title">
                                    <h4 class="title">Sociis ratione aliquam lectus suspendis ?</h4>
                                </div>
                                <div class="faq-content">
                                    <p>Fusce nulla mus quam proin, eget vestibulum elementum potenti mus ipsum. Phasellus nulla inceptos. Et vivamus magna ac, amet quisque tortor.</p>
                                </div>
                            </div><!-- /.faq-item -->
                            <div class="faq-item">
                                <div class="faq-title">
                                    <h4 class="title">Adipiscing, feugiat ornare pretium luctus ?</h4>
                                </div>
                                <div class="faq-content">
                                    <p>Fusce nulla mus quam proin, eget vestibulum elementum potenti mus ipsum. Phasellus nulla inceptos. Et vivamus magna ac, amet quisque tortor.</p>
                                </div>
                            </div><!-- /.faq-item -->
                        </div><!-- /.faq-wrapper -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!--~~./ end faqs block ~~-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Our Vision Block
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="our-vision-block bg-primary pd-t-120">
            <div class="shape-group">
                <div class="shape"></div>
                <div class="shape"></div>
                <div class="shape"></div>
                <div class="shape"></div>
                <div class="shape"></div>
            </div>

            <div class="section-vertical-title-area">
                <h2 class="vertical-title"><span>our</span> vision</h2>
            </div><!-- /.section-vertical-title-area -->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="our-vision-content-area">
                            <div class="our-vision-content bg-image" style="background-image: url('assets/images/shape/shape-dot2.png')">
                                <div class="element-effect">
                                    <img class="line" src="assets/images/vactor/line2.png" alt="Icon">
                                    <img class="triangle" src="assets/images/vactor/triangle2.png" alt="Icon">
                                    <img class="rectangle" src="assets/images/vactor/rectangle.png" alt="Icon">
                                    <img class="circle" src="assets/images/vactor/circle.png" alt="Icon">
                                </div><!-- /.element-effect -->
                                <div class="vision-info-list">
                                    <div class="card-info-one" data-animate="hg-fadeInUp">
                                        <div class="icon bg-green">
                                            <span class="flaticon-employee-1"></span>
                                        </div><!-- /.icon-->
                                        <div class="info">
                                            <h3 class="heading">Customer Relationship</h3>
                                            <p>Blandit rutrum auctor eu quis euismod, eget porta feugiat, ut nec sit. Est fusce enim dapibus commodo felis</p>
                                        </div><!-- /.info -->
                                    </div><!-- /.card-info-one -->
                                    <div class="card-info-one" data-animate="hg-fadeInUp">
                                        <div class="icon bg-red">
                                            <span class="flaticon-bar-chart"></span>
                                        </div><!-- /.icon-->
                                        <div class="info">
                                            <h3 class="heading">Our Company Growth</h3>
                                            <p>Blandit rutrum auctor eu quis euismod, eget porta feugiat, ut nec sit. Est fusce enim dapibus commodo felis</p>
                                        </div><!-- /.info -->
                                    </div><!-- /.card-info-one -->
                                    <div class="card-info-one" data-animate="hg-fadeInUp">
                                        <div class="icon bg-turquoise">
                                            <span class="flaticon-employee"></span>
                                        </div><!-- /.icon-->
                                        <div class="info">
                                            <h3 class="heading">100M Members</h3>
                                            <p>Blandit rutrum auctor eu quis euismod, eget porta feugiat, ut nec sit. Est fusce enim dapibus commodo felis</p>
                                        </div><!-- /.info -->
                                    </div><!-- /.card-info-one -->
                                </div>
                            </div><!-- /.our-vision-content -->
                            <div class="vision-thumb-area" data-animate="hg-fadeInLeft">
                                <img src="assets/images/others/vision-thumb.png" alt="Thumb">
                            </div>
                        </div><!-- /.our-vision-content-area -->
                    </div>
                </div>
            </div><!-- /.container -->
        </div><!--~~./ end our vision block ~~-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Testimonial Block
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="testimonial-block style-two ptb-120">
            <div class="element-effect">
                <img class="star" src="assets/images/vactor/star2.png" alt="Icon">
                <img class="line" src="assets/images/vactor/line.png" alt="Icon">
                <img class="triangle" src="assets/images/vactor/triangle.png" alt="Icon">
                <img class="rectangle" src="assets/images/vactor/rectangle.png" alt="Icon">
                <img class="circle" src="assets/images/vactor/circle.png" alt="Icon">
            </div><!-- /.element-effect -->
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-9">
                        <div class="section-title">
                            <div class="subtitle" data-animate="hg-fadeInUp">Client Feedback</div>
                            <h2 class="title-main" data-animate="hg-fadeInUp">What’s Say Our Client</h2><!-- /.title-main -->
                        </div><!-- /.section-title -->
                    </div><!-- /.col-lg-9 -->
                    <div class="col-lg-3">
                        <!-- side thumbnail -->
                        <div class="testimonail-carousel-thumb" data-animate="hg-fadeInLeft">
                            <div class="thumb-prev">
                                <img src="#" alt="Customer Feedback">
                            </div><!-- /.thumb-prev -->
                            <div class="thumb-active">
                                <img src="#" alt="Customer Feedback">
                            </div><!-- /.thumb-active -->
                            <div class="thumb-next">
                                <img src="#" alt="Customer Feedback">
                            </div><!-- /.thumb-next -->
                        </div><!-- /.testimonail-carousel-thumb -->
                    </div>
                </div><!-- /.row -->

                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="testimonail-carousel-area" data-animate="hg-fadeInUp">
                            <div id="testimonail-carousel2" class="owl-carousel">
                                <div class="testimonial-item">
                                    <div class="thumbnails shape-thumb-area">
                                        <div class="shape-thumb">
                                            <img src="assets/images/testimonials/1.jpg" alt="img">
                                        </div>
                                        <div class="shape-border"></div>
                                    </div><!-- /.thumbnails -->
                                    <div class="testimonial-info">
                                        <div class="details">
                                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit sed quia non qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit. Red quia numquam eius modi. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consecteturLorem </p>
                                        </div><!-- /.details -->
                                        <div class="client-area">
                                            <div class="info">
                                                <div class="sing">
                                                    <img src="assets/images/others/sign.png" alt="Thumb">
                                                </div>
                                                <h4 class="company-name">Thesoftking</h4><!-- /.client-name -->
                                                <p class="client-name">Julia Morthin (CEO & Founder )</p>
                                                <div class="total-reviews">
                                                    <ul>
                                                        <li class="color"><i class="fa fa-star"></i></li>
                                                        <li class="color"><i class="fa fa-star"></i></li>
                                                        <li class="color"><i class="fa fa-star"></i></li>
                                                        <li class="color"><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div><!-- /.info -->
                                        </div><!-- /.client-area -->
                                    </div><!-- /.testimonial-info -->
                                </div><!-- /.testimonial-item -->

                                <div class="testimonial-item">
                                    <div class="thumbnails shape-thumb-area">
                                        <div class="shape-thumb">
                                            <img src="assets/images/testimonials/2.jpg" alt="img">
                                        </div>
                                        <div class="shape-border"></div>
                                    </div><!-- /.thumbnails -->
                                    <div class="testimonial-info">
                                        <div class="details">
                                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit sed quia non qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit. Red quia numquam eius modi. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consecteturLorem </p>
                                        </div><!-- /.details -->
                                        <div class="client-area">
                                            <div class="info">
                                                <div class="sing">
                                                    <img src="assets/images/others/sign.png" alt="Thumb">
                                                </div>
                                                <h4 class="company-name">BrothersLab</h4><!-- /.client-name -->
                                                <p class="client-name">Julia Morthin (CEO & Founder )</p>
                                                <div class="total-reviews">
                                                    <ul>
                                                        <li class="color"><i class="fa fa-star"></i></li>
                                                        <li class="color"><i class="fa fa-star"></i></li>
                                                        <li class="color"><i class="fa fa-star"></i></li>
                                                        <li class="color"><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div><!-- /.info -->
                                        </div><!-- /.client-area -->
                                    </div><!-- /.testimonial-info -->
                                </div><!-- /.testimonial-item -->

                                <div class="testimonial-item">
                                    <div class="thumbnails shape-thumb-area">
                                        <div class="shape-thumb">
                                            <img src="assets/images/testimonials/3.jpg" alt="img">
                                        </div>
                                        <div class="shape-border"></div>
                                    </div><!-- /.thumbnails -->
                                    <div class="testimonial-info">
                                        <div class="details">
                                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit sed quia non qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit. Red quia numquam eius modi. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consecteturLorem </p>
                                        </div><!-- /.details -->
                                        <div class="client-area">
                                            <div class="info">
                                                <div class="sing">
                                                    <img src="assets/images/others/sign.png" alt="Thumb">
                                                </div>
                                                <h4 class="company-name">IdealBrothers</h4><!-- /.client-name -->
                                                <p class="client-name">Julia Morthin (CEO & Founder )</p>
                                                <div class="total-reviews">
                                                    <ul>
                                                        <li class="color"><i class="fa fa-star"></i></li>
                                                        <li class="color"><i class="fa fa-star"></i></li>
                                                        <li class="color"><i class="fa fa-star"></i></li>
                                                        <li class="color"><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div><!-- /.info -->
                                        </div><!-- /.client-area -->
                                    </div><!-- /.testimonial-info -->
                                </div><!-- /.testimonial-item -->

                                <div class="testimonial-item">
                                    <div class="thumbnails shape-thumb-area">
                                        <div class="shape-thumb">
                                            <img src="assets/images/testimonials/4.jpg" alt="img">
                                        </div>
                                        <div class="shape-border"></div>
                                    </div><!-- /.thumbnails -->
                                    <div class="testimonial-info">
                                        <div class="details">
                                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit sed quia non qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit. Red quia numquam eius modi. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consecteturLorem </p>
                                        </div><!-- /.details -->
                                        <div class="client-area">
                                            <div class="info">
                                                <div class="sing">
                                                    <img src="assets/images/others/sign.png" alt="Thumb">
                                                </div>
                                                <h4 class="company-name">Thesoftking</h4><!-- /.client-name -->
                                                <p class="client-name">Julia Morthin (CEO & Founder )</p>
                                                <div class="total-reviews">
                                                    <ul>
                                                        <li class="color"><i class="fa fa-star"></i></li>
                                                        <li class="color"><i class="fa fa-star"></i></li>
                                                        <li class="color"><i class="fa fa-star"></i></li>
                                                        <li class="color"><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div><!-- /.info -->
                                        </div><!-- /.client-area -->
                                    </div><!-- /.testimonial-info -->
                                </div><!-- /.testimonial-item -->
                            </div><!-- /#testimonail-carousel -->
                            <div class="dots-thumb">
                                <img src="assets/images/shape/shape-dot-small.png" alt="Dots">
                            </div>
                        </div>
                    </div><!-- /.col-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!--~~./ end testimonial block ~~-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Work brand Block
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="work-brand-block style-one pd-b-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="brand-list" data-animate="hg-fadeInLeft">
                            <div class="brands-link">
                                <img src="assets/images/brand/1.png" alt="logo">
                            </div><!-- /.brands-link -->
                            <div class="brands-link">
                                <img src="assets/images/brand/2.png" alt="logo">
                            </div><!-- /.brands-link -->
                            <div class="brands-link">
                                <img src="assets/images/brand/3.png" alt="logo">
                            </div><!-- /.brands-link -->
                            <div class="brands-link">
                                <img src="assets/images/brand/4.png" alt="logo">
                            </div><!-- /.brands-link -->
                            <div class="brands-link">
                                <img src="assets/images/brand/5.png" alt="logo">
                            </div><!-- /.brands-link -->
                        </div><!-- /.brand-list -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="section-title">
                            <div class="subtitle" data-animate="hg-fadeInUp">Our trust partners</div>
                            <h2 class="title-main" data-animate="hg-fadeInUp">Become A Partner</h2><!-- /.title-main -->
                            <div class="title-text" data-animate="hg-fadeInUp">
                                Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit sed quia non qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit. Red quia numquam
                            </div><!-- /.title-text -->
                        </div><!-- /.section-title -->
                        <div class="work-brand-content" data-animate="hg-fadeInUp">
                            <a class="btn btn-default btn-primary" href="#">Become A Partner</a>
                        </div><!-- /.work-brand-content -->
                    </div><!-- /.col-lg-6 -->
                </div>
            </div>
        </div><!--~./ end work brand block ~-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Latest News Block
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="latest-news-block bg-gradient ptb-120">
            <div class="container ml-b-30">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="section-title text-center">
                            <div class="subtitle" data-animate="hg-fadeInUp">Larest News Post</div>
                            <h2 class="title-main" data-animate="hg-fadeInUp">Our Company News</h2><!-- /.title-main -->
                            <div class="title-text" data-animate="hg-fadeInUp">
                                Blandit rutrum auctor eu quis euismod, eget porta feugiat, ut nec sit. Est fusce enim dapibus commodo  pulvinar con
                            </div><!-- /.title-text -->
                        </div><!-- /.section-title -->
                    </div><!-- /.col-lg-10 -->
                </div><!-- /.row -->

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <article class="post post-grid" data-animate="hg-fadeInUp">
                            <div class="entry-meta-content">
                                <div class="entry-author">
                                    <div class="thumb">
                                        <img src="assets/images/author/2.png" alt="Thumb">
                                    </div>
                                    <div class="info">
                                        By - <a href="#">Max Jusin</a>
                                    </div>
                                </div><!-- /.entry-author -->
                                <div class="entry-date"><span>Dec 25,2019</span></div>
                            </div><!-- /.entry-meta-content -->

                            <figure class="post-thumb">
                                <a href="blog-single.html">
                                    <img src="assets/images/blog/post/grid/1.jpg" alt="Blog Image" />
                                </a>
                            </figure><!--  /.post-thumb -->
                            <div class="post-details">
                                <h2 class="entry-title"><a href="blog-single.html">Amet pulvinar varius phare trasem tristique </a></h2><!-- /.entry-title -->
                                <div class="entry-content">
                                    <p>Pretium, porta donec, aliqumtes justo ipsum ulibepede urna maecequet. oisl purus suscipit Neque porro.</p>
                                </div><!-- /.entry-content -->
                            </div><!-- /.post-details -->
                        </article><!-- /.post -->
                    </div><!-- /.col-lg-4 -->

                    <div class="col-lg-4 col-md-6">
                        <article class="post post-grid" data-animate="hg-fadeInUp">
                            <div class="entry-meta-content">
                                <div class="entry-author">
                                    <div class="thumb">
                                        <img src="assets/images/author/2.png" alt="Thumb">
                                    </div>
                                    <div class="info">
                                        By - <a href="#">Max Jusin</a>
                                    </div>
                                </div><!-- /.entry-author -->
                                <div class="entry-date"><span>Dec 25,2019</span></div>
                            </div><!-- /.entry-meta-content -->

                            <figure class="post-thumb">
                                <a href="blog-single.html">
                                    <img src="assets/images/blog/post/grid/2.jpg" alt="Blog Image" />
                                </a>
                            </figure><!--  /.post-thumb -->
                            <div class="post-details">
                                <h2 class="entry-title"><a href="blog-single.html">Wretium donec temp pede nascetur purus</a></h2><!-- /.entry-title -->
                                <div class="entry-content">
                                    <p>Pretium, porta donec, aliqumtes justo ipsum ulibepede urna maecequet. oisl purus suscipit Neque porro.</p>
                                </div><!-- /.entry-content -->
                            </div><!-- /.post-details -->
                        </article><!-- /.post -->
                    </div><!-- /.col-lg-4 -->

                    <div class="col-lg-4 col-md-6">
                        <article class="post post-grid" data-animate="hg-fadeInUp">
                            <div class="entry-meta-content">
                                <div class="entry-author">
                                    <div class="thumb">
                                        <img src="assets/images/author/2.png" alt="Thumb">
                                    </div>
                                    <div class="info">
                                        By - <a href="#">Max Jusin</a>
                                    </div>
                                </div><!-- /.entry-author -->
                                <div class="entry-date"><span>Dec 25,2019</span></div>
                            </div><!-- /.entry-meta-content -->

                            <figure class="post-thumb">
                                <a href="blog-single.html">
                                    <img src="assets/images/blog/post/grid/3.jpg" alt="Blog Image" />
                                </a>
                            </figure><!--  /.post-thumb -->
                            <div class="post-details">
                                <h2 class="entry-title"><a href="blog-single.html">Donec imperdiet  umagna tortor gravida </a></h2><!-- /.entry-title -->
                                <div class="entry-content">
                                    <p>Pretium, porta donec, aliqumtes justo ipsum ulibepede urna maecequet. oisl purus suscipit Neque porro.</p>
                                </div><!-- /.entry-content -->
                            </div><!-- /.post-details -->
                        </article><!-- /.post -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!--~~./ end latest news block ~~-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Site Footer
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <footer class="site-footer bg-primary pd-t-120" style="background-image: url('assets/images/shape/cloud-star.png')">
            <div class="footer-cloud-bg" style="background-image: url('assets/images/shape/cloud.png')"></div>
            <div class="footer-bottom-shape" style="background-image: url('assets/images/shape/footer-bottom-shape.png')"></div>

            <div class="man-coin">
                <img src="assets/images/vactor/man.png" alt="Man Coin">
            </div><!-- /.man-coin -->

            <div class="star-group">
                <img src="assets/images/vactor/star.png" alt="Star">
                <img src="assets/images/vactor/star.png" alt="Star">
                <img src="assets/images/vactor/star.png" alt="Star">
                <img src="assets/images/vactor/star.png" alt="Star">
                <img src="assets/images/vactor/star.png" alt="Star">
            </div><!-- /.star-group -->
            <div class="tree-group">
                <div class="tree-item-left" data-animate="hg-fadeInLeft">
                    <img src="assets/images/vactor/tree1.png" alt="Tree">
                </div>
                <div class="tree-item-right" data-animate="hg-fadeInRight">
                    <img src="assets/images/vactor/tree2.png" alt="Tree">
                </div>
            </div><!-- /.star-group -->

            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                Start Footer Widget Area
            ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <div class="footer-widget-area">
                <div class="container">
                    <div class="row">
                        <!--~~~~~ Start Widget About us ~~~~~-->
                        <div class="col-lg-4">
                            <aside class="widget widget_about">
                                <div class="widget-content">
                                    <div class="about-loga">
                                        <img src="/assets/images/logo-light-icon.png" alt="Site Logo" />
                                    </div>
                                    <p>There are many variations of lor spassages of lorem Ipsum available internet tend to repeat pfined. tincidunt porttitor, vitae nulla tellus dapiArcu leo wisi nonummy</p>
                                    <div class="call-info">
                                        <h4 class="title">Hello Us</h4>
                                        <p>+111 - 333 - 9999</p>
                                    </div>
                                </div>
                            </aside>
                        </div><!--~./ end about us widget ~-->

                        <!--~~~~~ Start Widget Links ~~~~~-->
                         <!--~~~~~ Start Widget Links ~~~~~-->
                         <div class="col-lg-3">
                            <aside class="widget widget_links">
                                <h2 class="widget-title">Useful link</h2>
                                <div class="widget-content">
                                    <ul>
                                        <li><a href="/about">About</a></li>

                                        <li><a href="/privacy">Privacy policy</a></li>
                                        <li><a href="/support">Support</a></li>

                                        <li><a href="/ruleandregulations">Terms & Conditions</a></li>
                                    </ul>
                                </div>
                            </aside>
                        </div><!--~./ end links widget ~-->

                        <!--~~~~~ Start Widget Links ~~~~~-->
                        <div class="col-lg-3">
                            <aside class="widget widget_links">
                                <h2 class="widget-title">Our Featured</h2>
                                <div class="widget-content">
                                    <ul>
                                        <li><a href="#!">Easy Access Account</a></li>
                                        <li><a href="#!">Website Security</a></li>
                                        <li><a href="#!">Daily Earnings</a></li>
                                        <li><a href="#!">Fast Withdeawal</a></li>
                                        <li><a href="#!">Global Business</a></li>
                                        <li><a href="#!">Fast Income</a></li>
                                    </ul>
                                </div>
                            </aside>
                        </div><!--~./ end links widget ~-->

                        <!--~~~~~ Start Widget Links ~~~~~-->
                        <div class="col-lg-3">
                            <aside class="widget widget_links">
                                <h2 class="widget-title">My Account</h2>
                                <div class="widget-content">
                                    <ul>
                                        <li><a href="#!">Press inquiries</a></li>
                                        <li><a href="#!">Social media directories</a></li>
                                        <li><a href="#!">Speaker requests</a></li>
                                        <li><a href="#!">Permissions</a></li>
                                        <li><a href="#!">Speaker requests</a></li>
                                    </ul>
                                </div>
                            </aside>
                        </div><!--~./ end links widget ~-->
                    </div>
                </div>
            </div><!--~./ end footer widgets area ~-->

            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                Start Footer Bottom Area
            ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <div class="footer-bottom-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="copyright-text text-center">
                                <p>Copyright  © <?php echo e(date('Y')); ?> . All rights reserved</p>
                            </div><!--~./ end copyright text ~-->
                        </div><!--~./ col-12 ~-->
                    </div>
                </div>
            </div><!--~./ end footer bottom area ~-->
        </footer><!--~./ end site footer ~-->
    </div><!--~~./ end site content ~~-->


    <!-- All The JS Files
    ================================================== -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/meanmenu.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/theia-sticky-sidebar.min.js"></script>
    <script src="assets/js/ResizeSensor.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/lightcase.js"></script>
    <script src="assets/js/simple-scrollbar.min.js"></script>
    <script src="assets/js/scrolla.jquery.min.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/isInViewport.jquery.js"></script>
    <script src="assets/js/circle-progress.min.js"></script>
    <script src="assets/js/chartist.min.js"></script>
    <script src="assets/js/chartistPoint.js"></script>
    <script src="assets/js/main.js"></script><!-- main-js -->
</body>
</html>



