<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<section class="section">
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-3">
            </div>


            <div class="col-lg-6">
                <div class="card card_forgot_password text-dark">

                    <div class="row brand_row">
                        <div class="col-12 text-center">
                            <div class="login-brand">
                                <a href="<?= base_url();?>">
                                    <img src="<?= base_url();?>assets/img/EF_LOGO_COMPLETE.svg" alt="" width="300px">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="row">
                            <div class="col-12 text-center">
                                <h3 class="login-title">VERIFICATION</h3>
                                <p <?php if(isset($status)){if($status)echo 'hidden';} ?> class="text-white">
                                    Please provide the verification code sent to your email.
                                </p>

                                <?php if(isset($status)){
                                  if(!$status){
                                    if(isset($message)){?>

                                <div class="alert alert-danger" role="alert">
                                    <?=$message;?>
                                </div>

                                <?php
                                    }}else{?>
                                <div class="alert alert-success" role="alert">
                                    <?=$message;?>
                                </div>
                                <?php
                                    }
                                }?>
                            </div>
                        </div>

                        <?php echo form_open('verification'); ?>
                        <div class="form-group text-white" <?php if(isset($status)){if($status)echo 'hidden';} ?>>
                            <label for="v_code" class="text-white">Code</label>
                            <input id="v_code" type="text"
                                class="form-control <?php if(strlen(form_error('v_code')) > 0){echo "is-invalid";} ?>"
                                name="v_code" tabindex="1" autofocus value="<?= set_value('v_code','',true)?>">
                            <div class="invalid-feedback">
                                <?php echo form_error('v_code');?>
                            </div>
                        </div>

                        <div class="form-group" <?php if(isset($status)){if($status)echo 'hidden';} ?>>
                            <button type="submit" class="btn btn-lg btn-block btn_verify" tabindex="4">
                                Submit
                            </button>
                        </div>
                        </form>
                        <p class="login_link text-center">
                            <a href="<?= base_url();?>logout">Login</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>