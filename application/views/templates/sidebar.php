<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-image-bg"></div>
        <div class="sidebar-brand">
            <a href="<?php echo base_url(); ?>"><img src="<?=base_url();?>/assets/img/gracure-logo-white.svg"
                    alt="Gracure" class="img_logo_main"></a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?php echo base_url(); ?>"><img src="<?=base_url();?>/assets/img/gracure-logo2.svg" alt="Gracure"
                    class="img_logo_small"></a>
        </div>
        <ul class="sidebar-menu">
            <!-- <li class="menu-header">Dashboard</li> -->
            <li>
                <a class="nav-link sidebar-user">
                    <i class="fas fa-user-circle"></i>
                    <span>Hi, <?=$fullname;?></span>
                </a>

            </li>
            <!-- <br> -->
            <li class="dropdown <?php echo $this->uri->segment(1) == 'dashboard' ? 'active' : ''; ?>">
                <a href="<?=base_url();?>dashboard" class="nav-link"><i
                        class="fas fa-fire"></i><span>Dashboard</span></a>

            </li>

            <li class="dropdown <?php echo $this->uri->segment(1) == 'plans' ? 'active' : ''; ?>">
                <a href="<?=base_url();?>plans" class="nav-link"><i
                        class="fas fa-university"></i><span>Deposit</span></a>

            </li>

            <li class="dropdown <?php echo $this->uri->segment(1) == 'withdraw' ? 'active' : ''; ?>">
                <a href="<?=base_url();?>withdraw" class="nav-link"><i
                        class="fas fa-money-check-alt"></i><span>Withdraw</span></a>

            </li>

            <li class="dropdown <?php echo $this->uri->segment(1) == 'your_referrals' ? 'active' : ''; ?>">
                <a href="<?=base_url();?>your_referrals" class="nav-link"><i
                        class="fas fa-user-check"></i><span>Referral</span></a>

            </li>

            <li class="dropdown <?php echo $this->uri->segment(1) == 'fund_transfer' ? 'active' : ''; ?>">
                <a href="<?=base_url();?>fund_transfer" class="nav-link"><i class="fas fa-random"></i><span>Fund
                        Transfer</span></a>

            </li>

            <li class="dropdown <?php echo $this->uri->segment(1) == 'group_sales' ? 'active' : ''; ?>">
                <a href="<?=base_url();?>group_sales" class="nav-link"><i class="fas fa-award"></i><span>Monthly
                        Bonus</span></a>

            </li>

            <li
                class="dropdown <?php echo $this->uri->segment(1) == 'your_deposits'  || $this->uri->segment(1) == 'your_withdrawals'? 'active' : ''; ?>">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-history"></i><span>Transaction
                        History</span></a>
                <ul class="dropdown-menu">
                    <li class="<?php echo $this->uri->segment(1) == 'your_deposits' ? 'active' : ''; ?>"><a
                            class="nav-link" href="<?php echo base_url(); ?>your_deposits">Deposit</a></li>
                    <li class="<?php echo $this->uri->segment(1) == 'your_withdrawals'  ? 'active' : ''; ?>">
                        <a class="nav-link" href="<?php echo base_url(); ?>your_withdrawals">Withdrawal</a>
                    </li>
                </ul>
            </li>

            <li class="dropdown <?php echo $this->uri->segment(1) == 'contact_us' ? 'active' : ''; ?>">
                <a href="<?=base_url();?>contact_us" class="nav-link"><i class="fas fa-headset"></i><span>Message
                        Support</span></a>

            </li>

            <li class="dropdown <?php echo $this->uri->segment(1) == 'rewards' ? 'active' : ''; ?>">
                <a href="<?=base_url();?>rewards" class="nav-link"><i class="fas fa-mobile-alt"></i><span>Redeemable
                        Items</span></a>

            </li>

            <li class="dropdown <?php echo $this->uri->segment(1) == 'about_us' ? 'active' : ''; ?>">
                <a href="https://www.gracure.com/about-us/" class="nav-link"><i
                        class="fas fa-info-circle"></i><span>About Us</span></a>

            </li>


            <!-- <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                <a href="<?=base_url();?>/logout" class="btn btn-primary btn-lg btn-block btn-icon-split">
                    <i class="fas fa-rocket"></i> Logout
                </a>
            </div> -->
    </aside>
</div>