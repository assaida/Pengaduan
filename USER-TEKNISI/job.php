<?php 
include '../config.php';
include 'head.php';

if ($_SESSION['level'] != 'TEKNISI') {
  die('Akses ditolak');
}?>

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
              <hr><hr>
<br><br>

<div class="col-lg-12">
 
<?php
$username = $_SESSION['username'];
?>

<section class="section">
<div class="card">
<div class="card-body">

<h5>Pengaduan Ditugaskan</h5>

<table class="table">
<thead>
<tr>
  <th>No</th>
  <th>Pelapor</th>
  <th>Pengaduan</th>
  <th>Status</th>
  <th>Dokumentasi</th>
  <th>Detail</th>
</tr>
</thead>

<tbody>
<?php
$q = mysqli_query($con,"
  SELECT * FROM pengaduan
  WHERE teknisi = '$username'
  ORDER BY id DESC
");

$no=1;
while($row=mysqli_fetch_array($q)){
?>
<tr>
  <td><?= $no++ ?></td>
  <td><?= htmlspecialchars($row['nama']) ?></td>
  <td><?= htmlspecialchars(substr($row['pengaduan'],0,40)) ?>...</td>
  <td>
    <?php if($row['status']=='PROSES_TEKNISI'){ ?>
      <span class="badge bg-info">Diproses</span>
    <?php } else { ?>
      <span class="badge bg-success">Selesai</span>
    <?php } ?>
  </td>
  <td>
    <?php if($row['status']=='PROSES_TEKNISI'){ ?>
      <a href="upload_bukti_pengaduan.php?id=<?= $row['id'] ?>"
         class="btn btn-primary btn-sm">Upload</a>
    <?php } else { ?>
      -
    <?php } ?>
  </td>
  <td>
    <a href="detail_pengaduan_teknisi.php?id=<?= $row['id'] ?>"
       class="btn btn-secondary btn-sm">
       <i class="bi bi-eye"></i>
    </a>
  </td>
</tr>
<?php } ?>

<?php if(mysqli_num_rows($q)==0){ ?>
<tr>
  <td colspan="6" class="text-center">Tidak ada tugas</td>
</tr>
<?php } ?>
</tbody>
</table>

    </div>
  </div>
</div>

        </div>
      </div>
    </div>
  </div>
</section>

</main><!-- End #main -->

<?php include 'foot.php' ?>