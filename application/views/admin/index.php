<!-- Begin Page Content -->
<div class="container-fluid">
	<div class="alert alert-success" role="alert">
		<h3 class="alert-heading">Hai <?= $user['name']; ?> !</h3>
		<script type="text/javascript">
			var d = new Date();
			var j = d.getHours();
			var m = d.getMinutes();
			var det = d.getSeconds();
			var selamat = "";
			if (j < 12) Selamat = "Selamat Pagi :)";
			if ((j > 12) && (j < 15)) Selamat = "Selamat Siang :)";
			if ((j > 15) && (j < 18)) Selamat = "Selamat Sore :)";
			if (j > 18) Selamat = "Selamat Malam :)";
			document.write("<strong>" + Selamat + "</strong>");
		</script>
		<p>Selamat datang di aplikasi Sistem Informasi Manajemen Penduduk</p>
		<hr>
		<p class="mb-0">Dibuat untuk memudahkan pengelolaan data penduduk di kantor BPN Kendal</p>
	</div>
	<h1 class="h3 mb-4 text-gray-800">Beranda Aplikasi</h1>
	<!-- Page Heading -->
	<div class="row">
		<!-- page Content  -->
		<div class="col-md-4 col-sm-12 mb-3">
			<div class="card bg-primary text-white">
				<div class="card-body">
					<div class="card-title">
						<h4> <i class="fas fa-database"></i> <?= $total_rows; ?> Data asset tersedia.</h4>
					</div>
					Data asset yang tersedia merupakan kalkulasi dan akumulasi di dalam database.
				</div>
				<div class="card-footer">
					<a href="<?= base_url('user/tambahdata') ?>" class="card-link">Klik untuk tambah data</a>
				</div>
			</div>
		</div>

		<div class="col-md-4 col-sm-6 mb-3">
			<div class="card bg-warning text-white">
				<div class="card-body">
					<div class="card-title">
						<h4> <i class="fas fa-users"></i> total <?= $total_rows_user; ?> Pengguna terdaftar</h4>
					</div>
					User dan admin memiliki hak akses tertentu didalam aplikasi.Klik tombol dibawah untuk mengubah perizinan pengguna atau menambahkan pengguna baru.
				</div>
				<div class="card-footer">
					<a href="<?= base_url('admin/register'); ?>" class="card-link">Klik untuk menambah pengguna baru</a>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-12 mb-3">
			<div class="card bg-primary text-white">
				<div class="card-body">
					<div class="card-title">
						<h4> <i class="fas fa-code"></i> Sistem Modulasi</h4>
					</div>
					Pengembangan aplikasi ini menggunakan sistem modulasi untuk memudahkan proses improvisasi fungsi aplikasi.
					menampilkan sebanyak <?= $total_rows; ?>
				</div>
				<div class="card-footer">
					<a href="https://www.petanikode.com/java-oop/" class="card-link">Selengkapnya tentang modulasi</a>
				</div>
			</div>
		</div>

		<div class="col-md-4 col-sm-6 mb-3">
			<div class="card bg-warning text-white">
				<div class="card-body">
					<div class="card-title">
						<h4> <i class="fas fa-key"></i> Enkripsi untuk Privasi</h4>
					</div>
					Enkripsi menjamin privasi disetiap pengguna aplikasi dengan memberikan kode unik untuk inputan yang bersifat sensitif seperti password pengguna.
				</div>
				<div class="card-footer">
					<a href="https://appkey.id/pembuatan-website/teknologi-web/enkripsi-adalah/" class="card-link">Selengkapnya tentang enkripsi</a>
				</div>
			</div>
		</div>

		<div class="col-md-4 col-sm-6 mb-3">
			<div class="card bg-info text-white">
				<div class="card-body">
					<div class="card-title">
						<h4> <i class="fas fa-database"></i> Perlindungan Database dari serangan CSRF</h4>
					</div>
					Aplikasi melakukan autentikasi dalam setiap input yang dilakukan kedalam database.
				</div>
				<div class="card-footer">
					<a href="https://medium.com/wonogiridev/mencegah-serangan-csrf-di-codeigniter-e9bc484dcbc4" class="card-link">Selengkapnya tentang CSRF</a>
				</div>
			</div>
		</div>
		<!-- end page Content -->
	</div>
</div>

<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->