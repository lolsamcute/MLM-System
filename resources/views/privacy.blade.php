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
                                            <li><a  href="/about">About</a></li>
                                            <li>
                                                <a href="/faqs">Faq</a>
                                            </li>

                                            <li>
                                                <a class="active" href="/support">Support</a>
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
                                <h2 class="page-title">Privacy Policy</h2>
                            </div><!--~~./ page-header-caption ~~-->
                            <div class="breadcrumb-area">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active">Privacy Policy</li>
                                </ol>
                            </div><!--~~./ breadcrumb-area ~~-->
                        </div><!--~~./ page-header-content ~~-->
                    </div>
                </div>
            </div><!--~~./ end container ~~-->
        </div><!--~~./ end page title area ~~-->

         <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Privacy Policy Block
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="privacy-policy-block ptb-120">
            <div class="container ml-b-5">
                <div class="row">
                    <div class="col-12">
                        <div class="page-info-content privacy-policy-content">
                            <div class="single-info-block">
                                <h2 class="heading">How we collect personal information</h2>
                                <p>Tiam nisl sit quis, ante tempus pede phasellus vitae nulla, id semper vestibulum. Auctor pulvinar eget id at aliquam, lorem mattis praesent donec amet magna in, mauris etiam est ligula cras. Nec quisque. Pellentesque eget suspendisse ut. In eros, magna auctor augue ligula, amet vel erat amet litora ante. Auctor vestibulum erat vulputate, eget dictum amet quisque sem, a quaerat sed, ipsum aenean integer tellus, rutrum feugiat pellentesque turpis pede a quam.</p>
                                <p>Libero tincidunt tristique, vestibulum tempor ipsum praesent. A a, dolor in dui mauris sed proin sit, mattis ipsum id molestie integer sollicitudin, quis vivamus hymenaeos mi leo, sed condimentum. Sodales dolore vestibulum </p>
                                <ol>
                                    <li>Sociis ratione aliquam lectus donec non, augue vivamus tempor, ante convallis risus interdum. Augue dui id proin pellentesque nam facilis, cum lacus augue, amet tellus integer lectus. Nec enim quam dolor rhoncus risus, taciti in orci pellentesque, mollis metus, magnis morbi sed sollicitudin tortor vitae auctor, vehicula lorem eros nunc in metus. Lorem wisi vel, quis ut sapien, quis montes purus morbi. Fames massa tincidunt ac posuere placerat, ante nec suspendisse sociis, eros libero lacus nulla iste quis, penatibus sollicitudin</li>
                                    <li>Aliquet nulla nunc placerat lacus, nibh vestibulum morbi massa non. Nibh vehicula ante adipiscing, feugiat ornare pretium luctus  sapien sagittis posuere dolor, eget eligendi odio libero laoreet fugiat mi. Lectus vitae..</li>
                                    <li>Massa id lectus eget vestibulum, tellus neque sem. Lorem a, aliquam enim orci cras lacus pellentesque, malesuada lacus neque nulla vitae libero varius, varius adipiscing lacus nam vehicula est. Viverra turpis fusce, viverra suspendisse. Ultrices maecenas in. Nunc enim.</li>
                                    <li>Dictum vestibulum nulla justo sed, ligula rutrum sollicitudin, vivamus non. Nunc donec tincidunt, vivamus repellat habitant, in elit accumsan faucibus ante in mauris. Lorem purus leo eleifend semper sit, donec duis vel orci lorem consectetuer, lacus lorem praesent elit odio ut, tortor id, justo malesuada donec orci tortor, pellentesque elit, in quis litora eget mauris in odio, a aliquet et velit aptent. Adipiscing nonummy. Rhoncus maecenas possimus, commodo sed habitasse a eu wisi, placerat platea et amet cras. Mi tempor dis tristique at arcu</li>
                                </ol>
                            </div><!-- /.single-info-block -->

                            <div class="single-info-block">
                                <h2 class="heading">How we keep your personal information secure</h2>
                                <p>Rhoncus morbi ad consequat distinctio vivamus, sapien nec eiusmod morbi, hendrerit scelerisque non. Felis sed magna cras porttitor, egestas donec libero euismod dis in nonummy, orci orci. Lacus at integer vel gravida varius quam, fermentum justo, magna ac id nullam dis laoreet. Fermentum diam, hendrerit orci aut ligula eu, nec neque dolor rutrum enim. Velit dapibus quisque sed pellentesque, id odio, ligula quis eros torquent, id mattis vestibulum, id iaculis pretium viverra non varius quis. Venenatis sed amet erat sed sit, massa dui feugiat, massa auctor aliquet, morbi nunc cras quam. Cras dolor sunt curabitur, cum non consectetuer a et vestibulum bibendum.Massa id lectus eget vestibulum, tellus neque sem. Lorem a, aliquam enim orci cras lacus pellentesque, malesuada lacus neque nulla vitae libero varius, varius adipiscing lacus nam vehicula est. Viverra turpis faucibus nec vulputate, mauris in suspendisse condimentum. Maecenas suspendisse magnis porta nunc pede convallis, quis sed justo, tempor quisque lobortis ipsum massa. Iusto consequat dolor nulla posuere in, id consectetuer turpis sollicitudin et a leo, justo erat nulla. Sagittis consequat quisque, pulvinar natoque, aliquet aliquam. Dui lobortis iaculis nullam adipiscing, eu nec. Faucibus vitae etiam, integer pulvinar. Morbi tellus dolor felis, at volutpat nisl tortor elementum, pellentesque rhoncus sed et nec faucibus rutrum, non suspendisse, eget erat. Tristique sodales quam augue nullam consectetuer blandit, libero tincidunt per dolor. Vel lacus neque libero, velit donec volutpat aliquam, orci donec, tortor aliquam aenean magna bibendum in, aliquam felis tristique fusce suspendisse.Nunc vel quisque per, imperdiet neque cras tellus metus, hendrerit integer ligula felis, justo est pellentesque non sed, rhoncus vitae mattis vehicula dolor</p>
                                <p>Libero ipsum. Cum arcu enim est erat expedita, eu taciti in enim consectetuer amet, molestie aliquam porttitor curabitur magna mauris cursus, molestie nam illum proin odio integer vel, cursus porta massa adipiscing imperdiet sit. Wisi nulla justo neque felis aliquet. Neque etiam, leo ipsum vestibulum nunc, ipsum congue elit. Arcu libero, curabitur ac posuere nam, quam duis wisi mauris tincidunt a sagittis. Purus malesuada rutrum, augue auctor eum in quam scelerisque sed, tempus odio, nunc lorem sapien ac nibh montes, aptent aliquam odio turpis commodo tristique. </p>
                                <ul>
                                    <li> lectus assumenda lobortis nisl. Ut condimentum. Ante leo eget platea integer, viverra mattis vitae lorem id eget, purus quam nunc wisi, ac orci, ut id libero montes. Scelerisque vel dictum adipiscing, purus libero proin augue ac aliquet, ac venenatis, vitae suspendisse non metus turpis magna</li>
                                    <li> lectus assumenda lobortis nisl. Ut condimentum. Ante leo eget platea integer, viverra mattis vitae lorem id eget, purus quam nunc wisi, ac orci, ut id libero montes. Scelerisque vel dictum adipiscing, purus libero proin augue ac aliquet, ac venenatis, vitae suspendisse non metus turpis magna</li>
                                    <li> lectus assumenda lobortis nisl. Ut condimentum. Ante leo eget platea integer, viverra mattis vitae lorem id eget, purus quam nunc wisi, ac orci, ut id libero montes. Scelerisque vel dictum adipiscing, purus libero proin augue ac aliquet, ac venenatis, vitae suspendisse non metus turpis magna</li>
                                </ul>
                            </div><!-- /.single-info-block -->

                            <div class="single-info-block">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h2 class="heading">When we need to update this policy</h2>
                                        <p>Massa id lectus eget vestibulum, tellus neque sem. Lorem a, aliquam enim orci cras lacus pellentesque, malesuada lacus neque nulla vitae libero varius, varius adipiscing lacus nam vehicula est. Viverra turpis faucibus nec vulputate, mauris in suspendisAmet pellentesque pellentesque. Bibendum ut, turpis varius aliquam nullam accusantium turpis aliquam, et accumsan sit. </p>
                                        <p>Vestibulum conAmet in fugiat amet. Volutpat sem fringilla, maecenas dignissim sociis leo netus quisque. Aliquam eros fusce odioconsequat lacus mi, integer dictum eget id commodo id, auctor lacus sapien aliquam, eu at consectetuer adipiscing amet mauris fermentum. A nulla facilisi. Justo aliquam feugiat erat, magna sapien quis cras scelerisque accumsan, nunc odio aenean pede sem, mi vel commodo mauris</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="thumb text-right">
                                            <img src="assets/images/others/privacy.png" alt="Thumbnail">
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.single-info-block -->

                            <div class="single-info-block">
                                <h2 class="heading">How we keep your personal information secure</h2>
                                <p>Rhoncus morbi ad consequat distinctio vivamus, sapien nec eiusmod morbi, hendrerit scelerisque non. Felis sed magna cras porttitor, egestas donec libero euismod dis in nonummy, orci orci. Lacus at integer vel gravida varius quam, fermentum justo, magna ac id nullam dis laoreet. Fermentum diam, hendrerit orci aut ligula eu, nec neque dolor rutrum enim. Velit dapibus quisque sed pellentesque, id odio, ligula quis eros torquent, id mattis vestibulum, id iaculis pretium viverra non varius quis. Venenatis sed amet erat sed sit, massa dui feugiat, massa auctor aliquet, morbi nunc cras quam. Cras dolor sunt curabitur, cum non consectetuer a et vestibulum bibendum.Massa id lectus eget vestibulum, tellus neque sem. Lorem a, aliquam enim orci cras lacus pellentesque, malesuada lacus neque nulla vitae libero varius, varius adipiscing lacus nam vehicula est. Viverra turpis faucibus nec vulputate, mauris in suspendisse condimentum. Maecenas suspendisse magnis porta nunc pede convallis, quis sed justo, tempor quisque lobortis ipsum massa. Iusto consequat dolor nulla posuere in, id consectetuer turpis sollicitudin et a leo, justo erat nulla. Sagittis consequat quisque, pulvinar natoque, aliquet aliquam. Dui lobortis iaculis nullam adipiscing, eu nec. Faucibus vitae etiam, integer pulvinar. Morbi tellus dolor felis, at volutpat nisl tortor elementum, pellentesque rhoncus sed et nec faucibus rutrum, non suspendisse, eget erat. Tristique sodales quam augue nullam consectetuer blandit, libero tincidunt per dolor. Vel lacus neque libero, velit donec volutpat aliquam, orci donec, tortor aliquam aenean magna bibendum in, aliquam felis tristique fusce suspendisse.Nunc vel quisque per, imperdiet neque cras tellus metus, hendrerit integer ligula felis, justo est pellentesque non sed, rhoncus vitae mattis vehicula dolor.</p>
                                <p>libero ipsum. Cum arcu enim est erat expedita, eu taciti in enim consectetuer amet, molestie aliquam porttitor curabitur magna mauris cursus, molestie nam illum proin odio integer vel, cursus porta massa adipiscing imperdiet sit. Wisi nulla justo neque felis aliquet. Neque etiam, leo ipsum vestibulum nunc, ipsum congue elit. Arcu libero, curabitur ac posuere nam, quam duis wisi mauris tincidunt a sagittis. Purus malesuada rutrum, augue auctor eum in quam scelerisque sed, tempus odio, nunc lorem sapien ac nibh montes, aptent aliquam odio turpis commodo tristique. </p>
                                <div class="single-info-block-inner">
                                    <h3 class="sub-heading">Fees & Renewals</h3>
                                    <p>Dictum vestibulum nulla justo sed, ligula rutrum sollicitudin, vivamus non. Nunc donec tincidunt, vivamus repellat habitanaccumsan faucibus ante in mauris. Lorem purus leo eleifend semper sit, donec duis vel orci lorem consectetuer, lacus lorem praesent elit odio ut, tortor id metus fermentum mi ipsum, quisque proin. Aptent aliquet facilisis.</p>
                                </div><!-- /.single-info-block-inner -->

                                <div class="single-info-block-inner">
                                    <h3 class="sub-heading">Notification</h3>
                                    <p>Ondimentum. Ante leo eget platea integer, viverra mattis vitae lorem id eget, purus quam nunc wisi, ac orci, ut id libero montes. Scelerisque vel ictum vestibulum nulla justo sed, ligula rutrum sollicitudin, vivamus non. </p>
                                </div><!-- /.single-info-block-inner -->

                                <div class="single-info-block-inner">
                                    <h3 class="sub-heading">Intellectual Property</h3>
                                    <p>Amet pellentesque pellentesque. Bibendum ut tellus maecenas vitae, tincidunt fermentum parturient, turpis varius aliquam nullam accusantium turpis aliquam, et accumsan sit. Id eu ligula elit euismod, dolor et odio vestibulum consequat venenatis donec, nunc fames donec vestibulum eros vestibulum conubia, numquam risus ipsum sollicitudin sint ut. Felis in erat, ultricies venenatis eget nulla lorem nibh massa, non aliquam non laoreet, eget nec duis at justo, ut amet in fugiat amet. Volutpat sem fringilla, maecenas dignissim sociisMolestie magna. Nunc id, lectus tempor massa vel id, justo wisi, pellentesque neque feugiat sapien ipsum lacus sit.</p>
                                    <p>Sed nulla eros lectus lacusNunc vel quisque per, imperdiet neque cras tellus metus, hendrerit integer ligula felis, justo est pellentesque non sed, rhoncus vitae mattis vehicula dolor libero ipsum. Cum arcu enim est erat expedita</p>
                                </div><!-- /.single-info-block-inner -->
                            </div><!-- /.single-info-block -->
                        </div><!-- /.page-info-content -->
                    </div><!-- /.col-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!--~~./ end privacy policy block ~~-->

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



