<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Semua Barang Keluar</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Arsip Pengadilan Negeri Kisaran </h2>
                        <h4>Jalan Jendral Ahmad Yani No. 33, Sei Renggas, Kisaran, Sendang Sari <br> Kisaran Barat, Kabupaten Asahan, Sumatera Utara, 21211</h4>
                        <hr>
                        <h3>DATA SELURUH PEMINJAMAN ARSIP</h3>
                        <table class="table table-bordered table-striped table-hover">
                        <tbody>
                                <thead>
								 <tr>
                                <th>No.</th><th>Id Out</th><th>Id barang</th><th>Nama Barang</th><th>Jumlah</th><th>Harga</th><th>Tanggal</th><th>Pembeli</th>
                            </tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM keluar";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $data['id_out'] ?></td>
                                    <td><?= $data['id_brg'] ?></td>
                                    <td><?= $data['nama_barang'] ?></td>
                                    <td><?= $data['jumlah'] ?></td>
                                    <td><?= $data['harga'] ?></td>
                                    <td><?= $data['tanggal'] ?></td>
                                    <td><?= $data['pembeli'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>
                            </table>
                    </div>
                </div>
            </div>
    </body>
</html>
