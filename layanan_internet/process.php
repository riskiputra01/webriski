<?php
if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];
    $success = true;

    // Kuisioner labels for each table
    $kuisioners = [
        1 => "Akses internet mudah ditemukan di area Plant KTI",
        2 => "Group OLTI mudah dihubungi jika terjadi error pada jaringan internet",
        3 => "Anda merasa aman dalam menggunakan akses internet",
        4 => "Anda memahami cara menggunakan internet yang aman",
        5 => "Akses internet selalu ada disetiap ruang kerja"
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
            $layanan = 'Layanan Internet';
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
                document.location='../layanan_cctv/cek_cctv.php';
              </script>";
    }
}

// Close the connection
$koneksi->close();
