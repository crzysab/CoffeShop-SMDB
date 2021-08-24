<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

  // membuat variabel untuk menampung data dari form
  $kode_gudang   = $_POST['kode_gudang'];
  $id_staff      = $_POST['id_staff'];
   $query = "INSERT INTO gudang_penyimpanan (kode_gudang, id_staff) VALUES ('$kode_gudang', '$id_staff')";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='../../../../manager/data_gudang.php';</script>";
                  }