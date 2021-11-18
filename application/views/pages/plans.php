<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('templates/header');
?>
<!-- Main Content -->
<div class="main-content">

    <section class="section">
        <!-- <div class="section-header">
            <h1>Account Details</h1>
        </div> -->

        <div class="section-body">

            <div class="row">
                <div class="col-lg-12">
                    <div class="section-header">
                        <h1>DEPOSIT</h1>
                    </div>
                </div>
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

            <div class="row row-plans ">

                <!-- ================================================================================= -->

                <div class="col-sm-4 ">
                    <div class="card plan-card">
                        <!-- <div class="card-top d-flex flex-column justify-content-center text-center"> -->
                        <div class="card-top">
                            <p class="package-title-1">Bronze Package</p>
                            <div class="package-price">
                                <p class="package-min-price">$<strong>100</strong></p>
                                <span class="package-price-caption">MINIMUM DEPOSIT</span>
                            </div>
                        </div>
                        <div class="card-mid d-flex flex-column justify-content-center text-center">
                            <span class="package-detail contract">
                                <h2>180</h2> Contract Days
                            </span>
                            <span class="package-detail interest">
                                <h2>15<sup>%</sup></h2> Daily Interest
                            </span>
                            <span class="package-detail">
                                Referral Bonus
                            </span>
                            <span class="package-detail">
                                Monthly Bonus
                            </span>
                            <span class="package-detail">
                                Cycle Bonus
                            </span>
                        </div>
                        <div class="card-bot text-center">
                            <a href="" class="buy-button">Buy Now</a>
                        </div>
                    </div>
                </div>

                <!-- ================================================================================= -->
            </div>
            <!-- <div class="row row-deposit" id="row_deposit"> -->
            <div class="row row-deposit" id="row_deposit">

                <div class="col-md-12">
                    <?php echo form_open('plans'); ?>
                    <div class="row">

                        <div class="col-sm-8 d-flex justify-content-center text-center">
                            <div class="chosen-plan-panel" id="default">
                                <h1>Please choose a Plan.</h1>
                                <!-- <span class="chosen-plan">NO PLAN SELECTED</span> -->
                                <!-- <p>$100 - $999</p> -->
                            </div>
                            <div class="chosen-plan-panel" id="plan-1" hidden>
                                <h1>Chosen Plan:</h1>
                                <span class="chosen-plan">BASIC CURE</span>
                                <p>$90 - $899</p>
                            </div>

                            <div class="chosen-plan-panel" id="plan-2" hidden>
                                <h1>Chosen Plan:</h1>
                                <span class="chosen-plan">MINOR CURE</span>
                                <p>$900 - $8,999</p>
                            </div>

                            <div class="chosen-plan-panel" id="plan-3" hidden>
                                <h1>Chosen Plan:</h1>
                                <span class="chosen-plan">MAJOR CURE</span>
                                <p>$9,000 - INFINITY</p>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-row">
                                <!-- <div class="form-group col-md-4 deposit-form"> -->
                                <div class="form-group col-md-4 deposit-form" style="display:none;">
                                    <label for="chosen_plan">Choose Package</label>
                                    <select class="form-control" name="chosen_plan" id="dropdown_plan"
                                        style="border-radius:20px;">
                                        <option <?php if ($selected_plan == 'plan1') {
											echo 'selected';
										} ?> value="plan1"><?php echo $plan1; ?></option>
                                        <option <?php if ($selected_plan == 'plan2') {
											echo 'selected';
										} ?> value="plan2"><?php echo $plan2; ?></option>
                                        <option <?php if ($selected_plan == 'plan3') {
											echo 'selected';
										} ?> value="plan3"><?php echo $plan3; ?></option>
                                        <option <?php if ($selected_plan == 'plan4') {
											echo 'selected';
										} ?> value="plan4"><?php echo $plan4; ?></option>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('chosen_plan'); ?>
                                    </div>
                                </div>

                                <div class="form-group col-md-12 deposit-form">
                                    <label for="plan_option">Mode of Payment</label>
                                    <select class="form-control" name="plan_payment_mode"
                                        <?php if(!$is_verified) echo 'disabled';?>>

                                        <option <?php if ($selected_mode == 'mode7') {
                                                echo 'selected';
                                            } ?> value="mode7">Account Balance</option>
                                        <option <?php if ($selected_mode == 'mode1') {
                                                echo 'selected';
                                            } ?> value="mode1">Bitcoin</option>

                                        <option <?php if ($selected_mode == 'mode2') {
                                                echo 'selected';
                                            } ?> value="mode2">Ethereum</option>

                                        <option <?php if ($selected_mode == 'mode8') {
                                                echo 'selected';
                                            } ?> value="mode8">XRP</option>

                                        <option <?php if ($selected_mode == 'mode9') {
                                                echo 'selected';
                                            } ?> value="mode9">TRX</option>

                                        <option <?php if ($selected_mode == 'mode10') {
                                                echo 'selected';
                                            } ?> value="mode10">Litecoin</option>

                                        <option <?php if ($selected_mode == 'mode11') {
                                                echo 'selected';
                                            } ?> value="mode11">Doge Coin</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('plan_payment_mode'); ?>
                                    </div>
                                </div>

                                <div class="form-group col-md-12 deposit-form">
                                    <label for="deposit_amount">Amount ($)</label>
                                    <div class="input-group">
                                        <input type="text" class="deposit-amount form-control 
                                            <?php if (strlen(form_error('deposit_amount')) > 0) {
                                                    echo "is-invalid";
                                            } ?>" name="deposit_amount" id="deposit-amount"
                                            value="<?php if (isset($deposit_amount)) echo $deposit_amount; ?>"
                                            placeholder="$ 0.00" <?php if(!$is_verified) echo 'disabled';?>>
                                        <div class="invalid-feedback deposit-error">
                                            <?php echo form_error('deposit_amount'); ?>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <button type="submit" class="submit-deposit btn btn-block" name="deposit-submit-button"
                                id="btnSubmit" <?php if(!$is_verified) echo 'disabled';?>>
                                CONFIRM
                            </button>
                            <?php echo form_close(); ?>
                        </div>

                    </div>
                </div>

                <div class="col-md-12">

                </div>
            </div>
    </section>
</div>
<?php $this->load->view('templates/footer'); ?>