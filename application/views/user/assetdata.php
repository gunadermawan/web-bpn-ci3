<div class="col-12 text-center mb-10">
	<h1 class=" pt-2">
		<i class="fas fa-database"></i>
		Data Yuridis
	</h1>
	<hr class="one" style="height: 5px;width: 40vh;border-radius: 20px;background: linear-gradient(to right, #003e69,#ffff);"><br>
</div>
<!-- form pencarian data -->
<div class="container">
	<form action="<?= base_url('user/dataasset'); ?>" method="post">
		<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
		<div class="input-group mb-3 ">
			<input type="text" style="border-radius:20px; width:180px;" class="form-control" placeholder="Masukan Nama / NIK Pemohon" name="keyword" autocomplete="off" autofocus>
			<div class="input-group-append">
				<input type="submit" name="submit" style="background-color:#003e69; color:#ffff; border-radius:20px; width:120px;">
			</div>
		</div>
	</form>
	<!-- total rows -->

	<div>
		<h6>Menampilkan sebanyak <span class="badge badge-pill " style="background-color:#003e69;color:#ffff"><?= $total_rows; ?></span> data.<?= $this->session->flashdata('message'); ?></h6>
	</div>

</div>
<div class="container-fluid md-6 sm-12">
	<a href="<?= base_url('user/tambahdata'); ?>"><button class="btn btn-sm mb-3" style="background-color:#003e69; color:#ffff; border-radius:20px; width:120px;"><i class="fas fa-plus fa-sm"></i> Tambah Data</button></a>
	<a href="<?= base_url('user/print_pdf'); ?>"><button class="btn btn-sm mb-3" style="background-color:#ed6b23; color: #ffff;border-radius:20px; width:120px;"><i class="fas fa-file fa-sm"></i> Cetak PDF </button></a>
	<a href="<?= base_url('user/print_excel'); ?>"><button class="btn btn-sm mb-3" style="background-color:#ed6b23; color: #ffff;border-radius:20px; width:120px;"><i class="fas fa-file fa-file-excel"></i> Cetak Excel </button></a>
	<div class="table-responsive">
		<table class="table table-hover table-bordered text-center table-sm">
			<thead style="background-color:#003e69; color:#ffff;">
				<tr>
					<th>NO</th>
					<th>NAMA</th>
					<th>NIK</th>
					<th>PEKERJAAN</th>
					<th>TTL</th>
					<th>USIA</th>
					<th>AGAMA</th>
					<th>ALAMAT</th>
					<th>TGL INPUT</th>
					<th>KATEGORI</th>
					<th>KTP</th>
					<th colspan="3">AKSI</th>
				</tr>
			</thead>
			<tbody>
				<?php if (empty($asset)) : ?>
					<tr>
						<td colspan="12">
							<div class="alert alert-danger" role="alert">
								Maaf,data tidak ditemukan! <a href="tambahdata" class="alert-link"> ingin menambahkan data ? </a>
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
						<td><a href="<?= base_url(); ?>user/hapus/<?= $row['id_asset']; ?>" class="btn btn-danger btn-sm" name="tombol-hapus" onclick="return confirm('Hapus Data ?');"><i class="fa fa-trash"></i></a></td>
						<td><a href="<?= base_url(); ?>user/ubah/<?= $row['id_asset']; ?>" class="btn btn-info btn-sm float-right"><i class="fa fa-edit"></i></a></td>
						<td><a href="<?= base_url(); ?>user/cetak/<?= $row['id_asset']; ?>" class="btn btn-success btn-sm float-right"><i class="fa fa-print"></i></a></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<?= $this->pagination->create_links(); ?>
	</div>
</div>
</div>