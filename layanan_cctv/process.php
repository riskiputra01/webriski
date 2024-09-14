<?php
if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];
    $success = true;

    // Kuisioner labels for each table
    $kuisioners = [
        1 => "CCTV dapat diakses kapanpun",
        2 => "Tersedia kontak/media untuk melaporkan keluhan dengan respon perbaikan yang cepat",
        3 => "CCTV tersedia selama 24 Jam",
        4 => "Preventive Maintenance diinformasikan sebelum pelaksanaan kegiatan",
        5 => "CCTV sudah mengcover / mencakup area yang dibutuhkan"
    ];

    // Iterate over the 5 tables
    for ($i = 1; $i <= 5; $i++) {
        $expectation = isset($_POST["expectation$i"]) ? $_POST["expectation$i"] : null;
        $reality = isset($_POST["reality$i"]) ? $_POST["reality$i"] : null;

        if (!$expectation) {
            $errors["expectation$i"] = "Please select an option for HARAPAN in Table $i.";
        }

        if (!$reality) {
            $errors["reality$i"] = "Please select an option for FAKTA in Table $i.";
        }

        if (empty($errors)) {
            // Prepare the data to be inserted
            $layanan = 'Layanan CCTV';
            $kuisioner = $kuisioners[$i];

            // Prepare the SQL statement
            $stmt = $koneksi->prepare("INSERT INTO survey (layanan, kuisioner, harapan, fakta) VALUES (?, ?, ?, ?)");
            
            // Bind parameters
            $stmt->bind_param("ssii", $layanan, $kuisioner, $expectation, $reality);

            // Execute the statement and check for success
            if (!$stmt->execute()) {
                $success = false;
                echo '<div class="alert alert-danger">Error: ' . $stmt->error . '</div>';
            }

            // Close the statement
            $stmt->close();
        } else {
            $success = false;
            echo '<div class="alert alert-danger">Please fill in all fields for Table ' . $i . '.</div>';
        }
    }

    if ($success) {
        echo "<script>
                alert('Simpan Data Berhasil');
                document.location='cek_cctv.php';
              </script>";
    }
}

// Close the connection
$koneksi->close();
