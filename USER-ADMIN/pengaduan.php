<?php include 'head.php' ?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Data Pengaduan</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
      <li class="breadcrumb-item">Pelayanan</li>
      <li class="breadcrumb-item active">Pengaduan</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          
          <!-- Table with stripped rows -->
          <table class="table datatable">
              <br>
            <thead>
              <tr>
                <th scope="col" style="text-align: center">No</th>
                <th scope="col" style="text-align: center">Nama</th>
                <th scope="col" style="text-align: center">Whatsapp</th>
                <th scope="col" style="text-align: center">Pengaduan</th>
                <th scope="col" style="text-align: center">Aksi</th>
              </tr>
            </thead>
            <?php
            include '../config.php'; 
            $no = 1;
            $q = mysqli_query($con, "SELECT * FROM pengaduan");
            while($row = mysqli_fetch_array($q)){
            ?>
            <tbody>
              <tr>
                <th style="text-align: center"><?= $no++ ?></th>
                <td width="20%"><?= $row['nama'] ?></td>
                <td width="10%"><a href="https://wa.me/<?= $row['whatsapp'] ?>"><?= $row['whatsapp'] ?></a></td>
                <td width="50%"><?= $row['pengaduan'] ?></td>
                <td width="20%" style="text-align: center">
                  <a href="hapus_pengaduan.php?id=<?= $row['id'] ?>" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                </td>
              </tr>
            </tbody>
            <?php } ?>
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