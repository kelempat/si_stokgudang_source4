<?php
$id_out=$_GET['id_out'];
$ambil= mysqli_query($koneksi, "SELECT * FROM keluar WHERE id_out ='$id_out'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Keluar</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="id_out" class="col-sm-3 control-label">Id Out</label>
                            <div class="col-sm-9">
                                <input type="text" name="id_out" value="<?=$data['id_out']?>"class="form-control" id="inputEmail3" placeholder="Inputkan Id out">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="id_brg" class="col-sm-3 control-label">id barang</label>
                            <div class="col-sm-9">
                                <input type="text" name="id_brg" value="<?=$data['id_brg']?>"class="form-control" id="inputEmail3" placeholder="Inputkan id barang">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama_barang" class="col-sm-3 control-label">Nama Barang</label>
                            <div class="col-sm-9">
                                 <input type="text" name="nama_barang" value="<?=$data['nama_barang']?>"class="form-control" id="inputEmail3" placeholder="Inputkan id nama barang">
                            </div>
                            </div>
                         <div class="form-group">
                            <label for="jumlah" class="col-sm-3 control-label">Jumlah</label>
                            <div class="col-sm-9">
                                <input type="text" name="jumlah" value="<?=$data['jumlah']?>"class="form-control" id="inputEmail3" placeholder="Inputkan jumlah">
                            </div>
                            </div>
                        <div class="form-group">
                            <label for="harga" class="col-sm-3 control-label">Harga</label>
                            <div class="col-sm-9">
                                <input type="text" name="harga" value="<?=$data['harga']?>"class="form-control" id="inputEmail3" placeholder="Inputkan harga ">
                            </div>
                        </div>
                            <div class="form-group">
                            <label for="tanggal" class="col-sm-3 control-label">Tanggal</label>
                            <div class="col-sm-9">
                                <input type="date" name="tanggal" value="<?=$data['tanggal']?>"class="form-control" id="inputEmail3" placeholder="Inputkan tanggal">
                            </div>
                        </div>
                            <div class="form-group">
                            <label for="pembeli" class="col-sm-3 control-label">Pembeli</label>
                            <div class="col-sm-9">
                                <input type="text" name="pembeli" value="<?=$data['pembeli']?>"class="form-control" id="inputEmail3" placeholder="Inputkan pembeli" >
                                </div>
                                </div>                                
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span>EDIT SIMPAN</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="panel-footer">
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
  $id_out=$_POST['id_out'];
    $id_brg=$_POST['id_brg'];
    $nama_barang=$_POST['nama_barang'];
    $jumlah=$_POST['jumlah'];
  $harga=$_POST['harga'];
    $tanggal=$_POST['tanggal'];
     $pembeli=$_POST['pembeli'];
    //buat sql
    $sql="UPDATE keluar SET id_out='$id_out',id_brg='$id_brg',nama_barang='$nama_barang',jumlah='$jumlah',harga='$harga',tanggal='$tanggal',pembeli='$pembeli' WHERE id_out='$id_out'";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL edit barang Error");
    if ($query){
        echo "<script>window.location.assign('?page=barangkeluar&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }
        

?>
