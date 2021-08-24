<?php
include 'koneksi.php';
$kode_gudang = $_GET["kode_gudang"];
//mengambil id yang ingin dihapus

    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM gudang_penyimpanan WHERE kode_gudang='$kode_gudang' ";
    $hasil_query = mysqli_query($koneksi, $query);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      echo "<script>alert('Data tidak bisa dihapus.');window.location='../data_gudang.php';</script>";
    } else {
      echo "<script>alert('Data berhasil dihapus.');window.location='../data_gudang.php';</script>";
    }