<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
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
                    <form>
                        <div class="form-group">
                            <label for="fullname">Client's Name</label>
                            <input type="text" class="form-control form-control-sm" required name="fullname">
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control form-control-sm" required name="username">
                        </div>
                        <div class="form-group">
                            <label for="capital-invested">Capital Invested</label>
                            <input type="text" class="form-control form-control-sm" required name="capital">
                        </div>
                        <div class="form-group">
                            <label for="amount">Amount Applied for
                                <small class="text-muted">(Max: 40% of the capital invested.)</small>
                            </label>
                            <input type="text" class="form-control form-control-sm" required name="amount">
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" required
                                name="agree-checkbox">
                            <label class="form-check-label" for="exampleCheck1"><small>By ticking the box, you confirm
                                    that
                                    the supplied information are correct and you agree to the terms and conditions
                                    applied
                                    in the loan.</small></label>
                        </div>
                        <button type="submit" class="btn float-right">Submit</button>
                    </form>
                </div>

            </div>
        </div>
    </section>
</div>



<?php $this->load->view('templates/footer'); ?>