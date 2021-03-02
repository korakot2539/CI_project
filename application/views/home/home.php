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

    <!-- filter -->
    <div class="filter">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="filter__content">
                        <div class="filter__items">
                            <!-- filter item -->
                            <div class="filter__item" id="filter__genre">
                                <span class="filter__item-label">GENRE:</span>

                                <div class="filter__item-btn dropdown-toggle" role="navigation" id="filter-genre" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <input type="button" value="Action/Adventure">
                                    <span></span>
                                </div>

                                <ul class="filter__item-menu dropdown-menu scrollbar-dropdown" aria-labelledby="filter-genre">
                                    <li>Action/Adventure</li>
                                    <li>Animals</li>
                                    <li>Animation</li>
                                </ul>
                            </div>
                            <!-- end filter item -->



                            <!-- filter btn -->
                            <button class="filter__btn" type="button">apply filter</button>
                            <!-- end filter btn -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end filter -->

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
                </div>
            </div>
        </div>
        <!-- end catalog -->



        <?php $this->load->view("layout/footer.php"); ?>
        <?php $this->load->view("layout/footer-js.php"); ?>
</body>

</html>