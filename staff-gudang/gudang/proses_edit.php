<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
  $kode_gudang      = $_POST['kode_gudang'];
  $id_staff    = $_POST['id_staff'];
      $query  = "UPDATE gudang_penyimpanan SET kode_gudang = '$kode_gudang', id_staff = '$id_staff' ";
      $query .= "WHERE kode_gudang = '$kode_gudang'";
      $result = mysqli_query($koneksi, $query);
      // periska query apakah ada error
      if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
      } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
          echo "<script>alert('Data berhasil diubah.');window.location='../data_gudang.php';</script>";
      }