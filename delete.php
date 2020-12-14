<?php
include "koneksi.php";
$nama=$_POST["nama"];
$sql="delete from mahasiswa where nim='$nama'";
$hasil=mysqli_query($kon,$sql);
?>