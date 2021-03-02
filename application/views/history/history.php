<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('layout/header-css.php')?>
    <link rel="stylesheet" href="<?=base_url('asset/')?>home/css/history.css">
    
</style>
</head>

<body></body>
    <!-- Import module -->
    <?php $this->load->view("layout/menu-top.php"); ?>



    <!-- page title -->
    <section class="section section--first section--bg" data-bg="img/section/section.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section__wrap">
                        <!-- section title -->
                        <h2 class="section__title">Booking History</h2>
                        <!-- end section title -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->

    <!-- catalog -->
    <div class="catalog">
        <div class="container history_container">
            <div class="row">
                <div>
                    <table class="history_table ">
                        <thead>
                            <tr class="his_head">
                                <th class="his_date">Date</th>
                                <th class="his_name">Movie Name</th>
                                <th class="his_ticket">Ticket</th>
                                <th class="his_total">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($historys as $history) {?>
                            <tr>
                                <td class="his_body_date"><?php echo $history->history_date?></td>
                                <td><?php echo $history->name?></td>
                                <td><?php echo $history->history_quantity?> qty.</td>
                                <td class="his_body_total">฿<?php echo number_format($history->history_total_price, 2) ?></td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>


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
                </div>
                <!-- end paginator -->
            </div>
        </div>
    </div>
    <!-- end catalog -->


    <?php $this->load->view("layout/footer.php"); ?>
    <?php $this->load->view("layout/footer-js.php"); ?>
    <script src="<?php echo base_url('asset/home/js/date.js');?>"></script>
    <script>
        //alert(Date.today())
    </script>
</body>

</html>