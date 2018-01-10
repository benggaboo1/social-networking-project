
<div id="single-blog-left-sidebar">

            <!-- header begin -->
            <header class="page-head">
                <div class="header-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">

                                <ol class="breadcrumb">
                                    <li><a href="#">home</a></li>
                                    <li class="active">messages</li>
                                </ol> <!-- end of /.breadcrumb -->

                            </div>
                        </div>
                    </div> <!-- /.container -->
                </div> <!-- /.header-wrapper -->
            </header> <!-- /.page-head (header end) -->


            <section class="blog-content">
                <div class="container">
                    <div class="row">
                        <main class="col-md-9 col-md-push-3" style="display: block;">
                            
                            <?php if (ISSET($messages)) : ?>
                                <?php foreach ($messages as $message) :?>
                                    <article class="blog-item">
                                        <div class="blog-heading">
                                            <h3 class="text-capitalize"><?= $message->sender_name ?></h3>
                                            <span class="date">
                                                Sent: <?= date('mdY',strtotime($message->create_timestamp)) == date('mdY',strtotime("now")) ? date('h:i a',strtotime($message->create_timestamp)) : date('M d, Y h:i a',strtotime($message->create_timestamp)); ?>
                                            </span>
                                        </div>
                                        <p>
                                            <?= $message->content ?>
                                        </p>
                                    </article>
                                <?php endforeach; ?>
                            <?php endif; ?>

                            <div class="comment-post">
                                <h3>Reply</h3>
                                <form role="form" method="POST" >
                                    <div class="row">
                                        <div class="col-md-12">
                                            <textarea name="message" type="text" class="form-control" id="chatbox" rows="2" placeholder="Type message here"></textarea>
                                            <input type="hidden" id="senderId" value="<?= $this->session->userdata('alumnus_id'); ?>"/>
                                        </div>
                                    </div>
                                    
                                    <button type="button" id="sendMessage" class="btn btn-black">Send</button>
                                </form>
                            </div>
                        </main>


                        <!-- begin sidebar -->
                        <aside class="col-md-3 col-md-pull-9">

                            <!-- begin tab-widget -->
                            <div class="tab-widget">
                                <h4>Alumnus List</h4>
                                <div  class="nav-tabs-default">
                                    <ul class="nav nav-tabs"></ul>

                                    <div class="tab-content">
                                        <div class="tab-pane active" id="popular">
                                            <div class="popular-post">
                                                <img src="assets/img/tab-widget2.jpg" class="img-responsive center-block" alt="popular-post 1">
                                                <h5 class="post-widget-heading">Image Title here</h5>
                                                <?php foreach ($alumniList as $alumnus) :?>
                                                    <div class="row twitter-widget-feed">
                                                        <div class="col-md-3">
                                                            <i class="fa fa-twitter text-center"></i>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="row twitter-widget-description">
                                                                <p>
                                                                    <span>
                                                                        <a href="<?= base_url().'messages/?member='.$alumnus->alumnus_id ?>">
                                                                            <?= $alumnus->first_name.' '.$alumnus->last_name ?>
                                                                        </a> 
                                                                    </span>-----------o
                                                                </p>
                                                                <p class="time">5 Mins ago</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div> <!-- /.tab-widget -->
                        </aside>
                        <!-- end sidebar -->
                    </div>
                </div>
            </section>


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
        <!-- end of /#multiple-blog-page -->



        <!-- script for FAQ using jquery -->

        <script>
            $(".faq-q").click( function () {
              var container = $(this).parents(".faq-c");
              var answer = container.find(".faq-a");
              var trigger = container.find(".faq-t");
              
              answer.slideToggle(200);
              
              if (trigger.hasClass("faq-o")) {
                trigger.removeClass("faq-o");
              }
              else {
                trigger.addClass("faq-o");
              }
            });
        </script>
</body>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/moment.js"></script>
<script type="text/javascript" charset="utf8" src="<?php echo base_url('/assets/js/profile.js'); ?>"></script>
</html>