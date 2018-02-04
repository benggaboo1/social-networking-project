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
                                            <?php if($this->input->get('id') == $id) : ?>
                                                <div class="cmnt-clipboard"><span class="btn-clipboard" data-toggle="modal" data-target="#edit-profilepic-modal"><i class="fa fa-edit"></i></span></div>
                                                <?php if($profileData->profile_pic != null) : ?>
                                                    <img src="<?=base_url('/assets/img/profile_pictures/'.$profileData->profile_pic)?>" class="img-responsive center-block" alt="team-member 3" >
                                                <?php else: ?>
                                                    <img src="<?=base_url('/assets/img/team-member3')?>" class="img-responsive center-block" alt="team-member 3" >
                                                <?php endif; ?>
                                            <?php endif; ?>
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
                                            <?php if($this->input->get('id') == $id) : ?>
                                                <div class="cmnt-clipboard"><span class="btn-clipboard" data-toggle="modal" data-target="#edit-profile-modal"><i class="fa fa-edit"></i></span></div>
                                            <?php endif; ?>
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
                                                    <?= $profileData->email ?>
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

        </div>
         <!-- end of /#about-page -->
                   
        <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery-2.1.3.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>

    <div id="edit-profile-modal" class="modal fade" style="margin-top: 50px;">
        <div class="modal-dialog">
            <div class="modal-content">
            <form method="post" action="<?= base_url('profile/update_profile'); ?>">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Edit Profile</h4>
                </div>
                <div class="modal-body">
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="hidden" name="alumnus_id" value="<?=$id?>"/>
                                <input  type="text" class="form-control" name="first_name" required="required" placeholder="Firstname" value="<?=$profileData->first_name;?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input  type="text" class="form-control" name="last_name" required="required" placeholder="Lastname" value="<?=$profileData->last_name;?>">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input  type="text" class="form-control" name="address" required="required" placeholder="Address" value="<?=$profileData->address;?>">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <input  type="text" class="form-control" name="age" required="required" placeholder="Age" value="<?=$profileData->age;?>">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <select name="gender" class="form-control">
                                    <option value="M" <?=($profileData->gender == "M") ? "selected" : "" ;?>>M</option>
                                    <option value="F" <?=($profileData->gender == "F") ? "selected" : "" ;?>>F</option>
                                </select>
                                <!--<input  type="text" class="form-control" name="gender" required="required" placeholder="Gender" value="<?=$profileData->gender;?>">-->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input  type="text" class="form-control" name="contact_number" required="required" placeholder="Contact Number" value="<?=$profileData->contact_number;?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input  type="text" class="form-control" name="birthday" required="required" placeholder="Birthday" value="<?=$profileData->birthday;?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input  type="text" class="form-control" name="year_graduated" required="required" placeholder="Year Graduated" value="<?=$profileData->year_graduated;?>">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input  type="text" class="form-control" name="occupation" required="required" placeholder="Occupation" value="<?=$profileData->occupation;?>">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input  type="text" class="form-control" name="company_address" required="required" placeholder="Company Address" value="<?=$profileData->company_address;?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update Details</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <div id="edit-profilepic-modal" class="modal fade" style="margin-top: 50px;">
        <div class="modal-dialog">
            <div class="modal-content">
            <?php echo form_open_multipart(base_url('profile/update_profilepic'));?>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Edit Profile Picture</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="file" class="form-control" name="userfile" required="required" placeholder="Add photo" >
                                <input type="hidden" name="alumnus_id" value="<?=$id?>"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update Details</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/moment.js"></script>
<script type="text/javascript" charset="utf8" src="<?php echo base_url('/assets/js/profile.js'); ?>"></script>
</html>