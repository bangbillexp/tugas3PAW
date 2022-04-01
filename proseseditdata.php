<?php
include_once("koneksi.php");
$id = $_POST['id'];
$nama = $_POST['nama'];
$umur = $_POST['umur'];
$hobi = $_POST['hobi'];

$query = "UPDATE tbl_057 SET nama='$nama',umur='$umur',hobi='$hobi' WHERE ID=$id";

$hasil = mysqli_query($koneksi,$query);

if($hasil){
    header('Location:index.php');
}else{
    echo "GAGAL";
}
?>