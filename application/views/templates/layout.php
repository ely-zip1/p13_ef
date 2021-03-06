<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<body onload="set_interval()" onmousemove="reset_interval()" onclick="reset_interval()" onkeypress="reset_interval()"
    onscroll="reset_interval()">
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="fas fa-bars"></i></a></li>
                        <li>
                            <a href="<?= base_url();?>" class="nav-link nav-link-lg">
                                <img class="nav-logo" src="<?= base_url();?>assets/img/EF_LOGO_COMPLETE.svg" alt="Home"
                                    height="20px">
                            </a>
                        </li>
                    </ul>

                </form>

                <ul class="navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="<?php echo base_url(); ?>/logout"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <!-- <div class="d-sm-none d-lg-inline-block user-fullname">
                                <i class="fas fa-cog"></i> Accounts
                            </div> -->
                            <span class="logout-text"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right user-dropdown">
                            <a href="<?php echo base_url(); ?>account_settings" class="dropdown-item has-icon">
                                <i class="fas fa-cog"></i> Accounts
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="<?=base_url();?>logout" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>