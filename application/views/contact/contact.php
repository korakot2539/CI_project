<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('layout/header-css.php')?>
</head>

<body>
    <!-- Import module -->
    <?php $this->load->view("layout/menu-top.php"); ?>


    <!-- page title -->
    <section class="section section--first section--bg" data-bg="img/section/section.jpg">
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
    <section class="section">
        <div class="container">
            <div class="row">
                <!-- section title -->
                <div class="col-12">
                    <h2 class="section__title"><b>ติดต่อสอบถามได้ที่ คุณบอบ วอชิงตัน</b></h2>
                </div>
                <!-- end section title -->

                <!-- section text -->
                <div class="col-12">
                    <p class="section__text"></p>
                    <p class="section__text">• 08-1234-5678 , 08-1234-5678 </p>
                    <p class="section__text">• 0-2511-1111 ถึง 36 # 539 </p>
                    <p class="section__text">• 0-25110000 </p>
                    <p class="section__text">• Fax : 0-2444-3333 </p>
                    <p class="section__text">• ติดตามภาพบรรยากาศความสนุกได้ที่ IG: Bob_major </p>
                    <p class="section__text">• Facebook: Bob_major</p>
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