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
    <title>Side Accordion Navigation Bar</title>
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
					<li><a href="data_gudang.php">
						<span class="icon"><i class="fas fa-chart-pie"></i></span>
						<span class="text">Gudang</span>
					</a></li>
					<li><a href="data_supplier.php">
						<span class="icon"><i class="fas fa-user"></i></span>
						<span class="text">Supplier</span>
					</a></li>
					<li><a href="data_peralatan.php"class="active">
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
        <h1>Tambah Peralatan</h1>
      <center>
      <form method="POST" action="peralatan/proses_tambah.php" enctype="multipart/form-data" >
      <section class="base">
        
        <!-- menampung nilai id produk yang akan di edit -->
        <div>
          <label>ID Barang</label>
          <input type="text" name="id_barang" autofocus="" required="" />
        </div>

        <div>
          <label>Nama Barang</label>
          <input type="text" name="nama_barang" autofocus="" required=""/>
        </div>

        <div>
          <label>Jumlah Barang</label>
          <input type="text" name="jumlah" autofocus="" required=""/>
        </div>   
        <div>
          <label>Kode Rak</label>
          <select name="kode_rak">
            <option>-Pilih Rak-</option>
           <?php
              $query = "SELECT * FROM rak";
              $result = mysqli_query($koneksi,$query);
              foreach($result as $data) {
                  echo"<option value='".$data['kode_rak']."'>".$data['kode_rak']."</option>";                                  
                                                    }    
              ?>
              
        </select>
        </div>
        <div>
         <button type="submit">Simpan Data</button>
        </div>
        </section>
      </form>
  </body>
</html>