<?php
include "koneksi.php";
?>


<!DOCTYPE HTML>
<head>
	<title></title>
	<link href = "css/bootstrap.css" rel="stylesheet">
</head>
<body>
	<H1>Tambah Data</h1>
	<form method="post" action="prosestambahdata.php">
		<div class="form-floating mb-3">
			<input type="text" class="form-control" id="nama"  name="nama" placeholder="Masukkan Nama" >
			<label for="floatingInput">Nama</label>
		</div>
		<div class="form-floating mb-3">
			<input type="number" class="form-control" id="umur"  name="umur" placeholder="Masukkan Umur" >
			<label for="floatingPassword">Umur</label>
		</div>
		<div class="form-floating">
			<input type="text" class="form-control" id="hobi"  name="hobi" placeholder="Masukkan Hobby">
			<label for="floatingPassword">Hobby</label>
		</div>
		<br>
		<button type="submit" class="btn btn-secondary" name="submit">Submit</button>
		<a href="index.php"><button type="button" class="btn btn-danger">Cancel</button></a>
	</form>
</body>