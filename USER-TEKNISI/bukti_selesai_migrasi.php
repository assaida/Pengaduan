<?php 
    include 'head.php';
?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Upload Bukti Pekerjaan Selesai</h1>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-6">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title"></h5>

          <!-- Multi Columns Form -->
          <form method="post" action="aksi_bukti_selesai_migrasi.php"enctype="multipart/form-data" class="row g-3">
          <?php
          include '../config.php';
          $id = $_GET["id"];
          $q = mysqli_query($con, "SELECT * FROM migrasi WHERE id = '$id'");
          while ($row = mysqli_fetch_array($q)){
          ?>
              <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <div class="col-md-">
              <label for="inputState" class="form-label">Upload Bukti Pekerjaan Selesai</label>
              <input type="file" name="bukti_selesai" class="form-control">
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