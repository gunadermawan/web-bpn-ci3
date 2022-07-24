<div class="col-12 text-center mb-10">
	<h1 class=" pt-2">
		<i class="fas fa-user-plus" ></i> Tambah Pengguna
	</h1>
	<hr class="one" style="height: 5px;width: 30vh;border-radius: 20px;background: linear-gradient(to right, #2D2A70,#ed6b23);">
</div>
		<?= $this->session->flashdata('message'); ?><br>
		<div class="container-fluid">
		<form class="user" method="post" action="<?= base_url('admin/register'); ?>">
			<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
				<div class="form-row">
			    <div class="form-group col-md-6">
						<label for=""> <i class="far fa-user"></i> Username</label>
						<input type="text"name="name" class="form-control" value="<?= set_value('name');?>" placeholder="Username Anda" autofocus>
							<?= form_error('name','<small class="text-danger pl-3">','</small>'); ?>
			    </div>
			    <div class="form-group col-md-6">
						<label for="name"> <i class="far fa-envelope"></i> Email</label>
						<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
						<input type="text" id="summernote" name="email" class="form-control" cols="30" rows="10" value="<?= set_value('email');?>" placeholder="example@email.com">
							<?= form_error('email','<small class="text-danger pl-3">','</small>'); ?>
			    </div>
			  </div>
				<!-- <div class="form-row">
          <div class="form-group col-md-6">
              <label ><i class="fas fa-list-ol"></i> Status Pengguna </label>
              <select class="custom-select mr-sm-2" name="status" id="inlineFormCustomSelect">
                <option selected disabled value>pilih Status</option>
								<?php foreach ($status as $stts ): ?>
									<option value="<?= $stts; ?>"><?= $stts; ?></option>
								<?php endforeach; ?>
              </select>
              <?= form_error('status','<small class="text-danger pl-3">','</small>'); ?>
            </div>
						<div class="form-group col-md-6">
	              <label ><i class="fas fa-list-ol"></i> Jabatan Pengguna </label>
	              <select class="custom-select mr-sm-2" name="jabatan" id="inlineFormCustomSelect">
	                <option selected disabled value>pilih Jabatan</option>
									<?php foreach ($jabatan as $jbtn ): ?>
										<option value="<?= $jbtn; ?>"><?= $jbtn; ?></option>
									<?php endforeach; ?>
	              </select>
	              <?= form_error('jabatan','<small class="text-danger pl-3">','</small>'); ?>
	            </div>
			  </div> -->
				<div class="form-row">
			    <div class="form-group col-md-6">
						<i class="fas fa-key"></i> Masukan Password
					<input type="password" name="password1" class="form-control" placeholder="Password min.8 Karakter">
					<?= form_error('password1','<small class="text-danger pl-3">','</small>'); ?>
			    </div>
			    <div class="form-group col-md-6">
						<i class="fas fa-key"></i> Konfirmasi Password
						<input type="password" name="password2" class="form-control" placeholder="ulangi password">
			    </div>
			  </div>
			<button type="submit" style="background-color:#2D2A70; color:#ffff; border-radius:20px; width:100px;"  class=" mb-3"><i class="fas fa-user-plus"></i> Daftar</button>
			</form>
		</div>
	</div>
