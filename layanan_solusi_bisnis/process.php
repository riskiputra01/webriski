<?php
if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];
    $success = true;

    // Kuisioner labels for each table
    $kuisioners = [
        1 => "Kebutuhan (spesifikasi) solusi aplikasi/teknologi yang disampaikan sudah sesuai dan kami pahami dengan baik",
        2 => "Pengembangan aplikasi/teknologi dilaksanakan sesuai dengan waktu kesepakatan",
        3 => "Solusi Pengembangan Aplikasi/Teknologi untuk kebutuhan bisnis yang diberikan dengan kualitas baik sesuai dengan spesifikasi yang dibutuhkan",
        4 => "Ketika terdapat permasalahan bisnis, terdapat minat untuk menyelesaikannya dengan sistem informasi/teknologi informasi",
        5 => "Solusi Pengembangan Aplikasi/Teknologi untuk kebutuhan bisnis sudah terdapat petunjuk untuk penggunaannya"
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
            $layanan = 'Layanan Solusi Bisnis';
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
                document.location='../kotak_saran/index.php';
              </script>";
    }
}

// Close the connection
$koneksi->close();
