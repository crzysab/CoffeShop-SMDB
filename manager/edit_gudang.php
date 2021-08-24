 <?php
  // memanggil file koneksi.php untuk membuat koneksi
include '../koneksi.php';

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['kode_gudang'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $kode_gudang = ($_GET["kode_gudang"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM gudang_penyimpanan WHERE kode_gudang='$kode_gudang'";
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
          echo "<script>alert('Data tidak ditemukan pada database');window.location='data_gudang.php';</script>";
       }
  } else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    echo "<script>alert('Masukkan data Kode Gudang.');window.location='data_gudang.php';</script>";
  }         
  ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Coffeeshop</title>
    <link rel="icon" type="text/css" href="../assets/img/favicon.ico">
    <link rel="stylesheet" href="../assets/src/css/update.css">
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
					<li><a href="data_staff.php">
						<span class="icon"><i class="fas fa-home"></i></span>
						<span class="text">Staff</span>
					</a></li>
					<li><a href="data_kopi.php">
						<span class="icon"><i class="fas fa-file-alt"></i></span>
						<span class="text">Kopi</span>
					</a></li>
					<li><a href="data_gudang.php"class="active">
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
        <h1>Edit Gudang <?php echo $data['kode_gudang']; ?></h1>
      <center>
      <form method="POST" action="../assets/src/proses/gudang/proses_edit.php" enctype="multipart/form-data" >
      <section class="base">
        
        <!-- menampung nilai id produk yang akan di edit -->
		
        <input name="kode_gudang" value="<?php echo $data['kode_gudang']; ?>" hidden />
        <div>
          <label>ID Staff</label>
          <select name="id_staff">
            <option><?php echo $data['id_staff']; ?></option>
           <?php
              $query = "SELECT * FROM staff WHERE jabatan = 'Pengatur Gudang'";
              $result = mysqli_query($koneksi,$query);
              foreach($result as $data) {
                  echo"<option value='".$data['id_staff']."'>".$data['id_staff']."</option>";                                  
                                                    }    
              ?>
              
            </select>
        </div>
        <div>
         <button type="submit">Simpan Perubahan</button>
        </div>
        </section>
      </form>
  </body>
</html>