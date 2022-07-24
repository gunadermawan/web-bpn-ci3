<div class="col-12 text-center mb-10">
	<!-- judul laman -->
	<h1 class="display-4 pt-4">
		<i class="fas fa-database"></i>	Edit Data Barang
	</h1>
	<hr class="one" style="height: 5px;width: 50vh;border-radius: 20px;background: linear-gradient(to right, #2D2A70,#ed6b23);">
</div>
<!-- flashdata -->
		<?= $this->session->flashdata('message'); ?><br>
		<div class="container-fluid">
      <form class="user" method="post" action="" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?= $asset['id_asset'] ?>">
  			<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
  				<div class="form-row">
  			    <div class="form-group col-md-6">
  						<label for=""> <i class="fas fa-table"></i> NAMA </label>
  						<input type="text"name="name" class="form-control" value="<?= $asset['nama_asset']; ?>" placeholder="Nama Barang">
							<?= form_error('nama','<small class="text-danger pl-3">','</small>'); ?>
  			    </div>
  			    <div class="form-group col-md-6">
  						<label for="name"> <i class="fas fa-brush"></i> MODEL </label>
  						<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  						<input type="text" id="summernote" name="model" class="form-control" cols="30" rows="10" value="<?= $asset['model_asset']; ?>" placeholder="Model Barang">
							<?= form_error('model','<small class="text-danger pl-3">','</small>'); ?>
  			    </div>
  			  </div>
          <div class="form-row">
  			    <div class="form-group col-md-6">
  						<label for=""> <i class="fas fa-trademark"></i> MERK </label>
  						<input type="text"name="merk" class="form-control" value="<?= $asset['merk_asset']; ?>" placeholder="Merk Barang">
							<?= form_error('merk','<small class="text-danger pl-3">','</small>'); ?>
  			    </div>
  			    <div class="form-group col-md-6">
  						<label for="name"> <i class="fas fa-barcode"></i> SERIAL NUMBER</label>
  						<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  						<input type="text" id="summernote" name="sn" class="form-control" cols="30" rows="10" value="<?= $asset['serial_asset']; ?>" placeholder="Serial Number">
							<?= form_error('sn','<small class="text-danger pl-3">','</small>'); ?>
  			    </div>
  			  </div>
          <div class="form-row">
  			    <div class="form-group col-md-6">
  						<label for=""> <i class="far fa-registered"></i> NO.INVENTARIS</label>
  						<input type="text"name="inventaris" class="form-control" value="<?= $asset['inventaris_asset']; ?>" placeholder="No Inventaris">
							<?= form_error('inventaris','<small class="text-danger pl-3">','</small>'); ?>
  			    </div>
  			    <div class="form-group col-md-6">
  						<label for="name"> <i class="far fa-sticky-note"></i> KETERANGAN </label>
  						<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  						<select class="custom-select mr-sm-2" name="keterangan" id="inlineFormCustomSelect">
  							<option selected disabled value>pilih keterangan barang</option>
								<?php foreach ($keterangan as $ket) : ?>
									<?php if ($ket == $asset['keterangan_asset']): ?>
										<option value="<?= $ket; ?>" selected><?= $ket; ?></option>
										<?php else: ?>
											<option value="<?= $ket; ?>" ><?= $ket; ?></option>
									<?php endif; ?>
							<?php endforeach; ?>
  						</select>
							<?= form_error('keterangan','<small class="text-danger pl-3">','</small>'); ?>
  			    </div>
  			  </div>
          <div class="form-row">
  			    <div class="form-group col-md-6">
  						<label for=""> <i class="fas fa-calculator"></i> JUMLAH </label>
  						<input type="text"name="jml" class="form-control" value="<?= $asset['jml_asset']; ?>" placeholder="Jumlah Barang">
							<?= form_error('jml','<small class="text-danger pl-3">','</small>'); ?>
  			    </div>
            <div class="form-group col-md-6">
                <label ><i class="fas fa-list-ol"></i> KATEGORI </label>
                <select class="custom-select mr-sm-2" name="kategori" id="inlineFormCustomSelect" value="<?= $asset['kategori_asset']; ?>">
                  <option selected disabled value>pilih kategori</option>
									<?php foreach ($kategori as $kat ): ?>
										<?php if ($kat == $asset['kategori_asset']): ?>
											<option value="<?= $kat; ?>" selected><?= $kat; ?></option>
											<?php else: ?>
												<option value="<?= $kat; ?>"><?= $kat; ?></option>
										<?php endif; ?>

									<?php endforeach; ?>
                </select>
                <?= form_error('kategori','<small class="text-danger pl-3">','</small>'); ?>
              </div>
  			  </div>
					<div class="form-group">
              <label for="exampleFormControlFile1"> <i class="fas fa-images"></i> FOTO </label>
              <input type="file" class="form-control-file" name="gambar" id="exampleFormControlFile1" value="<?= $asset['gambar_asset'] ?>" required>
							<img src="<?php echo base_url().'/uploads/dataasset/'.$asset['gambar_asset']; ?>" height="100px" alt="" class="rounded mt-3">
            </div>
  			<button type="submit" style="background-color:#2D2A70; color:#ffff; border-radius:20px; width:150px;"  class=" mb-3"><i class="fas fa-edit"></i> Edit Data</button>
  			</form>
		</div>
	</div>
