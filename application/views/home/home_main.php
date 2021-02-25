<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('home/layout/header-css.php')?>
</head>
<body>
    <!-- Import module -->
    <?php $this->load->view("home/layout/menu-top.php"); ?>

    <?php $this->load->view($content); ?>

    <?php $this->load->view("home/layout/footer.php"); ?>
    <?php $this->load->view("home/layout/footer-js.php"); ?>
</body>
</html>

