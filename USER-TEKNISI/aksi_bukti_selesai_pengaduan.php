<?php
include '../config.php';

$id = $_POST['id'];
$bukti = $_FILES['bukti_selesai']['name'];

if(strlen($bukti) > 0){
  if(is_uploaded_file($_FILES['bukti_selesai']['tmp_name'])){
    move_uploaded_file(
      $_FILES['bukti_selesai']['tmp_name'],
      "BUKTI_PENGADUAN/".$bukti
    );
  }
}

mysqli_query($con,"
  UPDATE pengaduan SET
    bukti_selesai='$bukti'
  WHERE id='$id'
");

echo "<script>
  alert('Bukti berhasil diupload');
  location='job.php';
</script>";
