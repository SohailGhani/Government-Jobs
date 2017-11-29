<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Govt Jobs</title>
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.2.1.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/npm.js'); ?>"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-theme.min.css');?>">
    <style>

        .center{

            text-align: center;
        }

        .abc{
            color: lightskyblue;

        }



    </style>


<body>

<nav class="navbar navbar-inverse navbar-fixed-top" >
    <div class="container-fluid">
        <div class="navbar-header">

            <a class="navbar-brand" href="<?php echo base_url(); ?>">GovtJobs</a>
        </div>

    </div>
</nav>


/////////////////////////////////////////////////header////////////////////////////////////////////////////////////////

    <div class="container">


        <div class="row">

                <?php echo form_open('welcome/signIn',['class'=>'form-horizontal']) ?>
                <fieldset>
                    <div class="form-group">

                        <h3>Login only for admin <span class="glyphicon glyphicon-key"></span></h3>
                        <div class="description">
                            If you are admin, Enter username and password to log on:

                        </div>

                    </div>
                    <legend>Legend</legend>
                    <?php if ($msg = $this->session->flashdata('response')):  ?>
                        <div class="response">
                            <div  class="btn btn-danger"><?php echo $msg; ?></div>
                        </div>
                    <?php endif;?>

                    <br>
                    <div class="form-group">
                        <label for="inputEmail" class="col-md-2 control-label">Email</label>
                        <div class="col-md-4">
                            <?php echo form_input(['name'=>'userEmail','placeholder'=>'Email','class'=>'form-control','value'=> set_value("userEmail")])?>
                            <?php echo form_error('userEmail','<div class="text-danger">','</div>')?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword" class="col-md-2 control-label">Password</label>
                        <div class="col-md-4">
                            <?php echo form_password(['name'=>'userPassword','placeholder'=>'Password','class'=>'form-control','value'=> set_value("userPassword")])?>
                            <?php echo form_error('userPassword','<div class="text-danger">','</div>')?>
                        </div>
                    </div>


                    <br>
                    <div class="form-group">
                        <div class="col-md-10 col-md-offset-2">
                            <?php echo form_reset(['name'=>'reset','value'=>'reset','class'=>'btn btn-default'])?>
                            <?php echo form_submit(['name'=>'submit','value'=>'Sign In!','class'=>'btn btn-success'])?>
                        </div>
                    </div>
                </fieldset>
                <?php echo form_close(); ?><br><br><br><br><br><br><br>





            <nav class="navbar navbar-inverse">

            </nav>
        </div>
    </div>

        <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>
</body>
</html>