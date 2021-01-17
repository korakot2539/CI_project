<!DOCTYPE html>
<html lang="en">
<head>
<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <?php echo link_tag('asset/login/css/util.css'); ?>
    <?php echo link_tag('asset/login/css/main.css'); ?>

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
