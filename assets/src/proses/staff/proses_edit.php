<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
  $id_staff      = $_POST['id_staff'];
  $nama_staff    = $_POST['nama_staff'];
  $nik           = $_POST['nik'];
  $tempat_lahir  = $_POST['tempat_lahir'];
  $tanggal_lahir = $_POST['tanggal_lahir'];
  $jabatan       = $_POST['jabatan'];
  $gaji          = $_POST['gaji'];
  $alamat_staff  = $_POST['alamat_staff'];
  $no_hp         = $_POST['no_hp'];
      $query  = "UPDATE staff SET id_staff = '$id_staff', nama_staff = '$nama_staff', nik = '$nik', tempat_lahir = '$tempat_lahir', tanggal_lahir = '$tanggal_lahir', jabatan = '$jabatan', gaji = '$gaji', alamat_staff = '$alamat_staff', no_hp = '$no_hp' ";
      $query .= "WHERE id_staff = '$id_staff'";
      $result = mysqli_query($koneksi, $query);
      // periska query apakah ada error
      if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
      } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
          echo "<script>alert('Data berhasil diubah.');window.location='../../../../manager/data_staff.php';</script>";
      }