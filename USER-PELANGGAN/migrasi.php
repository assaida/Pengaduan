<?php 
    include 'head.php';
?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Ubah Daya & Imigrasi</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Pelayanan</li>
      <li class="breadcrumb-item active">Ubah Daya & Imigrasi</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title"></h5>

          <!-- Multi Columns Form -->
          <form class="row g-3" action="aksi_migrasi.php" method="post">
            <div class="col-md-12">
              <label for="inputName5" class="form-label">Nama</label>
              <input type="text" class="form-control" name="nama" value="<?= $_SESSION['username'] ?>" readonly>
            </div>
            <div class="col-md-6">
              <label for="inputState" class="form-label">Provinsi</label>
              <select id="inputState" class="form-select" name="provinsi">
                <option value="Sumatera Utara">Sumatera Utara</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="inputState" class="form-label">Kota/Kabupaten</label>
              <select id="inputState" class="form-select" name="kabupaten">
                <option value="Kota Medan">Kota Medan</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="inputState" class="form-label">Unit Layanan</label>
              <select id="inputState" class="form-select">
                <option value="Lhokseumawe">Lhokseumawe</option>
              </select>
              </div>
<!-- KECAMATAN -->
<div class="col-md-6">
  <label class="form-label">Kecamatan</label>
  <select id="kecamatan" class="form-select" name="kecamatan">
    <option selected>Pilih Kecamatan...</option>
    <option value="Banda Sakti">Kecamatan Banda Sakti</option>
    <option value="Muara Dua">Kecamatan Muara Dua</option>
    <option value="Muara Satu">Kecamatan Muara Satu</option>
    <option value="Blang Mangat">Kecamatan Blang Mangat</option>
  </select>
</div>

<!-- DESA -->
<div class="col-md-6">
  <label class="form-label">Desa/Kelurahan</label>
  <select id="desa" class="form-select" name="desa">
    <option selected>Pilih Desa...</option>
  </select>
</div>

<script>
const desaOptions = {
  "Muara Satu": [
    "Gampong Blang Panyang",
    "Gampong Meunasah Dayah",
    "Gampong Cot Trieng",
    "Gampong Meuria Paloh",
    "Gampong Paloh Punti",
    "Gampong Padang Sakti",
    "Paloh Barat",
    "Gampong Blang Pulo",
    "Gampong Batuphat Timur",
    "Gampong Blang Naleung Mameh",
    "Gampong Ujong Pacu",
    "Gampong Batuphat Barat"
  ],

  "Banda Sakti": [
    "Isi desa Banda Sakti di sini"
  ],

  "Muara Dua": [
    "Isi desa Muara Dua di sini"
  ],

  "Blang Mangat": [
    "Isi desa Blang Mangat di sini"
  ]
};

const kecamatan = document.getElementById("kecamatan");
const desa = document.getElementById("desa");

kecamatan.addEventListener("change", function () {
  const selected = this.value;

  // reset desa
  desa.innerHTML = '<option selected>Pilih Desa...</option>';

  if (desaOptions[selected]) {
    desaOptions[selected].forEach(function (d) {
      const opt = document.createElement("option");
      opt.value = d;
      opt.textContent = d;
      desa.appendChild(opt);
    });
  }
});
</script>
            <div class="col-md-6">
                <label for="inputName5" class="form-label">Detail Alamat</label>
                <textarea name="alamat" cols="53" rows="5" class="form-control"></textarea>    
            </div>
            <div class="col-md-12">
              <label for="inputName5" class="form-label">Email</label>
              <input type="email" class="form-control" name="email">
            </div>
            <div class="col-md-6">
              <label for="inputEmail5" class="form-label">Nomor Whatsapp</label>
              <input type="text" class="form-control" id="inputEmail5" name="whatsapp">
            </div>
            <div class="col-md-6">
              <label for="inputPassword5" class="form-label">Nomor Telepon</label>
              <input type="text" class="form-control" id="inputPassword5" name="telepon">
            </div>
            <div class="col-md-6">
              <label for="inputState" class="form-label">Daya Sebelum</label>
              <select id="inputState" class="form-select" name="daya_sebelum">
                <option selected>Choose...</option>
                <option value="daya 450 VA">Daya 450 VA</option>
                <option value="daya 900 VA">Daya 900 VA</option>
                <option value="daya 1.300 VA">Daya 1.300 VA</option>
                <option value="daya 2.200 VA">Daya 2.200 VA</option>
                <option value="daya 3.500 VA">Daya 3.500 VA</option>
                <option value="daya 4.400 VA">Daya 4.400 VA</option>
                <option value="daya 5.500 VA">Daya 5.500 VA</option>
                <option value="daya 6.600 VA">Daya 6.600 VA</option>
                <option value="daya 7.700 VA">Daya 7.700 VA</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="inputState" class="form-label">Daya Migrasi</label>
              <select id="inputState" class="form-select" name="daya_migrasi">
                <option selected>Choose...</option>
                <option value="daya 450 VA">Daya 450 VA - Rp. 500.000</option>
                <option value="daya 900 VA">Daya 900 VA - Rp. 900.000</option>
                <option value="daya 1.300 VA">Daya 1.300 VA - Rp. 1.500.000</option>
                <option value="daya 2.200 VA">Daya 2.200 VA - Rp. 2.200.000</option>
                <option value="daya 3.500 VA">Daya 3.500 VA - Rp. 3.800.000</option>
                <option value="daya 4.400 VA">Daya 4.400 VA - Rp. 4.800.000</option>
                <option value="daya 5.500 VA">Daya 5.500 VA - Rp. 5.700.000</option>
                <option value="daya 6.600 VA">Daya 6.600 VA - Rp. 7.000.000</option>
                <option value="daya 7.700 VA">Daya 7.700 VA - Rp. 8.500.000</option>
              </select>
            </div>
            <input type="hidden" name="status_bayar" value="Menunggu Konfirmasi">
            <input type="hidden" name="status" value="PENDING">
            <input type="hidden" name="teknisi" value="NONE">
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

<?php include 'foot.php' ?>