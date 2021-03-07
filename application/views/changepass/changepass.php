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
<section class="section section--first section--bg">
<div class="container">
    <div class="row">
        <div class="section__wrap">
            <!-- section title -->
            <h2 class="section__title">Change Password</h2>
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

            <div class="custom-sign sign__content">

                <form method="post"  enctype="multipart/form-data" class="signform-custon sign__form">

                    
                    <div class="sign__group">
                        <label class="custom-label" for="old_password">Current Password</label>
                        <input type="password" class="sign__input" placeholder="Current Password" name="old_password" id="old_password">
                    </div>

                    <div class="sign__group">
                        <label class="custom-label" for="new_password">New Password</label>
                        <input type="password" class="sign__input" placeholder="New Password" name="new_password" id="new_password">
                    </div>

                    <div class="sign__group">
                    <label class="custom-label" for="con_password">Confirm Password</label>
                        <input type="password" class="sign__input" placeholder="Confirm Password" name="con_password" id="con_password">
                    </div>

                    <button class="sign__btn"  type="submit">Save Changes</button>

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