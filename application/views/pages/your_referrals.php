<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  $this->load->view('templates/header');
?>

<div class="main-content">

    <section class="section">

        <div class="section-body">

            <div class="section-header section-header-custom">
                <h1>REFERRALS</h1>
            </div>

            <div class="row">

                <!-- <div class="col-lg-4">
                    <div class="card  referral_summary">
                        <div class="card-body">
                            <div style="display:inline-block;">
                                <img src="<?php echo base_url();?>assets/img/banking2/017-salary.png" alt="img" />
                            </div>
                            <div style="display:inline-block; vertical-align:middle;">
                                <h5>Referral Bonus: </h5>
                                <h4><?php echo $total_bonus; ?></h4>
                            </div>
                        </div>
                    </div>
                </div> -->

                <div class="col-lg-6">
                    <div class="card  referral_summary">
                        <div class="card-body">
                            <div style="display:inline-block;">
                                <!-- <img src="<?php echo base_url();?>assets/img/banking2/041-bar graph.png" alt="img" /> -->
                            </div>
                            <div style="display:inline-block; vertical-align:middle;">
                                <h5>Total : </h5>
                                <h4> <?php echo $total_referrals; ?></h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card  referral_summary">
                        <div class="card-body">
                            <div style="display:inline-block;">
                                <!-- <img src="<?php echo base_url();?>assets/img/banking2/035-employee.png" alt="img" /> -->
                            </div>
                            <div style="display:inline-block; vertical-align:middle;">
                                <h5>Active : </h5>
                                <h4> <?php echo $active_referrals; ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row deposit-row">
                <div class="col-12">
                    <div class="card text-dark card_ref_active">
                        <div class="card-header">
                            <h4>ACTIVE</h4>
                            <!-- ( First Level to Sixth Level Referrals) -->
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <th scope="col">Username</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Total Deposit</th>
                                        <th scope="col">Level</th>
                                    </tr>
                                    <?php
									if (isset($referral_list)) {
										foreach ($referral_list as $row) { ?>
                                    <tr>
                                        <td><?php echo $row['username']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['total_deposit']; ?></td>
                                        <td><?php echo $row['level']; ?></td>
                                    </tr>
                                    <?php }
									} ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row deposit-row">
                <div class="col-12">
                    <div class="card text-dark card_ref_inactive">
                        <div class="card-header">
                            <h4>INACTIVE</h4>
                            <!-- ( First Level to Sixth Level Referrals) -->
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <th scope="col">Username</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Level</th>
                                    </tr>
                                    <?php
									if (isset($inactive_referral_list)) {
										foreach ($inactive_referral_list as $row) { ?>
                                    <tr>
                                        <td><?php echo $row['username']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['level']; ?></td>
                                    </tr>
                                    <?php }
									} ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>



<?php $this->load->view('templates/footer'); ?>