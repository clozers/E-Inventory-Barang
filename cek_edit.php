<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$kode               = $_POST['kode_barang'];
$nama_barang        = $_POST['nama_barang'];
$kondisi            = $_POST['kondisi'];
$jenis              = $_POST['jenis_barang'];
$kategori           = $_POST['kategori_barang'];
$jumlah             = $_POST['jml_barang'];

// query SQL untuk insert data ke dalam Mysql
$query = "UPDATE barang SET kode_barang='$kode',nama_barang='$nama_barang',kondisi='$kondisi',jenis_barang='$jenis',kategori_barang='$kategori',jml_barang='$jumlah' where kode_barang='$kode'";
mysqli_query($conn, $query);
// mengalihkan ke halaman index.php
echo "<script>alert('Data yang anda Update sukses');window.location='tables.php'</script>";
