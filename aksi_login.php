<?php
session_start();
include "config.php";

$username   = $_POST['username'];
$password   = $_POST['password'];

$login      = mysqli_query($con, "select * from user where username ='$username' and password='$password' ");
$cek        = mysqli_num_rows($login);

if ($cek > 0) {
    $data       = mysqli_fetch_assoc($login);

    if ($data["level"] == "ADMIN") {
        $_SESSION["username"]   = $username;
        $_SESSION["level"]      = "ADMIN";
        echo "<script>
    alert('Login berhasil');
    document.location = 'USER-ADMIN/index.php'
    </script>";
    }
    if ($data["level"] == "TEKNISI") {
        $_SESSION["username"]   = $username;
        $_SESSION["level"]      = "TEKNISI";
        echo "<script>
    alert('Login berhasil');
    document.location = 'USER-TEKNISI/index.php'
    </script>";
    }
    if ($data["level"] == "PELANGGAN") {
        $_SESSION["username"]   = $username;
        $_SESSION["level"]      = "PELANGGAN";
    echo "<script>
    alert('Login berhasil');
    document.location = 'USER-PELANGGAN/index.php'
    </script>";
    }
    if ($data["level"] == "PIMPINAN") {
        $_SESSION["username"]   = $username;
        $_SESSION["level"]      = "PIMPINAN";
    echo "<script>
    alert('Login berhasil');
    document.location = 'USER-PIMPINAN/index.php'
    </script>";
    }
} else {
    echo "<script>
alert('Login gagal, mohon periksa kembali username atau password anda');
document.location = 'index.php'
</script>";
}
