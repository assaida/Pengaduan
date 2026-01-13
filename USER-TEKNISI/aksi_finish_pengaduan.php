<?php
include '../config.php';

$id = $_POST['id'];
$status = $_POST['status'];

$q = mysqli_query($con,"
  UPDATE pengaduan SET
    status='$status'
  WHERE id='$id'
");

if($q){
  echo "<script>
    alert('Pengaduan berhasil diselesaikan');
    location='job.php';
  </script>";
}else{
  echo "<script>
    alert('Gagal');
    history.back();
  </script>";
}
