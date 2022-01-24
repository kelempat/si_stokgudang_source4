<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Barang Masuk</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM masuk WHERE id_in ='" . $_GET ['id_in'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
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
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=barangmasuk&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Barang Masuk </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

