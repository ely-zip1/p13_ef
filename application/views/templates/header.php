<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php

    if (!isset($this->session->username)) {
        redirect('login');
    }

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

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/codepen.css" />


    <!-- Template CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/components.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>


    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-94034622-3');
    </script>

    <script>
    var timer = 0;

    function set_interval() {
        timer = setInterval("auto_logout()", 30 * 60 * 1000);
        // timer = setInterval("auto_logout()", 1 * 60 * 1000);
    }

    function reset_interval() {
        if (timer != 0) {
            clearInterval(timer);
            timer = 0;

            timer = setInterval("auto_logout()", 30 * 60 * 1000);
            // timer = setInterval("auto_logout()", 1 * 60 * 1000);
        }
    }

    function auto_logout() {
        window.location.href = "<?php echo site_url('logout'); ?>";
    }
    </script>
    <!-- /END GA -->
    <!-- All Univerity of Nebraska-Lincoln Web Framework code is the property of UComm/ITS Digital Experience Group 
and the UNL Web Developer Network. -->

    <!-- place the contents of this css file, in the <head></head> of your html page when using 
the responsive table generator code on sites not in UNLcms or the UNL.edu framework -->

</head>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <img src="<?= base_url("/assets/img/announcement-modal.png")?>" alt="announcement" width="100%">
        </div>
    </div>
</div>

<?php
  $this->load->view('templates/layout');
  $this->load->view('templates/sidebar');
?>