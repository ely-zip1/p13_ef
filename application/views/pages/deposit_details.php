<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('templates/header');
?>
<div class="main-content">

    <section class="section">
        <div class="section-header section-header-custom">
            <h1 style="margin: auto;">PURCHASE DETAILS</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="deposit-details">
                        <div class="receipt-header">
                            <img src="<?= base_url() ?>assets/img/ef_logo_complete.svg" alt="">
                        </div>
                        <div class="card">
                            <div class="card-body">

                                <div class="row table-receipt-row">
                                    <div class="col-sm-4 table-receipt-head">
                                        Package :
                                    </div>
                                    <div class="col-sm-8 table-receipt-data receipt-selected-plan">
                                        <?php if (isset($deposit_selected_plan)) {
                                            echo $deposit_selected_plan;
                                        } ?>
                                    </div>
                                </div>

                                <div class="row table-receipt-row">
                                    <div class="col-sm-4 table-receipt-head">
                                        Amount :
                                    </div>
                                    <div class="col-sm-8 table-receipt-data deposit-amount">
                                        <?php if (isset($deposit_amount)) {
                                            echo $deposit_amount;
                                        } ?>
                                    </div>
                                </div>

                                <div class="row table-receipt-row">
                                    <div class="col-sm-4 table-receipt-head">
                                        Date :
                                    </div>
                                    <div class="col-sm-8 table-receipt-data">
                                        <?php if (isset($deposit_date)) {
                                            echo $deposit_date;
                                        } ?>
                                    </div>
                                </div>

                                <div class="row table-receipt-row">
                                    <div class="col-sm-4 table-receipt-head">
                                        Payment mode :
                                    </div>
                                    <div class="col-sm-8 table-receipt-data">
                                        <?php if (isset($deposit_payment_mode)) {
                                            echo $deposit_payment_mode;
                                        } ?>
                                    </div>
                                </div>

                                <?php if (isset($deposit_payment_mode)) {
                                    // print_r($deposit_payment_mode);
                                    if ($deposit_payment_mode != 'Account Balance' || $deposit_payment_mode != 'Activation Fund') { ?>

                                <div class="row table-receipt-row">
                                    <div class="col-sm-4 table-receipt-head">
                                        Send to :
                                    </div>
                                    <?php
                                            if (isset($deposit_payment_mode)) {
                                                if ($deposit_payment_mode == 'Bitcoin') { ?>

                                    <div class="col-sm-8 table-receipt-data">
                                        <img src="<?= base_url('assets/img/qr/btc.PNG') ?>" alt="bitcoin"
                                            width="150px" />
                                        <br><span class="deposit_address">Account :
                                            <strong>
                                                <?= $deposit_address ?></strong></span>
                                    </div>

                                    <?php } else if ($deposit_payment_mode == 'Ethereum') { ?>

                                    <div class="col-sm-8 table-receipt-data">
                                        <img src="<?= base_url('assets/img/qr/eth.PNG') ?>" alt="ethereum"
                                            width="150px" />
                                        <br><span class="deposit_address">Account : <strong>
                                                <?= $deposit_address ?></strong></span>
                                    </div>

                                    <?php } else if ($deposit_payment_mode == 'Litecoin') { ?>

                                    <div class="col-sm-8 table-receipt-data">
                                        <img src="<?= base_url('assets/img/qr/ltc.PNG') ?>" alt="litecoin"
                                            width="150px" />
                                        <br><span class="deposit_address">Account : <strong>
                                                <?= $deposit_address ?></strong></span>
                                    </div>

                                    <?php } else if ($deposit_payment_mode == 'Doge Coin') { ?>

                                    <div class="col-sm-8 table-receipt-data">
                                        <img src="<?= base_url('assets/img/qr/doge.PNG') ?>" alt="doge" width="150px" />
                                        <br><span class="deposit_address">Account: <strong>
                                                <?= $deposit_address ?></strong></span>
                                    </div>

                                    <?php } else if ($deposit_payment_mode == 'XRP') { ?>

                                    <div class="col-sm-8 table-receipt-data">
                                        <!-- <img src="<?= base_url('assets/img/qr/xrp.PNG') ?>" alt="xrp" width="150px" /> -->
                                        <br>
                                        <span class="deposit_address">
                                            Account : <strong><?= $deposit_address ?></strong>
                                        </span>
                                        <br>
                                        <span class="deposit_address">
                                            Tag : <strong><?= $deposit_tag ?></strong>
                                        </span>
                                    </div>

                                    <?php } else if ($deposit_payment_mode == 'Tron') { ?>

                                    <div class="col-sm-8 table-receipt-data">
                                        <img src="<?= base_url('assets/img/qr/trx.PNG') ?>" alt="trx" width="150px" />
                                        <br><span class="deposit_address">Account: <strong>
                                                <?= $deposit_address ?></strong></span>
                                    </div>
                                    <?php }
                                            } ?>

                                </div>

                                <?php }
                                } ?>

                                <div class="row table-receipt-row">
                                    <div class="col-sm-4 table-receipt-head">
                                        Status :
                                    </div>
                                    <div class="col-sm-8 table-receipt-data">
                                        <?php if (isset($deposit_status)) {
                                            echo $deposit_status;
                                        } ?>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <?php if (isset($deposit_payment_mode)) {
                            // print_r($deposit_payment_mode);
                            if ($deposit_payment_mode != 'Account Balance' || $deposit_payment_mode != 'Activation Fund') { ?>

                        <div class="row ">
                            <div class="col-12">
                                <div class="alert alert-has-icon alert-receipt float-right">
                                    <div class="alert-icon"><i class="fas fa-asterisk"></i></div>
                                    <div class="alert-body">
                                        <div class="withdrawal_note ">
                                            <br>
                                            <p>
                                                Send your transaction receipt to
                                                <strong>transactions@member-equifinance.uk</strong>
                                            </p>
                                            <!-- <p class="float-right">
                                                The receipt will serve as your proof of payment.
                                            </p> -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                            }
                        }
                        ?>


                        <div class="row">
                            <div class="col-md-2 offset-md-10">
                                <br>
                                <a href="<?php echo base_url(); ?>plans" class="btn deposit_detail_confirm">CONFIRM</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>


<?php $this->load->view('templates/footer'); ?>