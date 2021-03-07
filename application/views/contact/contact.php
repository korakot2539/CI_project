<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('layout/header-css.php')?>
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
                        <h2 class="section__title">Contact Information</h2>
                        <!-- end section title -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->
    <!-- about -->
    <section class="catalog" style="min-height:550px;">
        <div class="container">
            <div class="row">
                <!-- section title -->
                <div class="col-12">
                    <h2 class="section__title"><b>ติดต่อสอบถามได้ที่ คุณบอบ วอชิงตัน</b></h2>
                </div>
                <!-- end section title -->

                <!-- section text -->
                <div class="col-12 pl-3">
                    <p class="section__text" style="margin-left:5em;margin-top:3em;">- Phone    : 0-25110000 </p>
                    <p class="section__text" style="margin-left:5em;">- Fax      : 0-2444-3333 </p>
                    <p class="section__text" style="margin-left:5em;">- IG       : Bob_major </p>
                    <p class="section__text" style="margin-left:5em;">- Facebook : Bob_major</p>
                </div>
                <!-- end section text -->

                <!-- end feature -->
            </div>
        </div>
    </section>
    <!-- end about -->
    <?php $this->load->view("layout/footer.php"); ?>
    <?php $this->load->view("layout/footer-js.php"); ?>
</body>

</html>