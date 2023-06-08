<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $host = "localhost";
    $user = "id20879117_madharizqul";
    $password = "Madharizqul18&";
    $database = "id20879117_pendaftaran";
    $db = mysqli_connect($host, $user, $password, $database);

    if (!$db) {
        die("Koneksi database gagal: " . mysqli_connect_error());
    }

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "INSERT INTO admin (username, password) VALUES (?, ?)";
    $stmt = mysqli_prepare($db, $query);
    mysqli_stmt_bind_param($stmt, "ss", $username, $password);

    if (mysqli_stmt_execute($stmt)) {
        echo '<script>alert("Pendaftaran akun berhasil!")</script>';
        echo '<script>location.href="index.php"</script>';
    } else {
        echo '<script>alert("Error: ' . $query . '\n' . mysqli_error($db).'")</script>';
    }

    mysqli_stmt_close($stmt);
    mysqli_close($db);
}
?>



<!DOCTYPE html>
<html lang="en">
 
 <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Halaman Pendaftaran</title>
	<link href="assets/css/bootstrap.min.css"rel="stylesheet">
	<link href="assets/css/signin.css" rel="stylesheet">
 </head>

<body style="background-color: skyblue">

	<form class="form-signin" action="daftarakun.php" method="post">
		<h1 class="h3 mb-3 font-weightsmall" style="color: lightsalmon">Halaman Register</h1>
		
		<label for="inputEmail" class="sr-only">Username</label>
		<input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
		
		<label for="inputPassword" class="sr-only">Password</label><br>
		<input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
		
		<div class="checkbox mb-3">
			<label>
				<input type="checkbox" value="remember-me"> Remember me
			</label>
		
		</div>
		
		<button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Sign Up</button>
		<p class="mt-5 mb-3 text-muted">&copy; Muhammad Madharizqul Mubarok | 2023 </p>
	
	</form>



</body>
</html>

