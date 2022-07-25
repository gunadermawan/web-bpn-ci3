<!DOCTYPE html>
<html lang="en" dir="ltr"><head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Cetak Data Dokumen </title>
</head><body>

    <body bgcolor="white">
        <font face="Arial" color="black" size="4">
            <p align="center"> <strong> KANTOR PERTANAHAN KABUPATEN BATANG </strong></p>
        </font>
        <font face="Arial" size="4">
            <p align="center"><strong> PROVINSI JAWA TENGAH </strong></p>
        </font>
        <font face="Arial" color="black" size="4">
            <p align="center"> <strong> JL. Dr. SOETOMO NO.20 Telp.(0285) 391357 BATANG </strong></p>
        </font>
        <hr>
        <font face="Arial" color="black" size="4">
            <p align="center"> <u> <b> FORMULIR PENDAFTARAN </b></u>
        </font><br>

        <p align="left">
            Yang bertanda tangan dibawah ini:
        </p>

        <pre>
            <p> Nama       : <?= $asset['nama_asset'] ?> </p>
            <p> NIK        : <?= $asset['model_asset'] ?> </p>
            <p> Pekerjaan  : <?= $asset['merk_asset'] ?> </p>
            <p> TTL        : <?= $asset['serial_asset'] ?> </p>
            <p> USIA       : <?= $asset['inventaris_asset'] ?> </p>
            <p> Agama      : <?= $asset['keterangan_asset'] ?> </p>
            <p> Alamat     : <?= $asset['jml_asset'] ?> </p>
        </pre>
        <p>
            <font face="Arial">
                Dalam hal ini bertindak untuk dan atas nama diri sendiri / selaku kuasa dari:
            </font>
        </p>
        <pre>
    Nama       :  ...............................................................  <br>
    NIK        :  ............................................................... <br>
    Pekerjaan  :  ............................................................... <br>
    TTL        :  ............................................................... <br>
    USIA       :  ............................................................... <br>
    Agama      :  ............................................................... <br>
    Alamat     :  ............................................................... <br>
    </pre>
        <p>
            <font face="Arial">
                Dengan ini mengajukan permohonan:
            </font>
        </p>
        <pre>
            </pre>
        <p>
            <font face="Arial">
                <strong> Pendaftaran PENGAKUAN HAK</strong>
            </font>
        </p>
        <pre>
            <p>
                <font face="Arial">
                    Atas bidang tanah:
                </font>
            </p>
        </pre>
        <pre>
    Terletak di : ...............................................................  <br>
    Desa        : ............................................................... <br>
    Kecamatan   : ............................................................... <br>
    Kabupaten   : ............................................................... <br>
    </pre>
        <pre>
            <p>
                <font face="Arial">
                    Sebagai kelengkapan pendaftaran, bersama ini kami lampirkan:
                </font>
            </p>
        </pre>
        <pre>
            <p>
                <font face="Arial">
                    1.	FotokopiKTP	√
                    2.	Fotokopi KK	√
                    3.	Alas Hak
                        a.	Akta/Surat Jual Beli Tanggal     : ................................. Nomor .........................................	√
                        b.	Surat Keterangan	:	......................................................................................	
                        c.	Alas Hak Lainnya	:	Surat Pernyataan Penguasaan Fisik Bidang Tanah	√
                    4.	SPPT PBB Tahun berjalan	√
                    5.	Bukti Pembayaran BPHTB / Surat Pernyataan BPHTB Terhutang *) 	
                    6.	Bukti Pembayaran PPh / Surat Pernyataan PPh Terhutang *)	
                    7.	Kutipan C Nomor 1411, Persil 69.b, Kelas D.III atas nama DASMUTRI TASUMI
                    8.	.................................................................................................................................................	
                </font>
            </p>
        </pre>
        <pre>
            <p> Dibuat di : ...............................................................</p>
            <p> Tanggal   : ...............................................................</p>
            <p> Di cetak sistem pada Tanggal : <strong> <?= date("d/m/Y") ?></strong></p>
        </pre>
        <pre>
            <p>
                <font face="Arial">
                    Hormat kami,
                </font>
                <font face="Arial">
                    Pemohon/Yang berkepentingan/Kuasanya/Walinya *)
                </font>
            </p>
        </pre>
        <pre>
            <p>
            <strong> <?= $asset['nama_asset'] ?></strong>
            </p>
        </pre>
        <p>catatan:</p>
        <p>Coret yang tidak perlu *)</p>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    </body>

</html>