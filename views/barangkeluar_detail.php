<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Barang_keluar</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM keluar WHERE id_out='" . $_GET ['id_out'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   
                
                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
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
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=barangkeluar&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Barang Keluar</a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

