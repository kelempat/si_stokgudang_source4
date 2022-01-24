<?php
$username=$_GET['username'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Data User</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="username" class="col-sm-3 control-label">User Name</label>
                             <div class="col-sm-9">
								<input type="text" name="username" value="<?=$data['username']?>"class="form-control" id="inputEmail3" placeholder="Input  User Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="paswd" class="col-sm-3 control-label">Pasword</label>
                            <div class="col-sm-9">
                                <input type="text" name="pasword" value="<?=$data['paswd']?>"class="form-control" id="inputEmail3" placeholder="Input Pasword">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" value="<?=$data['nama']?>" class="form-control" id="inputPassword3" placeholder="Input Nama">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="level" class="col-sm-3 control-label">level</label>
                            <div class="col-sm-9">
                                <input type="text" name="level" value="<?=$data['level']?>" class="form-control" id="inputPassword3" placeholder="Input Level">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="ket" value="<?=$data['ket']?>" class="form-control" id="inputPassword3" placeholder="Input Keterangan">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data User</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=user&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data User
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $username=$_POST['username'];
	  $paswd=$_POST['paswd'];
		$nama =$_POST['nama'];
        $level =$_POST['level'];
		$ket =$_POST['ket'];
    //buat sql
    $sql="UPDATE user SET username='$username', paswd='$paswd', nama='$nama', level='$level', ket='$ket' WHERE username ='$username'";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit User Error");
    if ($query){
        echo "<script>window.location.assign('?page=user&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>
