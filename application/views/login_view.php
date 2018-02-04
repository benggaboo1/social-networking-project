<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 

<html class="no-js"> <!--<![endif]-->
    <head>

        <title>Login</title>

        <!-- meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        
        <!-- stylesheets -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/style.css">


    </head>

    <body>
        <div id="error-page">
            <!-- fix the height of the whole content -->
            <div id="height-fix" class="text-center">

                <!--   header section begin   -->
                <section class="header bg-light-gray">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="row">

                                    <div class="logo">
                                        <img class="img-responsive center-block" src="assets/img/logo.png">
                                    </div> <!-- /.logo -->

                                    <div class="page-title">
                                        <p>Login Page</p>
                                    </div> <!-- /.error-description -->
                                    
                                </div>
                            </div> <!-- /.col-md-6 col-md-offset-3 -->
                        </div> <!-- /.row -->
                    </div> <!-- /.container -->
                </section> <!--   header section end   -->
                

                <!--   main-content section begin   -->
                <section class="main-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3" style="margin-top: 50px;">
                                <!--<h1 class="error-nmbr">404</h1> -->  <!-- showing error number -->
                                <?php
                                $success_msg= $this->session->flashdata('success_msg');
                                $error_msg= $this->session->flashdata('error_msg');

                                if($success_msg){
                                    ?>
                                    <div class="alert alert-success">
                                    <?php echo $success_msg; ?>
                                    </div>
                                <?php
                                }
                                if($error_msg){
                                    ?>
                                    <div class="alert alert-danger">
                                    <?php echo $error_msg; ?>
                                    </div>
                                    <?php
                                }
                                ?>

                                <div class="panel-body">
                                    <form role="form" method="post" action="<?php echo base_url('login/login_user'); ?>">
                                        <fieldset>
                                            <div class="form-group"  >
                                                <input class="form-control" placeholder="Email Address" name="user_email" type="email" autofocus>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Password" name="user_password" type="password" value="">
                                            </div>
                                                <input id="loginBtn" class="hide btn btn-lg btn-success btn-block" type="submit" value="Login" name="login" >
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                            
                        </div> <!-- .row -->
                    </div> <!-- /.container -->
                </section> <!--   header section end   -->
                

                <!--   footer section begin   -->
                <section class="footer bg-light-gray">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="row">
                                <center><div class="error-page-btn">
                                        <div class="col-md-8">
                                            <a id="signInBtn" href="#" class="btn btn-black">
                                                Sign in to App
                                            </a> <!-- /go-back button -->
                                        </div> <!-- /.col-md-6 -->
                                    </div><!-- /.error-page-btn --></center>
                                </div>
                            </div> <!-- .col-md-6 col-md-offset-3 -->
                        </div> <!-- /.row -->
                    </div> <!-- /.container -->
                </section> <!--   footer section end   -->


            </div> <!-- /#height fix -->
        </div> <!-- /#error-page  -->

        <script type="text/javascript" src="assets/js/jquery-2.1.3.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/wow.min.js"></script>
        <script type="text/javascript" src="assets/js/script.js"></script>


        <!-- wow initialization -->
        <script>
            new WOW().init();
            $(document).ready(function(){
                $('#signInBtn').click(function(){
                    $('#loginBtn').trigger('click');
                });
            });
        </script>
    
    </body>
</html>

