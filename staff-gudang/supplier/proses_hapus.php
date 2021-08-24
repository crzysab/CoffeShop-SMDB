<?php
include 'koneksi.php';
$id_supplier = $_GET["id_supplier"];
//mengambil id yang ingin dihapus

    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM supplier WHERE id_supplier='$id_supplier' ";
    $hasil_query = mysqli_query($koneksi, $query);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      echo "<script>alert('Data tidak bisa dihapus.');window.location='../data_supplier.php';</script>";
  
    } else {
      echo "<script>alert('Data berhasil dihapus.');window.location='../data_supplier.php';</script>";
    }