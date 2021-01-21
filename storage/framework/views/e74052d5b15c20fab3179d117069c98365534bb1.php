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
                                <a class="mobile-logo" href="index.html">
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
            Start Page Title Area
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="page-title-area bg-primary" style="background-image: url('assets/images/shape/shape-dot1.png')">
            <div class="shape-group">
                <div class="shape"></div>
                <div class="shape"></div>
                <div class="shape"></div>
                <div class="shape"></div>
            </div><!-- /.shape-group -->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="page-header-content text-center">
                            <div class="page-header-caption">
                                <h2 class="page-title">About Us</h2>
                            </div><!--~~./ page-header-caption ~~-->
                            <div class="breadcrumb-area">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active">About</li>
                                </ol>
                            </div><!--~~./ breadcrumb-area ~~-->
                        </div><!--~~./ page-header-content ~~-->
                    </div>
                </div>
            </div><!--~~./ end container ~~-->
        </div><!--~~./ end page title area ~~-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start About Us Block
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="about-us-block ptb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-mock-up-thumb">
                            <div class="mock-up-thumb" data-animate="hg-fadeInLeft">
                                <img src="assets/images/about/about1.jpg" alt="Thumbnail">
                            </div><!-- /.mock-up-thumb -->
                            <div class="mock-up-thumb" data-animate="hg-fadeInLeft">
                                <img src="assets/images/about/about2.jpg" alt="Thumbnail">
                            </div><!-- /.mock-up-thumb -->
                        </div><!-- /.about-mock-up-thumb -->
                        <div class="experience-info-area bg-image bg-overlay-primary" style="background-image: url('assets/images/bg/experiance-bg.jpg')"  data-animate="hg-fadeInUp">
                            <div class="experience-info">
                                24+ Years <span>experience</span>
                            </div><!-- /.experience-info -->
                        </div><!-- /.experience-info-area -->
                    </div><!-- /.col-lg-6 -->

                    <div class="col-lg-6">
                        <div class="about-us-content md-mrt-60">
                            <div class="section-title">
                                <div class="subtitle" data-animate="hg-fadeInUp">About Our Company</div>
                                <h2 class="title-main" data-animate="hg-fadeInUp">About Company</h2><!-- /.title-main -->
                                <div class="title-text" data-animate="hg-fadeInUp">
                                    Blandit rutrum auctor eu quis euismod, eget porta feugiat, ut nec sit. Est fusce enim dapibus commodo  pulvinar con
                                </div><!-- /.title-text -->
                            </div><!-- /.section-title -->
                            <div class="about-info-list">
                                <div class="single-info" data-animate="hg-fadeInUp">
                                    <div class="info-header">
                                        <div class="about-icon icon-small icon-red">
                                            <div class="shape-icon"></div>
                                            <div class="icon">
                                                <span class="flaticon-scroll"></span>
                                            </div>
                                        </div><!-- /.about-icon-->
                                        <div class="info-title">
                                            <h3 class="heading">Our History</h3>
                                        </div><!-- /.info-icon -->
                                    </div><!-- /.info-title -->
                                    <div class="info">
                                        <p>Blandit rutrum auctor eu quis euismod, eget porta feugiat, ut nec sit. Est fusce enim dapibus commodo felis</p>
                                    </div><!-- /.info -->
                                </div><!-- /.single-info -->

                                <div class="single-info" data-animate="hg-fadeInUp">
                                    <div class="info-header">
                                        <div class="about-icon icon-small icon-green">
                                            <div class="shape-icon"></div>
                                            <div class="icon">
                                                <span class="flaticon-target-1"></span>
                                            </div>
                                        </div><!-- /.about-icon-->
                                        <div class="info-title">
                                            <h3 class="heading">Our Mission</h3>
                                        </div><!-- /.info-icon -->
                                    </div><!-- /.info-title -->
                                    <div class="info">
                                        <p>Blandit rutrum auctor eu quis euismod, eget porta feugiat, ut nec sit. Est fusce enim dapibus commodo felis</p>
                                    </div><!-- /.info -->
                                </div><!-- /.single-info -->

                                <div class="single-info" data-animate="hg-fadeInUp">
                                    <div class="info-header">
                                        <div class="about-icon icon-small">
                                            <div class="shape-icon"></div>
                                            <div class="icon">
                                                <span class="flaticon-telephone"></span>
                                            </div>
                                        </div><!-- /.about-icon-->
                                        <div class="info-title">
                                            <h3 class="heading">Best Support</h3>
                                        </div><!-- /.info-icon -->
                                    </div><!-- /.info-title -->
                                    <div class="info">
                                        <p>Blandit rutrum auctor eu quis euismod, eget porta feugiat, ut nec sit. Est fusce enim dapibus commodo felis</p>
                                    </div><!-- /.info -->
                                </div><!-- /.single-info -->
                            </div>
                        </div><!-- /.about-us-content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!--~~./ end about us block ~~-->

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
            Start Investor Block
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="investor-block pd-b-120">
            <div class="container ml-b-5">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-title">
                            <div class="subtitle" data-animate="hg-fadeInUp">36k Investors in here</div>
                            <h2 class="title-main" data-animate="hg-fadeInUp">Our Top Investor</h2><!-- /.title-main -->
                            <div class="title-text" data-animate="hg-fadeInUp">
                                Blandit rutrum auctor eu quis euismod, eget porta feugiat, ut nec sit. Est fusce enim dapibus commodo  pulvinar con
                            </div><!-- /.title-text -->
                        </div><!-- /.section-title -->
                    </div>
                    <div class="col-lg-6">
                        <div class="btn-links-area text-right">
                            <button class="btn-links btn-prev">
                                <span class="fa fa-angle-left"></span>
                            </button>
                            <button class="btn-links btn-next">
                                <span class="fa fa-angle-right"></span>
                            </button>
                        </div><!-- /.btn-links-area -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="investor-carousel owl-carousel" data-animate="hg-fadeInUp">
                            <div class="investor-item">
                                <figure class="investor-thumb">
                                    <img src="assets/images/investor/1.jpg" alt="Sport Thumb">
                                    <div class="invest-amount">$20000.00 USD</div>
                                </figure><!-- /.investor-thumb -->
                                <div class="investor-info">
                                    <h3 class="investor-name"><a href="single-investor.html">Nir Proman</a></h3>
                                    <div class="designation">Business man</div>
                                </div><!-- /.investor-info -->
                            </div><!-- /.investor-item -->
                            <div class="investor-item">
                                <figure class="investor-thumb">
                                    <img src="assets/images/investor/2.jpg" alt="Sport Thumb">
                                    <div class="invest-amount">$15000.00 USD</div>
                                </figure><!-- /.investor-thumb -->
                                <div class="investor-info">
                                    <h3 class="investor-name"><a href="single-investor.html">Mark Henri</a></h3>
                                    <div class="designation">Business man</div>
                                </div><!-- /.investor-info -->
                            </div><!-- /.investor-item -->
                            <div class="investor-item">
                                <figure class="investor-thumb">
                                    <img src="assets/images/investor/3.jpg" alt="Sport Thumb">
                                    <div class="invest-amount">$10000.00 USD</div>
                                </figure><!-- /.investor-thumb -->
                                <div class="investor-info">
                                    <h3 class="investor-name"><a href="single-investor.html">Jonathon Doe</a></h3>
                                    <div class="designation">Business man</div>
                                </div><!-- /.investor-info -->
                            </div><!-- /.investor-item -->
                        </div><!-- /.investor-carousel -->
                    </div><!-- /.col-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!--~~./ end investor block ~~-->

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
                        <div class="pricing-box style-two pricing-green" data-animate="hg-fadeInUp">
                            <div class="pricing-icon">
                                <span class="flaticon-bars"></span>
                            </div><!-- /.pricing-icon-->
                            <div class="package-price">
                                <div class="pricing">1.75%</div>
                                Daily For Lifetime
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
                        <div class="pricing-box style-two pricing-red" data-animate="hg-fadeInUp">
                            <div class="pricing-icon">
                                <span class="flaticon-piggy-bank"></span>
                            </div><!-- /.pricing-icon-->

                            <div class="package-price">
                                <div class="pricing">5%</div>
                                Daily For 40 Days
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
                        <div class="pricing-box style-two" data-animate="hg-fadeInUp">
                            <div class="pricing-icon">
                                <span class="flaticon-analytics"></span>
                            </div><!-- /.pricing-icon-->

                            <div class="package-price">
                                <div class="pricing">10%</div>
                                Daily For 90 Days
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
            Start Testimonial Block
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="testimonial-block pd-t-120 bg-gradient">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="section-title text-center">
                            <div class="subtitle" data-animate="hg-fadeInUp">Client Feedback</div>
                            <h2 class="title-main" data-animate="hg-fadeInUp">What’s Say Our Client</h2><!-- /.title-main -->
                            <div class="title-text" data-animate="hg-fadeInUp">
                                Blandit rutrum auctor eu quis euismod, eget porta feugiat, ut nec sit. Est fusce enim dapibus commodo  pulvinar con
                            </div><!-- /.title-text -->
                        </div><!-- /.section-title -->
                    </div><!-- /.col-lg-10 -->
                </div><!-- /.row -->

                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="testimonail-carousel-main" data-animate="hg-fadeInUp">
                            <div id="testimonail-carousel" class="owl-carousel">
                                <div class="testimonial-item">
                                    <div class="client-area">
                                        <div class="thumbnails">
                                            <img src="assets/images/testimonials/one/1.png" alt="img">
                                        </div><!-- /.thumbnails -->
                                        <div class="info">
                                            <h4 class="client-name">Bilsans Max</h4><!--  /.client-name -->
                                            <p class="client-designation">Business man</p>
                                        </div><!-- /.info -->
                                    </div><!-- /.client-area -->
                                    <div class="details">
                                        <p>Pretium, porta donec, aliqumtes justo ipsum ulibepede urna maecequet. oisl purus suscipit Neque porro.</p>
                                        <div class="total-reviews">
                                            <ul>
                                                <li class="color"><i class="fa fa-star"></i></li>
                                                <li class="color"><i class="fa fa-star"></i></li>
                                                <li class="color"><i class="fa fa-star"></i></li>
                                                <li class="color"><i class="fa fa-star"></i></li>
                                                <li class="color"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div><!-- /.details -->
                                </div><!-- /.testimonial-item -->
                                <div class="testimonial-item">
                                    <div class="client-area">
                                        <div class="thumbnails">
                                            <img src="assets/images/testimonials/one/2.png" alt="img">
                                        </div><!-- /.thumbnails -->
                                        <div class="info">
                                            <h4 class="client-name">Jordan Weyker</h4><!--  /.client-name -->
                                            <p class="client-designation">Business man</p>
                                        </div><!-- /.info -->
                                    </div><!-- /.client-area -->
                                    <div class="details">
                                        <p>Pretium, porta donec, aliqumtes justo ipsum ulibepede urna maecequet. oisl purus suscipit Neque porro.</p>
                                        <div class="total-reviews">
                                            <ul>
                                                <li class="color"><i class="fa fa-star"></i></li>
                                                <li class="color"><i class="fa fa-star"></i></li>
                                                <li class="color"><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div><!-- /.details -->
                                </div><!-- /.testimonial-item -->
                                <div class="testimonial-item">
                                    <div class="client-area">
                                        <div class="thumbnails">
                                            <img src="assets/images/testimonials/one/3.png" alt="img">
                                        </div><!-- /.thumbnails -->
                                        <div class="info">
                                            <h4 class="client-name">Maktrek Moe</h4><!--  /.client-name -->
                                            <p class="client-designation">Business man</p>
                                        </div><!-- /.info -->
                                    </div><!-- /.client-area -->
                                    <div class="details">
                                        <p>Pretium, porta donec, aliqumtes justo ipsum ulibepede urna maecequet. oisl purus suscipit Neque porro.</p>
                                        <div class="total-reviews">
                                            <ul>
                                                <li class="color"><i class="fa fa-star"></i></li>
                                                <li class="color"><i class="fa fa-star"></i></li>
                                                <li class="color"><i class="fa fa-star"></i></li>
                                                <li class="color"><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div><!-- /.details -->
                                </div><!-- /.testimonial-item -->
                                <div class="testimonial-item">
                                    <div class="client-area">
                                        <div class="thumbnails">
                                            <img src="assets/images/testimonials/one/4.png" alt="img">
                                        </div><!-- /.thumbnails -->
                                        <div class="info">
                                            <h4 class="client-name">Jordan Weyker</h4><!--  /.client-name -->
                                            <p class="client-designation">Business man</p>
                                        </div><!-- /.info -->
                                    </div><!-- /.client-area -->
                                    <div class="details">
                                        <p>Pretium, porta donec, aliqumtes justo ipsum ulibepede urna maecequet. oisl purus suscipit Neque porro.</p>
                                        <div class="total-reviews">
                                            <ul>
                                                <li class="color"><i class="fa fa-star"></i></li>
                                                <li class="color"><i class="fa fa-star"></i></li>
                                                <li class="color"><i class="fa fa-star"></i></li>
                                                <li class="color"><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div><!-- /.details -->
                                </div><!-- /.testimonial-item -->
                            </div><!-- /#testimonail-carousel -->
                        </div><!-- /.testimonail-carousel-main -->
                    </div><!-- /.col-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!--~~./ end testimonial block ~~-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Work brand Block
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="work-brand-block ptb-120">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!--~~ Start Brands Carousel ~~-->
                        <div class="brands-carousel-main" data-animate="hg-fadeInUp">
                            <div class="brands-carousel owl-carousel">
                                <div class="brands-link">
                                    <img src="assets/images/brand/1.png" alt="logo">
                                </div>
                                <div class="brands-link">
                                    <img src="assets/images/brand/2.png" alt="logo">
                                </div>
                                <div class="brands-link">
                                    <img src="assets/images/brand/3.png" alt="logo">
                                </div>
                                <div class="brands-link">
                                    <img src="assets/images/brand/4.png" alt="logo">
                                </div>
                            </div>
                        </div><!--~./ end brands carousel ~-->
                    </div>
                </div>
            </div>
        </div><!--~./ end popular brands block ~-->

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
                        <div class="col-lg-3">
                            <aside class="widget widget_links">
                                <h2 class="widget-title">Useful link</h2>
                                <div class="widget-content">
                                    <ul>
                                        <li><a href="/about">About</a></li>

                                        <li><a href="privacy.html">Privacy policy</a></li>
                                        <li><a href="/support">Support</a></li>

                                        <li><a href="#!">Terms & Conditions</a></li>
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



