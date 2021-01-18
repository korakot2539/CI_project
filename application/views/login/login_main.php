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
    <!-- Import module -->
	<?php $this->load->view($content); ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="<?php echo base_url('asset/login/js/main.js'); ?>"></script>
<script src="<?php echo base_url('asset/login/js/jquery.validate.js'); ?>"></script>
<script src="<?php echo base_url('asset/login/js/form-check.js');?>"></script>
</body>
</html>
