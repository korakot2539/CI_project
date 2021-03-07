<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('layout/header-css.php') ?>
    <title>FlixGo – Online Movies, TV Shows & Cinema HTML Template</title>

</head>

<body class="body">

    <!-- header -->
    <?php $this->load->view("layout/menu-top.php"); ?>

    <div class="sign section--bg" data-bg="img/section/section.jpg">
        <div class="container">
            <div class="row">
            
                <div class="sign__content" >
                    <!-- authorization form -->
                    
                    <div class="price price--premium">
                    <img class="ticket-img" width="200px" src="<?= base_url('admin/' . $movies->poster) ?>" alt="">
                    <p>
                        <h4 class="content__tabs" style="color:white;"><?= $movies->movie_name ?></h4>
                        <span class="feature__text">START TIME : <?= $movies->theater_time ?></span>
                        <p class="feature__text">TOTAL TICKET : <?= $movies->total_ticket ?> TICKET</p><br>
                        <?$user_id = $this->session->userdata('ss_user_id');?>
                        <form method="post" action="<?= base_url("PDFgenerate/index/$movies->ticket_id") ?>" id="my_form">
                            <a href="javascript:{}" onclick="document.getElementById('my_form').submit()" class="header__sign-in">
                                <i class="icon ion-ios-log-in"></i>
                                <span>Get ticket</span>
                            </a>
                        </form>
                    </div>
                    <!-- end authorization form -->

                </div>
            </div>
        </div>
    </div>


    <!-- end about -->
    <?php $this->load->view("layout/footer.php"); ?>
    <?php $this->load->view("layout/footer-js.php"); ?>
</body>

</html>
