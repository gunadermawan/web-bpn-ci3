<div class="container">
  <div class="img ">
    <img src="<?= base_url(); ?>assets/img/auth/login-bpn.svg" width="300px">
  </div>
  <div class="login-content">
    <form class="user" method="post" action="<?= base_url('auth'); ?>">
      <img src="<?= base_url(); ?>assets/img/profile/bpn.png">
      <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
      <h2 class="title">Masuk</h2>
      <?= $this->session->flashdata('message'); ?><br>
      <div class="input-div one">
        <div class="i">
          <i class="fas fa-envelope"></i>
        </div>
        <div class="div">
          <h5>Surel</h5>
          <input type="email" class="input" name="email" id="email" value="<?= set_value('email'); ?>" autofocus autocomplete="off">
          <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
      </div>
      <div class="input-div pass">
        <div class="i">
          <i class="fas fa-lock"></i>
        </div>
        <div class="div">
          <h5>Kata Sandi</h5>
          <input type="password" class="input" name="password" id="password">
          <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
      </div>
      <a href="<?= base_url('auth/register'); ?>">Tidak punya akun? Register Sekarang</a>
      <input type="submit" class="btn" value="Masuk">
    </form>
  </div>
</div>
<script type="text/javascript">
  const inputs = document.querySelectorAll(".input");

  function addcl() {
    let parent = this.parentNode.parentNode;
    parent.classList.add("focus");
  }

  function remcl() {
    let parent = this.parentNode.parentNode;
    if (this.value == "") {
      parent.classList.remove("focus");
    }
  }
  inputs.forEach(input => {
    input.addEventListener("focus", addcl);
    input.addEventListener("blur", remcl);
  });
</script>