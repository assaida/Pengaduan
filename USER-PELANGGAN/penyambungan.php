<?php 
    include 'head.php';
?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Sambungan Baru</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Pelayanan</li>
      <li class="breadcrumb-item active">Sambungan Baru</li>
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
          <form class="row g-3" action="aksi_penyambungan.php" method="post">
            <div class="col-md-12">
              <label for="inputName5" class="form-label">Nama</label>
              <input type="text" class="form-control" name="nama" value="<?= $_SESSION['username'] ?>" readonly>
            </div>
            <div class="col-md-6">
              <label for="inputState" class="form-label">Provinsi</label>
              <select id="inputState" class="form-select" name="provinsi">
                <option value="Aceh">Aceh</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="inputState" class="form-label">Kota/Kabupaten</label>
              <select id="inputState" class="form-select" name="kabupaten">
                <option value="Lhokseumawe">Lhokseumawe</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="inputState" class="form-label">Unit Layanan</label>
              <select id="inputState" class="form-select">
                <option value="Lhokseumawe">Lhokseumawe</option>
              </select>
            </div>
            <div class="row">

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

</div>

<script>
const desaOptions = {
  "Muara Satu": [
    "Blang Panyang",
    "Meunasah Dayah",
    "Cot Trieng",
    "Meuria Paloh",
    "Paloh Punti",
    "Padang Sakti",
    "Paloh Barat",
    "Blang Pulo",
    "Batuphat Timur",
    "Blang Naleung Mameh",
    "Ujong Pacu",
    "Batuphat Barat"
  ],

  "Banda Sakti": [
    "Banda Masem",
    "Hagu Barat Laut",
    "Hagu Selatan",
    "Hagu Tengouh",
    "Kampung Jawa Lama",
    "Kampung Jawa Baru",
    "Kota Lhokseumawe",
    "Kuta Blang",
    "Lancang Garam",
    "Mon Geudong",
    "Pusong Lama",
    "Pusong Baru",
    "Simpang Empat",
    "Tumpok Teungoh",
    "Ujong Blang",
    "Ulee Jalan",
    "Uteun Bayi",
  ],

  "Muara Dua": [
    "Alu Awe",
    "Blang Cum",
    "Blang Poroh",
    "Cot Girek Kandang",
    "Cut Mamplam",
    "Keude Cunda",
    "Lhok Mon Puteh",
    "Meunasah Alue",
    "Meunasah Blang",
    "Meunasah Manyang",
    "Meunasah Mee",
    "Meunasah Mesjid",
    "Panggoi",
    "Paloh Batee",
    "Payah Bili",
    "Payah Punteut",
  ],

  "Blang Mangat": [
  "Alue Lim",
  "Asan Kareung",
  "Baloi (Baloy)",
  "Blang Buloh",
  "Blang Cut",
  "Blang Punteuet",
  "Blang Teue",
  "Blang Weu Baroh",
  "Blang Weu Panjoe (Blang Weu Panjou)",
  "Jambo Mesjid",
  "Jambo Timu",
  "Jeulikat",
  "Keude Punteuet (Keude Panteuet)",
  "Kuala",
  "Kumbang Punteuet",
  "Mane Kareung",
  "Mesjid Punteuet",
  "Rayeuk Kareung",
  "Seuneubok",
  "Teungoh",
  "Tunong",
  "Ulee Blang Mane",
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
            <div class="col-md-12">
              <label for="inputState" class="form-label">Pilihan Penyambungan dan Harga</label>
              <select id="inputState" class="form-select" name="menu_harga">
                <option selected>Choose...</option>
                <option value="Biaya pasang listrik baru daya 450 VA: Rp.230.500">Biaya pasang listrik baru daya 450 VA: Rp.230.500</option>
                <option value="Biaya pasang listrik baru daya 900 VA: Rp.863.000">Biaya pasang listrik baru daya 900 VA: Rp.863.000</option>
                <option value="Biaya pasang listrik baru daya 1.300 VA: Rp.1.238.000">Biaya pasang listrik baru daya 1.300 VA: Rp.1.238.000</option>
                <option value="Biaya pasang listrik baru daya 2.200 VA: Rp.2.082.500">Biaya pasang listrik baru daya 2.200 VA: Rp.2.082.500</option>
                <option value="Biaya pasang listrik baru daya 3.500 VA: Rp.3.411.500">Biaya pasang listrik baru daya 3.500 VA: Rp.3.411.500</option>
                <option value="Biaya pasang listrik baru daya 4.400 VA: Rp.4.283.600">Biaya pasang listrik baru daya 4.400 VA: Rp.4.283.600</option>
                <option value="Biaya pasang listrik baru daya 5.500 VA: Rp.5.359.500">Biaya pasang listrik baru daya 5.500 VA: Rp.5.359.500</option>
                <option value="Biaya pasang listrik baru daya 6.600 VA: Rp.6.425.400">Biaya pasang listrik baru daya 6.600 VA: Rp.6.425.400</option>
                <option value="Biaya pasang listrik baru daya 7.700 VA: Rp.7.491.300">Biaya pasang listrik baru daya 7.700 VA: Rp.7.491.300</option>
              </select>
            </div>
            <input type="hidden" name="status_bayar" value="Belum Bayar">
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