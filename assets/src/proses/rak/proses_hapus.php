<?php
include 'koneksi.php';
$kode_rak = $_GET["kode_rak"];
//mengambil id yang ingin dihapus

    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM rak WHERE kode_rak='$kode_rak' ";
    $hasil_query = mysqli_query($koneksi, $query);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      echo "<script>alert('Data tidak bisa dihapus.');window.location='../../../../manager/data_rak.php';</script>";
    } else {
      echo "<script>alert('Data berhasil dihapus.');window.location='../../../../manager/data_rak.php';</script>";
    }