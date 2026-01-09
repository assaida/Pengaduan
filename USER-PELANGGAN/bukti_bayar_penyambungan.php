<?php 
    include 'head.php';
?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Upload Bukti Pembayaran</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Pelayanan</li>
      <li class="breadcrumb-item active">Upload Bukti Pembayaran</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-6">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title"></h5>

          <!-- Multi Columns Form -->
          <form method="post" action="aksi_bukti_penyambungan.php"enctype="multipart/form-data" class="row g-3">
          <?php
          include '../config.php';
          $id = $_GET["id"];
          $q = mysqli_query($con, "SELECT * FROM penyambungan WHERE id = '$id'");
          while ($row = mysqli_fetch_array($q)){
          ?>
              <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <div class="col-md-6">
              <input type="hidden" name="status_bayar" value="Menunggu Konfirmasi">
            </div>
            <div class="col-md-">
              <label for="inputState" class="form-label">Upload Bukti Pembayaran</label>
              <input type="file" name="bukti_bayar" class="form-control">
            </div>
            <div><br>
              <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i>  Simpan</button>
            </div>
          </form><!-- End Multi Columns Form -->
            <?php } ?><!-- End Multi Columns Form -->
        </div>
      </div>
    </div>
  </div>
</section>

</main><!-- End #main -->

<?php include 'foot.php' ?>