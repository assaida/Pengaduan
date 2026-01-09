<?php
include "../config.php";

$id = $_GET['id'];
$hapus  = mysqli_query($con, "DELETE FROM penyambungan WHERE id = '$id'");

if ($hapus) {
    echo "<script>window.alert('Sukses membatalkan pesanan')
	window.location='pesanan.php'</script>";
} else {
    echo "<script>window.alert('Gagal membatalkan pesanan')
	window.location='pesanan.php'</script>";
}
