<?php
include "../config.php";

$id = $_GET['id'];
$hapus  = mysqli_query($con, "DELETE FROM penyambungan WHERE id = '$id'");

if ($hapus) {
    echo "<script>window.alert('Sukses menghapus pesanan')
	window.location='penyambungan.php'</script>";
} else {
    echo "<script>window.alert('Gagal menghapus pesanan')
	window.location='penyambungan.php'</script>";
}
