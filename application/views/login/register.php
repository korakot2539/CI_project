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
                <form id="registration" class="login100-form">
                    <span class="login100-form-title p-b-26">
                        Sign up
                    </span>
                    <div class="wrap-input100 input-email">
                        <input class="input100" type="email" id="email" name="email">
                        <span class="focus-input100" data-placeholder="Email"></span>
                    </div>
                    <div class="wrap-input100 input-password">
                        <input class="input100" type="password" id="password" name="password">
                        <span class="focus-input100" data-placeholder="Password"></span>
                    </div>
                    <div class="wrap-input100 input-confirm">
                        <input class="input100" type="password" id="confirm" name="confirm">
                        <span class="focus-input100" data-placeholder="Confirm Password"></span>
                    </div>
                    <div class="wrap-input100 input-fname">
                        <input class="input100" type="text" id="fname" name="fname">
                        <span class="focus-input100" data-placeholder="Full Name"></span>
                    </div>
                    <div class="wrap-input100">
                        <input class="input100" type="password" id="phonenumber" name="phonenumber">
                        <span class="focus-input100" data-placeholder="Phone Number"></span>
                    </div>
                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <!-- <div class="login100-form-bgbtn"></div> -->
                            <button class="login100-form-btn">
                                Register
                            </button>
                        </div>
                    </div>
                </form>
                <div class="text-left p-t-20">
                        <a class="txt2" href="javascript:history.back()">
                            Back
                        </a>
                </div>
            </div>
        </div>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="<?php echo base_url('asset/login/js/main.js'); ?>"></script>
    <script src="<?php echo base_url('asset/login/js/jquery.validate.js'); ?>"></script>
    <script src="<?php echo base_url('asset/login/js/form-check.js');?>"></script>

</body>

</html>