<?php

include '../config.php';

$nik =$_POST['nik'];
$nama =$_POST['nama'];
$email =$_POST['email'];
$username =$_POST['username'];
$password =$_POST['password'];
$level =$_POST['level'];

$q = mysqli_query($con, "INSERT INTO user VALUES('','$nik', '$nama','$email','$username','$password','$level')");

if($q){
    echo "<script>window.alert('Sukses menambahkan user!')
	window.location='user.php'</script>";
} else {
    echo "<script>window.alert('Gagal menambahkan user! Mohon periksa kembali')
	window.location='tambah_user.php'</script>";
}
?>

?>