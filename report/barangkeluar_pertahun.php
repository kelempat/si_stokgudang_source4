<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data  Barang Keluar Pertahun</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $ambilthn=$_POST['tahun'];

        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                               <h2>Sistem Informasi Stok Gudang Pada PT Hijau Surya Biotechindo </h2>
                        <h4>Jalan Besar Sei Renggas, Kelurahan Sei Renggas<br> Kisaran Barat, Kabupaten Asahan, Sumatera Utara, 21211</h4>
                        <hr>
                        <h3>DATA Barang Keluar Pertahun <? echo "$ambilthn"; ?></h3>
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
                            $sql = "SELECT * FROM keluar WHERE substr(tanggal,1,4)='$ambilthn'";
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
