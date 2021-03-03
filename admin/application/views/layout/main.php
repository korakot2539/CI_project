<!--
=========================================================
* * Black Dashboard - v1.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/black-dashboard
* Copyright 2019 Creative Tim (https://www.creative-tim.com)


* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('layout/header-css') ?>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
</head>

<body class="">
    <div class="wrapper">


        <!-- Menu left -->
        <?php $this->load->view('layout/menu-left.php') ?>
        <!-- End of menu left -->


        <div class="main-panel">
            <!-- Menu top -->
            <?php $this->load->view('layout/menu-top.php') ?>
            <!-- End of menu top -->


            <div class="content">
                <!-- Content -->
                <?php $this->load->view($content) ?>
                <!-- End of content -->
            </div>

            <!-- Footer -->
            <?php $this->load->view('layout/footer.php') ?>
            <!-- End of footer -->

            <!-- End of main panel -->
        </div>
    </div>






    <!-- JS Core -->
    <?php $this->load->view('layout/footer-js.php') ?>
    <!-- End of JS Core -->

</body>

</html>