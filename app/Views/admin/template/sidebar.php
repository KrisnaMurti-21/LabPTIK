<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">KTB-Lab</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">LAB</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Halaman Admin</li>
            <li class="<?= ($page == 'index'? 'active' : '')?>"><a class="nav-link <?= ($page == 'index'? 'active' : '')?>" href="home"><i class="fas fa-fire"></i> <span>General Dashboard</span></a></li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Halaman Manajemen</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link beep beep-sidebar" href="<?= base_url()?>/admin/hal_lab">Manajemen Lab</a><li>
                        <li><a class="nav-link beep beep-sidebar" href="<?= base_url()?>/admin/hal_fasilitas">Manajemen Fasilitas</a></li>
                </ul>
            </li>
            <li class="<?= ($page == 'reservasi'? 'active' : '')?>"><a href="<?= base_url()?>/admin/reservasi" class="nav-link "><i class="fas fa-landmark"></i> <span>Info Reservasi Lab</span></a></li>
            <li class="<?= ($page == 'user'? 'active' : '')?>"><a href="<?= base_url()?>/admin/user" class="nav-link "><i class="fas fa-user"></i> <span>User</span></a></li>
                
            </aside>
      </div>