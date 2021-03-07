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
    <section class="section section--first section--bg" data-bg="<?php echo base_url('/asset/home/') ?>img/section/section.jpg">
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
                            <?php foreach ($tickets as $ticket) {?>
                            <tr>
                            <?php $originalDate = $ticket->timestamp; ?>
                            <?php $newDate = date("d-m-Y", strtotime($originalDate)); ?>

                                <td class="his_body_date"><?= $newDate?></td>
                                <td><?php echo $ticket->movie_name?></td>
                                <td><?php echo $ticket->total_ticket?> qty.</td>
                                <td class="his_body_total">฿<?php echo number_format($ticket->total_price, 2) ?></td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- end catalog -->


    <?php $this->load->view("layout/footer.php"); ?>
    <?php $this->load->view("layout/footer-js.php"); ?>
    <script src="<?php echo base_url('asset/home/js/date.js');?>"></script>
    <script>
        
    </script>
</body>

</html>