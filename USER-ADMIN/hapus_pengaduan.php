<?php
include "../config.php";

$id = $_GET['id'];
$hapus  = mysqli_query($con, "DELETE FROM pengaduan WHERE id = '$id'");

if ($hapus) {
    echo "<script>window.alert('Sukses menghapus pengaduan')
	window.location='pengaduan.php'</script>";
} else {
    echo "<script>window.alert('Gagal menghapus pengaduan')
	window.location='pengaduan.php'</script>";
}
