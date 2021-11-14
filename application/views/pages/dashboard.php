<?php
// defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('templates/header');
?>

<!-- Main Content -->
<div class="main-content">


    <section class="section">
        <div class="section-header">
            <h1>DASHBOARD</h1>
        </div>

        <?php if(isset($is_verified)){
                if($is_verified == false){ ?>

        <div class="row text-center">
            <div class="col-lg-12">
                <div class="alert alert-warning" role="alert">
                    Please <a href="<?=base_url();?>verification" class="alert-link">verify your account</a> before
                    making any transactions.
                </div>
            </div>
        </div>

        <?php }
            }?>

        <div class="section-body">

            <div class="row">
                <div class="user-details">
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4"></div>
                        <div class="col-md-4"></div>
                    </div>
                </div>
            </div>
            <!-- row1 -->
            <div class="row">
                <div class="col-md-3">
                    <div class="card dashboard-totals">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <div class="dt-title">
                                        <h6>Total Profit</h6>
                                    </div>
                                    <h5 class="card-title float-right">
                                        <?php if(isset($total_growth)) echo $total_growth;?></h5>
                                </div>
                                <img class="align-self-end ml-3" src="<?=base_url();?>/assets/img/total-profit.svg"
                                    alt="image" width="50px">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card dashboard-totals">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1">Total Deposit</h6>
                                    <h5 class="card-title float-right">
                                        <?php if(isset($total_deposit)) echo $total_deposit;?></h5>
                                </div>
                                <img class="align-self-end ml-3" src="<?=base_url();?>/assets/img/total-deposit.svg"
                                    alt="image" width="50px">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card dashboard-totals">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1">Pending Withdrawal</h6>
                                    <h5 class="card-title float-right">
                                        <?php if(isset($pending_withdrawals)) echo $pending_withdrawals;?></h5>
                                </div>
                                <img class="align-self-end ml-3"
                                    src="<?=base_url();?>/assets/img/pending-withdrawal.svg" alt="image" width="50px">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card dashboard-totals">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1">Total Witdrawn</h6>
                                    <h5 class="card-title float-right">
                                        <?php if(isset($total_withdrawals)) echo $total_withdrawals;?></h5>
                                </div>
                                <img class="align-self-end ml-3" src="<?=base_url();?>/assets/img/total-withdrawn.svg"
                                    alt="image" width="50px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row1 -->

        <div class="row">

            <div class="col-md-6">
                <div class="card dashboard-row-2 text-white">
                    <div class="row">
                        <div class="col-sm-3 d-flex justify-content-center align-items-center">
                            <div class="balance-icon">
                                <img src="<?=base_url();?>/assets/img/account-balance.svg" alt="">
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h6>Account Balance</h6>
                                    <h3 class="card-title float-right"><sup>$</sup>
                                        <?php if(isset($account_balance)) echo $account_balance;?></h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 border-top">
                                    <div class="dr2-footer d-flex justify-content-around">
                                        <div class="dr2-footer-left">
                                            Last Deposit
                                        </div>
                                        <div class="dr2-footer-right">
                                            <?php if(isset($last_deposit_date)) echo $last_deposit_date; else echo '--';?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card dashboard-row-2 text-white">
                    <div class="row">
                        <div class="col-sm-3 d-flex justify-content-center align-items-center">
                            <div class="balance-icon">
                                <img src="<?=base_url();?>/assets/img/coupon-bonus.svg" alt="">
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h6>Coupon Bonus</h6>
                                    <h3 class="card-title float-right"><sup>$</sup>
                                        <?php if(isset($coupon_bonus)) echo $coupon_bonus;?></h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 border-top">
                                    <div class="dr2-footer d-flex justify-content-around">
                                        <div class="dr2-footer-left">
                                            Last Bonus
                                        </div>
                                        <div class="dr2-footer-right">
                                            <?php if(isset($last_deposit_date)) echo $last_deposit_date; else echo '--';?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card referral-card">
                    <div class="card-body">
                        <div class="referral-card-text">
                            <span class="referral-text">REFER A FRIEND,</span>

                            <a href="<?php echo base_url();?>my/ref/<?php echo $username; ?>">
                                <input type="hidden" class="form-control" readonly id="link"
                                    value="<?php echo base_url();?>my/ref/<?php echo $username; ?>">

                                <h2 class="referral-code"><?php echo $username; ?></h2>
                                <!-- <span class="tooltip-copy" id="tooltip_copy">Copied to clipboard</span> -->
                            </a>
                            <div class="btn_container">
                                <button class="btn btn_copyref" id="copy-refcode">Copy Link</button>
                            </div>
                        </div>
                        <img src="<?=base_url();?>/assets/img/refer-a-friend.svg" alt=""
                            class="referral-artwork float-right">

                    </div>

                </div>
            </div>

            <div class="col-md-6">
                <div class="card referral-card">
                    <div class="card-body">
                        <div class="referral-card-text">
                            <span class="referral-text">REFERRAL BONUS</span>
                            <br>
                            <span class="referral-bonus">
                                <?=$referral_bonus?>
                            </span>
                        </div>
                        <img src="<?=base_url();?>/assets/img/referral-bonus.svg" alt=""
                            class="referral-bonus-artwork float-right">

                    </div>

                </div>
            </div>



        </div>
</div>

</section>
</div>
<?php $this->load->view('templates/footer'); ?>