<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title><?php echo $title; ?> &mdash; Equifinance</title>

    <!-- favicon -->
    <link rel="icon" href="<?=base_url()?>assets/img/favicon.ico" type="image/gif">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/ionicons/css/ionicons.min.css">


    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/backgroundTransition.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/particleStyle.css" />
    <script src="<?php echo base_url(); ?>assets/modules/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/backgroundTransition.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/particleBackground.js"></script>

    <!-- CSS Libraries -->
    <?php
  if ($this->uri->segment(2) == "" || $this->uri->segment(2) == "index") {
      ?>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="<?php echo base_url(); ?>assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css">
    <?php
  } ?>

    <!-- Template CSS -->

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/components.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/chocolat/dist/css/chocolat.css">


    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/login_reg.css">
</head>

<body class="body-login">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="<?php echo base_url('assets/img/SLIDER_1.jpg');?>" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo base_url('assets/img/SLIDER_2.jpg');?>" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo base_url('assets/img/SLIDER_3.jpg');?>" alt="Third slide">
            </div>
        </div>
    </div>

    <section class="login_section">
        <div class="login_form">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="card login_card">


                        <div class="card-body login_card_body">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <div class="login-brand">
                                        <a href="<?= base_url();?>">
                                            <img src="<?= base_url();?>assets/img/EF_LOGO_COMPLETE.svg" alt="logo"
                                                width="300">
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 text-center">
                                    <!-- <h3 class="login-title"> Login</h3> -->
                                </div>
                            </div>

                            <?php

                                if(isset($validation_error)){
                                    echo '<div class="alert alert-danger">';                          
                                    echo $validation_error;
                                    echo '</div>';
                                }                                                                        

                            ?>
                            <!-- <form method="POST" action="#" class="needs-validation" novalidate=""> -->
                            <?php echo form_open('login'); ?>
                            <div class="form-group">
                                <label for="username" class="log_reg_label">Username:</label>
                                <input id="username" type="text"
                                    class="form-control <?php if(strlen(form_error('username')) > 0){echo "is-invalid";} ?>"
                                    name="username" tabindex="1" autofocus value="<?= set_value('username','',true)?>"
                                    required>
                                <div class="invalid-feedback">
                                    <?php echo form_error('username');?>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="d-block">
                                    <label for="password" class="control-label log_reg_label">Password:</label>

                                </div>
                                <input id="password" type="password"
                                    class="form-control <?php if(strlen(form_error('password')) > 0){echo "is-invalid";} ?>"
                                    name="password" tabindex="2" required>
                                <div class="invalid-feedback">
                                    <?php echo form_error('password');?>
                                </div>
                                <div class="float-right">
                                    <a href="<?php echo base_url(); ?>forgot_password"
                                        class="text-small forgot_password">
                                        Forgot Password?
                                    </a>
                                </div>
                            </div>

                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-lg btn-block btn_login" tabindex="4">
                                    Login
                                </button>
                            </div>
                            </form>
                            <div class="mb-3 text-center">
                                <!-- <span class="create_account">Create an account. </span> -->
                                <a class="sign_up" href="<?php echo base_url(); ?>registration">Sign
                                    up</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section footer-section">
        <div class="row">
            <div class="col-12">
                <span class="all-rights-reserved">© 2021 Equifinance Ltd
                </span>
            </div>
        </div>
    </div>


</body>


<?php $this->load->view('dist/_partials/js'); ?>
<script src="https://kit.fontawesome.com/yourcode.js"></script>
<script src="<?php echo base_url();?>assets/js/countrypicker.js"></script>

</html>