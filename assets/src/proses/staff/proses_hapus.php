<?php
include 'koneksi.php';
$id_staff = $_GET["id_staff"];
//mengambil id yang ingin dihapus

    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM staff WHERE id_staff='$id_staff' ";
    $hasil_query = mysqli_query($koneksi, $query);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
       echo "<script>alert('Data tidak bisa dihapus.');window.location='../../../../manager/data_staff.php';</script>";
    } else {
      echo "<script>alert('Data berhasil dihapus.');window.location='../../../../manager/data_staff.php';</script>";
    }