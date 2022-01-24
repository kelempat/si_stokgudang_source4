<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Arsip</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM masuk WHERE id_in='" . $_GET ['id_in'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Stok Gudang Pada PT Hijau Surya Biotechindo </h2>
                        <h4>Jalan Besar Sei Renggas, Kelurahan Sei Renggas<br> Kisaran Barat, Kabupaten Asahan, Sumatera Utara, 21211</h4>
                        <hr>
                        <h3>DATA Barang Masuk</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
								<tr>
                                <td width="200">Id Masuk</td> <td><?= $data['id_in'] ?></td>
                        </tr>
                        <tr>
                            <td>Suplier</td> <td><?= $data['suplier'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Barang</td> <td><?= $data['nama_barang'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Masuk </td> <td><?= $data['tanggal_masuk'] ?></td>
                        </tr>
                        <tr>
                            <td>Harga Satuan</td> <td><?= $data['harga_satuan'] ?></td>
                        </tr>
                        <tr>
                            <td>Jumlah Barang</td> <td><?= $data['jumlah_barang'] ?></td>
                        </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>