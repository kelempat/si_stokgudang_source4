<?php

var $nama;
var $prodi;
var $status;
var $akreditasi;
var $lokasi;


$kampus1 = new kampus();

$kampus1->nama="STMIK_ROYAL";
$kampus1->prodi="Sistem_Informasi";
$kampus1->akreditasi="B";
$kampus1->status="PTS";


$kampus2 = new kampus();

$kampus2->nama="UNA";
$kampus2->prodi="Magister_Hukum";
$kampus2->pimpinan="Rektor";
$kampus2->status="PTS";


$kampus3 = new kampus();

$kampus3->nama="Unimed";
$kampus3->lokasi="Medan";
$kampus3->status="PTN";
$kampus3->prodi="Keguruan";

//menampilkan property
echo "kampus1 $kampus1->nama mempunyai $kampus1->prodi dan juga kelas eksekutif terakteditasi B";
echo "kampus2 $kampus2->nama memiliki $kampus2->prodi dan dipimpin oleh seorang $kampus2->pimpinan dan $kampus2->berstatus";
echo "kampus3 $kampus3->nama berada $kampus2->lokasi di dan $kampus2->status mempunyai fakultas $kampus2->prodi";
}