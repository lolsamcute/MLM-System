<!doctype html>
<html lang="zxx {{ str_replace('_', '-', app()->getLocale()) }}">

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
                                            <li><a href="/about">About</a></li>
                                            <li>
                                                <a class="active" href="/faqs">Faq</a>
                                            </li>

                                            <li>
                                                <a href="/support">Support</a>
                                            </li>
                                            <li>

                                                    @if (Route::has('login'))
                                                    <div class="form-group-btn">
                                                    @auth
                                                    <a class="btn btn-default btn-white" href="{{ url('/home') }}">Home</a>
                                                    @else
                                                    <a class="btn btn-default btn-white" href="{{ route('login') }}">Login</a>

                                                        @if (Route::has('register'))
                                                        <a class="btn btn-default btn-white" href="{{ route('register') }}">Register</a>
                                                        @endif
                                                    @endauth
                                                </div>
                                            @endif



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
                                <h2 class="page-title">frequently asked questions</h2>
                            </div><!--~~./ page-header-caption ~~-->
                            <div class="breadcrumb-area">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item active">FAQs</li>
                                </ol>
                            </div><!--~~./ breadcrumb-area ~~-->
                        </div><!--~~./ page-header-content ~~-->
                    </div>
                </div>
            </div><!--~~./ end container ~~-->
        </div><!--~~./ end page title area ~~-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Faqs Block
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="faqs-block style-two ptb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="faq-thumb md-mrb-55" data-animate="hg-fadeInLeft">
                            <img src="assets/images/others/faq2.jpg" alt="Thumbnail">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="faq-item-list">
                            <div class="faq-item" data-animate="hg-fadeInUp">
                                <div class="faq-no bg-green">01</div>
                                <div class="faq-info">
                                    <h4 class="faq-title">Suspendisse parturient egestas vitae ?</h4>
                                    <p>Fusce nulla mus quam proin, eget vestibulum elementum potenti mus ipsum. Phasellus nulla inceptos. Et vivamus magna ac, amet quisque tortor. Integer lacus.</p>
                                </div>
                            </div><!-- /.faq-item -->
                            <div class="faq-item" data-animate="hg-fadeInUp">
                                <div class="faq-no bg-red">02</div>
                                <div class="faq-info">
                                    <h4 class="faq-title">Maecenas aliquet sapien feugiat ?</h4>
                                    <p>Fusce nulla mus quam proin, eget vestibulum elementum potenti mus ipsum. Phasellus nulla inceptos. Et vivamus magna ac, amet quisque tortor. Integer lacus.</p>
                                </div>
                            </div><!-- /.faq-item -->
                            <div class="faq-item" data-animate="hg-fadeInUp">
                                <div class="faq-no bg-curious-blue">03</div>
                                <div class="faq-info">
                                    <h4 class="faq-title">Eempor ante convallis risus interdum ?</h4>
                                    <p>Fusce nulla mus quam proin, eget vestibulum elementum potenti mus ipsum. Phasellus nulla inceptos. Et vivamus magna ac, amet quisque tortor. Integer lacus.</p>
                                </div>
                            </div><!-- /.faq-item -->
                        </div><!-- /.faq-item-list -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!--~~./ end faqs block ~~-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Faqs Block
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="faqs-block style-three pd-b-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="faq-wrapper ml-b-10">
                            <div class="faq-item open active" data-animate="hg-fadeInUp">
                                <div class="faq-title">
                                    <h4 class="title">Quam nibh viverra blandit praesent ?</h4>
                                </div>
                                <div class="faq-content">
                                    <p>Fusce nulla mus quam proin, eget vestibulum elementum potenti mus ipsum. Phasellus nulla inceptos. Et vivamus magna ac, amet quisque tortor.</p>
                                </div>
                            </div><!-- /.faq-item -->
                            <div class="faq-item" data-animate="hg-fadeInUp">
                                <div class="faq-title">
                                    <h4 class="title">Praesent aliquet at volutpat conv llisvivamus ?</h4>
                                </div>
                                <div class="faq-content">
                                    <p>Fusce nulla mus quam proin, eget vestibulum elementum potenti mus ipsum. Phasellus nulla inceptos. Et vivamus magna ac, amet quisque tortor.</p>
                                </div>
                            </div><!-- /.faq-item -->
                            <div class="faq-item" data-animate="hg-fadeInUp">
                                <div class="faq-title">
                                    <h4 class="title">Sociis ratione aliquam lectus suspendis ?</h4>
                                </div>
                                <div class="faq-content">
                                    <p>Fusce nulla mus quam proin, eget vestibulum elementum potenti mus ipsum. Phasellus nulla inceptos. Et vivamus magna ac, amet quisque tortor.</p>
                                </div>
                            </div><!-- /.faq-item -->
                            <div class="faq-item" data-animate="hg-fadeInUp">
                                <div class="faq-title">
                                    <h4 class="title">Adipiscing, feugiat ornare pretium luctus ?</h4>
                                </div>
                                <div class="faq-content">
                                    <p>Fusce nulla mus quam proin, eget vestibulum elementum potenti mus ipsum. Phasellus nulla inceptos. Et vivamus magna ac, amet quisque tortor.</p>
                                </div>
                            </div><!-- /.faq-item -->
                        </div><!-- /.faq-wrapper -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="faq-thumb md-mrt-60" data-animate="hg-fadeInRight">
                            <img src="assets/images/others/faq3.jpg" alt="Thumbnail">
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!--~~./ end faqs block ~~-->



        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Faqs Block
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="faqs-block style-two ptb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="faq-thumb md-mrb-60" data-animate="hg-fadeInLeft">
                            <img src="assets/images/others/faq4.jpg" alt="Thumbnail">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="faq-item-list style-two">
                            <div class="faq-item" data-animate="hg-fadeInUp">
                                <div class="faq-icon icon-small">
                                    <div class="shape-icon"></div>
                                    <div class="icon">
                                        <span class="flaticon-question"></span>
                                    </div>
                                </div><!-- /.faq-icon-->
                                <div class="faq-info">
                                    <h4 class="faq-title">Nibh vehicula ante adipiscing ?</h4>
                                    <p>Fusce nulla mus quam proin, eget vestibulum elementum potenti mus ipsum. Phasellus nulla inceptos. Et vivamus magna ac, amet quisque tortor. Integer lacus.</p>
                                </div>
                            </div><!-- /.faq-item -->
                            <div class="faq-item" data-animate="hg-fadeInUp">
                                <div class="faq-icon icon-small icon-red">
                                    <div class="shape-icon"></div>
                                    <div class="icon">
                                        <span class="flaticon-question"></span>
                                    </div>
                                </div><!-- /.faq-icon-->
                                <div class="faq-info">
                                    <h4 class="faq-title">Placerat nunc blandit felis ?</h4>
                                    <p>Fusce nulla mus quam proin, eget vestibulum elementum potenti mus ipsum. Phasellus nulla inceptos. Et vivamus magna ac, amet quisque tortor. Integer lacus.</p>
                                </div>
                            </div><!-- /.faq-item -->
                            <div class="faq-item" data-animate="hg-fadeInUp">
                                <div class="faq-icon icon-small icon-primary">
                                    <div class="shape-icon"></div>
                                    <div class="icon">
                                        <span class="flaticon-question"></span>
                                    </div>
                                </div><!-- /.faq-icon-->
                                <div class="faq-info">
                                    <h4 class="faq-title">Agnissim nisl erat mauris aliqu ?</h4>
                                    <p>Fusce nulla mus quam proin, eget vestibulum elementum potenti mus ipsum. Phasellus nulla inceptos. Et vivamus magna ac, amet quisque tortor. Integer lacus.</p>
                                </div>
                            </div><!-- /.faq-item -->
                        </div><!-- /.faq-wrapper -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!--~~./ end faqs block ~~-->


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
                                <p>Copyright  © {{date('Y')}} . All rights reserved</p>
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



