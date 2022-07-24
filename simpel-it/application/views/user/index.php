                <!-- Begin Page Content -->
                <div class="container-fluid">
                  <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Hai <?= $user['name']; ?> !</h4>
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
                    <!-- <p>Selamat datang di aplikasi Sistem Informasi Manajemen Perlengkapan IT (SIMPEL IT) UPT.BALAI YASA TEGAL <?= $total_rows_user; ?> </p> -->
                    <hr>
                    <!-- <p class="mb-0">Dibuat untuk memudahkan pengelolaan asset yang terdapat dalam unit sistem informasi UPT.Balai Yasa Tegal.</p> -->
                  </div>
                  <!-- Page Heading -->
                  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
                  <!-- <hr class="one" style=" height: 5px;width: 30vh;border-radius: 20px;background: linear-gradient(to right, #2D2A70,#ed6b23);"> -->
                  <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                      <div class="col-md-4">
                        <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title"><?= $user['name']; ?></h5>
                          <p class="card-text"><?= $user['email']; ?></p>
                          <p class="card-text"><small class="text-muted">member sejak : <?= date('d F Y', $user['date_created']); ?></small></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.container-fluid -->
                </div>
                <!-- End of Main Content -->