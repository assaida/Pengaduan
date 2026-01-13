<?php include 'head.php'; ?>
<main id="main" class="main">

<div class="pagetitle">
  <h1>Upload Bukti Pengaduan Selesai</h1>
</div>

<section class="section">
  <div class="row">
    <div class="col-lg-6">
      <div class="card">
        <div class="card-body">

        <?php
        include '../config.php';
        $id = $_GET['id'];
        $q = mysqli_query($con,"SELECT * FROM pengaduan WHERE id='$id'");
        while($row=mysqli_fetch_array($q)){
        ?>

        <form method="post"
              action="aksi_bukti_pengaduan.php"
              enctype="multipart/form-data">

          <input type="hidden" name="id" value="<?= $row['id'] ?>">

          <div class="mb-3">
            <label class="form-label">Upload Bukti Penyelesaian</label>
            <input type="file" name="bukti_selesai" class="form-control" required>
          </div>

          <button class="btn btn-primary">
            <i class="bi bi-save"></i> Simpan
          </button>

        </form>

        <?php } ?>

        </div>
      </div>
    </div>
  </div>
</section>
</main>

<?php include 'foot.php'; ?>
