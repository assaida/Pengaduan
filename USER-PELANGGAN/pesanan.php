<?php include 'head.php' ?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Data Pesanan</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item active">Data Pesanan</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          
          <!-- Table with stripped rows -->
          <table class="table">
            <h5><b>Pesanan Penyambungan Baru</b></h5>
            <thead>
              <tr>
                <th scope="col" style="text-align: center">NoRegister</th>
                <th scope="col" style="text-align: center">Nama</th>
                <th scope="col" style="text-align: center">Pesanan/Tagihan Anda</th>
                <th scope="col" style="text-align: center">Bukti Bayar</th>
                <th scope="col" style="text-align: center">Status Pembayaran</th>
                <th scope="col" style="text-align: center">Status</th>
                <th scope="col" style="text-align: center">Aksi</th>
              </tr>
            </thead>
            <?php
            include '../config.php'; 
            $username = $_SESSION['username']; 
            $q = mysqli_query($con, "SELECT * FROM penyambungan WHERE nama = '$username'");
            while($row = mysqli_fetch_array($q)){
            ?>
            <tbody>
              <tr>
                <th scope="row" style="text-align: center">1280<?= $row['id'] ?></th>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['menu_harga'] ?></td>
                <td style="text-align: center"><a href="bukti_bayar_penyambungan.php?id=<?= $row['id'] ?>" class="btn btn-primary">Upload</a></td>
                <td style="text-align:center; color:red;"><b><?= $row['status_bayar'] ?></b></td>
                <td style="text-align:center; color:red;"><b><?= $row['status'] ?></b></td>
                <td style="text-align: center">
                  <a href="hapus_penyambungan.php?id=<?= $row['id'] ?>" class="btn btn-danger">Batalkan</a>
                </td>
              </tr>
            </tbody>
            <?php } ?>
          </table>
          <!-- End Table with stripped rows -->
              <br><br><br>
          <!-- Table with stripped rows -->
          <table class="table">
            <h5><b>Pesanan Ubah Daya & Migrasi</b></h5>
            <thead>
              <tr>
                <th scope="col" style="text-align: center">NoRegister</th>
                <th scope="col" style="text-align: center">Nama</th>
                <th scope="col" style="text-align: center">Daya Sebelum</th>
                <th scope="col" style="text-align: center">Daya Migrasi</th>
                <th scope="col" style="text-align: center">Bukti Bayar</th>
                <th scope="col" style="text-align: center">Status Pembayaran</th>
                <th scope="col" style="text-align: center">Status</th>
                <th scope="col" style="text-align: center">Aksi</th>
              </tr>
            </thead>
            <?php
            include '../config.php'; 
            $username = $_SESSION['username']; 
            $q = mysqli_query($con, "SELECT * FROM migrasi WHERE nama = '$username'");
            while($row = mysqli_fetch_array($q)){
            ?>
            <tbody>
              <tr>
                <th scope="row" style="text-align: center">1280<?= $row['id'] ?></th>
                <td style="text-align: center"><?= $row['nama'] ?></td>
                <td style="text-align: center"><?= $row['daya_sebelum'] ?></td>
                <td style="text-align: center"><?= $row['daya_migrasi'] ?></td>
                <td style="text-align: center"><a href="bukti_bayar_migrasi.php?id=<?= $row['id'] ?>" class="btn btn-primary">Upload</a></td>
                <td style="text-align:center; color:red;"><b><?= $row['status_bayar'] ?></b></td>
                <td style="text-align:center; color:red;"><b><?= $row['status'] ?></b></td>
                <td style="text-align: center">
                  <a href="hapus_penyambungan.php?id=<?= $row['id'] ?>" class="btn btn-danger">Batalkan</a>
                </td>
              </tr>
            </tbody>
            <?php } ?>
          </table>
          <br><br><br>

<table class="table"><h1>Riwayat Pengaduan</h1>
</div>

<section class="section">
<div class="card">
<div class="card-body">

<table class="table">
<thead>
<tr>
  <th>No</th>
  <th>Pengaduan</th>
  <th>Status</th>
  <th>Balasan Admin</th>
  <th>Teknisi</th>
</tr>
</thead>

<tbody>
<?php
$q = mysqli_query($con,"
  SELECT * FROM pengaduan
  WHERE nama = '$username'
  ORDER BY id DESC
");

$no=1;
while($row=mysqli_fetch_array($q)){
?>
<tr>
  <td><?= $no++ ?></td>
  <td><?= htmlspecialchars($row['pengaduan']) ?></td>
  <td>
    <?php
      if($row['status']=='MENUNGGU') echo '<span class="badge bg-warning">Menunggu</span>';
      elseif($row['status']=='PROSES_TEKNISI') echo '<span class="badge bg-info">Diproses</span>';
      elseif($row['status']=='SELESAI_ADMIN') echo '<span class="badge bg-success">Selesai</span>';
    ?>
  </td>
  <td><?= $row['keterangan_admin'] ?: '<i>Belum ada</i>' ?></td>
  <td><?= $row['teknisi'] ?: '-' ?></td>
</tr>
<?php } ?>

<?php if(mysqli_num_rows($q)==0){ ?>
<tr>
  <td colspan="5" class="text-center">Belum ada pengaduan</td>
</tr>
<?php } ?>
</tbody>
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