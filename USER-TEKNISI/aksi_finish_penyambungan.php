<?php

include '../config.php';

$id =$_POST['id'];
$status = $_POST['status'];

$q = mysqli_query($con, "UPDATE penyambungan SET status='$status' WHERE id='$id'");

if ($q) {
    echo "<script>window.alert('Success!');
	window.location='job.php'</script>";
} else {
    echo "<script>window.alert('Failed!');
	window.location='detail_penyambungan.php'</script>";
}

?>