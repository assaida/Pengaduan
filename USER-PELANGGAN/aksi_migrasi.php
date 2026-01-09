<?php

include '../config.php';

$nama =$_POST['nama'];
$provinsi =$_POST['provinsi'];
$kabupaten =$_POST['kabupaten'];
$kecamatan =$_POST['kecamatan'];
$desa =$_POST['desa'];
$alamat =$_POST['alamat'];
$email =$_POST['email'];
$whatsapp =$_POST['whatsapp'];
$telepon =$_POST['telepon'];
$daya_sebelum =$_POST['daya_sebelum'];
$daya_migrasi =$_POST['daya_migrasi'];
$status_bayar =$_POST['status_bayar'];
$status =$_POST['status'];
$teknisi =$_POST['teknisi'];

$q = mysqli_query($con, "INSERT INTO migrasi VALUES
('','$nama','$provinsi','$kabupaten','$kecamatan','$desa','$alamat','$email','$whatsapp','$telepon','$daya_sebelum','$daya_migrasi','$status_bayar','','$status','$teknisi','')");

if($q){
    echo "<script>window.alert('Sukses melakukan pemesanan!')
	window.location='pesanan.php'</script>";
} else {
    echo "<script>window.alert('Gagal melakukan pemesanan penyambungan')
	window.location='migrasi.php'</script>";
}
?>

?>