<?php include 'head.php' ?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Report</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active">Report</li>
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
            <thead>
              <tr>
                <th scope="col" style="text-align: center">Report</th>
                <th scope="col" style="text-align: center">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Laporan Data Penyambungan Baru</td>
                <td style="text-align: center">
                  <a href="report-penyambungan.php" class="btn btn-primary"><i class="bi bi-printer"></i></a>
                </td>
              </tr>
              <tr>
                <td>Laporan Data Migrasi</td>
                <td style="text-align: center">
                  <a href="report-migrasi.php" class="btn btn-primary"><i class="bi bi-printer"></i></a>
                </td>
              </tr>
              <tr>
                <td>Laporan Data Pengaduan</td>
                <td style="text-align: center">
                  <a href="report-pengaduan.php" class="btn btn-primary"><i class="bi bi-printer"></i></a>
                </td>
              </tr>
            </tbody>
          </table>
          <!-- End Table with stripped rows  5 -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->

<?php include 'foot.php' ?>