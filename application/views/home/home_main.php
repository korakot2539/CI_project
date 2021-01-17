<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
        <?php $this->load->view("home/layout/header-css.php"); ?>

	<title>Movie Ticket</title>
</head>
<body>
    <!-- Import module -->
    <?php $this->load->view("home/layout/menu-top.php"); ?>

    <?php $this->load->view($content); ?>

    <?php $this->load->view("home/layout/footer.php"); ?>
    <?php $this->load->view("home/layout/footer-js.php"); ?>
</body>
</html>
