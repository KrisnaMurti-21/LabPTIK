<?= $this->extend('layout') ?>
<?= $this->section('kontainer') ?>
<div class="container p-5">

        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                    <div id="content_block_04">
                        <div class="form-inner">
                            <div class="sec-title left">
                                <p>Bukti Reservasi</p>
                                <h2>Here Your Booking Code</h2>
                                <span class="separator"></span>
                            </div>
                            <form action="#" class="appointment-form">
                                <div class="form-group">
                                    <i class="fas fa-user"></i>
                                    <input type="text" name="name" value="LAB-812398" readonly>
                                </div>
                                <div class="form-group">
                                    <i class="fas fa-envelope"></i>
                                    <input type="text" name="time" value="2022-07-06 22:06:59" readonly>
                                </div>
                                <div class="form-group">
                                    <i class="fas fa-envelope"></i>
                                    <input type="text" name="time" value="2022-07-09 22:05:33" readonly>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</div>
<?= $this->endSection(); ?>