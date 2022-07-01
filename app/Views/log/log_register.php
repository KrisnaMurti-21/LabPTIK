<?= $this->extend('layout') ?>
<?= $this->section('kontainer') ?>
<!-- REGISTER -->

<body id="home">
    <!-- login page -->
    <div id="app" class="container">
        <div class="col-md-15" style="margin-top:2%">
            <div class="card-group shadow-lg" style="width:100%"><br>
                <div class="col-md-6">
                    <img class="card-img-top" src="<?= base_url() ?>/assets/images/howard-bouchevereau-Ql4Y26OsEoY-unsplash.jpg" alt="Card image" style="width:100%; padding: 2%; margin-top: 30%;">
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <h2>Register</h2>
                        <form action="/Auth/Save" method="post">
                            <?= csrf_field(); ?>
                            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                                <label>Nama Lengkap</label>
                                <input type="text" id="nama" name="nama" class="form-control">
                            </div>
                            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                                <label>Username</label>
                                <input type="text" id="username" name="username" class="form-control">
                            </div>
                            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                                <label>Email</label>
                                <input type="email" id="email" name="email" class="form-control">
                            </div>
                            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                                <label>Password</label>
                                <input type="password" id="password" name="password" class="form-control">
                            </div>
                            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                                <label>Alamat</label>
                                <input type="text" id="alamat" name="alamat" class="form-control">
                            </div>

                            <input type="submit" class="btn btn-primary" name="register" value="Sign Up"></input>
                            &nbsp&nbsp Already Have an account?&nbsp&nbsp
                            <a href="<?= base_url('Auth/Login') ?>" type="submit" class="btn btn-danger">Login</a>
                            <br><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><br><br>
    <!-- End of login page -->

    <!-- javascript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>
<!-- AKHIR REGISTER -->
<?= $this->endSection(); ?>