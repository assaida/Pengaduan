<?php include 'head.php'; ?>
<?php include '../config.php'; ?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Data Pengaduan</h1>
</div>

<section class="section">
<div class="row">
<div class="col-lg-12">

<div class="card">
<div class="card-body">

<table class="table datatable">
<thead>
<tr>
  <th>No</th>
  <th>Nama</th>
  <th>Whatsapp</th>
  <th>Pengaduan</th>
  <th>Status</th>
  <th>Aksi</th>
</tr>
</thead>

<tbody>
<?php
$no = 1;
$q = mysqli_query($con,"SELECT * FROM pengaduan ORDER BY id DESC");
while($row = mysqli_fetch_array($q)){
?>
<tr>
  <td><?= $no++ ?></td>
  <td><?= $row['nama'] ?></td>
  <td>
    <a href="https://wa.me/<?= $row['whatsapp'] ?>" target="_blank">
      <?= $row['whatsapp'] ?>
    </a>
  </td>
  <td><?= $row['pengaduan'] ?></td>
  <td>
    <?php
      if($row['status']=='MENUNGGU')
        echo '<span class="badge bg-warning">Menunggu</span>';
      elseif($row['status']=='SELESAI_ADMIN')
        echo '<span class="badge bg-success">Selesai Admin</span>';
      elseif($row['status']=='PROSES_TEKNISI')
        echo '<span class="badge bg-info">Diproses Teknisi</span>';
      else
        echo '<span class="badge bg-secondary">-</span>';
    ?>
  </td><td class="text-center">

<?php if($row['status'] == 'MENUNGGU'){ ?>
  <!-- AKSI hanya muncul jika masih MENUNGGU -->
  <a href="aksi_pengaduan.php?id=<?= $row['id'] ?>"
     class="btn btn-success btn-sm" title="Tindak Lanjut">
    <i class="bi bi-gear"></i>
  </a>
<?php } ?>

<!-- EDIT selalu ada -->
<a href="aksi_edit_pengaduan.php?id=<?= $row['id'] ?>"
   class="btn btn-primary btn-sm" title="Edit">
  <i class="bi bi-pencil"></i>
</a>

<!-- HAPUS -->
<a href="hapus_pengaduan.php?id=<?= $row['id'] ?>"
   onclick="return confirm('Yakin hapus pengaduan ini?')"
   class="btn btn-danger btn-sm" title="Hapus">
  <i class="bi bi-trash"></i>
</a>

</td>

</tr>
<?php } ?>
</tbody>
</table>

</div>
</div>

</div>
</div>
</section>
</main>

<?php include 'foot.php'; ?>
