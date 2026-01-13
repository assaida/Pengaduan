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
  <h1>Edit Pengaduan</h1>
</div>

<section class="section">
<div class="row">
<div class="col-lg-6">

<div class="card">
<div class="card-body">

<form method="post">

<div class="mb-3">
  <label>Nama Pelapor</label>
  <input type="text" class="form-control" value="<?= $data['nama'] ?>" readonly>
</div>

<div class="mb-3">
  <label>Isi Pengaduan</label>
  <textarea class="form-control" rows="3" readonly><?= $data['pengaduan'] ?></textarea>
</div>

<div class="mb-3">
  <label>Status</label>
  <select name="status" id="status" class="form-control" onchange="aturForm()" required>
    <option value="MENUNGGU" <?= $data['status']=='MENUNGGU'?'selected':'' ?>>
      Menunggu
    </option>

    <option value="SELESAI_ADMIN" <?= $data['status']=='SELESAI_ADMIN'?'selected':'' ?>>
      Balas / Selesai oleh Admin
    </option>

    <option value="PROSES_TEKNISI" <?= $data['status']=='PROSES_TEKNISI'?'selected':'' ?>>
      Proses ke Teknisi
    </option>
  </select>
</div>

<div class="mb-3" id="formAdmin">
  <label>Balasan Admin</label>
  <textarea name="keterangan_admin" class="form-control" rows="3">
<?= $data['keterangan_admin'] ?>
  </textarea>
</div>

<div class="mb-3" id="formTeknisi">
  <label>Pilih Teknisi</label>
  <select name="teknisi" class="form-control">
    <option value="">-- Pilih Teknisi --</option>
    <?php while($t=mysqli_fetch_array($qt)){ ?>
      <option value="<?= $t['username'] ?>"
        <?= $data['teknisi']==$t['username']?'selected':'' ?>>
        <?= $t['nama'] ?>
      </option>
    <?php } ?>
  </select>
</div>

<button name="update" class="btn btn-primary">Update</button>
<a href="pengaduan.php" class="btn btn-secondary">Kembali</a>

</form>

</div>
</div>

</div>
</div>
</section>
</main>

<script>
function aturForm(){
  let status = document.getElementById('status').value;

  document.getElementById('formAdmin').style.display   = 'none';
  document.getElementById('formTeknisi').style.display = 'none';

  if(status === 'SELESAI_ADMIN'){
    document.getElementById('formAdmin').style.display = 'block';
  }

  if(status === 'PROSES_TEKNISI'){
    document.getElementById('formTeknisi').style.display = 'block';
  }
}

aturForm();
</script>

<?php
if(isset($_POST['update'])){
  $status = $_POST['status'];
  $ket    = $_POST['keterangan_admin'] ?? NULL;
  $tek    = $_POST['teknisi'] ?? NULL;

  // logika bersih
  if($status == 'SELESAI_ADMIN'){
    $tek = NULL;
  }

  if($status == 'PROSES_TEKNISI'){
    $ket = NULL;
  }

  mysqli_query($con,"
    UPDATE pengaduan SET
      status='$status',
      keterangan_admin=".($ket?"'$ket'":"NULL").",
      teknisi=".($tek?"'$tek'":"NULL")."
    WHERE id='$id'
  ");

  echo "<script>
    alert('Pengaduan berhasil diperbarui');
    location='pengaduan.php';
  </script>";
}

include 'foot.php';
?>
