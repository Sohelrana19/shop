<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>Admin Dassbord</title>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,700" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700" rel="stylesheet">
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>assest/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assest/css/all.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assest/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assest/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assest/css/media.css">
</head>
<body style="overflow-x: hidden" id="mainbody">
<!-------header part start------------>

<!-- <div id="preloder">
     <p class="wow fadeInRightBig" data-wow-duration="2s" data-wow-delay=".5s">Dipok Sound</p> 
    <img src="<?php echo base_url(); ?>assest/image/preloder.png" alt="">
</div> -->
<section id="header">
    <div class="container main">
        <div class="row">
            <div class="col-lg-12">
                <div class="logo text-center">
                    <a href="#"><img src="<?php echo base_url(); ?>assest/image/logomdp.png" alt="logo" class="img-fluid"></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7 m-auto">
                <div class="loging text-center">
                    <h2>Welcome to DP Sound & Computure</h2>

                    <p class="mainalart">
                    <?php
                        $message=$this->session->userdata('message');
                        if('$message'){
                            echo "<span>$message</span>";
                            $this->session->unset_userdata('message');

                        }
                    ?>
                    </p>
                    <form action="<?php echo base_url(); ?>adminlogin" method="post">
                        <input type="text" placeholder="User ID" name="useremail">
                        <input type="password" placeholder="Password" name="password">
                        <button class="login_btn login_btn1" type="submit">Login</button><br>

                    </form>
                    <button class="login_btn" type="submit" data-toggle="modal" data-target="#exampleModal">Sign in</button>
                    <h4 class="sohelrana">Software Developed by : <Span>Sohel Rana</Span></h4>
                    <form action="<?php echo base_url(); ?>singin" method="POST">
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                              <input type="text" placeholder="Enter Your name" name="nameuser">
                               <input type="email" placeholder="Enter Your Email" name="email">
                               <input type="password" placeholder="Enter Your password" name="password">
                               <input type="text" placeholder="Enter Your Phone Number" name="number">

                               <button class="singsubmit" type="submit">Submit</button>
                            </div>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
       
    </div>
</section>
<!-------header part End-------------->
    
    
    
    
    
    
    <!-------jquery link----------->
    
    <script src="<?php echo base_url(); ?>assest/js/jquery-1.12.4.min.js"></script>
    <script src="<?php echo base_url(); ?>assest/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assest/js/wow.min.js"></script>
    <!-----main js--------->
    <script src="<?php echo base_url(); ?>assest/js/custom.js"></script>
</body>
</html>