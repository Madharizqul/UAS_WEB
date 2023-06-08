<?php
    $host = "localhost";
    $user = "id20879117_madharizqul";
    $password = "Madharizqul18&";
    $database = "id20879117_pendaftaran";
    $db = mysqli_connect($host, $user, $password, $database);

    if (!$db) {
        die("Koneksi database gagal: " . mysqli_connect_error());
    }
?>
