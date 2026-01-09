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
$menu_harga =$_POST['menu_harga'];
$status_bayar =$_POST['status_bayar'];
$status =$_POST['status'];
$teknisi =$_POST['teknisi'];

$q = mysqli_query($con, "INSERT INTO penyambungan VALUES
('','$nama','$provinsi','$kabupaten','$kecamatan','$desa','$alamat','$email','$whatsapp','$telepon','$menu_harga','','$status_bayar','$status','$teknisi','')");

if($q){
    echo "<script>window.alert('Sukses melakukan pemesanan, selesaikan satu langkah lagi!')
	window.location='pesanan.php'</script>";
} else {
    echo "<script>window.alert('Gagal melakukan pemesanan penyambungan')
	window.location='penyambungan.php'</script>";
}
?>

?>