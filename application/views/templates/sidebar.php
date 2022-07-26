<!-- Sidebar -->
<ul style="background-color:#003e69; border-top-right-radius:30px; border-bottom-right-radius:30px;" class="navbar-nav sidebar sidebar-dark accordion " id="accordionSidebar">
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center">
    <!-- <div class="sidebar-brand-icon">
          <i class="fas fa-office" style="color:#ed6b23;"></i>
      </div> -->
    <div class="sidebar-brand-text mx-3">Web BPN</div>
  </a>
  <!-- Divider -->
  <hr class="sidebar-divider">
  <!-- QUERY MENU DARI DB -->
  <?php
  // membuat var berisi info role id yang sedang melakukan Login
  $role_id = $this->session->userdata('role_id');
  $queryMenu = "SELECT `user_menu`.`id`,`menu`
                    FROM `user_menu` JOIN `user_access_menu`
                      ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                   WHERE `user_access_menu`.`role_id` = $role_id
                ORDER BY `user_access_menu`.`menu_id` ASC
                ";
  $menu = $this->db->query($queryMenu)->result_array();
  // var_dump($menu);
  // die;
  ?>

  <!-- LOOPING MENU -->
  <?php foreach ($menu as $m) : ?>
    <div class="sidebar-heading">
      <?= $m['menu']; ?>
    </div>
    <!-- menyiapkan sub-menu sesuai dengan tabel menu -->
    <?php
    $menuId = $m['id'];
    $querySubMenu = "SELECT * FROM `user_sub_menu` WHERE `menu_id` = $menuId AND `is_active`= 1
                           ";
    $subMenu = $this->db->query($querySubMenu)->result_array();
    ?>
    <?php foreach ($subMenu as $sm) : ?>
      <?php if ($title == $sm['title']) : ?>
        <li class="nav-item active ">
        <?php else : ?>
        <li class="nav-item">
        <?php endif; ?>
        <a class="nav-link" href="<?= base_url($sm['url']); ?>">
          <i class="<?= $sm['icon']; ?>"></i>
          <span><?= $sm['title'];  ?></span></a>
        </li>
      <?php endforeach; ?>
      <hr class="sidebar-divider">
    <?php endforeach; ?>
    <!-- Divider -->
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
        <i class="fas fa-fw fa-sign-out-alt"></i>
        <span>Keluar</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->