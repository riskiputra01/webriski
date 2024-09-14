<?php
include("../header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Aplikasi Survey</title>
    <style>
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
<div class="container mt-5">
    <form action="submit_form.php" method="POST">
    <h2>BAGIAN A</h2>
    <p>Beri tanda centang pada daftar di bawah ini layanan Sistem Informasi/Teknologi Informasi (SI/TI) yang sedang Bapak/Ibu gunakan:</p><br>
        <!-- Question 1: Layanan Aplikasi -->
    <div class="form-control mb-3">
        <div class="question">
            <h3>7. Layanan Aplikasi</h3>
            <div class="checkbox-container">
                <input type="checkbox" id="layanan_sap" name="layanan_apk[]" value="Layanan SAP">
                <label for="layanan_sap">Layanan SAP</label><br><br>
                
                <input type="checkbox" id="layanan_ess" name="layanan_apk[]" value="Layanan Employee Self Service (ESS)">
                <label for="layanan_ess">Layanan Employee Self Service (ESS)</label><br><br>
                
                <input type="checkbox" id="layanan_website" name="layanan_apk[]" value="Layanan Website">
                <label for="layanan_website">Layanan Website</label><br><br>
                
                <input type="checkbox" id="layanan_cis" name="layanan_apk[]" value="Layanan Customer Information System">
                <label for="layanan_cis">Layanan Customer Information System</label><br><br>
                
                <input type="checkbox" id="layanan_ims" name="layanan_apk[]" value="Layanan Integrated Management System (Prosedur Online)">
                <label for="layanan_ims">Layanan Integrated Management System (Prosedur Online)</label><br><br>
                
                <input type="checkbox" id="layanan_mmr" name="layanan_apk[]" value="Layanan Mobile Meter Reading (MMR)">
                <label for="layanan_mmr">Layanan Mobile Meter Reading (MMR)</label><br><br>
                
                <input type="checkbox" id="layanan_pis" name="layanan_apk[]" value="Layanan Procurement Information System">
                <label for="layanan_pis">Layanan Procurement Information System</label><br><br>
                
                <input type="checkbox" id="layanan_ca" name="layanan_apk[]" value="Layanan Correspondence Application (CORLA)">
                <label for="layanan_ca">Layanan Correspondence Application (CORLA)</label><br><br>
                
                <input type="checkbox" id="layanan_rs" name="layanan_apk[]" value="Layanan Risk Management">
                <label for="layanan_rs">Layanan Risk Management</label><br><br>
            
                <input type="checkbox" id="layanan_po" name="layanan_apk[]" value="Layanan Presensi Online">
                <label for="layanan_po">Layanan Presensi Online</label><br><br>
            </div>
        </div>
    </div>

        <!-- Question 2: Layanan Solusi Bisnis -->
    <div class="form-control mb-3">
        <div class="question">
            <h3>8. Layanan Solusi Bisnis</h3>
            <div class="checkbox-container">
                <input type="checkbox" id="layanan_sai" name="layanan_solusi_bisnis[]" value="Layanan Solusi Aplikasi dan Infrastruktur">
                <label for="layanan_sai">Layanan Solusi Aplikasi dan Infrastruktur</label><br><br>
                
                <input type="checkbox" id="layanan_lma" name="layanan_solusi_bisnis[]" value="Layanan Modifikasi Aplikasi">
                <label for="layanan_ma">Layanan Modifikasi Aplikasi</label><br><br>
                
                <input type="checkbox" id="layanan_pd" name="layanan_solusi_bisnis[]" value="Layanan Penyediaan Data">
                <label for="layanan_pd">Layanan Penyediaan Data</label><br><br>
                
                <input type="checkbox" id="layanan_pi" name="layanan_solusi_bisnis[]" value="Layanan Pendampingan Implementasi">
                <label for="layanan_pi">Layanan Pendampingan Implementasi</label><br><br>
                                
                <input type="checkbox" id="layanan_pti" name="layanan_solusi_bisnis[]" value="Layanan Pelatihan Teknologi Informasi">
                <label for="layanan_pti">Layanan Pelatihan Teknologi Informasi</label><br><br>
            </div>
        </div>
    </div>

        <!-- Question 3: layanan_and_user_perangkat_lunak -->
    <div class="form-control mb-3">
        <div class="question">
            <h3>9. layanan and user Perangkat Lunak</h3>
            <div class="checkbox-container">
                <input type="checkbox" id="layanan_lfo" name="layanan_and_user_perangkat_lunak[]" value="SW001 - Layanan Microsoft Office">
                <label for="layanan_lfo">SW001 - Layanan Microsoft Office</label><br><br>
                
                <input type="checkbox" id="layanan_los" name="layanan_and_user_perangkat_lunak[]" value="SW002 - Layanan Operating System (OS)">
                <label for="layanan_los">SW002 - Layanan Operating System (OS)</label><br><br>
                
                <input type="checkbox" id="layanan_la" name="layanan_and_user_perangkat_lunak[]" value="SW003 - Layanan Antivirus">
                <label for="layanan_la">SW003 - Layanan Antivirus</label><br><br>
                
                <input type="checkbox" id="layanan_encryption" name="layanan_and_user_perangkat_lunak[]" value="SW004 - Layanan Aplikasi Drawing">
                <label for="layanan_encryption">SW004 - Layanan Aplikasi Drawing</label><br><br>
                
                <input type="checkbox" id="layanan_lsl" name="layanan_and_user_perangkat_lunak[]" value="SW008 - Layanan Software Lainnya">
                <label for="layanan_lsl">SW008 - Layanan Software Lainnya</label><br><br>
            </div>
        </div>
    </div>
        <!-- Question 4: Layanan and user Perangkat Keras-->
    <div class="form-control mb-3">
        <div class="question">
            <h3>10. layanan and user Perangkat keras</h3>
            <div class="checkbox-container">
                <input type="checkbox" id="layanan_backup" name="layanan_and_user_perangkat_keras[]" value="HW001 - Layanan Personal Computer (PC)">
                <label for="layanan_backup">HW001 - Layanan Personal Computer (PC)</label><br><br>
                
                <input type="checkbox" id="layanan_dr" name="layanan_and_user_perangkat_keras[]" value="HW002 - Layanan Laptop">
                <label for="layanan_dr">HW002 - Layanan Laptop</label><br><br>
                
                <input type="checkbox" id="layanan_lbdth" name="layanan_and_user_perangkat_keras[]" value="HW003 - Layanan Mobile Device / Tablet / Hand Held Terminal (HHT)">
                <label for="layanan_lbdth">HW003 - Layanan Mobile Device / Tablet / Hand Held Terminal (HHT)</label><br><br>
                
                <input type="checkbox" id="layanan_lp" name="layanan_and_user_perangkat_keras[]" value="HW004 - Layanan Printer">
                <label for="layanan_lp">HW004 - Layanan Printer</label><br><br>
                
                <input type="checkbox" id="layanan_ls" name="layanan_and_user_perangkat_keras[]" value="HW005 - Layanan Scanner">
                <label for="layanan_ls">HW005 - Layanan Scanner</label><br><br>
                
                <input type="checkbox" id="layanan_kpk" name="layanan_and_user_perangkat_keras[]" value="HW006 - Layanan Komponen Perangkat Komputer">
                <label for="layanan_kpk">HW006 - Layanan Komponen Perangkat Komputer</label><br><br>
            </div>
        </div>
    </div>

        <!-- Question 5: Layanan Jaringan -->
    <div class="form-control mb-3">
        <div class="question">
            <h3>11. Layanan Jaringan</h3>
            <div class="checkbox-container">
                <input type="checkbox" id="layanan_vpn" name="layanan_jaringan_komunikasi[]" value="Layanan VPN">
                <label for="layanan_vpn">IF001 - Layanan Local Area Network (LAN)</label><br><br>
                
                <input type="checkbox" id="layanan_wan" name="layanan_jaringan_komunikasi[]" value="Layanan WAN">
                <label for="layanan_wan">IF002 - Layanan Wifi</label><br><br>
                
                <input type="checkbox" id="layanan_lan" name="layanan_jaringan_komunikasi[]" value="Layanan LAN">
                <label for="layanan_lan">IF003 - Layanan Virtual Private Network (VPN)</label><br><br>
                
                <input type="checkbox" id="layanan_wifi" name="layanan_jaringan_komunikasi[]" value="Layanan WiFi">
                <label for="layanan_wifi">IF004 - Layanan Internet</label><br><br>
                
                <input type="checkbox" id="layanan_fsn" name="layanan_jaringan_komunikasi[]" value="Layanan MPLS">
                <label for="layanan_fsn">IF005 - Layanan Folder Sharing/NAS</label><br><br>
                
                <input type="checkbox" id="layanan_cs" name="layanan_jaringan_komunikasi[]" value=" IF006 - Layanan Cloud Storage">
                <label for="layanan_cs">IF006 - Layanan Cloud Storage</label><br><br>
                
                <input type="checkbox" id="layanan_cct" name="layanan_jaringan_komunikasi[]" value="IF007 - Layanan Closed Circuit Television (CCTV)">
                <label for="layanan_cct">IF007 - Layanan Closed Circuit Television (CCTV)</label><br><br>
                
                <input type="checkbox" id="Layanan_kt" name="layanan_jaringan_komunikasi[]" value="IF008 - Layanan Komunikasi Telemetri">
                <label for="layanan_kt">IF008 - Layanan Komunikasi Telemetri</label><br><br>
                
                <input type="checkbox" id="layanan_lt" name="layanan_jaringan_komunikasi[]" value="Layanan MPLS">
                <label for="layanan_lt">IF009 - Layanan Teleconference</label><br><br>
                
                <input type="checkbox" id="layanan_le" name="layanan_jaringan_komunikasi[]" value="Layanan MPLS">
                <label for="layanan_le">IF010 - Layanan Email</label><br><br>
            </div>
        </div>
    </div>

        <!-- Question 6: Layanan Dukungan -->
    <div class="form-control mb-3">
        <div class="question">
            <h3>12. Layanan Dukungan Pengguna</h3>
            <div class="checkbox-container">
                <input type="checkbox" id="layanan_ap" name="layanan_dukungan_pengguna[]" value="HD001 - Akun/Akses Aplikasi">
                <label for="layanan_ap">HD001 - Akun/Akses Aplikasi</label><br><br>
                
                <input type="checkbox" id="layanan_ipdp" name="layanan_dukungan_pengguna[]" value="HD002 - Install Aplikasi Desktop Perusahaan" >
                <label for="layanan_ipdp">HD002 - Install Aplikasi Desktop Perusahaan</label><br><br>
                
            </div>
        </div>
    </div>
        <a class="btn btn-primary" href="../karyawan/karyawan_tambah.php" role="button">Back</a>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>
