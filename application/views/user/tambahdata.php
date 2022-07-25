<div class="col-12 text-center mb-10">
	<!-- judul laman -->
	<h1 class="pt-2">
		<i class="fas fa-database"></i> Tambah Data
	</h1>
	<hr class="one" style="height: 5px;width: 40vh;border-radius: 20px;background: linear-gradient(to right, #003e69,#ffff);">
</div>
<!-- flashdata -->
<?= $this->session->flashdata('message'); ?><br>
<div class="container-fluid">
	<form class="user" method="post" action="<?= base_url('user/tambahdata'); ?>" enctype="multipart/form-data">
		<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for=""> <i class="fas fa-table"></i> NAMA </label>
				<input type="text" name="name" class="form-control" value="<?= set_value('name'); ?>" placeholder="Nama" autofocus autocomplete="off">
				<?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
			</div>
			<div class="form-group col-md-6">
				<label for="name"> <i class="fas fa-brush"></i> NIK </label>
				<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
				<input type="text" id="summernote" name="model" class="form-control" cols="30" rows="10" value="<?= set_value('model'); ?>" placeholder="NIK">
				<?= form_error('model', '<small class="text-danger pl-3">', '</small>'); ?>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for=""> <i class="fas fa-trademark"></i> PEKERJAAN </label>
				<input type="text" name="merk" class="form-control" value="<?= set_value('merk'); ?>" placeholder="Pekerjaan ">
				<?= form_error('merk', '<small class="text-danger pl-3">', '</small>'); ?>
			</div>
			<div class="form-group col-md-6">
				<label for="name"> <i class="fas fa-barcode"></i> TTL</label>
				<input type="text" id="summernote" name="sn" class="form-control" cols="30" rows="10" value="<?= set_value('sn'); ?>" placeholder="Tempat tanggal lahir">
				<?= form_error('sn', '<small class="text-danger pl-3">', '</small>'); ?>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for=""> <i class="far fa-registered"></i> USIA</label>
				<input type="text" name="inventaris" class="form-control" value="<?= set_value('inventaris'); ?>" placeholder="Usia">
				<?= form_error('inventaris', '<small class="text-danger pl-3">', '</small>'); ?>
			</div>
			<div class="form-group col-md-6">
				<label for="name"> <i class="far fa-sticky-note"></i> AGAMA </label>
				<select class="custom-select mr-sm-2" name="keterangan" id="inlineFormCustomSelect">
					<option selected disabled value>pilih agama pemohon</option>
					<?php foreach ($keterangan as $ket) : ?>
						<option value="<?= $ket; ?>"><?= $ket; ?></option>
					<?php endforeach; ?>
				</select>
				<?= form_error('keterangan', '<small class="text-danger pl-3">', '</small>'); ?>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for=""> <i class="fas fa-calculator"></i> ALAMAT </label>
				<input type="text" name="jml" class="form-control" value="<?= set_value('jml'); ?>" placeholder="Masukan alamat ">
				<?= form_error('jml', '<small class="text-danger pl-3">', '</small>'); ?>
			</div>
			<div class="form-group col-md-6">
				<label><i class="fas fa-list-ol"></i> KATEGORI </label>
				<select class="custom-select mr-sm-2" name="kategori" id="inlineFormCustomSelect">
					<option selected disabled value>pilih kategori</option>
					<?php foreach ($kategori as $kat) : ?>
						<option value="<?= $kat; ?>"><?= $kat; ?></option>
					<?php endforeach; ?>
				</select>
				<?= form_error('kategori', '<small class="text-danger pl-3">', '</small>'); ?>
			</div>
		</div>
		<div class="form-group">
			<div class="form-group">
				<label for="exampleFormControlFile1"> <i class="fas fa-images"></i> FOTO </label>
				<input type="file" class="form-control-file" name="gambar" id="exampleFormControlFile1">
			</div>
		</div>
		<button type="submit" style="background-color:#003e69; color:#ffff; border-radius:20px; width:150px;" class=" mb-3"><i class="fas fa-plus"></i> Tambah Data</button>
	</form>
</div>
</div>