<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cetak Data</title>
  </head>
  <body>
    <div class="table-responsive">
      <table class="table table-striped text-center">
        <thead style="background-color:#2D2A70; color:#ffff;">
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>MODEL</th>
                <th>MERK</th>
                <th>NOMOR SERI</th>
                <th>NOMOR INVENTARIS</th>
                <th>KETERANGAN</th>
                <th>JUMLAH</th>
                <th>TGL INPUT</th>
                <th>TEMPAT</th>
                <th>GAMBAR</th>
            </tr>
          </thead>
              <tbody>
                <?php $no=1; foreach($asset as $row ) : ?>
                  <tr>
                      <td><?php echo $no++;?></td>
                      <td class="badge badge-info" role="alert"><?php echo $row['nama_asset'] ?></td>
                      <td ><?php echo $row ['model_asset'] ?></td>
                      <td><?php echo $row['merk_asset'] ?></td>
                      <td ><?php echo $row['serial_asset'] ?></td>
                      <td 	><?php echo $row['inventaris_asset'] ?></td>
                      <td><?php echo $row['keterangan_asset'] ?></td>
                      <td><?php echo $row['jml_asset'] ?></td>
                      <?php date_default_timezone_set('Asia/Jakarta'); ?>
                      <td><?php echo date('l,d M Y,H:i',$row['date_asset'])?></td>
                      <td><?php echo $row['kategori_asset'] ?></td>
                      <td><img src="<?php echo base_url().'/uploads/dataasset/'.$row['gambar_asset'] ?>" height="150px" alt="" class="rounded"></td>
                  </tr>
              <?php endforeach; ?>
            </tbody>
            <h5>Dicetak pada : <?= date('l,d M Y,H:i');?></h5>
      </table>
    </div>
      <!-- js -->
      <script type="text/javascript">
        window.print();
      </script>
  </body>
</html>
