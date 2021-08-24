<?php
include 'koneksi.php';
$id_barang = $_GET["id_barang"];
//mengambil id yang ingin dihapus

    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM peralatan WHERE id_barang='$id_barang' ";
    $hasil_query = mysqli_query($koneksi, $query);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      echo "<script>alert('Data tidak bisa dihapus.');window.location='../../../../manager/data_peralatan.php';</script>";
    } else {
      echo "<script>alert('Data berhasil dihapus.');window.location='../../../../manager/data_peralatan.php';</script>";
    }