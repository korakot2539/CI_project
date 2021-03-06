<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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

                <div class="text-center p-t-115">
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
</body>

</html>