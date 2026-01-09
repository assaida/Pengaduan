<?php
include "../config.php";

$id = $_GET['id'];
$hapus  = mysqli_query($con, "DELETE FROM migrasi WHERE id = '$id'");

if ($hapus) {
    echo "<script>window.alert('Sukses membatalkan pesanan')
	window.location='migrasi.php'</script>";    
} else {
    echo "<script>window.alert('Gagal membatalkan pesanan')
	window.location='migrasi.php'</script>";
}
