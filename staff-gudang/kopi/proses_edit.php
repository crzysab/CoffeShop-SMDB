<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
  $id_kopi      = $_POST['id_kopi'];
  $nama_kopi        = $_POST['nama_kopi'];
  $stok             = $_POST['stok'];
  $harga            = $_POST['harga'];
  $id_supplier      = $_POST['id_supplier'];
  $kode_rak         = $_POST['kode_rak'];
      $query  = "UPDATE kopi SET id_kopi = '$id_kopi', nama_kopi = '$nama_kopi', stok = '$stok', harga = '$harga', id_supplier = '$id_supplier', kode_rak = '$kode_rak' ";
      $query .= "WHERE id_kopi = '$id_kopi'";
      $result = mysqli_query($koneksi, $query);
      // periska query apakah ada error
      if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
      } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
          echo "<script>alert('Data berhasil diubah.');window.location='../data_kopi.php';</script>";
      }