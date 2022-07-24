<img class="wave" src="<?= base_url(); ?>assets/img/auth/wave1.png">
<div class="container">
   <div class="img">
      <img src="<?= base_url(); ?>assets/img/auth/register.svg">
   </div>
   <div class="login-content">
      <form class="user" method="post" action="<?= base_url('Auth/register'); ?>">
         <!-- csrf_protection -->
         <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
         <img src="<?= base_url(); ?>assets/img/auth/kai.svg">
         <h2>Registrasi Pengguna </h2>
         <div class="input-div one">
            <div class="i">
               <i class="fas fa-user"></i>
            </div>
            <div class="div">
               <?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
               <h5>Nama Pengguna</h5>
               <input type="text" class="input" name="username" id="username" autofocus autocomplete="off">
            </div>
         </div>
         <div class="input-div one">
            <div class="i">
               <i class="fas fa-envelope"></i>
            </div>
            <div class="div">
               <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
               <h5>Surel</h5>
               <input type="email" class="input" name="email" id="email">
            </div>
         </div>
         <div class="input-div pass">
            <div class="i">
               <i class="fas fa-lock"></i>
            </div>
            <div class="div">
               <?= form_error('password1', '<small class="text-danger pl-3">', '</small>') ?>
               <h5>Kata Sandi</h5>
               <input type="password" class="input" name="password1" id="password1">
            </div>
         </div>
         <div class="input-div pass">
            <div class="i">
               <i class="fas fa-lock"></i>
            </div>
            <div class="div">
               <?= form_error('password2', '<small class="text-danger pl-3">', '</small>') ?>
               <h5>Ulangi Kata Sandi</h5>
               <input type="password" class="input" name="password2" id="password2">
            </div>
         </div>
         <a href="<?= base_url('auth/'); ?>">Punya akun? Login Sekarang</a>
         <input type="submit" class="btn" value="Daftar">
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