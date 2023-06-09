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
<body style="background-color:DeepSkyBlue">
<head>
    <title>Halaman Utama</title>
    <link rel="stylesheet" href="bootstrap-4.5.0-dist/css/bootstrap.min.css">
    <style>
        body {
			background-color: DeepSkyBlue;
        }

        .jumbotron {
            height: 100vh;
            background-color: DeepSkyBlue;
        }

        .division {
            margin-bottom: 20px;
			background-color: DeepSkyBlue;
        }

        .division h3 {
            margin-top: 20px;
			background-color: DeepSkyBlue;
        }
        
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  		<a class="navbar-brand" href="#">
    	<img src="assets\images\296416712_1995404397312430_1827778549593686554_n.jpg" width="30" height="30" class="d-inline-block align-top" alt="">HIMA TI</a>
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
        <form class="form-inline my-2 my-lg-0" action="beranda.php" method="POST">
    <input class="form-control mr-sm-2" type="text" class="search" value="" name="qcari">
    <input type="submit" class="button" value="Cari">
    <br>
    <br>
</form>

<a href="tentang.php">Tampilkan Semua Data</a>

    </div>
	</nav>
    <div class="jumbotron">
        <h1 class="display-4">Selamat Datang di HIMATIF!</h1>
        <p class="lead">Himpunan Mahasiswa Teknik Informasi </p>
        <hr class="my-4">
        <p>Silakan lihat informasi mengenai visi dan misi kami.</p>
        <a class="btn btn-primary btn-lg" href="#vision-mission" role="button">Lihat Visi dan Misi</a>
		<a class="btn btn-primary btn-lg" href="#division" role="button">Divisi</a>
        <a class="btn btn-primary btn-lg float" href="input_data.php" role="button">Open Recruitment</a>
    </div>

    <div id="vision-mission" class="division">
        <h3>Visi</h3>
        <p>Menciptakan HIMATIF sebagai organisasi kemahasiswaan yang aktif, berjiwa solidaritas, dan dapat menjadi wadah aspirasi bagi mahasiswa teknologi informasi.</p>

        <h3>Misi</h3>
        <ul>
            <li>Mahasiswa mampu berperan aktif dan kreatif dalam bidang akademik maupun non akademik.</li>
            <li>Melaksanakan kegiatan yang dapat mempererat rasa kekeluargaan dan solidaritas.</li>
            <li>Memperluas relasi dengan mengoptimalkan kegiatan diluar maupun didalam kampus guna mewujudkan aspirasi mahasiswa.</li>
        </ul>
    </div>

    <div id="division" class="division">
        <h3>Foto Anggota</h3>
        <div class="row">
            <div class="col-md-4">
                <img src="assets\images\IMG_20230501_114328.jpg" class="img-fluid" alt="Anggota 1">
            </div>
            <div class="col-md-4">
                <img src="assets\images\IMG_20230501_114347.jpg" class="img-fluid" alt="Anggota 2">
            </div>
        </div>
    </div>

    <div class="division">
        <h3>Divisi</h3>
        <div class="row">
            <div class="col-md-4">
                <h5>BPH</h5>
                <p>Bidang Pengurus Harian</p>
            </div>
            <div class="col-md-4">
                <h5>DAGRI</h5>
                <p>Dalam Negri</p>
            </div>
            <div class="col-md-4">
                <h5>PSDM</h5>
                <p>Pengembangan Sumber Daya Mahasiswa</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h5>IC</h5>
                <p>Information Creative</p>
            </div>
            <div class="col-md-4">
                <h5>DANUS</h5>
                <p>Dana Usaha</p>
            </div>
        </div>
    </div>
</body>
<body style="background-color: lavender">
		<footer>
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