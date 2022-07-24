<!DOCTYPE html>
<html lang="en" dir="ltr"><head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Cetak Data Dokumen </title>
    <?php
    	header("Content-type: application/vnd-ms-excel");
    	header("Content-Disposition: attachment; filename=Asset-Data-IT-BYTG.xls");
  	?>
  </head><body><table class="table table-center table-sm table-bordered">
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
          <th>KATEGORI</th>
        </tr>
        <?php $no = 1; foreach($asset as $row ) : ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $row['nama_asset'] ?></td>
          <td><?php echo $row['model_asset'] ?></td>
          <td><?php echo $row['merk_asset'] ?></td>
          <td><?php echo $row['serial_asset'] ?></td>
          <td><?php echo $row['inventaris_asset'] ?></td>
          <td><?php echo $row['keterangan_asset'] ?></td>
          <td><?php echo $row['jml_asset'] ?></td>
          <?php date_default_timezone_set('Asia/Jakarta'); ?>
          <td><?php echo date('d F Y',$row['date_asset'])?></td>
          <td><?php echo $row['kategori_asset']?></td>
        </tr>
      <?php endforeach; ?>
      <h5>Dicetak pada : <?= date('l,d M Y,H:i');?></h5>
      <h5>Dicetak dengan aplikasi Simpel IT BYTG</h5>
    </table>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  </body></html>
