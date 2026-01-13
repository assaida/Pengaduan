<?php include 'head.php'; ?>
<main id="main" class="main">

<div class="pagetitle">
  <h1>Detail Pengaduan</h1>
</div>

<section class="section">
<div class="row">
<div class="col-lg-12">

<div class="card">
<div class="card-body">

<?php
include '../config.php';
$id = $_GET['id'];
$q = mysqli_query($con,"SELECT * FROM pengaduan WHERE id='$id'");
while($row=mysqli_fetch_array($q)){
?>

<table>
<tr>
  <td><b>Nama Pelapor</b></td>
  <td>: <?= $row['nama'] ?></td>
</tr>
<tr>
  <td><b>Whatsapp</b></td>
  <td>: <?= $row['whatsapp'] ?></td>
</tr>
<tr>
  <td><b>Pengaduan</b></td>
  <td>: <?= $row['pengaduan'] ?></td>
</tr>
<tr>
  <td><b>Teknisi</b></td>
  <td>: <?= $row['teknisi'] ?></td>
</tr>
</table>

<hr>

<form action="aksi_finish_pengaduan.php" method="post">
  <input type="hidden" name="id" value="<?= $row['id'] ?>">

  <center>
  <b>Status</b>
  <select name="status" class="form-control" style="width:30%">
    <option value="<?= $row['status'] ?>"><?= $row['status'] ?></option>
    <option value="PROSES_TEKNISI">PROSES TEKNISI</option>
    <option value="SELESAI_TEKNISI | <?= date('Y-m-d') ?> | <?= date('H:i:s') ?>">
      SELESAI <?= date('Y-m-d H:i:s') ?>
    </option>
  </select>
  </center>

  <br>

  <center>
    <button class="btn btn-primary">Simpan</button>
  </center>
</form>

<?php } ?>

</div>
</div>

</div>
</div>
</section>
</main>

<?php include 'foot.php'; ?>
