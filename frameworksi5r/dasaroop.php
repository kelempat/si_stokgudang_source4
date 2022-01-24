<?php

class mobil{

var $pemilik;
var $merk;
var $ban;
var $harga;
var $buatan;


function hidupkan_mesin(){
	return "Bisa digunakan untuk menghidupkan mesin";
}
function matikan_mesin() {
	return "juga mematikan mesin";
}

function melaju(){
	return "Melaju dengan tenang";
}
function berhenti(){
	return "dan juga berhenti";
}
function mundur(){
	return "bisa mundur";
}
function berbelok(){
	return "lalu berbelok";
}

}

$mobil3 = new mobil();

$mobil3->pemilik="Acunta";
$mobil3->merk="Lamborghini";
$mobil3->ban="4";
$mobil3->harga="5.000.000.000";
$mobil3->buatan="Luar Negeri";


$mobil4 = new mobil();

$mobil4->pemilik="Uswatun Hasanah";
$mobil4->merk="Agya";
$mobil4->ban="4";
$mobil4->harga="120.000.000";
$mobil4->buatan="Vietnam";

echo $mobil3->pemilik;
echo "<br />";
echo $mobil3->merk;
echo "<br />";
echo $mobil3->ban;
echo "<br />";
echo $mobil3->harga;
echo "<br />";
echo $mobil3->buatan;
echo "<br />";

echo "<br />";

echo $mobil4->hidupkan_mesin();
echo "<br />";              
echo $mobil4->matikan_mesin();
echo "<br />"; 
echo $mobil4->melaju();
echo "<br />"; 
echo $mobil4->berhenti();
echo "<br />"; 
echo $mobil4->mundur();
echo "<br />"; 
echo $mobil4->berbelok();
echo "<br />"; 

//menampilkan property
echo "mobil $mobil3->pemilik adalah $mobil3->merk seharga $mobil3->harga buatan $mobil3->buatan memiliki $mobil3->ban roda";

echo "<br />";

echo $mobil4->hidupkan_mesin();
echo "<br />";              
echo $mobil4->matikan_mesin();
echo "<br />"; 
echo $mobil4->melaju();
echo "<br />"; 
echo $mobil4->berhenti();
echo "<br />"; 
echo $mobil4->mundur();
echo "<br />"; 
echo $mobil4->berbelok();
echo "<br />";

