<?= $this->extend('layout') ?>
<?= $this->section('kontainer') ?>
<!-- LOGIN INPUT -->
<?php

$username = $username_err = $password_err = "";

?>
<!-- AKHIR LOGIN INPUT -->

<!-- VIEW LOGIN INPUT -->
<link rel="stylesheet" href="assets/css/style.css">

<body id="home">
    <!-- login page -->
    <div id="app" class="container" style="margin-top: 3%;">
        <div class="col-md-15">
            <?php if (session()->getFlashdata('error') != '') { ?>
                <div class="alert alert-danger shadow-sm alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <?= session()->getFlashdata('error') ?>
                </div>
            <?php } ?>
            <?php if (session()->getFlashdata('success') != '') { ?>
                <div class="alert alert-success shadow-sm alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <?= session()->getFlashdata('success') ?>
                </div>
            <?php } ?>
            <div class="card-group shadow-lg" style="width:100%;"><br>
                <div class="col-md-6">
                    <img class="card-img-top" src="<?= base_url() ?>/assets/images/howard-bouchevereau-Ql4Y26OsEoY-unsplash.jpg" alt="Card image" style="width:100%; padding: 2%;">
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <br>
                        <h2>Login</h2>
                        <form action="#" method="post">
                            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" value="<?php echo $username; ?>">
                                <span class="help-block"><?php echo $username_err; ?></span>
                            </div>
                            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control">
                                <span class="help-block"><?php echo $password_err; ?></span>
                            </div>
                            <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                        <label class="label-checkbox100" for="ckb1">
                            Remember me
                        </label>
                    </div>
                            <input type="submit" class="btn btn-danger" name="login" value="Login"></input>
                            <a href="<?= base_url('Auth/Registration') ?>" type="submit" class="btn btn-primary">Register</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
    <!-- End of login page -->

    <!-- javascript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="assets/js/script.js"></script>
</body>
<!-- AKHIR VIEW LOGIN INPUT -->
<?= $this->endSection(); ?>