<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
  $id_supplier      = $_POST['id_supplier'];
  $nama_supplier    = $_POST['nama_supplier'];
  $alamat_supplier	= $_POST['alamat_supplier'];
  $no_hp			= $_POST['no_hp'];
  $email			= $_POST['email'];
      $query  = "UPDATE supplier SET id_supplier = '$id_supplier', nama_supplier = '$nama_supplier', alamat_supplier = '$alamat_supplier', no_hp = '$no_hp', email = '$email'";
      $query .= "WHERE id_supplier = '$id_supplier'";
      $result = mysqli_query($koneksi, $query);
      // periska query apakah ada error
      if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
      } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
          echo "<script>alert('Data berhasil diubah.');window.location='../data_supplier.php';</script>";
      }