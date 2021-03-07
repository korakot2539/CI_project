<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('layout/header-css.php') ?>
    <link rel="stylesheet" href="<?= base_url('asset/') ?>home/css/history.css">

    </style>
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
                        <h2 class="section__title">Profile</h2>
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
                        <form method="post"  enctype="multipart/form-data" class="sign__form" style="padding-left: 100px !important; padding-right: 100px !important;">
                            <div class="sign__group col-6" style="margin-bottom:3em;">
                                <label for="name" class="col-sm-3" style="color:white;margin-bottom:2em;">Name</label>
                                <input type="text" class="sign__input" placeholder="Name" name="name" id="name" value="<?=$userdata->name ?>">
                            </div>
                            <div class="sign__group col-6" style="margin-bottom:3em;">
                                <label for="phone" class="col-sm-3" style="color:white;margin-bottom:2em;">Phone</label>
                                <input type="text" class="sign__input" placeholder="Phone Number" name="phone" id="phone" value="<?=$userdata->phone ?>">
                            </div>
                            <div class="text-center col-6">
                            <button class="sign__btn"  type="submit" style="width:200px">Save Changes</button>
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
<script>
    //alert(Date.today())
</script>
</body>

</html>