<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'serqual';

if (isset($_POST))

    $koneksi = new mysqli($server, $username, $password, $database);
if ($koneksi) {
    // echo 'Server Connected Success';
} else {
    die(mysqli_error($conn));
}
