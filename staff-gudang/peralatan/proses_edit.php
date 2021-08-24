<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

  // membuat variabel untuk menampung data dari form
  $id_barang      = $_POST['id_barang'];
  $nama_barang        = $_POST['nama_barang'];
  $jumlah             = $_POST['jumlah'];
  $kode_rak         = $_POST['kode_rak'];
      $query  = "UPDATE peralatan SET id_barang = '$id_barang', nama_barang = '$nama_barang', jumlah = '$jumlah', kode_rak = '$kode_rak' ";
      $query .= "WHERE id_barang = '$id_barang'";
      $result = mysqli_query($koneksi, $query);
      // periska query apakah ada error
      if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
      } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
          echo "<script>alert('Data berhasil diubah.');window.location='../data_peralatan.php';</script>";
      }