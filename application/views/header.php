<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<?php if($this->session->userdata('alumnus_id') == null) {
    redirect('Login','refresh');
}
?>
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
        <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery-2.1.3.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
    </head>
    <body>    
    <style>
      div#main-nav-collapse.center {
          margin: auto;
          width: 33%;
      }
      div.searchFieldCss {
        width: 280px;
      }
    </style>
    <!-- site-navigation start -->  
    <nav id="mainNavigation" class="navbar navbar-dafault main-navigation" role="navigation">
        <div class="container">
            
            <div class="navbar-header">
                <!-- news-letter -->
                <div class="col-md-3 col-sm-6 col-xs-6 navbar-brand">
                    <form id="searchUserForm" role="form" method="get" action="<?php echo base_url('search/search_view'); ?>">
                        <div class="input-group margin-bottom-sm sr-only searchFieldCss">                
                            <input class="form-control" name="searchInput" type="text" placeholder="Search...">
                            <span class="input-group-addon" onclick="searchUserBtn();">
                                <i class="fa fa-search fa-fw"></i>
                                <!-- <button class="btn btn-sm btn-success btn-block" type="submit" style="padding: 0;"><i class="fa fa-search fa-fw"></i></button> -->
                            </span>
                        </div>
                    </form>
                </div> <!-- /.footer-widget -->


            </div><!-- /.navbar-header -->

            <div class=" navbar" style="float:right;">
                
                <!-- navbar logo -->
                <div class="navbar-brand" style="width: 40%; float:right;">
                    <!-- <span class="sr-only">Avada Pro Agency<i class="fa fa-sign-out fa-fw"></i></span> -->
                    <a href="<?php echo base_url('/logout'); ?>">
                        <img src="<?php echo base_url('/assets/img/signout-icon.png'); ?>" class="img-responsive center-block" alt="logo">
                    </a>
                </div>
               <!-- navbar logo -->

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
                        <a href="<?php echo base_url('/profile?id='.(ISSET($alumnusData)?$alumnusData->alumnus_id:$id)); ?>"><span>profile</span></a>
                    </li>
                    <?php if($this->session->userdata('is_admin')) : ?>
                    <li>
                        <a href="<?php echo base_url('/alumni'); ?>"><span>alumni</span></a>
                    </li>
                    <?php endif; ?>
                </ul>
            </div><!-- nav links -->
            
        </div><!-- /.container -->
    </nav>
    <script type="text/javascript">
        var baseUrl = "<?php echo base_url(); ?>";
    </script>
    <script>
        function searchUserBtn(){
            $("#searchUserForm").submit();
        }
    </script>
    <!-- site-navigation end -->