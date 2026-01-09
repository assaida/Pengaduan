<?php

include '../config.php';

$id =$_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

$q = mysqli_query($con, "UPDATE user SET 
            nama='$nama', email='$email', username='$username', password='$password', level='$level' 
            WHERE id='$id'");

if ($q) {
    echo "<script>window.alert('Edit user sukses!');
	window.location='user.php'</script>";
} else {
    echo "<script>window.alert('Edit user gagal!');
	window.location='edit_user.php'</script>";
}

?>