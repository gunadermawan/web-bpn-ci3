<div class="mx-auto text-center col-6">
	<?= $this->session->flashdata('message'); ?>
</div>
<div class="col-12 text-center mb-10">
	<h1 class="mt-2">
		Data Penduduk
	</h1>
	<hr class="one mb-4" style="height: 5px;width: 40vh;border-radius: 20px;background: linear-gradient(to right, #003e69,#ffff);">
</div>
<!-- form pencarian data -->
<div class="container">
	<form action="<?= base_url('cari'); ?>" method="post">
		<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
		<div class="input-group mb-3 ">
			<input type="text" style="border-radius:20px; width:180px;" class="form-control" placeholder="Masukan Nama / NIK Pemohon" name="keyword" autocomplete="off" autofocus>
			<div class="input-group-append">
				<input type="submit" name="submit" style="background-color:#003e69; color:#ffff; border-radius:20px; width:120px;">
			</div>
		</div>
	</form>
	<!-- total rows -->
	<h6>Menampilkan sebanyak <span class="badge badge-pill " style="background-color:#003e69;color:#ffff"><?= $total_rows; ?></span> data</h6>
</div>
<div class="container-fluid md-6 sm-12">
	<div class="table-responsive">
		<table class="table table-hover table-bordered text-center">
			<thead style="background-color:#003e69; color:#ffff;">
				<tr>
					<th>NO</th>
					<th>NAMA</th>
					<th>NIK</th>
					<th>AGAMA</th>
					<th>TTL</th>
					<th>USIA</th>
					<th>PEKERJAAN</th>
					<th>ALAMAT</th>
					<th>TGL INPUT</th>
					<th>TEMPAT</th>
					<th>KTP</th>
			</thead>
			<tbody>
				<?php if (empty($asset)) : ?>
					<tr>
						<td colspan="12">
							<div class="alert alert-danger" role="alert">
								Maaf,data tidak ditemukan! Hubungi administrator untuk menambahkan data !
							</div>
						</td>
					</tr>
				<?php endif; ?>
				<?php foreach ($asset as $row) : ?>
					<tr>
						<td><?php echo ++$per_page_start; ?></td>
						<td style="color:#003e69;"> <strong><?php echo $row['nama_asset'] ?></strong></td>
						<td><?php echo $row['model_asset'] ?></td>
						<td><?php echo $row['merk_asset'] ?></td>
						<td><?php echo $row['serial_asset'] ?></td>
						<td><?php echo $row['inventaris_asset'] ?></td>
						<td><?php echo $row['keterangan_asset'] ?></td>
						<td><?php echo $row['jml_asset'] ?></td>
						<?php date_default_timezone_set('Asia/Jakarta'); ?>
						<td><?php echo date('l,d M Y,H:i', $row['date_asset']) ?></td>
						<td><?php echo $row['kategori_asset'] ?></td>
						<td><img src="<?php echo base_url() . '/uploads/dataasset/' . $row['gambar_asset'] ?>" height="150px" alt="" class="rounded"></td>

					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<?= $this->pagination->create_links(); ?>
	</div>
</div>
</div>