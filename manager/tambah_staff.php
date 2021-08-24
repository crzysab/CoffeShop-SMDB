<?php
  include('../koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Coffeeshop</title>
    <link rel="icon" type="text/css" href="../assets/img/favicon.ico">
    <link rel="stylesheet" href="../assets/src/css/tambah.css">
    <link rel="icon" type="text/css" href="#">
    <link rel="stylesheet" href="../assets/src/css/data.css">
    <meta charset="UTF-8">
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <link rel="stylesheet" href="gaya.css">
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
    <div class="produk">
      <center>
        <h1>Tambah Staff</h1>
      <center>
      <form method="POST" action="../assets/src/proses/staff/proses_tambah.php" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>ID Staff</label>
          <input type="text" name="id_staff" autofocus="" required="" />
        </div>
        <div>
          <label>Username</label>
          <input type="text" name="username" autofocus="" required="" />
        </div>
        <div>
          <label>Password</label>
          <input type="text" name="password" autofocus="" required="" />
        </div>
        <div>
          <label>Nama Staff</label>
          <input type="text" name="nama_staff" autofocus="" required="" />
        </div>
        <div>
          <label>NIK</label>
         <input type="text" name="nik" />
        </div>
        <div>
          <label>Tempat Lahir</label>
         <input type="text" name="tempat_lahir" required="" />
        </div>
        <div>
          <label>Tanggal Lahir</label>
         <input type="date" name="tanggal_lahir" required="" />
        </div>
        <div>
          <label>Jabatan</label>
         <input type="text" name="jabatan" required="" />
        </div>
        <div>
          <label>Gaji</label>
         <input type="text" name="gaji" required="" />
        </div>
        <div>
          <label>Alamat</label>
         <input type="text" name="alamat_staff" required="" />
        </div>
        <div>
          <label>Handphone</label>
         <input type="text" name="no_hp" required="" />
        </div>
        <div>
         <button type="submit">Simpan Data</button>
        </div>
        </section>
      </form>
  </body>
</html>