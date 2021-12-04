<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('templates/header');
?>

<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="section-header section-header-custom">
                <h1>APPLY FOR ADVANCED WITHDRAWAL</h1>
            </div>
            <div class="row terms-row">
                <div class="col-sm-12 term-text">
                    <?php if (isset($is_received)) if ($is_received) { ?>

                    <div class="alert alert-success" role="alert">
                        <?= $this->session->flashdata('advanced_withdrawal_status'); ?>
                    </div>

                    <?php
                    } else { ?>

                    <div class="alert alert-danger" role="alert">
                        <?= $this->session->flashdata('advanced_withdrawal_status'); ?>
                    </div>

                    <?php
                    }
                    ?>
                    <p>Equifinance Advance Withdrawal is subject to terms and conditions applied</p>
                    <p>Associate and VIP Package holders are entitled for Equifinance Advance Withdrawal and it is
                        appplicable for 48hours from
                        the purchase of the said packages. The payment of the advance withdrawal will be deducted from
                        your
                        daily interest fund.
                        The gross amount is subject to 10% processing fee.
                    </p>
                </div>
            </div>

            <div class="row loan-form-row">
                <div class="col-sm-12 loan-form-column">
                    <?php if ($capital_count == 0) { ?>
                    <div class="alert alert-info" role="alert">
                        <i class="fas fa-exclamation-triangle"></i> You do not have investments qualified for advanced
                        withdrawal.
                    </div>
                    <?php } ?>
                    <?php echo form_open('advanced_withdrawal'); ?>
                    <div class="form-group">
                        <label for="fullname">Client's Name</label>
                        <input type="text" class="form-control form-control-sm" required name="fullname"
                            value="<?= $fullname; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control form-control-sm" required name="username"
                            value="<?= $username; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="capital-invested">Capital Invested</label>
                        <select class="form-control form-control-sm" required name="capital">
                            <?php
                            // print_r($investment_list);
                            foreach ($investment_list as $investment) { ?>

                            <option value="<?= $investment->id; ?>"><?= $investment->amount ?></option>

                            <?php    }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="amount">Amount Applied for
                            <small class="text-muted">(Max: 40% of the capital invested.)</small>
                        </label>
                        <input type="text" class="form-control <?php if (strlen(form_error('amount')) > 0) {
                                                                    echo "is-invalid";
                                                                } ?>" required name="amount">
                        <div class="invalid-feedback">
                            <?php echo form_error('amount'); ?>
                        </div>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" required
                            name="agree-checkbox">
                        <label class="form-check-label" for="exampleCheck1"><small>By ticking the box, you agree to
                                the terms and conditions
                                applied
                                in the loan.</small></label>
                    </div>
                    <br>
                    <button type="submit" class="btn float-right">Submit</button>
                    </form>
                </div>

            </div>
        </div>
    </section>
</div>



<?php $this->load->view('templates/footer'); ?>