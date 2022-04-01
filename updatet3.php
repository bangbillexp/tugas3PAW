<?php
include_once ("koneksi.php");
$id  = $_GET['id'] ;
// $umur = $_GET['umur'] 
// $hobi = $_GET['hobi'] 

$query="SELECT * FROM tbl_057 WHERE id=".$id;

$hasil=mysqli_query($koneksi,$query);

?>

<!DOCTYPE HTML>
<head>
	<title></title>
	<link href = "css/bootstrap.css" rel="stylesheet">
</head>
<body>
	<?php while($data=mysqli_fetch_array($hasil)){ ?>
		<h1>Update Data</h1><br>
	<form method="post" action="proseseditdata.php">
		<div class="form-floating mb-3">
			<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data['nama'] ?>">
			<label for="floatingInput">Nama</label>
		</div>
		<div class="form-floating mb-3">
			<input type="number" class="form-control" id="umur" name="umur" value="<?php echo $data['umur'] ?>">
			<label for="floatingPassword">Umur</label>
		</div>
		<div class="form-floating">
			<input type="text" class="form-control" id="hobi" name="hobi" value="<?php echo $data['hobi'] ?>">
			<label for="floatingPassword">Hobby</label>
		</div>
		<br>
		<input type="hidden" name="id" value="<?php echo $data['ID']?>">
		<button type="submit" class="btn btn-secondary" name="submit">Submit</button>
		<a href="index.php"><button type="button" class="btn btn-danger">Cancel</button></a>
	</form>
	<?php } ?>
</body>