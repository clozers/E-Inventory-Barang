<?php
include "koneksi.php";
$hub = mysqli_query($conn, "INSERT into barang values ('$_POST[kode_barang]','$_POST[nama_barang]','$_POST[kondisi]','$_POST[kategori_barang]','$_POST[jml_barang]')") or die(mysqli_error($conn));

echo "<script>alert('Data yang anda Input sukses');window.location='insert.php'</script>";
