<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('layout/header-css.php') ?>
    <link rel="stylesheet" href="<?= base_url('asset/') ?>home/css/history.css">

    </style>
</head>

<body></body>
<!-- Import module -->
<?php $this->load->view("layout/menu-top.php"); ?>



<!-- page title -->

<!-- end page title -->
<section class="section section--first section--bg" data-bg="<?php echo base_url('/asset/home/') ?>img/section/section.jpg">
<div class="container">
    <div class="row">
        <div class="section__wrap">
            <!-- section title -->
            <h2 class="section__title">Profile</h2>
            <!-- end section title -->
        </div>
    </div>
</div>
</section>
<!-- catalog -->

<!--profile-->

<div class="container">
    <div class="row">
        <div class="col-12">

            <div class="sign__content">

                <form action="#" class="sign__form">

                    <div class="sign__group">
                        <input type="text" class="sign__input" placeholder="Name">
                    </div>

                    <div class="sign__group">
                        <input type="text" class="sign__input" placeholder="Phone Number">
                    </div>

                    <div class="sign__group">
                        <input type="password" class="sign__input" placeholder="Current Password">
                    </div>

                    <div class="sign__group">
                        <input type="password" class="sign__input" placeholder="Password">
                    </div>

                    <div class="sign__group">
                        <input type="password" class="sign__input" placeholder="Confirm Password">
                    </div>

                    <button class="sign__btn" type="button">Save Changes</button>

                    <span class="sign__text"></span>
                </form>

            </div>
        </div>
    </div>
</div>
</div>
<!--end profile-->

<!-- end catalog -->


<?php $this->load->view("layout/footer.php"); ?>
<?php $this->load->view("layout/footer-js.php"); ?>
<script src="<?php echo base_url('asset/home/js/date.js'); ?>"></script>
<script>
    //alert(Date.today())
</script>
</body>

</html>