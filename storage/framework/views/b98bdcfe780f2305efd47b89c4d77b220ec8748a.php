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
    <title>Support</title>

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
                                            <li><a  href="/about">About</a></li>
                                            <li>
                                                <a href="/faqs">Faq</a>
                                            </li>

                                            <li>
                                                <a class="active" href="/support">Support</a>
                                            </li>
                                            <li>

                                                    <?php if(Route::has('login')): ?>
                                                    <div class="form-group-btn">
                                                    <?php if(auth()->guard()->check()): ?>
                                                    <a class="btn btn-default btn-white" href="<?php echo e(url('/home')); ?>">Dashboard</a>
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
                                <h2 class="page-title">Support</h2>
                            </div><!--~~./ page-header-caption ~~-->
                            <div class="breadcrumb-area">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item active">Support Us</li>
                                </ol>
                            </div><!--~~./ breadcrumb-area ~~-->
                        </div><!--~~./ page-header-content ~~-->
                    </div>
                </div>
            </div><!--~~./ end container ~~-->
        </div><!--~~./ end page title area ~~-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Contact Info Block
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="contact-info-block ptb-120">
            <div class="container ml-b-30">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="contact-info-item" data-animate="hg-fadeInUp">
                            <div class="icon">
                                <img src="assets/images/icon/location.png" alt="Icon">
                            </div><!-- /.icon -->

                            <div class="card-info">
                                <h2 class="heading">Address</h2><!-- /.heading -->
                                <p>Mogrd Road 56B, Best Town 6593 MT, Wordwide Country</p>
                            </div><!-- /.card-info -->
                        </div><!-- /.contact-info-item -->
                    </div><!-- /.col-lg-4 -->

                    <div class="col-lg-4 col-md-6">
                        <div class="contact-info-item" data-animate="hg-fadeInUp">
                            <div class="icon">
                                <img src="assets/images/icon/phone.png" alt="Icon">
                            </div><!-- /.icon -->
                            <div class="card-info">
                                <h2 class="heading">Phone Number</h2><!-- /.heading -->
                                <p>158 - 128 - 489</p>
                                <p>568 - 489 - 879</p>
                            </div><!-- /.card-info -->
                        </div><!-- /.contact-info-item -->
                    </div><!-- /.col-lg-4 -->

                    <div class="col-lg-4 col-md-6">
                        <div class="contact-info-item" data-animate="hg-fadeInUp">
                            <div class="icon">
                                <img src="assets/images/icon/time.png" alt="Icon">
                            </div><!-- /.icon -->
                            <div class="card-info">
                                <h2 class="heading">Working Hours</h2><!-- /.heading -->
                                <p>Mon to Fri : 10am to 05 pm </p>
                                <p>Sunday Closd</p>
                            </div><!-- /.card-info -->
                        </div><!-- /.contact-info-item -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!--~~./ end contact info block ~~-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Contact Form Block
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="contact-form-block pd-b-120">
            <div class="container">
                <div class="row align-content-center">
                    <div class="col-lg-6">
                        <div class="contact-thumb md-mrb-60" data-animate="hg-fadeInLeft">
                            <img src="assets/images/others/contact.png" alt="Thumbnail">
                        </div>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="contact-form-area">
                            <h2 class="section-heading" data-animate="hg-fadeInUp">Get In Touch</h2>

                                  <?php if(session('success')): ?>
                <div class="alert alert-contrast alert-success alert-dismissible" role="alert">
                  <div class="icon"><span class="s7-check"></span></div>
                  <div class="message">
                    <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span class="s7-close" aria-hidden="true"></span></button><strong>Success!</strong> Your Ticket is Sumbitted Successfully, Our Support team will get back to you shortly within 24hrs
                  </div>
                </div>
                <?php endif; ?>


                 <?php if(session('error')): ?>
                <div class="alert alert-contrast alert-danger alert-dismissible" role="alert">
                  <div class="icon"><span class="s7-check"></span></div>
                  <div class="message">
                    <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span class="s7-close" aria-hidden="true"></span></button><strong>Error!</strong> Failed!! Please try again!
                  </div>
                </div>
                <?php endif; ?>



                                 <form class="contact-form" action="/support" method="POST" data-animate="hg-fadeInUp">
                                <?php echo csrf_field(); ?>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="name">Your Name</label>
                                            <input class="form-controller" type="text" id="name" name="name" type="text">
                                        </div>
                                    </div><!--./ col-12-->
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="email">Your Email</label>
                                            <input class="form-controller" type="email" id="email" name="email" type="email">
                                        </div>
                                    </div><!--./ col-12 -->
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="name">Subject</label>
                                            <input class="form-controller" type="text" id="subject" name="subject" type="Subject">
                                        </div>
                                    </div><!--./ col-12 -->

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="message">Message</label>
                                            <textarea id="message" name="message" class="form-controller" rows="4" cols="50"></textarea>
                                        </div>
                                    </div><!-- /.col-12 -->
                                    <div class="col-12 mrt-15">
                                        <button type="submit" class="btn btn-default btn-primary">Send Message</button>
                                    </div><!--./ col-lg-6 -->
                                </div><!-- /.row -->
                            </form><!-- /.contact-form -->
                        </div><!-- /.contact-form-area -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!--~~./ end contact form block ~~-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Contact Callus Block
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="contact-callus-block bg-primary" style="background-image: url('assets/images/shape/branch-info.png')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-branch-info text-white ptb-120">
                            <div class="section-title text-white">
                                <div class="subtitle" data-animate="hg-fadeInUp">Hello with Us</div>
                                <h2 class="title-main" data-animate="hg-fadeInUp">Our Branch</h2><!-- /.title-main -->
                                <div class="title-text" data-animate="hg-fadeInUp">
                                    Blandit rutrum auctor eu quis euismod, eget porta feugiat, ut nec sit. Est fusce enim dapibus commodo  pulvinar con
                                </div><!-- /.title-text -->
                            </div><!-- /.section-title -->
                            <div class="branch-list" data-animate="hg-fadeInUp">
                                <div class="single-branch">
                                    <h3 class="heading">Uttra</h3>
                                    <p>Uttra,1462/2 Road 56B, Dhaka - 1230</p>
                                </div><!-- /.single-branch -->
                                <div class="single-branch">
                                    <h3 class="heading">Dhanmondi</h3>
                                    <p>Dhanmondi Road 58A, Dhaka - 1212</p>
                                </div><!-- /.single-branch -->
                                <div class="single-branch">
                                    <h3 class="heading">Mirpur</h3>
                                    <p>Mirpur Road 45C, Dhaka - 1216</p>
                                </div><!-- /.single-branch -->
                            </div><!-- /.branch-list -->
                            <a href="contact.html" class="btn btn-default btn-white" data-animate="hg-fadeInUp">Contact Us</a>
                        </div><!-- /.contact-branch-info -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="contact-call-info ptb-120">
                            <h2 class="call-heading" data-animate="hg-fadeInUp">Call Us</h2>
                            <h3 class="call-no" data-animate="hg-fadeInUp">888 555 8888</h3>
                            <p>If we can help you on your journey ! <br>
                                Or<br>
                                check out our FAQ’s </p>
                            <a href="contact.html" class="btn btn-default btn-primary">FAQ’S</a>
                        </div><!-- /.contact-call-info -->
                    </div><!-- /.col-lg-6 -->
                </div>
            </div>
        </div><!--~./ end contact callus block ~-->

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



