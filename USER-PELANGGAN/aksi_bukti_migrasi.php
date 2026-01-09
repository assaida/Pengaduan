<?php

include '../config.php';

$id =$_POST['id'];
$status_bayar = $_POST['status_bayar'];
$bukti_bayar = $_FILES['bukti_bayar']['name'];

$q = mysqli_query($con, "UPDATE migrasi SET 
            status_bayar='$status_bayar', bukti_bayar='$bukti_bayar' WHERE id='$id'");

echo "<script>window.alert('Succes!')
    window.location='pesanan.php'</script>";
if (strlen($bukti_bayar) > 0) {
    if (is_uploaded_file($_FILES['bukti_bayar']['tmp_name'])) {
        move_uploaded_file($_FILES['bukti_bayar']['tmp_name'], "BUKTI BAYAR/" . $bukti_bayar);
    }
}

?>