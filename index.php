<!DOCTYPE html>
<html lang="en">
 
 <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Halaman Login</title>
	<link href="assets/css/bootstrap.min.css"rel="stylesheet">
	<link href="assets/css/signin.css" rel="stylesheet">
 </head>

<body style="background : URL('assets/images/Purple Gradient Technology Start Up Presentation.png')">

	<form class="form-signin" action="login.php" method="post">
		<h1 class="h3 mb-3 font-weightsmall" style="color: lightsalmon">Halaman Login</h1>
		
		<label for="inputEmail" class="sr-only">Username</label>
		<input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
		
		<label for="inputPassword" class="sr-only">Password</label><br>
		<input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
		
		<div class="checkbox mb-3">
			<label>
				<input type="checkbox" value="remember-me"> Remember me
			</label>
		
		</div>
		<a href="daftarakun.php">Belum Punya Akun ?</a>
		
		<button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Login</button>
		<p class="mt-5 mb-3 text-muted">&copy; Muhammad Madharizqul Mubarok | 2023 </p>
	
	</form>



</body>
</html>
<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;
		if (username != "" && password != "") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}
</script>