<?php 
if (session()->get('level')== '1') {
?>
<div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo mr-5" href="../../index.html"><img src="../../images/logo.svg"
                    class="mr-2" alt="logo" /></a>
            <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="../../images/logo-mini.svg"
                    alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="icon-menu"></span>
            </button>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                        data-toggle="dropdown">
                        <i class="icon-bell mx-0"></i>
                        <span class="count"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                        aria-labelledby="notificationDropdown">
                        <!-- Notifikasi -->
                    </div>
                </li>
                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                        <?php if($pp->foto==null){?>
                        <img src="<?= base_url('profile/def.png') ?>" alt="user"
                            class="profile-pic me-2 border border-dark border-solid" />
                        <?php }else if($pp->foto!==null){?>
                        <img src="<?= base_url('profile/'.$pp->foto) ?>" alt="user"
                            class="profile-pic me-2 border border-dark border-solid" />
                        <?php }?>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">

                        <a class="dropdown-item" href="<?= base_url('login/log_out')?>">
                            <i class="mdi mdi-logout text-primary"></i>
                            Logout
                        </a>
                    </div>
                </li>
                <!-- <li class="nav-item nav-settings d-none d-lg-flex">
            <a class="nav-link" href="#">
              <i class="icon-ellipsis"></i>
            </a>
          </li> -->
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                data-toggle="offcanvas">
                <span class="icon-menu"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_settings-panel.html -->
        <div class="theme-setting-wrapper">
            <div id="settings-trigger"><i class="ti-settings"></i></div>
            <div id="theme-settings" class="settings-panel">
                <i class="settings-close ti-close"></i>
                <p class="settings-heading">SIDEBAR SKINS</p>
                <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                    <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
                </div>
                <div class="sidebar-bg-options" id="sidebar-dark-theme">
                    <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
                </div>
                <p class="settings-heading mt-2">HEADER SKINS</p>
                <div class="color-tiles mx-0 px-4">
                    <div class="tiles success"></div>
                    <div class="tiles warning"></div>
                    <div class="tiles danger"></div>
                    <div class="tiles info"></div>
                    <div class="tiles dark"></div>
                    <div class="tiles default"></div>
                </div>
            </div>
        </div>
        <!-- <div id="right-sidebar" class="settings-panel"> -->
        <!-- Isi Button Titik Titik -->
        <!-- </div> -->
        <!-- partial -->
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/Dashboard')?>">
                        <i class="mdi mdi-home grid menu-icon"></i>
                        <span class="menu-title">Home</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/user')?>">
                        <i class="mdi mdi-account-multiple grid menu-icon"></i>
                        <span class="menu-title">Users</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/book')?>">
                        <i class="mdi mdi-book-open  grid menu-icon"></i>
                        <span class="menu-title">Buku</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/kategori')?>">
                        <i class="mdi mdi-view-list  grid menu-icon"></i>
                        <span class="menu-title">Kategori</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/peminjaman')?>">
                        <i class="mdi mdi-table-edit  grid menu-icon"></i>
                        <span class="menu-title">Peminjaman</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/koleksi')?>">
                        <i class="mdi mdi-bookmark grid menu-icon"></i>
                        <span class="menu-title">Koleksi</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/laporan_peminjaman')?>">
                        <i class="mdi mdi-file-chart  grid menu-icon"></i>
                        <span class="menu-title">Laporan Peminjaman</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/laporan_pengembalian')?>">
                        <i class="mdi mdi-file-chart  grid menu-icon"></i>
                        <span class="menu-title">Laporan Pengembalian</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- partial -->

        <?php 
} else if (session()->get('level')== '2') {
?>
        <div class="container-scroller">
            <!-- partial:../../partials/_navbar.html -->
            <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
                <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo mr-5" href="../../index.html"><img src="../../images/logo.svg"
                            class="mr-2" alt="logo" /></a>
                    <a class="navbar-brand brand-logo-mini" href="../../index.html"><img
                            src="../../images/logo-mini.svg" alt="logo" /></a>
                </div>
                <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                        data-toggle="minimize">
                        <span class="icon-menu"></span>
                    </button>
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                                data-toggle="dropdown">
                                <i class="icon-bell mx-0"></i>
                                <span class="count"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                                aria-labelledby="notificationDropdown">
                                <!-- Notifikasi -->
                            </div>
                        </li>
                        <li class="nav-item nav-profile dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                                <?php if($pp->foto==null){?>
                                <img src="<?= base_url('profile/def.png') ?>" alt="user"
                                    class="profile-pic me-2 border border-dark border-solid" />
                                <?php }else if($pp->foto!==null){?>
                                <img src="<?= base_url('profile/'.$pp->foto) ?>" alt="user"
                                    class="profile-pic me-2 border border-dark border-solid" />
                                <?php }?>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                                aria-labelledby="profileDropdown">

                                <a class="dropdown-item" href="<?= base_url('login/log_out')?>">
                                    <i class="mdi mdi-logout text-primary"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                        <!-- <li class="nav-item nav-settings d-none d-lg-flex">
            <a class="nav-link" href="#">
              <i class="icon-ellipsis"></i>
            </a>
          </li> -->
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                        data-toggle="offcanvas">
                        <span class="icon-menu"></span>
                    </button>
                </div>
            </nav>
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
                <!-- partial:../../partials/_settings-panel.html -->
                <div class="theme-setting-wrapper">
                    <div id="settings-trigger"><i class="ti-settings"></i></div>
                    <div id="theme-settings" class="settings-panel">
                        <i class="settings-close ti-close"></i>
                        <p class="settings-heading">SIDEBAR SKINS</p>
                        <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                            <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
                        </div>
                        <div class="sidebar-bg-options" id="sidebar-dark-theme">
                            <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
                        </div>
                        <p class="settings-heading mt-2">HEADER SKINS</p>
                        <div class="color-tiles mx-0 px-4">
                            <div class="tiles success"></div>
                            <div class="tiles warning"></div>
                            <div class="tiles danger"></div>
                            <div class="tiles info"></div>
                            <div class="tiles dark"></div>
                            <div class="tiles default"></div>
                        </div>
                    </div>
                </div>
                <!-- <div id="right-sidebar" class="settings-panel"> -->
                <!-- Isi Button Titik Titik -->
                <!-- </div> -->
                <!-- partial -->
                <!-- partial:../../partials/_sidebar.html -->
                <nav class="sidebar sidebar-offcanvas" id="sidebar">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/Dashboard')?>">
                                <i class="mdi mdi-home grid menu-icon"></i>
                                <span class="menu-title">Home</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/book')?>">
                                <i class="mdi mdi-book-open  grid menu-icon"></i>
                                <span class="menu-title">Buku</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/kategori')?>">
                                <i class="mdi mdi-view-list  grid menu-icon"></i>
                                <span class="menu-title">Kategori</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/peminjaman')?>">
                                <i class="mdi mdi-table-edit  grid menu-icon"></i>
                                <span class="menu-title">Peminjaman</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/koleksi')?>">
                                <i class="mdi mdi-bookmark grid menu-icon"></i>
                                <span class="menu-title">Koleksi</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/laporan_peminjaman')?>">
                                <i class="mdi mdi-file-chart  grid menu-icon"></i>
                                <span class="menu-title">Laporan Peminjaman</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/laporan_pengembalian')?>">
                                <i class="mdi mdi-file-chart  grid menu-icon"></i>
                                <span class="menu-title">Laporan Pengembalian</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- partial -->
                <?php 
} else if (session()->get('level')== '3') {
?>
                <div class="container-scroller">
                    <!-- partial:../../partials/_navbar.html -->
                    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
                        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                            <a class="navbar-brand brand-logo mr-5" href="../../index.html"><img
                                    src="../../images/logo.svg" class="mr-2" alt="logo" /></a>
                            <a class="navbar-brand brand-logo-mini" href="../../index.html"><img
                                    src="../../images/logo-mini.svg" alt="logo" /></a>
                        </div>
                        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                            <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                                data-toggle="minimize">
                                <span class="icon-menu"></span>
                            </button>
                            <ul class="navbar-nav navbar-nav-right">
                                <li class="nav-item dropdown">
                                    <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown"
                                        href="#" data-toggle="dropdown">
                                        <i class="icon-bell mx-0"></i>
                                        <span class="count"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                                        aria-labelledby="notificationDropdown">
                                        <!-- Notifikasi -->
                                    </div>
                                </li>
                                <li class="nav-item nav-profile dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"
                                        id="profileDropdown">
                                        <?php if($pp->foto==null){?>
                                        <img src="<?= base_url('profile/def.png') ?>" alt="user"
                                            class="profile-pic me-2 border border-dark border-solid" />
                                        <?php }else if($pp->foto!==null){?>
                                        <img src="<?= base_url('profile/'.$pp->foto) ?>" alt="user"
                                            class="profile-pic me-2 border border-dark border-solid" />
                                        <?php }?>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                                        aria-labelledby="profileDropdown">

                                        <a class="dropdown-item" href="<?= base_url('login/log_out')?>">
                                            <i class="mdi mdi-logout text-primary"></i>
                                            Logout
                                        </a>
                                    </div>
                                </li>
                                <!-- <li class="nav-item nav-settings d-none d-lg-flex">
            <a class="nav-link" href="#">
              <i class="icon-ellipsis"></i>
            </a>
          </li> -->
                            </ul>
                            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center"
                                type="button" data-toggle="offcanvas">
                                <span class="icon-menu"></span>
                            </button>
                        </div>
                    </nav>
                    <!-- partial -->
                    <div class="container-fluid page-body-wrapper">
                        <!-- partial:../../partials/_settings-panel.html -->
                        <div class="theme-setting-wrapper">
                            <div id="settings-trigger"><i class="ti-settings"></i></div>
                            <div id="theme-settings" class="settings-panel">
                                <i class="settings-close ti-close"></i>
                                <p class="settings-heading">SIDEBAR SKINS</p>
                                <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                                    <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
                                </div>
                                <div class="sidebar-bg-options" id="sidebar-dark-theme">
                                    <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
                                </div>
                                <p class="settings-heading mt-2">HEADER SKINS</p>
                                <div class="color-tiles mx-0 px-4">
                                    <div class="tiles success"></div>
                                    <div class="tiles warning"></div>
                                    <div class="tiles danger"></div>
                                    <div class="tiles info"></div>
                                    <div class="tiles dark"></div>
                                    <div class="tiles default"></div>
                                </div>
                            </div>
                        </div>
                        <!-- <div id="right-sidebar" class="settings-panel"> -->
                        <!-- Isi Button Titik Titik -->
                        <!-- </div> -->
                        <!-- partial -->
                        <!-- partial:../../partials/_sidebar.html -->
                        <nav class="sidebar sidebar-offcanvas" id="sidebar">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('/Dashboard')?>">
                                        <i class="mdi mdi-home grid menu-icon"></i>
                                        <span class="menu-title">Home</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('/book')?>">
                                        <i class="mdi mdi-book-open  grid menu-icon"></i>
                                        <span class="menu-title">Buku</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('/peminjaman')?>">
                                        <i class="mdi mdi-table-edit  grid menu-icon"></i>
                                        <span class="menu-title">Peminjaman</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('/koleksi')?>">
                                        <i class="mdi mdi-bookmark grid menu-icon"></i>
                                        <span class="menu-title">Koleksi</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <!-- partial -->
                        <?php }?>