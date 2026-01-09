<?php include 'head.php' ?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Data Pekerjaan</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
      <li class="breadcrumb-item active">Pekerjaan</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body"><br>
          <!-- Table with stripped rows -->
          <h5>Penyambungan Baru</h5>
          <table class="table">
              <br>
            <thead>
              <tr>
                <th scope="col" style="text-align: center">NoRegister</th>
                <th scope="col" style="text-align: center">Nama</th>
                <th scope="col" style="text-align: center">Teknisi</th>
                <th scope="col" style="text-align: center">Status</th>
                <th scope="col" style="text-align: center">Dokumentasi</th>
                <th scope="col" style="text-align: center">Detail</th>
              </tr>
            </thead>
            <?php
            include '../config.php'; 
            $username = $_SESSION['username'];
            $q = mysqli_query($con, "SELECT * FROM penyambungan WHERE teknisi = '$username'");
            while($row = mysqli_fetch_array($q)){
            ?>
            <tbody>
              <tr>
                <th style="text-align: center">1280<?= $row['id'] ?></th>
                <td><?= $row['nama'] ?></td>
                <td style="text-align:center;"><b><?= $row['teknisi'] ?></b></td>
                <td style="text-align:center; color:red;"><b><?= $row['status'] ?></b></td>
                <td style="text-align: center"><a href="bukti_selesai.php?id=<?= $row['id'] ?>" class="btn btn-primary">Upload</a></td>
                <td style="text-align: center">
                  <a href="detail_penyambungan.php?id=<?= $row['id'] ?>" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                </td>
              </tr>
            </tbody>
            <?php } ?>
          </table>
          <!-- End Table with stripped rows -->
              <br>
        </div>
      </div>
    </div>
<hr><hr>
<br><br>
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body"><br>
          <!-- Table with stripped rows -->
          <h5>Ubah Daya & Migrasi</h5>
          <table class="table">
              <br>
            <thead>
              <tr>
                <th scope="col" style="text-align: center">NoRegister</th>
                <th scope="col" style="text-align: center">Nama</th>
                <th scope="col" style="text-align: center">Teknisi</th>
                <th scope="col" style="text-align: center">Status</th>
                <th scope="col" style="text-align: center">Dokumentasi</th>
                <th scope="col" style="text-align: center">Detail</th>
              </tr>
            </thead>
            <?php
            include '../config.php'; 
            $username = $_SESSION['username'];
            $q = mysqli_query($con, "SELECT * FROM migrasi WHERE teknisi = '$username'");
            while($row = mysqli_fetch_array($q)){
            ?>
            <tbody>
              <tr>
                <th style="text-align: center">1280<?= $row['id'] ?></th>
                <td><?= $row['nama'] ?></td>
                <td style="text-align:center;"><b><?= $row['teknisi'] ?></b></td>
                <td style="text-align:center; color:red;"><b><?= $row['status'] ?></b></td>
                <td style="text-align: center"><a href="bukti_selesai_migrasi.php?id=<?= $row['id'] ?>" class="btn btn-primary">Upload</a></td>
                <td style="text-align: center">
                  <a href="detail_migrasi.php?id=<?= $row['id'] ?>" class="btn btn-primary"><i class="bi bi-eye"></i></a>
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