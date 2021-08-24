<?php
  include('../koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Coffeeshop</title>
    <link rel="icon" type="text/css" href="#">
    <link rel="stylesheet" href="../assets/src/css/data.css">
	<link rel="stylesheet" href="gaya.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <?php require 'header.php'; ?>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".siderbar_menu li").click(function(){
			  $(".siderbar_menu li").removeClass("active");
			  $(this).addClass("active");
			});

			$(".hamburger").click(function(){
			  $(".wrapper").addClass("active");
			});

			$(".close, .bg_shadow").click(function(){
			  $(".wrapper").removeClass("active");
			});
		});
	</script>
  </head>
  <body>
  <div class="wrapper">
		<div class="wrapper_inner">
			<div class="vertical_wrap">
			<div class="backdrop"></div>
			<div class="vertical_bar">
				<div class="profile_info">
					<div class="img_holder">
						<img src="../profil.png" alt="profile_pic">
					</div>
					<p class="title"><?php echo $_SESSION['nama_staff'];?></p>
					<p class="sub_title"><?php echo $_SESSION['jabatan'];?></p>
				</div>
				<ul class="menu">
					<li><a href="data_staff.php"class="active">
						<span class="icon"><i class="fas fa-home"></i></span>
						<span class="text">Staff</span>
					</a></li>
					<li><a href="data_kopi.php">
						<span class="icon"><i class="fas fa-file-alt"></i></span>
						<span class="text">Kopi</span>
					</a></li>
					<li><a href="data_gudang.php">
						<span class="icon"><i class="fas fa-chart-pie"></i></span>
						<span class="text">Gudang</span>
					</a></li>
					<li><a href="data_supplier.php">
						<span class="icon"><i class="fas fa-user"></i></span>
						<span class="text">Supplier</span>
					</a></li>
					<li><a href="data_peralatan.php">
						<span class="icon"><i class="fas fa-file-alt"></i></span>
						<span class="text">Peralatan</span>
					</a></li>
					<li><a href="data_rak.php">
						<span class="icon"><i class="fas fa-cog"></i></span>
						<span class="text">Rak</span>
					</a></li>
					<li><a href="../logout.php">
						<span class="text">Logout</span>
					</a></li>
				</ul>
			</div>
		</div>
		<div class="main_isi">
			<div class="top_bar">
				<div class="hamburger">
					<i class="fas fa-bars"></i>
				</div>
				<div class="logo">
					Coffeeshop <span>SMDB</span>
				</div>
			</div>

			<div class="isi">
				<div class="content">
    <div class="item">

    <div class="container">
	<h2><center>Staff</center></h2>
      <table class="table table-bordered" style="margin-right: 20px">
        <tr>
          <th>ID Staff</th>
          <th>Nama Staff</th>
          <th>Tempat Lahir</th>
          <th>Tanggal Lahir</th>
          <th>Jabatan</th>
          <th width="10px">Alamat</th>
          <th>No HP</th>
        </tr>
    </thead>
    <tbody>
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM staff ORDER BY id_staff ASC";
      $result = mysqli_query($koneksi, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }

      //buat perulangan untuk element tabel dari data mahasiswa
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
          <td><?php echo $row['id_staff']; ?></td>
          <td><?php echo $row['nama_staff']; ?></td>
          <td><?php echo $row['tempat_lahir']; ?></td>
          <td class="tgl_lahir"><?php echo $row['tanggal_lahir']; ?></td>
          <td><?php echo ($row['jabatan']); ?></td>
          <td><?php echo ($row['alamat_staff']); ?></td>
          <td><?php echo $row['no_hp']; ?></td>
      </tr>
         
      <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>
    </tbody>
    </table></center>
    </div>
	</div>
  </body>
</html>