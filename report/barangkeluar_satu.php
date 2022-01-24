
<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Peminjaman Arsip</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM keluar WHERE id_out='" . $_GET ['id_out'] . "'";
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
                        <h3>DATA Barang Keluar</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
								<tr>
                            <td width="200">Id Out</td> <td><?= $data['id_out'] ?></td>
                        </tr>
                        <tr>
                            <td>Id Barang</td> <td><?= $data['id_brg'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Barang</td> <td><?= $data['nama_barang'] ?></td>
                        </tr>
                        <tr>
                            <td>Jumlah</td> <td><?= $data['jumlah'] ?></td>
                        </tr>
                        <tr>
                            <td>Harga</td> <td><?= $data['harga'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal</td> <td><?= $data['tanggal'] ?></td>
                        </tr>
                        <tr>
                            <td>Pembeli</td> <td><?= $data['pembeli'] ?></td>    
                        </tr>
                            </tbody>
                            </table>
                    </div>
                </div>
            </div>
    </body>
</html>
