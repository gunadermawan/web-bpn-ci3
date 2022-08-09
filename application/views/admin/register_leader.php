<div class="col-12 text-center mb-10">
	<h1 class=" pt-2">
		<i class="fas fa-user-plus"></i> Tambah Kepala Desa
	</h1>
	<hr class="one" style="height: 5px;width: 30vh;border-radius: 20px;background: linear-gradient(to right, #003e69,#ed6b23);">
</div>
<?= $this->session->flashdata('message'); ?><br>
<div class="container-fluid">
	<form class="user" method="post" action="<?= base_url('admin/register'); ?>">
		<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for=""> <i class="far fa-user"></i> Nama</label>
				<input type="text" name="name" class="form-control" value="<?= set_value('name'); ?>" placeholder="Nama kepala desa" autofocus>
				<?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
			</div>
			<div class="form-group col-md-6">
				<label for="name"> <i class="far fa-envelope"></i> Kontak</label>
				<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
				<input type="text" id="summernote" name="email" class="form-control" cols="30" rows="10" value="<?= set_value('email'); ?>" placeholder="masukan email/No. Hp">
				<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
			</div>
		</div>
		<button type="submit" style="background-color:#003e69; color:#ffff; border-radius:20px; width:100px;" class=" mb-3"><i class="fas fa-user-plus"></i> Daftar</button>
	</form>
</div>
</div>