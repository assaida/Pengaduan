<?php 
    include 'head.php';
?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Pengaduan</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Pelayanan</li>
      <li class="breadcrumb-item active">Pengaduan</li>
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
          <form class="row g-3" action="aksi_pengaduan.php" method="post">
            <div class="col-md-12">
              <label for="inputName5" class="form-label">Nama</label>
              <input type="text" class="form-control" name="nama" value="<?= $_SESSION['username'] ?>" readonly>
            </div>
            <div class="col-md-12">
              <label for="inputName5" class="form-label">Nomor Whatsapp</label>
              <input type="text" class="form-control" name="whatsapp">
            </div>
            <div class="col-md-12">
                <label for="inputName5" class="form-label">Pengaduan / Keluhan</label>
                <textarea name="pengaduan" cols="53" rows="8" class="form-control"></textarea>    
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary"><i class="bi bi-telegram"></i>  Kirim</button>
            </div>
          </form><!-- End Multi Columns Form -->
            <br>
          <p style="font-style:italic; color:red">*Respon atau tanggapan atas pengaduan anda akan anda terima di nomor whatsapp yang anda input, mohon menunggu beberapa saat. Terimakasih...</p>

        </div>
      </div>

    </div>

    </div>
  </div>
</section>

</main><!-- End #main -->

<?php include 'foot.php' ?>