<?php include 'head.php' ?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Data User</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active">Data User</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          
          <!-- Table with stripped rows -->
          <a href="tambah_user.php" class="btn btn-success"><i class="bi bi-plus"></i> User</a>
          <table class="table datatable">
            <thead>
              <tr>
                <th scope="col" style="text-align: center">#</th>
                <th scope="col" style="text-align: center">NIK</th>
                <th scope="col" style="text-align: center">Nama</th>
                <th scope="col" style="text-align: center">Email</th>
                <th scope="col" style="text-align: center">Username</th>
                <th scope="col" style="text-align: center">Password</th>
                <th scope="col" style="text-align: center">Level</th>
                <th scope="col" style="text-align: center">Aksi</th>
              </tr>
            </thead>
            <?php
            $no = 1;
            include '../config.php'; 
            $q = mysqli_query($con, "SELECT * FROM user");
            while($row = mysqli_fetch_array($q)){
            ?>
            <tbody>
              <tr>
                <th scope="row"><?= $no++ ?></th>
                <td><?= $row['nik'] ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['username'] ?></td>
                <td><?= $row['password'] ?></td>
                <td style="text-align: center"><?= $row['level'] ?></td>
                <td style="text-align: center">
                  <a href="edit_user.php?id=<?= $row['id'] ?>" class="btn btn-primary"><i class="bi bi-pencil"></i></a>
                  <a href="hapus_user.php?id=<?= $row['id'] ?>" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                </td>
              </tr>
            </tbody>
            <?php } ?>
          </table>
          <!-- End Table with stripped rows -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->

<?php include 'foot.php' ?>