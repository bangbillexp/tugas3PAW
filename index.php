<?php
$server = "localhost";
$user = "root";
$pass = "" ;
$db = "billy" ;
$koneksi = mysqli_connect($server,$user,$pass,$db);
// if (!$koneksi) {
// 	echo "Tidak Terkoneksi";
// 	}else{
// 		echo"Terkoneksi";
// 	}

$query = "SELECT * FROM tbl_057 ";
$hasil = mysqli_query($koneksi,$query);
?>


<!DOCTYPE HTML>
<head>
	<title></title>
	<link href = "css/bootstrap.css" rel="stylesheet">
<body>
	<table align="center" class="table table-dark table-striped"  style="width: 800px; margin-top: 50px">
		<tr>
			<td>NAMA</td>
			<td>UMUR</td>
			<td>HOBI</td>
			<td></td>
			<td></td>
		</tr>
		<?php
		   while($baris=mysqli_fetch_assoc($hasil)) {
		   	?>
		   	<tr>
		   		<td><?php echo $baris['nama']?></td>
		   		<td><?php echo $baris['umur']?></td>
		   		<td><?php echo $baris['hobi']?></td>
		   		<td><a class="btn btn-primary" href="updatet3.php?id=<?php echo $baris["ID"] ?>" role="button">Update</a></td>
		   		<td><a class="btn btn-primary" href="delete.php?id=<?php echo $baris["ID"] ?>" 
				  onclick="return confirm('Apakah anda yakin akan menghapusdata ini?')" role="button">Delete</a></td>

		   	</tr>
		<?php }?>
</table>
		<a class="btn btn-primary" href="insert.php" role="button" style="margin-left: 280px">Insert</a>