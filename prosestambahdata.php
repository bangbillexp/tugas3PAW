<?php
include "koneksi.php";

$nama = $_POST['nama']; //'nama' didapat dari name pada form
$umur = $_POST['umur'];
$hobi = $_POST['hobi'];

$query = "INSERT INTO tbl_057 (nama,umur,hobi) VALUE ('$nama','$umur','$hobi')" ;//nama,umur,hobi sesuai pada database

$hasil = mysqli_query($koneksi,$query);

if($hasil){
    header ('Location:index.php');
}else{
    echo "input data gagal";
}
?>