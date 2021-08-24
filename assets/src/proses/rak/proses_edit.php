<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
  $kode_rak      = $_POST['kode_rak'];
  $kode_gudang    = $_POST['kode_gudang'];
      $query  = "UPDATE rak SET kode_rak = '$kode_rak', kode_gudang = '$kode_gudang' ";
      $query .= "WHERE kode_rak = '$kode_rak'";
      $result = mysqli_query($koneksi, $query);
      // periska query apakah ada error
      if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
      } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
          echo "<script>alert('Data berhasil diubah.');window.location='../../../../manager/data_rak.php';</script>";
      }