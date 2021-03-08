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
                <div class="col-12">
                    <div class="section__wrap">
                        <!-- section title -->
                        <h2 class="section__title">Change password</h2>
                        <!-- end section title -->
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- catalog -->

<!--profile-->
<div class="catalog">
<div class="container">
    <div class="row">
        <div class="col-12">


                <form method="post"  enctype="multipart/form-data" class="sign__form" style="padding :50px 100px 30px 100px !important;">

                    
                    <div class="sign__group col-6">
                        <label for="old_password" class="col-sm-6" style="color:white;">Current Password</label>
                        <input type="password" class="sign__input"  name="old_password" id="old_password">
                    </div>

                    <div class="sign__group col-6">
                        <label for="new_password" class="col-sm-6" style="color:white;">New password</label>
                        <input type="password" class="sign__input"  name="new_password" id="new_password">
                    </div>

                    <div class="sign__group col-6">
                        <label for="con_password" class="col-sm-6" style="color:white;">Confirm new password</label>
                        <input type="password" class="sign__input"  name="con_password" id="con_password">
                    </div>
                    <div class="text-center col-6">
                        <button onclick="return confirm('คุณต้องการเปลี่ยนรหัสผ่าน?')" id="save" class="sign__btn" style="width:200px" type="submit">Save Changes</button>
                    </div>
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
</body>

</html>