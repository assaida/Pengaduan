<?php
include '../config.php';

$nama = $_POST['nama'];
$whatsapp = $_POST['whatsapp'];
$pengaduan = $_POST['pengaduan'];

$q = mysqli_query($con, "
    INSERT INTO pengaduan 
    (nama, whatsapp, pengaduan, status, teknisi) 
    VALUES 
    ('$nama', '$whatsapp', '$pengaduan', 'MENUNGGU', '-')
");

if ($q) {
    echo "<script>
        alert('Sukses dikirim!');
        window.location='pelayanan.php';
    </script>";
} else {
    echo "<script>
        alert('Gagal mengirim pengaduan!');
        window.location='pengaduan.php';
    </script>";
}
?>
