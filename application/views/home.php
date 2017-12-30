
  
<div id="single-blog-full-width">
    <!-- header begin -->
    <header class="page-head">
        <div class="header-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <ol class="breadcrumb">
                            <li><a href="#">home</a></li>
                            <li class="active">home</li>                            
                        </ol> <!-- end of /.breadcrumb -->

                    </div>
                </div>
            </div> <!-- /.container -->
        </div> <!-- /.header-wrapper -->
    </header> <!-- /.page-head (header end) -->


    <section>
        <div class="container">
            <div>
                <form>
                    <input type="textarea" id="post_content"/>
                    <input type="hidden" id="post_alumnus_id" value="<?= $this->session->userdata('alumnus_id'); ?>"/>
                    <button type="button" id="submitPost">Post</button>
                </form>
            </div>
        </div>
    </section>
    <section class="blog-content">
        <div class="container post">
            <?php if ($postData != null) : ?>
                <?php foreach ($postData as $post) : ?>
                <div class="row">
                    <main class="col-md-8 col-md-offset-2" style="display: block;">
                        <article class="blog-item">                           
                            <div class="blog-heading">
                                <h3 class="text-capitalize"><?= $post['post']->name ?></h3>
                                <span class="date"><?=date('M d, Y H:i a',strtotime($post['post']->create_timestamp))?></span>
                                <span>12 comments</span>
                            </div>
                         
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="article-conclusion">
                                        <?=$post['post']->content?>
                                    </p>
                                </div>
                            </div>


                            <a href="#" class="text-capitalize ">
                                read comments
                                <span><i class="fa fa-angle-double-right"></i> </span>
                            </a>

                            <div class="comments">
                                <div class="row">
                                    <div class="col-md-12">
                                        <?php if ($post['comments'] != null) : ?>                                   
                                            <h3><?= count($post['comments']) ?> comments.</h3>
                                            <div class="well">
                                                <div class="row">
                                                    <?php foreach($post['comments'] as $comment) : ?>
                                                        <div class="col-md-2">
                                                            <img src="assets/img/commenter1.jpg" class="img-responsive center-block" alt="first-comment">
                                                        </div>
                                                        <div class="col-md-10">
                                                            <p><strong><?=$comment->name?></strong></p><span>22 april 2015</span>
                                                            <p><?=$comment->content?></p>
                                                        </div>        
                                                    <?php endforeach; ?> 
                                                </div>
                                            </div>
                                        <?php else: ?>
                                            No comments yet.                                     
                                        <?php endif; ?>  

                                    </div>
                                </div>
                            </div>

                            <div class="comment-post">
                                <h3>Post A Comment</h3>
                                <form method="post" >
                                    <div class="row">
                                        <!-- <div class="col-md-4">
                                            <div class="form-group">
                                                <input  name="name" type="text" class="form-control" id="name" required="required" placeholder="Full Name">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input name="email" type="email" class="form-control" id="email" required="required" placeholder="Email Address">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input name="website" type="url" class="form-control" id="subject" required="required" placeholder="Your Website">
                                            </div>
                                        </div> -->
                                        <div class="col-md-12">
                                            <textarea name="message" type="text" class="form-control" id="message" rows="8" required="required" placeholder="Type here message"></textarea>
                                        </div>
                                    </div>
                                    
                                    <button type="submit" id="submit" name="submit" class="btn btn-black">post comment</button>
                                </form>
                            </div>
                        </article>
                    </main>
                </div>
                <?php endforeach; ?>
                <?php else: ?>
                    NO POSTS TO SHOW
            <?php endif; ?>    
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

        <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery-2.1.3.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/moment.js"></script>
        <script type="text/javascript" charset="utf8" src="<?php echo base_url('/assets/js/home.js'); ?>"></script>

</body>
</html>