<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Aplikasi Pelayanan Pemasangan Listrik</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
    <center>
        <center>
            <br><br>
            <img src="../assets/img/logopln2.png" width="300px"><br>
            <hr>
        </center>
        <h3 style="color:black;">Report / Laporan Penyambungan Baru</h3>
        <hr width="200px"><br>
        <div class="col-lg-12">
            <div class="table-responsive table--no-card m-b-30">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="color:black;">
                    <thead>
                        <tr>
                            <th style="text-align: center" width="30px">No</th>
                            <th style="text-align: center" width="100px">Nama</th>
                            <th style="text-align: center" width="100px">Alamat</th>
                            <th style="text-align: center" width="150px">Email</th>
                            <th style="text-align: center" width="100px">Tlp / Whatsapp</th>
                            <th style="text-align: center" width="80px">Pemasangan</th>
                            <th style="text-align: center" width="80px">Status</th>
                            <th style="text-align: center" width="80px">Teknisi</th>
                        </tr>
                    </thead>
                    <?php
                    include "../config.php";
                    $no = 1;
                    $q = mysqli_query($con, "SELECT * FROM penyambungan WHERE status = 'FINISHED'");
                    while ($d = mysqli_fetch_array($q)) {
                    ?>
                        <tr>
                            <td style="text-align: center"><?= $no++ ?></td>
                            <td style="text-align: center"><?= $d['nama'] ?></td>
                            <td><?= $d['alamat'] ?>, <?= $d['desa'] ?>, <?= $d['kecamatan'] ?>, <?= $d['kabupaten'] ?>, <?= $d['provinsi'] ?></td>
                            <td><?= $d['email'] ?></td>
                            <td><?= $d['telepon'] ?> / <?= $d['whatsapp'] ?></td>
                            <td style="text-align: center"><?= $d['menu_harga'] ?></td>
                            <td style="text-align: center"><?= $d['status'] ?></td>
                            <td style="text-align: center"><?= $d['teknisi'] ?></td>

                        </tr>
                    <?php } ?>
                </table>
                <script>
                    javascript: window.print()
                </script>
    </center>
</body>

</html>