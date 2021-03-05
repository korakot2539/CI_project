<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('layout/header-css.php') ?>
</head>

<body>
    <!-- Import module -->
    <?php $this->load->view("layout/menu-top.php"); ?>


    <!-- page title -->
    <section class="section section--first section--bg" data-bg="<?php echo base_url('/asset/home/') ?>img/section/section.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section__wrap">
                        <!-- section title -->
                        <h2 class="section__title">Movie</h2>
                        <!-- end section title -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->

<<<<<<< HEAD
        <!-- catalog -->
        <div class="catalog">
            <div class="container">
                <div class="row">
                    <!-- card -->
                    <?foreach ($movies as $movie) {?>
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="card">
                            <div class="card__cover">
                                <img src="<?= base_url('admin/' . $movie->poster) ?>" alt="">
                                <a href="<?= base_url("Reserve/movie_details/$movie->movie_id") ?>" class="card__play">
                                    <i class="icon ion-ios-play"></i>
                                </a>
                            </div>
                            <div class="card__content">
                                <h3 class="card__title"><a href="#"><?= $movie->movie_name ?></a></h3>
                            </div>
                        </div>
                    </div>
                    <?}?>
                    <!-- end card -->
                    <!-- paginator -->
                    <div class="col-12">
                        <ul class="row pagination justify-content-center">
                            <?=$links ?>
                        </ul>
                    </div>
                    <!-- end paginator -->
=======
    <!-- catalog -->
    <div class="catalog">
        <div class="container">
            <div class="row">
                <!-- card -->
                <?foreach ($movies as $movie) {?>
                <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                    <div class="card">
                        <div class="card__cover">
                            <img src="<?= base_url('admin/' . $movie->poster) ?>" alt="">
                            <a href="<?= base_url("Reserve/movie_details/$movie->movie_id") ?>" class="card__play">
                                <i class="icon ion-ios-play"></i>
                            </a>
                        </div>
                        <div class="card__content">
                            <h3 class="card__title"><a href="#"><?= $movie->movie_name ?></a></h3>
                        </div>
                    </div>
                </div>
                <?}?>
                <!-- end card -->

                <!-- paginator -->
                <div class="col-12">
                    <ul class="paginator">
                        <li class="paginator__item paginator__item--prev">
                            <a href="#"><i class="icon ion-ios-arrow-back"></i></a>
                        </li>
                        <li class="paginator__item paginator__item--active"><a href="#">1</a></li>
                        <li class="paginator__item"><a href="#">2</a></li>
                        <li class="paginator__item"><a href="#">3</a></li>
                        <li class="paginator__item"><a href="#">4</a></li>
                        <li class="paginator__item paginator__item--next">
                            <a href="#"><i class="icon ion-ios-arrow-forward"></i></a>
                        </li>

                    </ul>
>>>>>>> 97acd1ba70e9f6710197c3ff9102cfe8d7ee208c
                </div>
                <!-- end paginator -->

            </div>
        </div>
    </div>
    <!-- end catalog -->



    <?php $this->load->view("layout/footer.php"); ?>
    <?php $this->load->view("layout/footer-js.php"); ?>
</body>

</html>