<?php
include("..//koneksi.php");
if(isset($_POST['add']))
{
    $direktorat = $_POST['direktorat'];
    $divisi = $_POST['divisi'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $usia = $_POST['usia'];
    $masa_kerja = $_POST['masa_kerja'];
    $level_jabatan = $_POST['level_jabatan'];
//insert karyawan data into table//
    $query = "INSERT INTO karyawan(direktorat,divisi,jenis_kelamin,usia,masa_kerja,level_jabatan) VALUES('$direktorat','$divisi','$jenis_kelamin','$usia','$masa_kerja','$level_jabatan')";
    $perintah= mysqli_query($koneksi, $query);

    if($query) {
        echo "<script>
                        alert('Simpan Data Berhasil');
                        document.location='../Layanan/index.php';
            </script>";
        }else{
            echo "<script>
                        alert('Simpan Data Gagal');
                        document.location='header.php';
            </script>";
        }
}