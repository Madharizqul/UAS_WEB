<?php
include('config.php');
if(isset($_POST['simpan'])){
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$jk = $_POST['jk'];
	$agama = $_POST['agama'];
	$jurusan = $_POST['jurusan'];
	
	$sql = "UPDATE tbl_mahasiswa SET nama=?, alamat=?, jk=?, agama=?, jurusan=? WHERE id=?";
	$stmt = $db->prepare($sql);
	$stmt->bind_param("sssssi", $nama, $alamat, $jk, $agama, $jurusan, $id);
	$stmt->execute();

	if($stmt->affected_rows > 0) {
		header('Location: beranda.php');
	} else {
		die("Gagal menyimpan perubahan...");
	}

	$stmt->close();
	$db->close();
} else {
	die("Akses dilarang...");
}
?>