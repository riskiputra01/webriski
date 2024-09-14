<?php
if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];
    $success = true;

    // Kuisioner labels for each table
    $kuisioners = [
        1 => "Menu yang terdapat pada aplikasi dapat berfungsi",
        2 => "Tersedia kontak/media untuk melaporkan keluhan dengan respon perbaikan yang cepat",
        3 => "Aplikasi tersedia untuk digunakan selama jam kerja dan diluar jam kerja",
        4 => "Aplikasi memiliki fitur yang berguna dan sesuai dengan yang saya butuhkan",
        5 => "Aplikasi memiliki tampilan (User Interface) yang menarik dan mudah digunakan (User Friendly)"
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
            $layanan = 'Layanan SAP';
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
                document.location='../layanan_aplikasi/layanan_apk.php';
              </script>";
    }
}

// Close the connection
$koneksi->close();
