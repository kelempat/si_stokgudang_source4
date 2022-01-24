<div class="container">
    <div class="row">
        <div class="col-xs-20">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Tambah Data Barang Keluar</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="id_out" class="col-sm-3 control-label">Id Out</label>
                            <div class="col-sm-8">
								 <input type="text" name="id_out" class="form-control" id="inputEmail3" placeholder="Masukkan id keluar">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="id_brg" class="col-sm-3 control-label">Id Barang</label>
                            <div class="col-sm-8">
                                <input type="text" name="id_brg" class="form-control" id="inputEmail3" placeholder="Masukkan id barang">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="nama_barang" class="col-sm-3 control-label">Nama Barang</label>
                            <div class="col-sm-8">
                               <input type="text" name="nama_barang" class="form-control" id="inputEmail3" placeholder="Masukkan nama barang">
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="jumlah" class="col-sm-3 control-label">Jumlah</label>
                            <div class="col-sm-8">
                                <input type="text" name="jumlah" class="form-control" id="inputEmail3" placeholder="Inputkan Jumlah">
                            </div>
                            </div>

                         <div class="form-group">
                            <label for="harga" class="col-sm-3 control-label">Harga</label>
                            <div class="col-sm-8">
                                <input type="text" name="harga" class="form-control" id="inputEmail3" placeholder="Inputkan Harga">
                            </div>
                            </div>

                         <div class="form-group">
                            <label for="tanggal" class="col-sm-3 control-label">Tanggal</label>
                            <div class="col-sm-8">
                                 <input type="date" name="tanggal" class="form-control" id="inputEmail3" placeholder="Inputkan tanggal">
                            </div>
                            </div>

                         <div class="form-group">
                            <label for="pembeli" class="col-sm-3 control-label">Pembeli</label>
                            <div class="col-sm-8">
                                <input type="text" name="pembeli" class="form-control" id="inputEmail3" placeholder="Inputkan Pembeli">
                            </div>      
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-8">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data</button>
                            </div>
                        </div>
                    </form>
                <div class="form-group">
                <div class="col-sm-offset-3 col-sm-8">
                    <a href="?page=barangkeluar&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Barang Keluar
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $id_out=$_POST['id_out'];
    $id_brg=$_POST['id_brg'];
    $nama_barang=$_POST['nama_barang'];
    $jumlah=$_POST['jumlah'];
    $harga=$_POST['harga'];
    $tanggal=$_POST['tanggal'];
    $pembeli=$_POST['pembeli'];
    //buat sql
    $sql="INSERT INTO keluar VALUES ('$id_out','$id_brg','$nama_barang','$jumlah','$harga','$tanggal','pembeli')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan barang keluar Error");
    $queryArsip=  mysqli_query($koneksi, $sqlArsip) or die ("SQL Simpan Arsip Error");    if ($query){
     echo "<script>window.location.assign('?page=barangkeluar&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";   
    }
    }
?>
