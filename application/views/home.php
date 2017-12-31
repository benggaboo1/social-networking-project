
  
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
            <h4>Add Post</h4>
            <div class="comment-post">
                <form>
                    <div class="row">
                        <div class="col-md-12">
                            <textarea type="text" class="form-control" id="post_content" rows="5" required="required" placeholder="Type your post here..."></textarea>
                        </div>
                    </div>
                    <input type="hidden" id="post_alumnus_id" value="<?= $this->session->userdata('alumnus_id'); ?>"/>
                    <button type="button" id="submitPost" class="btn btn-black">add post</button>
                </form>
            </div>
        </div>
    </section>
    <section id="post-section" class="blog-content">
        <div class="container post">
            <?php if ($postData != null) : ?>
                <?php foreach ($postData as $post) : ?>
                <div class="row">
                    <main class="col-md-8 col-md-offset-2" style="display: block;">
                        <article class="blog-item">                           
                            <div class="blog-heading">
                                <h3 class="text-capitalize"><?= $post['post']->name ?></h3>
                                <span class="date"><?=date('M d, Y H:i a',strtotime($post['post']->create_timestamp))?></span>
                            </div>
                         
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="article-conclusion">
                                        <input type="hidden" class="post_id" name="postId" value="<?=$post['post']->post_id; ?>"/>
                                        <?=$post['post']->content?>
                                    </p>
                                </div>
                            </div>
                            
                            <!-- begin faq-widget -->
                            <div class="faq-widget">
                                <div class="topics">
                                    <div class="faq-c">
                                        <div class="faq-q">
                                            Read <?= count($post['comments']) ?> Comments <span><i class="fa fa-angle-double-right"></i> </span><span class="faq-t">+</span>
                                        </div>
                                        <div class="faq-a">
                                            <!-- <p>Facere tempora qui numquam nesciunt, distinctio asperiores, doloremque culpa, consequatur quo id corporis saepe ducimus tenetur architecto neque non.</p> -->
                                            <div class="comments">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <?php if ($post['comments'] != null) : ?>                                   
                                                            
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
                                        </div>
                                    </div>
                                </div>

                                <div class="topics">
                                    <div class="faq-c">
                                        <div class="faq-q">
                                            Add Comment <span class="faq-t">+</span>
                                        </div>
                                        <div class="faq-a">
                                            <!-- <p>Facere tempora qui numquam nesciunt, distinctio asperiores, doloremque culpa, consequatur quo id corporis saepe ducimus tenetur architecto neque non.</p> -->
                                            <div class="comment-post">
                                                <form>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <textarea name="message" name="content" type="text" class="form-control comment_content" rows="3" required="required" placeholder="Type your comment here..."></textarea>
                                                        </div>
                                                    </div>
                                                    
                                                    <button type="button" class="submitComment" class="btn btn-black">add comment</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- /.faq-widget -->
                            
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