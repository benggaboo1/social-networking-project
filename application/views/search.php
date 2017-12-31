

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
                                    <h2 class="section-title">Search Results...</h2>
                                    <p class="section-sub-title">
                                        absolutely stunning design &amp; functionality
                                    </p> <!-- /.section-sub-title -->
                                </div>
                            </div>
                        </div> <!-- /.headline -->
                        
                        <div class="portfolio-item-list">
                            <div class="row">
                                <section>
                                    <div class="comments">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <!-- <h3>2 Comments</h3> -->
                                                <!-- <div class="cmnt-clipboard"><span class="btn-clipboard">Reply</span></div> -->
                                                <?php if ($searchResult != null) : ?>
                                                    <?php foreach($searchResult as $result) : ?>
                                                        <div class="well">
                                                            <div class="row">                     
                                                                <a href="<?php echo base_url('/profile?id='.$result->alumnus_id); ?>">
                                                                    <div>
                                                                        <div class="pull-left col-md-2">
                                                                            <img src="<?=$result->profile_pic ?>" class="img-responsive center-block" alt="first-comment">
                                                                        </div>
                                                                        <div class="col-md-10">
                                                                            <p class="comment-info">
                                                                                <strong><?=$result->name?></strong> <span>22 april 2015</span>
                                                                            </p>
                                                                            <p>
                                                                                <?=$result->address?>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    <?php endforeach; ?>
                                                    <?php else : ?>
                                                        <div class="well">
                                                            <div class="row">                     
                                                                    <div>
                                                                        <div class="pull-left col-md-2">
                                                                            NO RESULTS FOUND.
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div> <!-- end of portfolio-item-list -->
                            
                    </div>
                </section> 
                <!--   end of portfolio section  -->

            </div> <!-- end of /.main-content -->

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


</body>
</html>