<?php 
// $con = mysqli_connect('localhost', 'u1522649_halim1', 'Polgan12345!!','u1522649_halim');
$con = mysqli_connect('localhost', 'root', '','pelayanan_pln');

if(mysqli_connect_errno()){
	echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
}   

