<?php
include "koneksi.php";
$ID = $_REQUEST["kode_barang"];

$hapus = mysqli_query($conn, "DELETE from barang where kode_barang='$ID'");
header("location:tables.php");
