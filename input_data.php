<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pendaftaran Anggota Organisasi</title>
	<meta charset="utf-8">  
	<meta name="viewport” content=”width=device-width, initial-scale=1">  
	<script src="assets/jquery/jquery.min.js"></script> 
	<script src="assets/js/bootstrap.js"></script> 
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body style="background-color: deepskyblue">
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  		<a class="navbar-brand" href="#">
    	<img src="assets\images\296416712_1995404397312430_1827778549593686554_n.jpg" width="30" height="30" class="d-inline-block align-top" alt="">HIMA</a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      	<span class="navbar-toggler-icon"></span>
    	</button>
  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
    	<ul class="navbar-nav mr-auto">
      		<li class="nav-item active">
        	<a class="nav-link" href="beranda.php">Beranda <span class="sr-only">(current)</span></a>
      		</li>
      		<li class="nav-item">
        	<a class="nav-link" href="input_data.php">Open Recruitment</a>
      		</li>
      		<li class="nav-item">
        	<a class="nav-link" href="tentang.php">Data Pendaftar</a>
      		</li>
    	</ul>
    </div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-sm">
				<h2>Form Pendaftaran</h2>
				<article>
					<div class="form">
						<form action="proses_input.php" method="post">
							<div class="form-group">
								<label for="nama">Nama :</label>
								<input class="form-control" type="text" name="nama" placeholder="Nama Lengkap" />
							</div>
							<div class="form-group">
								<label for="alamat">Alamat :</label>
								<textarea class="form-control" name="alamat"></textarea>
							</div>
							<div class="form-group">
								<label for="jk" class="form-check-label">Jenis Kelamin :</label><br>
								
									<label>
										<input class="form-check-input" type="radio" name="jk" value="Laki-laki"> Laki-laki
									</label>
								<br>
								
								<label>
									<input class="form-check-input" type="radio" name="jk" value="Perempuan"> Perempuan
								</label>

							</div>
							<div class="form-group">
								<label  for="agama">Agama :</label>
								<select class="form-control" name="agama">
									<option>Islam</option>
									<option>Kristen</option>
									<option>Hindu</option>
									<option>Budha</option>
									<option>Atheis</option>
									<option>Lainnya</option>
								</select>
							</div>
							<div class="form-group">
								<label for="jurusan">Jurusan :</label>
								<input class="form-control" type="text" name="jurusan" placeholder="jurusan" />
							</div>
							<div class="grup">
								<input class="btn btn-success" type="submit" value="Simpan" name="simpan">
							</div><br>
						</form>
					</div>
				</article>
			</div>
		 
			<div class="col-sm">
				<h2>Notifikasi</h2>
				<p>
					<?php 
					if(isset($_GET['status'])): 
					?>
				<p>
					<?php
					if($_GET['status'] == 'sukses'){
						echo "Berhasil Simpan Data!";
					} else {
						echo "Data gagal disimpan!";
					}
					?>
				</p>
				<?php 
				endif; 
				?>
				</p>
			</div>
		</div>
	</div>
	<footer class="row bg-lavender">
		<div class="col-sm">
		<p style="color: #fff;">&copy;Muhammad Madharizqul Mubarok |
			<?php 
			echo date('Y')
			?>
		</p>
		</div>
	</footer>
</body>
</html>