<?php
//membuat query untuk hapus data
$sql="DELETE FROM keluar WHERE id_out ='".$_GET['id_out']."'";
$query=mysqli_query($koneksi, $sql) or die ("SQL Hapus Error");
if($query){
    echo"<script> window.location.assign('?page=barangkeluar&actions=tampil');</script>";
}else{
    echo"<script> alert ('Maaf !!! Data Tidak Berhasil Dihapus') window.location.assign('?page=barangkeluar&actions=tampil');</scripr>";
}

