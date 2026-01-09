<?php

include '../config.php';

$nama =$_POST['nama'];
$whatsapp = $_POST['whatsapp'];
$pengaduan = $_POST['pengaduan'];

$q = mysqli_query($con, "INSERT INTO pengaduan VALUES
('','$nama','$whatsapp','$pengaduan')");

if($q){
    echo "<script>window.alert('Sukses dikirim!')
	window.location='pelayanan.php'</script>";
} else {
    echo "<script>window.alert('Failed')
	window.location='pengaduan.php'</script>";
}
?>

?>