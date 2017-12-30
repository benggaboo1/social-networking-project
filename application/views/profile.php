<div id="about-page">



            <!-- header begin -->
            <header class="page-head">
                <div class="header-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">

                                <ol class="breadcrumb">
                                    <li><a href="index.html">home</a></li>
                                    <li class="active">profile</li>
                                </ol> <!-- end of /.breadcrumb -->

                            </div>
                        </div>
                    </div> <!-- /.container -->
                </div> <!-- /.header-wrapper -->
            </header> <!-- /.page-head (header end) -->

            <div class="main-content">



                <!-- begin our designation section -->

                <section class="bg-white designation">
                    <div class="container">

                        <div class="headline text-center">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3">
                                    <h2 class="section-title">profile page</h2>
                                </div>
                            </div>
                        </div> <!-- /.headline -->

                        <div class="team-list">
                            <div class="container">
                                <div class="row">
                                    
                                    <div class="col-md-4">
                                        <div class="team-member-box text-center">
                                            <img src="assets/img/team-member3.jpg" class="img-responsive center-block" alt="team-member 3">
                                            <div class="cmnt-clipboard"><span class="btn-clipboard"><i class="fa fa-edit"></i></span></div>
                                            <div class="team-member-description">
                                                <div class="team-member-about">
                                                    <h4><?=$profileData->first_name?> <?=$profileData->last_name?></h4>
                                                    <p><?=$profileData->age?> - <?=$profileData->gender?></p>
                                                    <p>Birthday: <?=$profileData->birthday?></p>
                                                    <p>Year Graduated: <?=$profileData->year_graduated?></p>
                                                    <!-- <p>Phasellus sit amet tristique ligula. Donec iaculis leo suscipit ultricies</p> -->
                                                </div> <!-- end of /.team-member-about -->
                                                <div class="team-member-social">
                                                    <a href="#">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="fa fa-linkedin"></i>
                                                    </a>
                                                </div> <!-- end of /.team-member-social -->
                                            </div> <!-- end of /.team-member-description -->
                                        </div> <!-- end of /.team-member-box -->
                                    </div>
                                    
                                </div>
                            </div>
                        </div> <!-- end of /.team-list -->

                        <!-- contact adresses section begin -->
                        <section class="contact-address bg-white">
                            <div class="row">

                                <div class="col-md-6 col-xs-12">
                                    <div class="address-info">
                                        <div class="row">

                                            <div class="col-md-3 col-xs-3">
                                                <div class="address-info-icon text-center center-block bg-light-gray">
                                                    <i class="fa fa-map-marker"></i>
                                                </div> <!-- /.address-info-icon -->
                                            </div>

                                            <div class="col-md-9 col-xs-9 address-info-desc">
                                                <h3>Address</h3>
                                                <p>
                                                    <?=$profileData->address?>
                                                </p>
                                            </div> <!-- /.address-info-desc -->

                                        </div>
                                    </div> <!-- /.address-info -->
                                </div>

                                <div class="col-md-6 col-xs-12">
                                    <div class="address-info">
                                        <div class="row">

                                            <div class="col-md-3 col-xs-3">
                                                <div class="address-info-icon text-center center-block bg-light-gray">
                                                    <i class="fa fa-phone"></i>
                                                </div> <!-- /.address-info-icon -->
                                            </div>

                                            <div class="col-md-9 col-xs-9 address-info-desc">
                                                <h3>Contact Number</h3>
                                                <p>
                                                    Mobile: <?=$profileData->contact_number?>
                                                </p>
                                            </div> <!-- /.address-info-desc -->

                                        </div>
                                    </div> <!-- /.address-info -->
                                </div>

                                <div class="col-md-6 col-xs-12">
                                    <div class="address-info">
                                        <div class="row">

                                            <div class="col-md-3 col-xs-3">
                                                <div class="address-info-icon text-center center-block bg-light-gray">
                                                    <i class="fa fa-envelope-o"></i>
                                                </div> <!-- /.address-info-icon -->
                                            </div>

                                            <div class="col-md-9 col-xs-9 address-info-desc">
                                                <h3>Email Address</h3>
                                                <p>
                                                    info@example.com
                                                    <br/>
                                                    www.example.com
                                                </p>
                                            </div> <!-- /.address-info-desc -->

                                        </div>
                                    </div> <!-- /.address-info -->
                                </div>

                                <div class="col-md-6 col-xs-12">
                                    <div class="address-info">
                                        <div class="row">

                                            <div class="col-md-3 col-xs-3">
                                                <div class="address-info-icon text-center center-block bg-light-gray">
                                                    <i class="fa fa-user"></i>
                                                </div> <!-- /.address-info-icon -->
                                            </div>

                                            <div class="col-md-9 col-xs-9 address-info-desc">
                                                <h3><?=$profileData->occupation?></h3>
                                                <p>
                                                    <?=$profileData->company_address?>
                                                </p>
                                            </div> <!-- /.address-info-desc -->

                                        </div>
                                    </div> <!-- /.address-info -->
                                </div>

                            </div>
                        </section> <!-- /.contact-address -->
                    </div>
                </section>
                 <!-- end of designation section -->


                 <!-- begin skill section -->

                <section class="bg-light-gray skill">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h2>show off your skills</h2>
                                <p>
                                    Integer ac metus non ipsum congue tincidunt ut id lacus. Duis suscipit odio non lacus aliquam, eget faucibus enim posuere. Aenean ut lectus ipsum. Pellentesque sit amet elementum velit. Ut sapien ante, suscipit a auctor in, consectetur eu nibh. Etiam interdum consectetur lacus ut iaculis. In luctus magna vitae ultricies consequat.
                                </p>

                                <p>
                                    In et blandit erat, ut gravida ante. Etiam ut est at dolor vehicula tempus quis ut augue. Duis nec ipsum ex. Sed in libero sit amet metus placerat commodo ut vitae nisi. Maecenas sit amet elit augue. Pellentesque pellentesque lacus eu fringilla dignissim. Aliquam consequat nec sapien quis tempor. 
                                </p>
                            </div>

                            <div class="col-md-6">
                                <div class="skill-level">
                                    <p>Mobile Application</p>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100" style="width: 52%;">
                                            52%
                                         </div>
                                    </div>

                                    <p>Website Design</p>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width: 98%;">
                                            98%
                                         </div>
                                    </div>

                                    <p>Development</p>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                                            75%
                                         </div>
                                    </div>

                                    <p>Branding</p>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
                                            30%
                                         </div>
                                    </div>
                                </div> <!-- /.skill-level -->
                            </div>
                        </div>
                    </div>
                </section>

                <section class="bg-white sponsor">
                    <div class="container">
                        <div id="sponsor-list" class="owl-carousel owl-theme">

                            <div class="item">
                                <img src="assets/img/sponsor1.png" alt="sponsor1" class="center-block" style="width: 165px; height: 127px;">
                            </div>

                            <div class="item">
                                <img src="assets/img/sponsor2.png" alt="sponsor2" class="center-block" style="width: 165px; height: 127px;">
                            </div>

                            <div class="item">
                                <img src="assets/img/sponsor3.png" alt="sponsor3" class="center-block" style="width: 165px; height: 127px;">
                            </div>

                            <div class="item">
                                <img src="assets/img/sponsor4.png" alt="sponsor4" class="center-block" style="width: 165px; height: 127px;" >
                            </div>

                            <div class="item">
                                <img src="assets/img/sponsor5.png" alt="sponsor5" class="center-block" style="width: 165px; height: 127px;">
                            </div>

                            <div class="item">
                                <img src="assets/img/sponsor6.png" alt="sponsor6" class="center-block" style="width: 165px; height: 127px;">
                            </div>

                        </div> <!--  / #sponsor-list /.owl-carousel -->
                    </div>
                </section>

            </div> <!-- end of /.main-content -->


            <footer>
                <div class="container">
                    <div class="row">

                        <!-- useful links -->
                        <div class="col-md-3 col-sm-6 col-xs-6 footer-widget">
                            <h4>Useful Links</h4>
                            <ul class="row footer-links">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <li><a href="#">Web Design</a></li>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Mobile</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Services</a></li>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <li><a href="#">Organization</a></li>
                                    <li><a href="#">Career</a></li>
                                    <li><a href="#">Media</a></li>
                                    <li><a href="#">24/7</a></li>
                                    <li><a href="#">Right Way</a></li>
                                </div>
                            </ul>
                        </div>

                        <!-- recent news -->
                        <div class="col-md-3 col-sm-6 col-xs-6 footer-widget">
                            <h4>Recent News</h4>

                            <div class="row footer-news">
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <img src="assets/img/intro.jpg" class="img-responsive center-block" alt="recent news 1">
                                </div>
                                <div class="col-md-8 col-sm-4 col-xs-6">
                                    <div class="row">
                                        <p class="text-capitalize">
                                            <a href="#">
                                                a clear website gives more experience to the visitors
                                            </a>
                                        </p>
                                        <p class="news-date">Dec 12,2015</p>
                                    </div>
                                </div>
                            </div> <!-- /.footer-news -->

                            <div class="row footer-news">
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <img src="assets/img/intro.jpg" class="img-responsive center-block" alt="recent news 2">
                                </div>
                                <div class="col-md-8 col-sm-4 col-xs-6">
                                    <div class="row">
                                        <p class="text-capitalize">
                                            <a href="#">
                                                a clear website gives more experience to the visitors
                                            </a>
                                        </p>
                                        <p class="news-date">Dec 12,2015</p>
                                    </div>
                                </div>
                            </div> <!-- /.footer-news -->
                        </div> <!-- /.footer-widget -->

                        <!-- news-letter -->
                        <div class="col-md-3 col-sm-6 col-xs-6 footer-widget">
                            <h4>E-News-Letter</h4>

                            <p>Sign up for our mailing list to get latest updates and offers</p>
                            <div class="input-group margin-bottom-sm">
                                <input class="form-control" type="text" placeholder="Email address">
                                <span class="input-group-addon">
                                    <i class="fa fa-paper-plane fa-fw"></i>
                                </span>
                            </div>
                            <p>We respect your privacy</p>
                        </div> <!-- /.footer-widget -->

                        <!-- about avada agency -->
                        <div class="col-md-3 col-sm-6 col-xs-6 footer-widget">
                            <h4>Avada Agency</h4>

                            <p>
                                HUGE Website Builder is a big library of pre-designed web elements which help you to create website in few minutes.
                            </p>

                            <div class="footer-address">
                                <p>
                                    1-800-123-HELLO  <br>
                                    example@mail.com
                                </p>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="footer-share-button">
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul> <!-- /.footer-share-button -->
                                </div>
                            </div>
                        </div> <!-- /.footer-widget -->

                    </div>
                </div>
            </footer>


            <!-- footer-navigation start -->  
            <nav class="hidden-xs hidden-sm navbar footer-nav" role="navigation">
                <div class="container">
                    
                    <div class="navbar-header">
                        
                        <!-- navbar logo -->
                        <div class="navbar-brand">
                            <span class="sr-only">&copy;THEMEWAGON</span>
                            <a href="index.html">
                                &copy;THEMEWAGON
                            </a>
                        </div>
                        <!-- navbar logo -->

                    </div><!-- /.navbar-header -->

                    <!-- nav links -->
                    <div class="collapse navbar-collapse" id="main-nav-collapse">
                        <ul class="nav navbar-nav navbar-right text-capitalize">
                            <li><a href="#about">
                                <span>home</span>
                            </a></li>

                            <li><a href="#services">
                                <span>pages</span>
                            </a></li>

                            <li><a href="#portfolio">
                                <span>features</span>
                            </a></li>

                            <li><a href="#team">
                                <span>portfolio</span>
                            </a></li>

                            <li><a href="#pricing">
                                <span>blog</span>
                            </a></li>

                            <li><a href="#blog">
                                <span>shop</span>
                            </a></li>

                            <li><a href="#contact">
                                <span>contact</span>
                            </a></li>
                        </ul>
                    </div><!-- nav links -->
                    
                </div><!-- /.container -->
            </nav>
            <!-- footer-navigation end -->

        </div>
         <!-- end of /#about-page -->
                   

        <!--  Necessary scripts  
        <script type="text/javascript" src="assets/js/jquery-2.1.3.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/owl.carousel.js"></script> -->


        <!-- script for sponsor using owl carousel -->

        <script type="text/javascript">
            $(document).ready(function() {
 
                $("#sponsor-list").owlCarousel({
                 
                    autoPlay: 3000, //Set AutoPlay to 3 seconds
                    stopOnHover: true,
                    items : 4,
                    itemsDesktop: [1200,4],
                    itemsDesktopSmall: [991,3],
                    itemsTablet: [767,2],
                    itemsTabletSmall: [625,2],
                    itemsMobile: [479,1]
                });
 
            });
        </script>