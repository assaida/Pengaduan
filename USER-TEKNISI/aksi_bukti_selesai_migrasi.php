<?php

include '../config.php';

$id =$_POST['id'];
$bukti_selesai = $_FILES['bukti_selesai']['name'];

$q = mysqli_query($con, "UPDATE migrasi SET 
            bukti_selesai ='$bukti_selesai' WHERE id='$id'");

echo "<script>window.alert('Succes!')
    window.location='job.php'</script>";
if (strlen($bukti_selesai) > 0) {
    if (is_uploaded_file($_FILES['bukti_selesai']['tmp_name'])) {
        move_uploaded_file($_FILES['bukti_selesai']['tmp_name'], "BUKTI SELESAI/" . $bukti_selesai);
    }
}

?>