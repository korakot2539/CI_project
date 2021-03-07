<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('layout/header-css.php') ?>
    <link href="<?=base_url('asset/')?>home/css/addition.css">
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
                <!-- title -->

                <div class="col-12">
                    <h1 class="details__title"><?= $movies->movie_name ?></h1>
                </div>
                <!-- end title -->

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

                            <!-- card content -->
                            <div class="col-12 col-sm-8 col-md-8 col-lg-9 col-xl-7">
                                <div class="card__content">
                                    <div class="card__wrap">
                                        <span class="card__rate"><i class="icon ion-ios-star"></i>8.4</span>

                                        <ul class="card__list">
                                            <li>HD</li>
                                        </ul>
                                    </div>

                                    <ul class="card__meta">
                                        <li><span>Genre:</span>
                                            <a href="#"><?= $movies->category_name ?></a>
                                        </li>
                                        <li><span>Release year:</span><?= $movies->release_year ?></li>
                                        <li><span>Running time:</span><?= $movies->movie_time ?> minute</li>
                                    </ul>

                                    <div class="card__description card__description--details">
                                        <?= $movies->movie_detail ?>
                                    </div>
                                </div>
                            </div>
                            <!-- end card content -->
                        </div>
                    </div>
                </div>
                <!-- end content -->

                <!-- player -->
                <div class="col-12 col-xl-6">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" width="100%" height="300" frameBorder="0" src="<?= $movies->movie_trailer ?>" allowfullscreen></iframe>
                    </div>
                </div>
                <!-- end player -->
                <div class="col-8 ticket-quan">
                            <!-- filter item -->
                            <div class="filter__item" id="filter__quality">

                                <div class="filter__item-btn dropdown-toggle" role="navigation" id="filter-quality" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <input type="button" value="HOW MANY TICKET">
                                    <span></span>
                                </div>

                                <li class="header__nav-item">
                                    <select class="select-box" id="drop_list" onchange="myFunction()">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </li>

                            </div>
                            <!-- end filter it
                       em -->
                        </div>
                <div class=" col-16">
                    <div class="details__wrap">

                        <!-- share -->
                        <!-- end share -->
                        <form method="post" action="<?= base_url("Auth/loginWithOrder/$movies->movie_id/$movies->theater_time1") ?>" id="my_form">
                            <a  href="javascript:{}" onclick="clickSubmit('my_form')" class="first-there header__sign-in_detail">
                                <input type="hidden" id="mylist" name="mylist">
                                <i class="icon ion-ios-log-in"></i>
                                <span><?= $movies->theater_time1 ?></span>
                            </a>
                        </form>

                        <form method="post" action="<?= base_url("Auth/loginWithOrder/$movies->movie_id/$movies->theater_time2") ?>" id="my_form2">
                            <a href="javascript:{}" onclick="clickSubmit('my_form2')" class="header__sign-in_detail">
                                <input type="hidden" id="mylist2" name="mylist">
                                <i class="icon ion-ios-log-in"></i>
                                <span><?= $movies->theater_time2 ?></span>
                            </a>
                        </form>

                        <form method="post" action="<?= base_url("Auth/loginWithOrder/$movies->movie_id/$movies->theater_time3") ?>" id="my_form3">
                            <a href="javascript:{}" onclick="clickSubmit('my_form3')" class="header__sign-in_detail">
                                <input type="hidden" id="mylist3" name="mylist">
                                <i class="icon ion-ios-log-in"></i>
                                <span><?= $movies->theater_time3 ?></span>
                            </a>
                        </form>

                    </div>

                </div>



            </div>
        </div>
        <!-- end details content -->
    </section>
    <!-- end details -->

    <!-- end about -->
    <?php $this->load->view("layout/footer.php"); ?>
    <?php $this->load->view("layout/footer-js.php"); ?>
    <script>
        function myFunction() {
            var option_value = $("#drop_list option:selected").val();
            //alert($("#drop_list option:selected").val());
            $('#mylist').val(option_value);
            $('#mylist2').val(option_value);
            $('#mylist3').val(option_value);
        }

        function confirming() {
            confirm("Confirm Time and " + $("#drop_list option:selected").val())
        }

        function clickSubmit(clickID){
            if (confirm("Confirm to buy a ticket?")){
                document.getElementById(clickID).submit()
            }

        }
        //var selectedValue = document.getElementById("drop_list").value;
    </script>

</body>

</html>