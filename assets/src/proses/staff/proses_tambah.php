<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
  $id_staff      = $_POST['id_staff'];
  $username      = $_POST['username'];
  $password      = $_POST['password'];
  $nama_staff    = $_POST['nama_staff'];
  $nik           = $_POST['nik'];
  $tempat_lahir  = $_POST['tempat_lahir'];
  $tanggal_lahir = $_POST['tanggal_lahir'];
  $jabatan       = $_POST['jabatan'];
  $gaji          = $_POST['gaji'];
  $alamat_staff  = $_POST['alamat_staff'];
  $no_hp     = $_POST['no_hp'];
   $query = "INSERT INTO staff (id_staff, username, password, nama_staff, nik, tempat_lahir, tanggal_lahir, jabatan, gaji, alamat_staff, no_hp) VALUES ('$id_staff', '$username', '$password', '$nama_staff', '$nik', '$tempat_lahir', '$tanggal_lahir', '$jabatan', '$gaji','$alamat_staff','$no_hp')";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='../../../../manager/data_staff.php';</script>";
                  }