<?php
$id_in=$_GET['id_in'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM masuk WHERE id_in ='$id_in'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Masuk</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="id_in" class="col-sm-3 control-label">Id In</label>
                            <div class="col-sm-9">
                                <input type="text" name="id_in" value="<?=$data['id_in']?>"class="form-control" id="inputEmail3" placeholder="Inputkan Id in">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="suplier" class="col-sm-3 control-label">Suplier</label>
                            <div class="col-sm-9">
                                <input type="text" name="suplier" value="<?=$data['suplier']?>"class="form-control" id="inputEmail3" placeholder="Inputkan Suplier">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="nama_barang" class="col-sm-3 control-label">nama_barang</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_barang" value="<?=$data['nama_barang']?>"class="form-control" id="inputEmail3" placeholder="Inputkan Nama Barang">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="tanggal_masuk" class="col-sm-3 control-label">Tanggal Masuk</label>
                            <div class="col-sm-8">
                                 <input type="date" name="tanggal_masuk" class="form-control" id="inputEmail3" placeholder="Inputkan tanggal masuk">
                            </div>
                            </div>
						<div class="form-group">
                            <label for="harga_satuan" class="col-sm-3 control-label">Harga Satuan</label>
                            <div class="col-sm-9">
                                <input type="text" name="harga_satuan" value="<?=$data['harga_satuan']?>"class="form-control" id="inputEmail3" placeholder="Inputkan harga satuan">
                            </div>
                        </div>
							<div class="form-group">
                            <label for="jumlah_barang" class="col-sm-3 control-label">Jumlah Barang</label>
                            <div class="col-sm-9">
                                <input type="text" name="jumlah_barang" value="<?=$data['jumlah_barang']?>"class="form-control" id="inputEmail3" placeholder="Inputkan jumlah barang" >
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
 $id_in=$_POST['id_in'];
    $suplier=$_POST['suplier'];
    $nama_barang=$_POST['nama_barang'];
    $tanggal_masuk=$_POST['tanggal_masuk'];
  $harga_satuan=$_POST['harga_satuan'];
    $jumlah_barang=$_POST['jumlah_barang'];
    //buat sql
    $sql="UPDATE masuk SET id_in='$id_in',suplier='$suplier',nama_barang='$nama_barang',tanggal_masuk='$tanggal_masuk',harga_satuan='$harga_satuan',jumlah_barang='$jumlah_barang' WHERE id_in ='$id_in'";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL edit barang Error");
    if ($query){
        echo "<script>window.location.assign('?page=barangmasuk&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }
        

?>



