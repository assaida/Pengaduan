<?php

include '../config.php';

$id =$_POST['id'];
$teknisi = $_POST['teknisi'];
$status = $_POST['status'];
$status_bayar = $_POST['status_bayar'];

$q = mysqli_query($con, "UPDATE penyambungan SET  
            status_bayar='$status_bayar', status='$status', teknisi='$teknisi' WHERE id='$id'");

if ($q) {
    echo "<script>window.alert('Success!');
	window.location='penyambungan.php'</script>";
} else {
    echo "<script>window.alert('Failed!');
	window.location='edit_penyambungan.php'</script>";
}

?>