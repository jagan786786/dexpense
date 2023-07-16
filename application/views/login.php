<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daily Expense Tracker - Login</title>
    <?php echo link_tag('assets/css/bootstrap.min.css') ?>
    <?php echo link_tag('assets/css/datepicker3.css') ?>
    <?php echo link_tag('assets/css/styles.css') ?>


</head>

<body>

    <div class="row">
        <h2 align="center">Daily Expense Tracker</h2>
        <hr />
        <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">User Log in</div>
                <div class="panel-body">
                    <p style="font-size:16px; color:red" align="center"> </p>

                    <?php
                    if ($this->session->flashdata('error')) { ?>
                        <p style="color:red">
                            <?php echo $this->session->flashdata('error'); ?>
                        </p>
                    <?php } ?>
                   <?php $data['ID'] = $this->session->userdata('ID'); ?>

                    <form method="post" action="<?= base_url() ?>Login/loginUser">
                        <div class="form-outline mb-4">
                            <input type="email" class="form-control form-control-lg" id="email" required="required"
                                placeholder="Email ID*" name="email">
                            <div>
                                <?php echo form_error('email'); ?>
                            </div>
                            <div class="form-outline mb-3">
                                <input type="password" required="required" class="form-control form-control-lg"
                                    id="password" placeholder="Password*" name="password">
                                <div>
                                    <?php echo form_error('password'); ?>
                                </div>
                                <button type="submit" value="submit" name="submit"
                                    class="btn btn-primary">Submit</button>
                                <a href="<?php echo base_url(); ?>Signup/signup" class="btn btn-info"> Don't have an
                                    account ? Register</a>
                            </div>
                            
                    </form>

                </div>

            </div>
        </div>
    </div>



    <script src="<?php echo base_url('assets/js/jquery-1.11.1.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>

</body>

</html>