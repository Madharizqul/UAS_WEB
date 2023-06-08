<?php
session_start();
require_once ('config.php');
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM admin WHERE username = ? ";
$stmt = $db->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 0) {
    echo "User belum terdaftar atau salah";
    echo "<a href=\"index.php\"> Kembali ke halaman Login</a>";
} else {
    $row = $result->fetch_assoc();
    if ($password <> $row['password']) {
        echo "Password yang anda masukkan salah";
        echo "<a href=\"index.php\"> Kembali</a><br><br><br>";
    } else {
        $_SESSION['username'] = $username;
        header('location:beranda.php');
    }
}

$stmt->close();
$db->close();
?>
