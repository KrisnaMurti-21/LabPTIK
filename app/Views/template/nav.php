<!-- page wrapper -->

<body class="boxed_wrapper">

    <!-- preloader -->
    <div class="preloader">
        <div class="boxes">
            <div class="box">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="box">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="box">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="box">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <!-- preloader end -->


    <!-- search-popup -->
    <div id="search-popup" class="search-popup">
        <div class="close-search"><span>Close</span></div>
        <div class="popup-inner">
            <div class="overlay-layer"></div>
            <div class="search-form">
                <form method="post" action="#">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required>
                            <input type="submit" value="Search Now!" class="theme-btn style-four">
                        </fieldset>
                    </div>
                </form>
                <h3>Recent Search Keywords</h3>
                <ul class="recent-searches">
                    <li><a href="#">Coding</a></li>
                    <li><a href="#">Network</a></li>
                    <li><a href="#">Game</a></li>
                    <li><a href="#">Speed</a></li>
                    <li><a href="#">Youtube</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- search-popup end -->


    <!-- main header -->
    <header class="main-header style-five">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-xl-3 col-lg-12 col-md-12 logo-column">
                    <div class="logo-box">
                        <figure class="logo">
                            <a href="#">
                                <!-- <h1>Logo</h1> -->
                                <img src="<?= base_url() ?>/assets/images/LogoLab.png" alt="">
                            </a>
                        </figure>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-12 col-md-12 outer-column">
                    <div class="header-top clearfix">
                        <div class="top-left pull-left clearfix">
                            <div class="working-time"><i class="fas fa-clock"></i>
                                <p>Jam Operasional Lab - Senin - Jumat : 8:30 - 18:30</p>
                            </div>
                        </div>
                        <ul class="top-right pull-right">
                            <li><i class="fas fa-phone-volume"></i><a href="tel:1234567890">+628381231222</a></li>
                            <li><i class="fas fa-envelope"></i><a href="mailto:anelka@ktbteam.my.id">admin@ktbteam.my.id</a></li>
                        </ul>
                    </div>
                    <div class="header-upper">
                        <div class="outer-box clearfix">
                            <div class="menu-area">
                                <!--Mobile Navigation Toggler-->
                                <div class="mobile-nav-toggler">
                                    <i class="icon-bar"></i>
                                    <i class="icon-bar"></i>
                                    <i class="icon-bar"></i>
                                </div>
                                <nav class="main-menu navbar-expand-md navbar-light">
                                    <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                        <ul class="navigation clearfix">
                                            <li class="<?= ($page == 'index' ? 'current' : '') ?>"><a href="<?= base_url() ?>">Home</a>
                                            </li>
                                            <li class="dropdown <?= ($page == 'lab' ? 'current' : '') ?>"><a href="#">Laboratorium</a>
                                                <ul>
                                                    <li><a href="<?= base_url('lab/rpl') ?>">Software Engineering</a></li>
                                                    <li><a href="<?= base_url('lab/mulmed') ?>">Multimedia Studio</a></li>
                                                    <li><a href="<?= base_url('lab/tkj') ?>">Computer Network and Instrumentation
                                                        </a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="#">Fasilitas</a>
                                                <ul>
                                                    <li><a href="<?= base_url('lab/fasilitas_rpl') ?>">Lab. Software Engineering</a></li>
                                                    <li><a href="<?= base_url('lab/fasilitas_mulmed') ?>">Lab. Multimedia Studio</a></li>
                                                    <li><a href="<?= base_url('lab/fasilitas_tkj') ?>">Lab. Computer Network and Instrumentation</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="<?= base_url('lab/l_contact') ?>">Contact Us</a></li>
                                            <?php if (session()->get('loggedIn')) { ?>
                                            <li class="dropdown"><a href="#">Pengguna</a>
                                                <ul>
                                                    <!-- <li><a href="<?= base_url('auth/edit') ?>">Edit Profile</a></li> -->
                                                    <li><a href="<?= base_url('auth/metu') ?>">Logout</a></li>
                                                </ul>
                                            </li>
                                            <?php } else { ?>
                                            <li class="dropdown"><a href="#">Pengguna</a>
                                                <ul>
                                                    <li><a href="<?= base_url('Auth/Login') ?>">Masuk</a></li>
                                                    <li><a href="<?= base_url('Auth/Registration') ?>">Daftar</a></li>
                                                </ul>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </nav>
                                <div class="menu-right-content">
                                    <div class="search-box-outer">
                                        <div class="search-btn">
                                            <button type="button" class="search-toggler"><span class="fas fa-search"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-right-content">
                                <div class="search-box-outer">
                                    <div class="search-btn">
                                        <button type="button" class="search-toggler"><span class="fas fa-search"></span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--sticky Header-->
        <div class="sticky-header">
            <div class="auto-container">
                <div class="outer-box clearfix">
                    <div class="logo-box pull-left">
                        <figure class="logo">
                            <a href="#">
                                <img src="<?= base_url() ?>/assets/images/small-logo.png" alt="">
                                <!-- <h1>Logo</h1> -->
                            </a>
                        </figure>
                    </div>
                    <div class="menu-area pull-right">
                        <nav class="main-menu clearfix">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </nav>
                        <div class="btn-box"><a href="<?= base_url()?>/reservasi" class="theme-btn style-one">Reservasi Sekarang</a></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- main-header end -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><i class="fas fa-times"></i></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="#"><img src="assets/images/mobile-logo.png" alt="" title=""></a></div>
            <div class="menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
            <div class="contact-info">
                <h4>Contact Info</h4>
                <ul>
                    <li>Chicago 12, Melborne City, USA</li>
                    <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                    <li><a href="mailto:info@example.com">info@example.com</a></li>
                </ul>
            </div>
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                </ul>
            </div>
        </nav>
    </div><!-- End Mobile Menu -->