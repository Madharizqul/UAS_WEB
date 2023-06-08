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
        	<a class="nav-link" href="input_data.php">Pendaftaran</a>
      		</li>
      		<li class="nav-item">
        	<a class="nav-link" href="tentang.php">Data Pendaftar</a>
      		</li>
    	</ul>
    
    <form class="form-inline my-2 my-lg-0" action='beranda.php'method="POST">
						<input class="form-control mr-sm-2" type='text'class="search" value='' name='qcari'>
						<input type='submit' class="button" value='Cari'><a href='beranda.php'>Tampilkan Semua Data</a>
						<br>
						<br>
					
					</form>
  	</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-sm">
				<h2>Data Pendaftar</h2>
				<article>
					<br>
					<table class="table">
						<thead class="thead-dark">
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Alamat</th>
							<th>Jenis Kelamin</th>
							<th>Agama</th>
							<th>Jurusan</th>
							<th>Tindakan</th>
						</tr>
						</thead>
						
						<?php
							include('config.php');
							$sql="SELECT * FROM tbl_mahasiswa ";
							if(isset($_POST['qcari'])){
								$qcari=$_POST['qcari'];
								$sql="SELECT * FROM tbl_mahasiswa 
								where nama like '%$qcari%'
								or agama like '%$qcari%' ";
							}
							$query = mysqli_query($db, $sql);
							$no=1;
							while($data = mysqli_fetch_array($query)){
								echo "<tr>";
								echo "<td>".$no."</td>";
								echo "<td>".$data['nama']."</td>";
								echo "<td>".$data['alamat']."</td>";
								echo "<td>".$data['jk']."</td>";
								echo "<td>".$data['agama']."</td>";
								echo "<td>".$data['jurusan']."</td>";

								echo "<td>";
								echo "<a href='edit_data.php?id=".$data['id']."'>Edit</a> | ";
								echo "<a href='delete_data.php?id=".$data['id']."'>Hapus</a>";
								echo "</td>";
								echo "</tr>";
								$no++;
							}
						?>
					
					</table>
				</article>
			</div> 
			<div class="col-sm">
				<h2>Jumlah Data</h2>
				<p>Jumlah data sebanyak : 
					<?php 
					echo mysqli_num_rows($query) 
					?> 
				Orang</p>
			</div>
		</div>
	</div>
	<footer class="row bg-Dodger Blue">
		<div class="col-sm">
		<p style="color: #fff;">&copy;Muhammad Madharizqul Mubarok | 2023
			<?php 
			echo date('Y')
			?>
		</p>
		</div>
	</footer>
</body>
</html>