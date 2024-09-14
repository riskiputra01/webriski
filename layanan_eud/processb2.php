<?php
if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];
    $success = true;

    // Kuisioner labels for each table
    $kuisioners = [
        1 => "Fasilitas EUD (PC, Laptop, Printer dll) dilakukan update",
        2 => "Fasilitas EUD (PC, Laptop, Printer, dll) selalu dirawat sesuai jadwal",
        3 => "Fasilitas EUD (PC, Laptop, Printer, dll) dapat digunakan dengan baik",
        4 => "Jadwal Preventive Maintenance EUD (PC, Laptop, Printer, dll) selalu diinformasikan sebelum pelaksanaan kegiatan",
        5 => "Adanya kepastian dalam mendapatkan perangkat EUD Desktop, Laptop, Printer, dll) sesuai dengan uraian pekerjaan (jobdesc)"
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
            $layanan = 'Layanan EUD';
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
                document.location='../layanan_internet/layanan_internet1.php';
              </script>";
    }
}

// Close the connection
$koneksi->close();
