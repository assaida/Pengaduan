<?php
include "../config.php";

$id = $_GET['id'];
$hapus  = mysqli_query($con, "DELETE FROM user WHERE id = '$id'");

if ($hapus) {
    echo "<script>window.alert('Sukses menghapus user!')
	window.location='user.php'</script>";
} else {
    echo "<script>window.alert('Gagal menghapus user!')
	window.location='user.php'</script>";
}
