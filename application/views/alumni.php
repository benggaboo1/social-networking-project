<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/dataTables/css/jquery.dataTables.css'); ?>">

<div id="portfolio-page">

            <!-- header begin -->
            <header class="page-head">
                <div class="header-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">

                                <ol class="breadcrumb">
                                    <li><a href="index.html">Home</a></li>
                                    <li class="active">Search</li>
                                </ol> <!-- end of /.breadcrumb -->

                            </div>
                        </div>
                    </div> <!-- /.container -->
                </div> <!-- /.header-wrapper -->
            </header> <!-- /.page-head (header end) -->



            <div class="main-content">

                <!--  begin portfolio section  -->
                <section class="bg-light-gray">
                    <div class="container">

                        <div class="headline text-center">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3">
                                    <h2 class="section-title">List of Alumni Here...</h2>
                                    <p class="section-sub-title">
                                        absolutely stunning design &amp; functionality
                                    </p> <!-- /.section-sub-title -->
                                </div>
                            </div>
                        </div> <!-- /.headline -->

                        <div class="portfolio-item-list">
                            <div class="row">
                            <section>
                            <h1>DataTables example <span>Base style - stripe</span></h1>
                            <div class="info">
                                <p>This example shows DataTables with just the <code>stripe</code> class specified.</p>
                            </div>
                            <div class="demo-html"></div>
                            <table id="example" class="stripe" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Contact Number</th>
                                        <th>Address</th>
                                        <th>Age</th>
                                        <th>Occupation</th>
                                        <th>Year Graduated</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php if (count($alumniList) > 0) : ?>
                                    <?php foreach ($alumniList as $alumnus) :?>
                                        <tr>
                                            <td><?= $alumnus->first_name.' '.$alumnus->last_name ?></td>
                                            <td><?= $alumnus->contact_number ?></td>
                                            <td><?= $alumnus->address ?></td>
                                            <td><?= $alumnus->age ?></td>
                                            <td><?= $alumnus->occupation ?></td>
                                            <td><?= $alumnus->year_graduated ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                        <tr>
                                            <td colspan=5>No alumni data found.</td>
                                        </tr>
                                <?php endif; ?>
                                </tbody>
                            </table>
                            
                        </section>
                            </div>
                        </div> <!-- end of portfolio-item-list -->

                        <div id="morePortfolio"></div>
                        <div class="text-center">
                            <a id="loadPortfolio" class="hidden-xs btn btn-white">
                                Load More <span class="caret"></span>
                            </a>
                        </div>
                            
                    </div>
                </section> 
                <!--   end of portfolio section  -->

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
            
        </div> <!-- end of /#home-page -->

        <!--  Necessary scripts 

        <script type="text/javascript" src="assets/js/jquery-2.1.3.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.hoverdir.js"></script>
        <script type="text/javascript" src="assets/js/script.js"></script>  -->
        <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery-2.1.3.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" charset="utf8" src="<?php echo base_url('/assets/dataTables/js/jquery.dataTables.js'); ?>"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#example').dataTable();
            } );
        </script>

</body>
</html>