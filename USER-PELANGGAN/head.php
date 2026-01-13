<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard | Aplikasi Pelayanan Pemasangan Listrik</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/logopln.jpg" rel="icon">
  <link href="../assets/img/logopln.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<style>
/* ===== SIDEBAR PLN THEME ===== */
#sidebar.sidebar {
  background: rgba(0, 74, 173, 0.9) !important; /* Biru PLN transparan */
  backdrop-filter: blur(6px); /* efek glass (opsional) */
}

/* Heading */
#sidebar .nav-heading {
  color: rgba(255, 255, 255, 0.75) !important;
}

/* Menu link */
#sidebar .nav-link {
  color: #ffffff !important;
  background: transparent !important;
  border-radius: 8px;
}

/* Icon */
#sidebar .nav-link i {
  color: #e6f0ff !important;
}

/* Hover */
#sidebar .nav-link:hover {
  background: rgba(255, 255, 255, 0.18) !important;
}

/* Active */
#sidebar .nav-link:not(.collapsed) {
  background: rgba(255, 255, 255, 0.28) !important;
  font-weight: 600;
}

/* Submenu */
#sidebar .nav-content a {
  color: #f0f6ff !important;
  border-radius: 6px;
}

/* Submenu hover */
#sidebar .nav-content a:hover {
  background: rgba(255, 255, 255, 0.18) !important;
}
</style>
<body>
<?php session_start(); ?>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <span class="d-none d-lg-block">PLN UP3</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="../assets/img/user.png" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Customer <b><?= $_SESSION['username'] ?></b></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li>
              <?php
              include '../config.php';
              $q = mysqli_query($con, "SELECT * FROM user WHERE username = '$_SESSION[username]'");
              while($row = mysqli_fetch_array($q)){
              ?>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-card-heading"></i>
                <span><?= $row['nik'] ?></span>
              </a>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-file-person"></i>
                <span><?= $row['nama'] ?></span>
              </a>
              <?php } ?>
              <a class="dropdown-item d-flex align-items-center" href="../logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>
          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.php">
          <i class="bi bi-house"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="pelayanan.php">
          <i class="bi bi-grid"></i>
          <span>Pelayanan</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="pesanan.php">
          <i class="bi bi-coin"></i>
          <span>Pesanan</span>
        </a>
      </li>
      <!-- End Profile Page Nav -->
    </ul>

  </aside><!-- End Sidebar-->