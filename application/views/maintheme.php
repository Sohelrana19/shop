<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Admin Dassbord</title>
    

    <link rel="stylesheet" href="<?php echo base_url(); ?>assest/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assest/css/all.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assest/css/sweetalert.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assest/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assest/css/media.css">
</head>

<body style="overflow-x: hidden">

    <div class="page-wrapper chiller-theme toggled">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
            <i class="fas fa-bars"></i>
        </a>
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <div class="sidebar-brand text-center">
                    <a href="#"><img src="<?php echo base_url(); ?>assest/image/logomdp.png" alt="sidebar_logo" class="img-fluid"></a>
                    <div id="close-sidebar">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul>
                        <li>
                            <a href="<?php echo base_url(); ?>dashbord">
                                <i class="far fa-chart-bar"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fas fa-envelope"></i>
                                <span>Dp Coumpture</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="<?php echo base_url(); ?>orderlist">Order List

                                    </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>duelist">Due List</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="">
                            <a href="<?php echo base_url(); ?>productlist">
                                <i class="fas fa-barcode"></i>
                                <span>Product</span>
                            </a>
                        </li>
                    </ul>
                </div>
        </nav>
        <!-- sidebar-menu  -->
        <main class="page-content" style="background: #F4F8F9">
            <nav class="navbar navbar-light bg-white">
                <h2>Dp Computure & Sound</h2>
                <div class="icon ml-auto">
                    <ul>
                        <li>
                            <i class="far fa-life-ring"></i>
                        </li>
                        <li>
                            <i class="far fa-comment-alt"></i>
                        </li>
                        <li>
                            <i class="fas fa-bell"></i>
                        </li>
                        <li>
                            <p>John Doe <i class="fas fa-angle-down"></i></p>
                        </li>
                        <li>
                            <div class="image">
                                <img src="<?php echo base_url(); ?>assest/image/man.jpg" alt="man" class="img-fluid">
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- Begin Page Content -->


			<div class="container-fluid">
			
			
			<?php echo $main_theme_contant; ?>


			</div>




			
	</main>
        <!-- page-content-->
        </div>

        


        <script src="<?php echo base_url(); ?>assest/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assest/js/angular.min.js"></script>
        <script src="<?php echo base_url(); ?>assest/js/sweetalert.min.js"></script>
        <script src="<?php echo base_url(); ?>assest/js/sweetalert-dev.js"></script>
        <script src="<?php echo base_url(); ?>assest/js/popper.min.js"></script>
        <script src="<?php echo base_url(); ?>assest/js/bootstrap.min.js"></script>

        <!-- Page level plugins -->
        <script src="<?php echo base_url(); ?>assest/vendor/datatables/jquery.dataTables.min.js"></script>


        <!-- Page level custom scripts -->
        <script src="<?php echo base_url(); ?>assest/js/demo/datatables-demo.js"></script>

        <script src="<?php echo base_url(); ?>assest/js/custom.js"></script>
</body>

</html>