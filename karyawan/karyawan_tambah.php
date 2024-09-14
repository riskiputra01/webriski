<?php
// mengincludkan file koneksi// 
include("..//koneksi.php");
include("../header.php");
?>

<?php
$perintah = mysqli_query($koneksi, "SELECT * FROM karyawan");
?>
<!DOCTYPE html>
<html>
<head>
    <title>SERQUAL</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <style>
        .error {
            color: red;
            margin-top: 10px;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: rgba(128, 128, 128, 0.5); /* Latar belakang abu-abu transparan */
        }
        h2, h3 {
            color: #004080;
        }
        .checkbox-container {
            margin-left: 20px;
        }
        .question {
            margin-bottom: 10px;
        }
        .container {
            background-color: rgba(250, 250, 250, 0.8); /* Latar belakang putih dengan sedikit transparansi */
            padding: 20px;
            border-radius: 10px;
            margin: auto;
            width: 80%;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Efek bayangan untuk memperjelas tampilan */
        }
    </style>
</head>
<body>
<div class="container mt-3">
        <h2 class="text-center">FORM SURVEI KARYAWAN</h2>
        <form action="karyawan_add.php" method="post" onsubmit="return validateForm()">
          <div class="form-control mb-3">
          <h3><p class="fw-bold">DIREKTORAT</p></h3>
              <input type="radio" name="direktorat" id="direktorat1" value="Direktorat Utama">
              <label for="direktorat1">Direktorat Utama</label><br><br>

              <input type="radio" name="direktorat" id="direktorat2" value="Direktorat Pengembangan Usaha & Komersial">
              <label for="direktorat2">Direktorat Pengembangan Usaha & Komersial</label><br><br>

              <input type="radio" name="direktorat" id="direktorat3" value="Direktorat Produksi">
              <label for="direktorat3">Direktorat Produksi</label><br><br>

              <input type="radio" name="direktorat" id="direktorat4" value="Direktorat Keuangan dan SDM">
              <label for="direktorat4">Direktorat Keuangan dan SDM</label>
          </div>

          <div class="form-control mb-3">
            <h3>DIVISI/BAGIAN</h3>
              <input type="radio" name="divisi" id="divisi1" value="Sub Direktorat PU">
              <label for="divisi1">Sub Direktorat PU</label><br><br>

              <input type="radio" name="divisi" id="divisi2" value="Sekretaris Perusahaan">
              <label for="divisi2">Sekretaris Perusahaan</label><br><br>

              <input type="radio" name="divisi" id="divisi3" value="Satuan Pengawasan Intern">
              <label for="divisi3">Satuan Pengawasan Intern</label><br><br>

              <input type="radio" name="divisi" id="divisi4" value="Divisi Sistem Informasi & Manajemen Kinerja">
              <label for="divisi4">Divisi Sistem Informasi & Manajemen Kinerja</label><br><br>
              
              <input type="radio" name="divisi" id="divisi5" value="Divisi Human Capital & Umum">
              <label for="divisi5">Divisi Human Capital & Umum</label><br><br>
              
              <input type="radio" name="divisi" id="divisi6" value="Divisi Keuangan">
              <label for="divisi6">Divisi Keuangan</label><br><br>
              
              <input type="radio" name="divisi" id="divisi7" value="Divisi Distribusi & Perc Teknik">
              <label for="divisi7">Divisi Distribusi & Perc Teknik</label><br><br>
              
              <input type="radio" name="divisi" id="divisi8" value="Divisi Sistem Informasi & Manajemen Kinerja">
              <label for="divisi8">Divisi Pusat Perawatan & HSE</label><br><br>
              
              <input type="radio" name="divisi" id="divisi9" value="Divisi Produksi">
              <label for="divisi9">Divisi Produksi</label><br><br>
              
              <input type="radio" name="divisi" id="divisi10" value="Divisi Pengembangan Usaha">
              <label for="divisi10">Divisi Pengembangan Usaha</label><br><br>
              
              <input type="radio" name="divisi" id="divisi11" value="Divisi Perencanaan Korporat">
              <label for="divisi11">Divisi Perencanaan Korporat</label><br><br>
              
              <input type="radio" name="divisi" id="divisi12" value="Divisi Komersial">
              <label for="divisi12">Divisi Komersial</label>
          </div>
          
          <div class="form-control mb-3">
            <h3>JENIS - KELAMIN</h3>
              <input type="radio" name="jenis_kelamin" id="jenis_kelamin1" value="Laki-Laki">
              <label for="jenis_kelamin1">Laki-Laki</label><br><br>

              <input type="radio" name="jenis_kelamin" id="jenis_kelamin2" value="Perempuan">
              <label for="jenis_kelamin2">Perempuan</label>
          </div>

          <div class="form-control mb-3">
            <h3>USIA</h3>
              <input type="radio" name="usia" id="usia1" value="20-30 Tahun">
              <label for="usia1">20-30 Tahun</label><br><br>

              <input type="radio" name="usia" id="usia2" value="31-40 Tahun">
              <label for="usia2">31-40 Tahun</label><br><br>
              
              <input type="radio" name="usia" id="usia3" value="41-50 Tahun">
              <label for="usia3">41-50 Tahun</label><br><br>
              
              <input type="radio" name="usia" id="usia4" value=">50 Tahun">
              <label for="usia4">>50 Tahun</label>
          </div>
          
          <div class="form-control mb-3">
            <h3>MASA KERJA</h3>
              <input type="radio" name="masa_kerja" id="masa_kerja1" value="0-5 Tahun">
              <label for="masa_kerja">0-5 Tahun</label><br><br>

              <input type="radio" name="masa_kerja" id="masa_kerja2" value="6-10 Tahun">
              <label for="masa_kerja2">6-10 Tahun</label><br><br>
              
              <input type="radio" name="masa_kerja" id="masa_kerja3" value="11-20 Tahun">
              <label for="masa_kerja3">11-20 Tahun</label><br><br>
              
              <input type="radio" name="masa_kerja" id="masa_kerja4" value=">20 Tahun">
              <label for="masa_kerja4">20 Tahun</label>
          </div>

          <div class="form-control mb-3">
            <h3>LEVEL JABATAN</h3>
              <input type="radio" name="level_jabatan" id="level_jabatan1" value="Vice President">
              <label for="level_jabata1n">Vice President</label><br><br>

              <input type="radio" name="level_jabatan" id="level_jabatan2" value="Kepala Divisi/Ahli Utama">
              <label for="masa_kerja2">Kepala Divisi/Ahli Utama</label><br><br>
              
              <input type="radio" name="level_jabatan" id="level_jabatan3" value="Kepala Dinas/Ahli Madya">
              <label for="level_jabatan3">Kepala Dinas/Ahli Madya</label><br><br>
              
              <input type="radio" name="level_jabatan" id="level_jabatan4" value=">Teknisi/Analis/Kepala Regu/Staff Analis">
              <label for="level_jabatan4">Teknisi/Analis/Kepala Regu/Staff Analis</label>
          </div>
          <div class="error" id="error_message"></div>
            <button type="submit" class="btn btn-warning" name="add">Simpan</button>
        </form>
        <script>
              function validateForm() {
                  const radioButtons = document.getElementsByName('direktorat','divisi','jenis_kelamin','usia','masa_kerja','level_jabatan');
                  let isChecked = false;

                  for (let i = 0; i < radioButtons.length; i++) {
                      if (radioButtons[i].checked) {
                          isChecked = true;
                          break;
                      }
                  }

                  if (!isChecked) {
                      document.getElementById('error_message').innerText = "Please check your Answer.";
                      return false;
                  }

                  return true;
              }
        </script>
</div>