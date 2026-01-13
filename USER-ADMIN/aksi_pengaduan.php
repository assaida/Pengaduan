<?php
include '../config.php';
include 'head.php';

if ($_SESSION['level'] != 'ADMIN') {
  die('Akses ditolak');
}

$id = $_GET['id'];
$data = mysqli_fetch_array(
  mysqli_query($con,"SELECT * FROM pengaduan WHERE id='$id'")
);

$qt = mysqli_query($con,"SELECT * FROM user WHERE level='TEKNISI'");
?>

<main id="main" class="main">
<div class="pagetitle">
  <h1>Proses Pengaduan</h1>
</div>

<section class="section">
<div class="card">
<div class="card-body">

<form method="post">

<div class="mb-3">
  <label>Pengaduan</label>
  <textarea class="form-control" readonly><?= $data['pengaduan'] ?></textarea>
</div>

<div class="mb-3">
  <label>Aksi</label>
  <select name="aksi" class="form-control" onchange="atur()" required>
    <option value="">-- Pilih --</option>
    <option value="BALAS">Balas Admin</option>
    <option value="TEKNISI">Tugaskan Teknisi</option>
  </select>
</div>

<div id="balas" style="display:none">
  <label>Balasan Admin</label>
  <textarea name="keterangan_admin" class="form-control"></textarea>
</div>

<div id="teknisi" style="display:none">
  <label>Pilih Teknisi</label>
  <select name="teknisi" class="form-control">
    <option value="">-- Pilih --</option>
    <?php while($t=mysqli_fetch_array($qt)){ ?>
      <option value="<?= $t['username'] ?>"><?= $t['nama'] ?></option>
    <?php } ?>
  </select>
</div>

<br>
<button name="simpan" class="btn btn-success">Simpan</button>
<a href="pengaduan.php" class="btn btn-secondary">Kembali</a>

</form>

</div>
</div>
</section>
</main>

<script>
function atur(){
  let a = document.querySelector('[name=aksi]').value;
  document.getElementById('balas').style.display = 'none';
  document.getElementById('teknisi').style.display = 'none';

  if(a=='BALAS') document.getElementById('balas').style.display='block';
  if(a=='TEKNISI') document.getElementById('teknisi').style.display='block';
}
</script>

<?php
if(isset($_POST['simpan'])){
  if($_POST['aksi']=='BALAS'){
    mysqli_query($con,"
      UPDATE pengaduan SET
      status='SELESAI_ADMIN',
      keterangan_admin='$_POST[keterangan_admin]',
      teknisi=NULL
      WHERE id='$id'
    ");
  }

  if($_POST['aksi']=='TEKNISI'){
    mysqli_query($con,"
      UPDATE pengaduan SET
      status='PROSES_TEKNISI',
      teknisi='$_POST[teknisi]',
      keterangan_admin=NULL
      WHERE id='$id'
    ");
  }

  echo "<script>alert('Berhasil');location='pengaduan.php';</script>";
}

include 'foot.php';
?>
