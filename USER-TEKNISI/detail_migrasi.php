<?php 
    include 'head.php';
?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Detail Pekerjaan</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
      <li class="breadcrumb-item">Detail Pekerjaan</li>
      <li class="breadcrumb-item active">Ubah Daya / Migrasi</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title"></h5>

              <?php
              include '../config.php';
              $id = $_GET['id'];
              $q = mysqli_query($con, "SELECT * FROM migrasi WHERE id='$id'");
              while ($row = mysqli_fetch_array($q)){
              ?>
                
                <table>
                    <tr>
                        <td><b>Waktu Ambil Pekerjaan</b></td>
                        <td>&nbsp;<b><?php date_default_timezone_set('Asia/Jakarta');
                                           echo date('d-m-Y  |  H:i:s'); ?></b></td>
                    </tr>
                    <tr>
                        <td><b>Nama</b></td>
                        <td><b>:</b> <?= $row['nama']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Alamat</b></td>
                        <td><b>:</b> <?= $row['provinsi']; ?>, <?= $row['kabupaten']?>, Kec. <?= $row['kecamatan'] ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td> <?= $row['alamat'] ?></td>
                    </tr>
                    <tr>
                        <td><b>Email</b></td>
                        <td><b>:</b> <?= $row['email']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Whatsapp</b></td>
                        <td><b>:</b> <?= $row['whatsapp']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Telepon</b></td>
                        <td><b>:</b> <?= $row['telepon']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Daya Sebelum</b></td>
                        <td><b>:</b> <?= $row['daya_sebelum']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Daya Migrasi</b></td>
                        <td><b>:</b> <?= $row['daya_migrasi']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Nama Teknisi</b></td>
                        <td><b>:</b> <?= $row['teknisi']; ?></td>
                    </tr>
                </table><br>

            <form action="aksi_finish_migrasi.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $row['id']; ?>">
                <center> 
                <b>Status</b>
                <select name="status" class="form-control" style="width:30%">
                      <option style="color:red" value="<?= $row['status']; ?>"><?= $row['status']; ?></option>
                      <option style="color:red" value="DALAM PERJALANAN">DALAM PERJALANAN</option>
                      <option style="color:red" value="DIKERJAKAN">DIKERJAKAN</option>
                      <option style="color:red" value="SELESAI | <?= date('Y-m-d') ?>|<?= date('h:i:s') ?>">
                        SELESAI
                        <?= date('Y-m-d') ?> 
                        <?= date('h:i:s') ?>
                      </option>
                    </select>
                <br>
                </center>
            <center>
                <button class="btn btn-primary">Simpan</button>
            </center>
            </form>
              <?php } ?>
            <br><br>
            </div>
      </div>

    </div>

    </div>
  </div>
</section>

</main><!-- End #main -->

<?php include 'foot.php' ?>