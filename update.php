<?php
include "koneksi.php";
$nim=$_POST["nim"];
$nama=$_POST["nama"];
$prodi=$_POST["prodi"];
$angkatan=$_POST["angkatan"];
$sql="UPDATE mahasiswa SET (nim,nama,prodi,angkatan) values ('$nim','$nama','$prodi','$angkatan') WHERE nim='$nim' ";
$hasil=mysqli_query($kon,$sql);
?>