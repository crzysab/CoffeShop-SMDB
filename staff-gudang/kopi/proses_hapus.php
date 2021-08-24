<?php
include 'koneksi.php';
$id_kopi = $_GET["id_kopi"];
//mengambil id yang ingin dihapus

    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM kopi WHERE id_kopi='$id_kopi' ";
    $hasil_query = mysqli_query($koneksi, $query);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      echo "<script>alert('Data tidak bisa dihapus.');window.location='../data_kopi.php';</script>";
    } else {
      echo "<script>alert('Data berhasil dihapus.');window.location='../data_kopi.php';</script>";
    }