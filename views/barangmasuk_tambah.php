<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Barang</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                       
						 <div class="form-group">
                            <label for="id_in" class="col-sm-3 control-label">Id masuk</label>
                            <div class="col-sm-9">
                                <input type="text" name="id_in" class="form-control" id="inputEmail3" placeholder="masukan id masuk" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="suplier" class="col-sm-3 control-label">Suplier</label>
                            <div class="col-sm-9">
                                <input type="text" name="suplier" class="form-control" id="inputEmail3" placeholder="Inputkan suplier" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="nama_barang" class="col-sm-3 control-label">Nama barang</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_barang" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Barang" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="tanggal_masuk" class="col-sm-3 control-label">Tanggal Masuk</label>
                            <div class="col-sm-3">
                                <input type="date" name="tanggal_masuk" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Masuk" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="harga_satuan" class="col-sm-3 control-label">Harga Satuan</label>
                            <div class="col-sm-9">
                                <input type="text" name="harga_satuan"class="form-control" id="inputEmail3" placeholder="Inputkan Harga Satuan" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="jumlah_barang" class="col-sm-3 control-label">Jumlah Barang</label>
                            <div class="col-sm-3">
                                <input type="text" name="jumlah_barang"class="form-control" id="inputEmail3" placeholder="Inputkan Jumlah Barang" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Arsip</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=barangmasuk&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Barang Masuk
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
  $id_in=$_POST['id_in'];
	$suplier=$_POST['suplier'];
	$nama_barang=$_POST['nama_barang'];
	$tanggal_masuk=$_POST['tanggal_masuk'];
  $harga_satuan=$_POST['harga_satuan'];
	$jumlah_barang=$_POST['jumlah_barang'];
    //buat sql
    $sql="INSERT INTO masuk VALUES ('$id_in','$suplier','$nama_barang','$tanggal_masuk','$harga_satuan','$jumlah_barang')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan barang Error");
    if ($query){
        echo "<script>window.location.assign('?page=barangmasuk&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
