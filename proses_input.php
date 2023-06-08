<?php
include('config.php');

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jk'];
    $agama = $_POST['agama'];
    $jurusan = $_POST['jurusan'];

    // Menyiapkan pernyataan SQL untuk dijalankan
    $sql = "INSERT INTO tbl_mahasiswa (nama, alamat, jk, agama, jurusan) VALUES (?, ?, ?, ?, ?)";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("sssss", $nama, $alamat, $jk, $agama, $jurusan);

    if ($stmt->execute()) {
        // Jika berhasil disimpan, arahkan kembali ke halaman input_data.php dengan status sukses
        header('Location: input_data.php?status=sukses');
        exit();
    }
    
 else {
    echo "Error: " . $stmt->error;
    exit;
}
} else {
    die("Akses dilarang...");
}
?>
