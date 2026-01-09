<?php include 'head.php' ?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Edit Status & Teknisi Pesanan</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Pelayanan</li>
      <li class="breadcrumb-item active">Edit Status & Teknisi Pesanan</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<section class="section">
  <div class="row">
    <div class="col-lg-10">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title"></h5>

          <!-- Multi Columns Form -->
          <form method="post" action="aksi_edit_migrasi.php"enctype="multipart/form-data" class="row g-3">
          <?php
          include '../config.php';
          $id = $_GET["id"];
          $q = mysqli_query($con, "SELECT * FROM migrasi WHERE id = '$id'");
          while ($row = mysqli_fetch_array($q)){
          ?>
              <input type="hidden" name="id" value="<?= $row['id'] ?>">

            <div class="col-md-12">
              <label for="inputState" class="form-label">Status Pembayaran</label>
              <select id="inputState" class="form-select" name="status_bayar">
                <option value="<?= $row['status_bayar'] ?>"><?= $row['status_bayar'] ?></option>
                <option value="LUNAS">LUNAS</option>
                <option value="Menunggu Konfirmasi">Menunggu Konfirmasi</option>
                <option value="Gagal Dikonfirmasi">Gagal Dikonfirmasi</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="inputState" class="form-label">Status</label>
              <select id="inputState" class="form-select" name="status">
                <option value="<?= $row['status'] ?>"><?= $row['status'] ?></option>
                <option value="PENDING">PENDING</option>
                <option value="SEDANG DIPROSES">SEDANG DIPROSES</option>
                <option value="FINISHED">FINISHED</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="inputState" class="form-label">Teknisi</label>
              <select id="inputState" class="form-select" name="teknisi">
                <option value="<?= $row['teknisi'] ?>"><?= $row['teknisi'] ?></option>
                <?php
                include '../config.php';
                $q = mysqli_query($con, "SELECT * FROM user WHERE level='TEKNISI'");
                while($row = mysqli_fetch_array($q)){
                ?>
                    <option value="<?= $row['username'] ?>"><?= $row['username'] ?></option>
                <?php } ?>
              </select>
            </div>
            <div class="text-center"><br>
              <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i>  Simpan</button>
            </div>
          </form><!-- End Multi Columns Form -->
            <?php } ?>
        </div>
      </div>

    </div>

    </div>
  </div>
</section>

</main><!-- End #main -->
<br><br><br><br><br><br><br><br>
<?php include 'foot.php'?>