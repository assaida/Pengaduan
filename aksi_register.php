<?php
include 'config.php';

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

$q = mysqli_query($con, "INSERT INTO user VALUES ('','$nik','$nama', '$email', '$username', '$password', '$level')");

if($q){
    echo "<script>window.alert('Pendaftaran akun berhasil!')
	window.location='index.php'</script>";
} else {
    echo "<script>window.alert('Pendaftaran gagal!')
	window.location='register.php'</script>";
}
?>