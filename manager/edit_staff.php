 <?php
  // memanggil file koneksi.php untuk membuat koneksi
include '../koneksi.php';

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id_staff'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id_staff = ($_GET["id_staff"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM staff WHERE id_staff='$id_staff'";
    $result = mysqli_query($koneksi, $query);
    // jika data gagal diambil maka akan tampil error berikut
    if(!$result){
      die ("Query Error: ".mysqli_errno($koneksi).
         " - ".mysqli_error($koneksi));
    }
    // mengambil data dari database
    $data = mysqli_fetch_assoc($result);
      // apabila data tidak ada pada database maka akan dijalankan perintah ini
       if (!count($data)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='data_staff.php';</script>";
       }
  } else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    echo "<script>alert('Masukkan data ID Staff.');window.location='data_staff.php';</script>";
  }         
  ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Coffeeshop</title>
    <link rel="icon" type="text/css" href="#">
    <link rel="stylesheet" href="../assets/src/css/data.css">
	<link rel="stylesheet" href="../assets/src/css/update.css">
	<link rel="stylesheet" href="gaya.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
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
        <h1>Edit Staff <?php echo $data['nama_staff']; ?></h1>
      <center>
      <form method="POST" action="../assets/src/proses/staff/proses_edit.php" enctype="multipart/form-data" >
      <section class="base">
        
        <!-- menampung nilai id produk yang akan di edit -->
        <input name="id_staff" value="<?php echo $data['id_staff']; ?>" hidden />
        <div>
          <label>Nama Staff</label>
          <input type="text" name="nama_staff" value="<?php echo $data['nama_staff']; ?>" autofocus="" required="" />
        </div>
        <div>
          <label>NIK</label>
         <input type="text" name="nik" value="<?php echo $data['nik']; ?>" />
        </div>
        <div>
          <label>Tempat Lahir</label>
         <input type="text" name="tempat_lahir" required=""value="<?php echo $data['tempat_lahir']; ?>" />
        </div>
        <div>
          <label>Tanggal Lahir</label>
         <input type="date" name="tanggal_lahir" required="" value="<?php echo $data['tanggal_lahir']; ?>"/>
        </div>
        <div>
          <label>Jabatan</label>
         <input type="text" name="jabatan" required="" value="<?php echo $data['jabatan']; ?>"/>
        </div>
        <div>
          <label>Gaji</label>
         <input type="text" name="gaji" required="" value="<?php echo $data['gaji']; ?>"/>
        </div>
        <div>
          <label>Alamat</label>
         <input type="text" name="alamat_staff" required="" value="<?php echo $data['alamat_staff']; ?>"/>
        </div>
        <div>
          <label>Handphone</label>
         <input type="text" name="no_hp" required="" value="<?php echo $data['no_hp']; ?>"/>
        </div>
        <div>
         <button type="submit">Simpan Perubahan</button>
        </div>
        </section>
      </form>
    </center>
  </center>
</div>
</div>
</div>
</div>
  </body>
</html>