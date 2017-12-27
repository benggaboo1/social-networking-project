<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 

<html class="no-js"> <!--<![endif]-->
    <head>

        <title>Agency - Single Blog Page</title>

        <!-- meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        
        <!-- stylesheets -->
        <link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('/assets/css/font-awesome.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('/assets/css/animate.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('/assets/css/owl.carousel.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('/assets/css/owl.theme.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css'); ?>">

    </head>
    <body>
    <style>
      div#main-nav-collapse.center {
          margin: auto;
          width: 30%;
      }
      div.searchFieldCss {
        width: 280px;
      }
    </style>
    <!-- site-navigation start -->  
    <nav id="mainNavigation" class="navbar navbar-dafault main-navigation" role="navigation">
        <div class="container">
            
            <div class="navbar-header">
                
                <!--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button> -->
                
                <!-- navbar logo
                <div class="navbar-brand">
                    <span class="sr-only">Avada Pro Agency</span>
                    <a href="<?php/* echo base_url('/home');*/?>">
                        <img src="assets/img/main_logo.png" class="img-responsive center-block" alt="logo">
                    </a>
                </div>
                navbar logo -->

                <!-- news-letter -->
                <div class="col-md-3 col-sm-6 col-xs-6 navbar-brand">
                    <div class="input-group margin-bottom-sm sr-only searchFieldCss">
                        <input class="form-control" type="text" placeholder="Search...">
                        <span class="input-group-addon">
                            <a href="<?php echo base_url('/search'); ?>"><i class="fa fa-search fa-fw"></i></a>
                        </span>
                    </div>
                </div> <!-- /.footer-widget -->


            </div><!-- /.navbar-header -->

            <!-- nav links -->
            <div class="collapse navbar-collapse center" id="main-nav-collapse">
                <ul class="nav navbar-nav navbar-right  text-uppercase">
                    <li>
                        <a href="<?php echo base_url('/home'); ?>"><span>home</span></a>
                    </li>

                    <li>
                        <a href="#"><span>messages</span></a>
                    </li>

                    <li>
                        <a href="<?php echo base_url('/profile'); ?>"><span>profile</span></a>
                    </li>

                    <!-- <li>
                        <?= $alumnusData->first_name ?>
                    </li> -->
                </ul>
            </div><!-- nav links -->
            
        </div><!-- /.container -->
    </nav>
    <!-- site-navigation end -->