<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <!-- Sidebar Toggle (Topbar) -->
            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
              <img src="<?= base_url(); ?>assets/img/profile/Logo_BUMN_Untuk_Indonesia_2020.svg" width="120px">
              <div class="topbar-divider"></div>
              <img src="<?= base_url(); ?>assets/img/auth/kai.svg" width="70px">
                <div class="topbar-divider"></div>
                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="<?= base_url('auth') ?>" id="userDropdown" role="button">
                      <button type="button" class="btn " style="color: #ffff;border-radius: 20px;background: linear-gradient(to right, #2D2A70,#ed6b23);">Masuk <i class="fas fa-sign-in-alt"></i> </button>
                    </a>
                    <!-- Dropdown - User Information -->
                    <!-- <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="<?= base_url('user'); ?>">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profil Saya
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Keluar
                        </a>
                    </div> -->
                </li>
            </ul>
        </nav>
        <!-- End of Topbar -->
