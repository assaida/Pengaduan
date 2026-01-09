<?php include 'head.php' ?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Data Pesanan Penyambungan Baru</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
      <li class="breadcrumb-item">Pelayanan</li>
      <li class="breadcrumb-item active">Penyambungan Baru</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          
          <!-- Table with stripped rows -->
          <table class="table datatable">
              <br>
            <thead>
              <tr>
                <th scope="col" style="text-align: center">NoRegister</th>
                <th scope="col" style="text-align: center">NIK</th>
                <th scope="col" style="text-align: center">Nama</th>
                <th scope="col" style="text-align: center">Pesanan/Tagihan Anda</th>
                <th scope="col" style="text-align: center">Teknisi</th>
                <th scope="col" style="text-align: center">Bukti Pembayaran</th>
                <th scope="col" style="text-align: center">Status Pembayaran</th>
                <th scope="col" style="text-align: center">Status</th>
                <th scope="col" style="text-align: center">Bukti Pekerjaan Selesai</th>
                <th scope="col" style="text-align: center">Aksi</th>
              </tr>
            </thead>
            <?php
            include '../config.php'; 
            $q = mysqli_query($con, "SELECT * FROM penyambungan");
            while($row = mysqli_fetch_array($q)){
            ?>
            <tbody>
              <tr>
                <th style="text-align: center">1280<?= $row['id'] ?></th>
                  <?php
                  include '../config.php'; 
                  $q1 = mysqli_query($con, "SELECT * FROM user WHERE username='$row[nama]'");
                  while($row1 = mysqli_fetch_array($q1)){
                  ?>
                  <td><?= $row1['nik'] ?></td>
                  <?php } ?>
                  <td><?= $row['nama'] ?></td>
                  <td><?= $row['menu_harga'] ?></td>
                  <td style="text-align:center;"><b><?= $row['teknisi'] ?></b></td>
                  <td style="text-align:center;">
                    <?php echo "<img src='../USER-PELANGGAN/BUKTI BAYAR/" . $row['bukti_bayar'] . "'width='100px' height='100px'/>" ?><br><?php echo $row['bukti_bayar'] ?>
                    <br>
                    <a href="detail_bukti.php?id=<?= $row['id'] ?>" target="_blank" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                  </td>
                  <td style="text-align:center; color:red;"><b><?= $row['status_bayar'] ?></b></td>
                  <td style="text-align:center; color:red;"><b><?= $row['status'] ?></b></td>
                  <td style="text-align:center;">
                    <?php echo "<img src='../USER-TEKNISI/BUKTI SELESAI/" . $row['bukti_selesai'] . "'width='100px' height='100px'/>" ?><br><?php echo $row['bukti_selesai'] ?>
                    <br>
                    <a href="detail_bukti_selesai.php?id=<?= $row['id'] ?>" target="_blank" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                  </td>
                  <td style="text-align: center">
                    <a href="edit_penyambungan.php?id=<?= $row['id'] ?>" class="btn btn-primary"><i class="bi bi-pencil"></i></a>
                    <a href="hapus_penyambungan.php?id=<?= $row['id'] ?>" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                  </td>
              </tr>
            </tbody>
            <?php } ?>
          </table>
          <!-- End Table with stripped rows -->
              <br><br><br>
        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->

<?php include 'foot.php' ?>