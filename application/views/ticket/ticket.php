<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('layout/header-css.php') ?>
    <title>FlixGo – Online Movies, TV Shows & Cinema HTML Template</title>

</head>

<body class="body">

    <!-- header -->
    <?php $this->load->view("layout/menu-top.php"); ?>

    <!-- details -->
    <section class="section details">
        <!-- details background -->
        <div class="details__bg" data-bg="img/home/home__bg.jpg"></div>
        <!-- end details background -->

        <!-- details content -->
        <div class="container">
            <div class="row">

                <!-- content -->
                <div class="col-12 col-xl-6">
                    <div class="card card--details">
                        <div class="row">
                            <!-- card cover -->
                            <div class="col-12 col-sm-4 col-md-4 col-lg-3 col-xl-5">
                                <div class="card__cover">
                                    <img src="<?= base_url('admin/' . $movies->poster) ?>" alt="">
                                </div>

                            </div>
                            <!-- end card cover -->
                            <div style="text-align: center" class="col-6">
                                <div class="feature">
                                    <h4 class="content__tabs" style="color:white;"><?= $movies->movie_name ?></h4>
                                    <span class="feature__text"><?= $movies->theater_time ?></span>
                                    <span class="feature__text"><?= $movies->total_ticket ?></span>
                                    <p class="feature__text">TICKET</p><br>
                                    <form method="post" action="<?= base_url("Ticket/html_to_pdf/$movies->movie_id/$movies->theater_time") ?>" id="my_form">
                                        <a href="javascript:{}" onclick="document.getElementById('my_form').submit()" class="header__sign-in">
                                            <i class="icon ion-ios-log-in"></i>
                                            <span>Download</span>
                                        </a>
                                    </form>
                                </div>
                            </div>
                            <!-- card content -->

                            <!-- end card content -->
                        </div>
                    </div>
                </div>
                <!-- end content -->
            </div>
        </div>
        <!-- end details content -->
    </section>
    <!-- end details -->

    <!-- end about -->
    <?php $this->load->view("layout/footer.php"); ?>
    <?php $this->load->view("layout/footer-js.php"); ?>
</body>

</html>