<?php include 'head.php' ?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Edit User</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Forms</li>
      <li class="breadcrumb-item active">Edit User</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<section class="section">
  <div class="row">
    <div class="col-lg-6">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title"></h5>

          <!-- Multi Columns Form -->
          <form method="post" action="aksi_edit_user.php"enctype="multipart/form-data" class="row g-3">
          <?php
          include '../config.php';
          $id = $_GET["id"];
          $q = mysqli_query($con, "SELECT * FROM user WHERE id = '$id'");
          while ($row = mysqli_fetch_array($q)){
          ?>
              <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <div class="col-md-12">
              <label for="inputName5" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control" name="nama" value="<?= $row['nama'] ?>">
            </div>
            <div class="col-md-12">
              <label for="inputName5" class="form-label">Email</label>
              <input type="email" class="form-control" name="email" value="<?= $row['email'] ?>">
            </div>
            <div class="col-md-6">
              <label for="inputEmail5" class="form-label">Username</label>
              <input type="text" class="form-control" id="inputEmail5" name="username" value="<?= $row['username'] ?>">
            </div>
            <div class="col-md-6">
              <label for="inputPassword5" class="form-label">Password</label>
              <input type="password" class="form-control" id="inputPassword5" name="password" value="<?= $row['password'] ?>">
            </div>
            <div class="col-md-6">
              <label for="inputState" class="form-label">Level</label>
              <select id="inputState" class="form-select" name="level">
                <option value="<?= $row['level'] ?>"><?= $row['level'] ?></option>
                <option value="ADMIN">ADMIN</option>
                <option value="TEKNISI">TEKNISI</option>
                <option value="PELANGGAN">PELANGGAN</option>
              </select>
            </div>
            <div class="text-center">
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

<?php include 'foot.php'?>