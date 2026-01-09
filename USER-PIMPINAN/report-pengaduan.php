<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Laporan Pengaduan</title>

    <!-- Font & CSS -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        body {
            color: black;
        }
        @media print {
            .no-print {
                display: none;
            }
        }
    </style>
</head>

<body id="page-top">
    <center>
        <br><br>
        <img src="../assets/img/logopln2.png" width="300px"><br>
        <hr>
        <h3>Laporan Pengaduan Pelanggan</h3>
        <hr width="300px"><br>

        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="text-align:center; width:40px;">No</th>
                            <th style="text-align:center;">Nama</th>
                            <th style="text-align:center;">No. WhatsApp</th>
                            <th style="text-align:center;">Isi Pengaduan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "../config.php";
                        $no = 1;
                        $q = mysqli_query($con, "SELECT * FROM pengaduan");
                        while ($d = mysqli_fetch_array($q)) {
                        ?>
                            <tr>
                                <td style="text-align:center;"><?= $no++ ?></td>
                                <td><?= $d['nama'] ?></td>
                                <td style="text-align:center;"><?= $d['whatsapp'] ?></td>
                                <td><?= $d['pengaduan'] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <script>
            window.print();
        </script>
    </center>
</body>

</html>
