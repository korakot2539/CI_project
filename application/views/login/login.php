<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="<?=base_url('asset/')?>login/css/util.css" rel="stylesheet">
    <link href="<?=base_url('asset/')?>login/css/main.css" rel="stylesheet">
</head>
<body>
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <?php 

                    $attr = array(
                            'name' =>'loginForm' , 
                            'id' =>'loginForm' , 
							'class' => "login100-form validate-form"
                    );                    
                    
                    $action = base_url('Auth/login');

                    echo form_open($action,$attr);
                     ?>
                <span class="login100-form-title p-b-26">
                    Movie Ticket
                </span>
                <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
                    <input class="input100" type="text" name="email">
                    <span class="focus-input100" data-placeholder="Email"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" type="password" name="pass">
                    <span class="focus-input100" data-placeholder="Password"></span>
                </div>

                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <!-- <div class="login100-form-bgbtn"></div> -->
                        <button type="submit" class="login100-form-btn">
                            Login
                        </button>
                    </div>
                </div>

                <?php if($this->session->flashdata('flash_errors')){ ?>     
                    <div class="col-12 mt-3">
                        <div class="alert alert-danger fade show" role="alert">
                            <?= $this->session->flashdata('flash_errors')  ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>                                  
                <?php } ?>

                <div class="text-center p-t-50">
                    <span class="txt1">
                        Don’t have an account?
                    </span>

                    <a class="txt2" href="<?php echo base_url('Auth/registerForm')?>">
                        Sign Up
                    </a>
                </div>
				<?php echo form_close(); ?>

        </div>
    </div>
</div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="<?php echo base_url('asset/login/js/main.js'); ?>"></script>
    <script src="<?php echo base_url('asset/login/js/jquery.validate.js'); ?>"></script>
    <script src="<?php echo base_url('asset/login/js/form-check.js');?>"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>