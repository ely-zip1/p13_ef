<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <!-- <div class="sidebar-image-bg"></div> -->
        <div class="sidebar-brand">
            <a href="<?php echo base_url(); ?>/account_settings">
                <!-- <img src="<?=base_url();?>/assets/img/avatar/avatar-5.png" alt="User-avatar" class="img_logo_main"> -->
                <!-- <span class="avatar-initials"><?=$avatar_initials;?></span> -->
                <span class="avatar-initials">
                    <img src="https://ui-avatars.com/api/?name=<?=$fullname?>&background=ff0030&color=fff" alt="Avatar">

                </span>
            </a>
            <br>
            <a href="<?php echo base_url(); ?>/account_settings">
                <span class="sidebar_user"><?=$fullname;?></span>
            </a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?php echo base_url(); ?>">
                <img src="https://ui-avatars.com/api/?name=JU&background=ff0030&color=fff" alt="Gracure"
                    class="img_logo_small">
            </a>
        </div>
        <ul class="sidebar-menu">
            <!-- <li class="menu-header">Dashboard</li> -->
            <!-- <li>
                <a class="nav-link sidebar-user">
                    <i class="fas fa-user-circle"></i>
                    <span>Hi, <?=$fullname;?></span>
                </a>

            </li> -->
            <!-- <br> -->
            <li class="dropdown <?php echo $this->uri->segment(1) == 'dashboard' ? 'active' : ''; ?>">
                <a href="<?=base_url();?>dashboard" class="nav-link">
                    <!-- <img src="https://img.icons8.com/color/48/000000/imac.png" /> -->
                    <img src="https://img.icons8.com/color/48/000000/monitor--v2.png" />
                    <span>Dashboard</span>
                </a>

            </li>

            <li class="dropdown <?php echo $this->uri->segment(1) == 'plans' ? 'active' : ''; ?>">
                <a href="<?=base_url();?>plans" class="nav-link">
                    <img src="https://img.icons8.com/color/48/000000/deposit.png" /><span>Deposit</span></a>

            </li>

            <li class="dropdown <?php echo $this->uri->segment(1) == 'withdraw' ? 'active' : ''; ?>">
                <a href="<?=base_url();?>withdraw" class="nav-link">
                    <!-- <img src="https://img.icons8.com/color/48/000000/withdrawal.png" /> -->
                    <img src="https://img.icons8.com/color/48/000000/atm.png" />
                    <span>Withdraw</span>
                </a>

            </li>

            <li class="dropdown <?php echo $this->uri->segment(1) == 'your_referrals' ? 'active' : ''; ?>">
                <a href="<?=base_url();?>your_referrals" class="nav-link">
                    <img src="https://img.icons8.com/color/48/000000/conference.png" />
                    <span>Referral</span>
                </a>

            </li>

            <li class="dropdown <?php echo $this->uri->segment(1) == 'fund_transfer' ? 'active' : ''; ?>">
                <a href="<?=base_url();?>fund_transfer" class="nav-link">
                    <img src="https://img.icons8.com/color/48/000000/exchange.png" /><span>Fund
                        Transfer</span></a>

            </li>

            <li class="dropdown <?php echo $this->uri->segment(1) == 'group_sales' ? 'active' : ''; ?>">
                <a href="<?=base_url();?>group_sales" class="nav-link">
                    <img src="https://img.icons8.com/color/48/000000/pay-date.png" /><span>Monthly
                        Bonus</span></a>

            </li>

            <li class="dropdown <?php echo $this->uri->segment(1) == 'cycle_bonus' ? 'active' : ''; ?>">
                <a href="<?=base_url();?>cycle_bonus" class="nav-link">
                    <img src="https://img.icons8.com/color-glass/48/000000/gift.png" /><span>Cycle
                        Bonus</span></a>

            </li>

            <li
                class="dropdown <?php echo $this->uri->segment(1) == 'your_deposits'  || $this->uri->segment(1) == 'your_withdrawals'? 'active' : ''; ?>">
                <a href="#" class="nav-link has-dropdown">
                    <img src="https://img.icons8.com/color/50/000000/payment-history.png" /><span>Transaction
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
                <a href="<?=base_url();?>contact_us" class="nav-link">
                    <!-- <img src="https://img.icons8.com/color/48/000000/online-support.png" /> -->
                    <img src="https://img.icons8.com/color/48/000000/headset.png" />
                    <span>Message
                        Support</span>
                </a>

            </li>

            <!-- <li class="dropdown <?php echo $this->uri->segment(1) == 'rewards' ? 'active' : ''; ?>">
                <a href="<?=base_url();?>rewards" class="nav-link">
                    <img src="https://img.icons8.com/color/48/000000/ruby-gemstone.png" /><span>Redeemable
                        Items</span></a>

            </li> -->

            <li class="dropdown <?php echo $this->uri->segment(1) == 'about_us' ? 'active' : ''; ?>">
                <a href="https://www.equifinance.co.uk/about-us" class="nav-link">
                    <img src="https://img.icons8.com/color/48/000000/info--v1.png" /><span>About Us</span></a>

            </li>


            <!-- <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                <a href="<?=base_url();?>/logout" class="btn btn-primary btn-lg btn-block btn-icon-split">
                    <i class="fas fa-rocket"></i> Logout
                </a>
            </div> -->
    </aside>
</div>