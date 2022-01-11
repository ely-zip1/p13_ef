<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title><?php echo $title; ?> &mdash; Equifinance</title>

    <!-- favicon -->
    <link rel="icon" href="<?= base_url() ?>assets/img/favicon.ico" type="image/gif">

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

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style1.css" />
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/modernizr.custom.86080.js"></script>
</head>

<body class="body-login" id="page">
    <ul class="cb-slideshow">
        <li><span>Image 01</span>
            <div>
                <!-- <h3>re·lax·a·tion</h3> -->
            </div>
        </li>
        <li><span>Image 02</span>
            <div>
                <!-- <h3>re·lax·a·tion</h3> -->
            </div>
        </li>
        <li><span>Image 03</span>
            <div>
                <!-- <h3>re·lax·a·tion</h3> -->
            </div>
        </li>
        <li><span>Image 04</span>
            <div>
                <!-- <h3>re·lax·a·tion</h3> -->
            </div>
        </li>
        <li><span>Image 04</span>
            <div>
                <!-- <h3>re·lax·a·tion</h3> -->
            </div>
        </li>
        <li><span>Image 04</span>
            <div>
                <!-- <h3>re·lax·a·tion</h3> -->
            </div>
        </li>
    </ul>
    <section class="login_section">
        <div class="login_form">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="card registration_card">
                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="login-brand">
                                    <a href="<?= base_url(); ?>">
                                        <img src="<?= base_url(); ?>assets/img/EF_LOGO_COMPLETE.svg" alt="logo"
                                            width="300">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body login_card_body">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <h3 class="reg-title">REGISTRATION</h3>

                                    <!-- <div class="reg_title">
                <p>Already have an account? <a href="<?= base_url(); ?>login">Login</a></p>
                <br>
            </div> -->

                                </div>
                            </div>

                            <!-- <div class="reg_title">
    <p>Already have an account? <a href="<?= base_url(); ?>login">Login</a></p>
    <br>
</div> -->


                            <?php echo form_open('registration'); ?>
                            <!-- 
    <div class="row">

        <div class="col-sm-4"> -->
                            <div class="form-group">
                                <label for="username" class="log_reg_label">Username:
                                </label>
                                <input id="reg-username logreg_input" type="text"
                                    value="<?= set_value('username', '', true) ?>"
                                    class="form-control login_input <?php if (strlen(form_error('username')) > 0) {
                                                                                                                                                                        echo "is-invalid";
                                                                                                                                                                    } ?>"
                                    name="username" autofocus required />
                                <div class="invalid-feedback">
                                    <?php echo form_error('username'); ?>
                                </div>
                            </div>
                            <!-- </div>
        <div class="col-sm-4"> -->
                            <div class="form-group">
                                <label for="fullname" class="log_reg_label">Fullname:
                                </label>
                                <input id="fullname logreg_input" type="text"
                                    value="<?= set_value('fullname', '', true) ?>"
                                    class="form-control login_input <?php if (strlen(form_error('fullname')) > 0) {
                                                                                                                                                                    echo "is-invalid";
                                                                                                                                                                } ?>"
                                    name="fullname" autofocus required />
                                <div class="invalid-feedback">
                                    <?php echo form_error('fullname'); ?>
                                </div>
                            </div>
                            <!-- </div>

        <div class="col-sm-4"> -->
                            <div class="form-group">
                                <label for="password" class="log_reg_label">Create Password:
                                </label>
                                <input id="reg-password logreg_input" type="password"
                                    class="form-control login_input <?php if (strlen(form_error('password')) > 0) {
                                                                                                                            echo "is-invalid";
                                                                                                                        } ?>" name="password" autofocus required />
                                <div class="invalid-feedback">
                                    <?php echo form_error('password'); ?>
                                </div>
                            </div>
                            <!-- </div>
    </div> -->

                            <!-- <div class="row">

        <div class="col-sm-4"> -->
                            <div class="form-group">
                                <label for="confirm_password" class="log_reg_label">Repeat Password:
                                </label>
                                <input id="confirm_password logreg_input" type="password"
                                    value="<?= set_value('confirm_password', '', true) ?>"
                                    class="form-control login_input <?php if (strlen(form_error('confirm_password')) > 0) {
                                                                                                                                                                                        echo "is-invalid";
                                                                                                                                                                                    } ?>"
                                    name="confirm_password" autofocus required />
                                <div class="invalid-feedback">
                                    <?php echo form_error('confirm_password'); ?>
                                </div>
                            </div>
                            <!-- </div>
        <div class="col-sm-4"> -->
                            <div class="form-group">
                                <label for="email" class="log_reg_label">Email Address:
                                </label>
                                <input id="email logreg_input" type="text" value="<?= set_value('email', '', true) ?>"
                                    class="form-control login_input <?php if (strlen(form_error('email')) > 0) {
                                                                                                                                                            echo "is-invalid";
                                                                                                                                                        } ?>"
                                    name="email" autofocus required />
                                <div class="invalid-feedback">
                                    <?php echo form_error('email'); ?>
                                </div>
                            </div>
                            <!-- </div>

        <div class="col-sm-4"> -->
                            <div class="form-group">
                                <label for="confirm_email" class="log_reg_label">Repeat Email:
                                </label>
                                <input id="confirm_email logreg_input" type="text"
                                    class="form-control login_input <?php if (strlen(form_error('confirm_email')) > 0) {
                                                                                                                        echo "is-invalid";
                                                                                                                    } ?>" name="confirm_email" autofocus required />
                                <div class="invalid-feedback">
                                    <?php echo form_error('confirm_email'); ?>
                                </div>
                            </div>
                            <!-- </div>
    </div> -->

                            <!-- <div class="row"> -->
                            <!-- <div class="col-sm-4"></div>
        <div class="col-sm-4"> -->
                            <div class="form-group">
                                <label for="referral" class="log_reg_label">Referred By:
                                </label>
                                <input id="referral logreg_input" type="text"
                                    value="<?= set_value('referral', $referral_code, true) ?>"
                                    class="form-control login_input <?php if (strlen(form_error('referral')) > 0) {
                                                                                                                                                                                echo "is-invalid";
                                                                                                                                                                            } ?>"
                                    name="referral" autofocus required />
                                <div class="invalid-feedback">
                                    <?php echo form_error('referral'); ?>
                                </div>
                            </div>
                            <!-- </div> -->


                            <!-- </div> -->
                            <div class="row">

                                <!-- <div class="col-sm-3"></div> -->

                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-lg btn-block btn_login">Create
                                        Account</button>
                                </div>

                                <div class="col-sm-12 text-center text-white">
                                    <span class="login-link">
                                        Already a member?
                                        <a href="<?= base_url('login'); ?>" class="text-danger">Login</a>
                                    </span>
                                </div>
                            </div>

                            </form>
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

<!-- <?php $this->load->view('dist/_partials/js'); ?> -->
<script src="https://kit.fontawesome.com/yourcode.js"></script>
<script src="<?php echo base_url(); ?>assets/js/countrypicker.js"></script>

</html>