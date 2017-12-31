<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/dataTables/css/jquery.dataTables.css'); ?>">

<div id="portfolio-page">

            <!-- header begin -->
            <header class="page-head">
                <div class="header-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">

                                <ol class="breadcrumb">
                                    <li><a href="index.html">home</a></li>
                                    <li class="active">alumni</li>
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
                                    <h2 class="section-title">List of Alumni</h2>
                                    <p class="section-sub-title">
                                        absolutely stunning design &amp; functionality
                                    </p> <!-- /.section-sub-title -->
                                </div>
                            </div>
                        </div> <!-- /.headline -->

                        <div class="portfolio-item-list">
                            <div class="row">
                            <section>
                            <table id="example" class="stripe" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Year Graduated</th>
                                        <th>Name</th>
                                        <th>Age</th>
                                        <th>Gender</th>
                                        <th>Address</th>
                                        <th>Contact Number</th>
                                        <th>Occupation</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php if (count($alumniList) > 0) : ?>
                                    <?php foreach ($alumniList as $alumnus) :?>
                                        <tr>
                                        	<td><?= $alumnus->year_graduated ?></td>
                                            <td><?= $alumnus->last_name.', '.$alumnus->first_name ?></td>
                                            <td><?= $alumnus->age ?></td>
                                            <td><?= $alumnus->gender ?></td>
                                            <td><?= $alumnus->address ?></td>
                                            <td><?= $alumnus->contact_number ?></td>
                                            <td><?= $alumnus->occupation ?></td>
                                            <?php if ($alumnus->has_account == 0) : ?>   
                                            <td><center><i class="fa fa-plus-square-o fa-fw" data-toggle="modal" data-target="#add-user-modal"></i></center></td>                            
                                            <?php endif; ?>
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


    <div id="add-user-modal" class="modal fade" style="margin-top: 100px;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Create User</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <p>Please provide user's credentials.</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input  type="text" class="form-control" id="email_address" required="required" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input  type="password" class="form-control" id="password" required="required" placeholder="Password">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input  type="password" class="form-control" id="confirm_password" required="required" placeholder="Confirm Password">
                            </div>
                        </div>
                    </div>
                    <!-- <p>Do you want to save changes you made to document before closing?</p>
                    <p class="text-warning"><small>If you don't save, your changes will be lost.</small></p> -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add User</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>