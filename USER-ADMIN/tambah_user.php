<?php include 'head.php' ?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Tambah User</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Forms</li>
      <li class="breadcrumb-item active">Tambah User</li>
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
          <form class="row g-3" action="aksi_tambah_user.php" method="post">
            <div class="col-md-12">
              <label for="inputName5" class="form-label">NIK</label>
              <input type="text" class="form-control" name="nik">
            </div>
            <div class="col-md-12">
              <label for="inputName5" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control" name="nama">
            </div>
            <div class="col-md-12">
              <label for="inputName5" class="form-label">Email</label>
              <input type="email" class="form-control" name="email">
            </div>
            <div class="col-md-6">
              <label for="inputEmail5" class="form-label">Username</label>
              <input type="text" class="form-control" id="inputEmail5" name="username">
            </div>
            <div class="col-md-6">
              <label for="inputPassword5" class="form-label">Password</label>
              <input type="password" class="form-control" id="inputPassword5" name="password">
            </div>
            <div class="col-md-6">
              <label for="inputState" class="form-label">Level</label>
              <select id="inputState" class="form-select" name="level">
                <option selected>Choose...</option>
                <option value="ADMIN">ADMIN</option>
                <option value="TEKNISI">TEKNISI</option>
                <option value="PELANGGAN">PELANGGAN</option>
              </select>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i>  Simpan</button>
            </div>
          </form><!-- End Multi Columns Form -->

        </div>
      </div>

    </div>

    </div>
  </div>
</section>

</main><!-- End #main -->

<?php include 'foot.php'?>