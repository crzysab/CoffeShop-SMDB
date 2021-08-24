 <?php
  // memanggil file koneksi.php untuk membuat koneksi
include '../koneksi.php';

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id_kopi'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id_kopi = ($_GET["id_kopi"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM kopi WHERE id_kopi='$id_kopi'";
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
          echo "<script>alert('Data tidak ditemukan pada database');window.location='data_kopi.php';</script>";
       }
  } else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    echo "<script>alert('Masukkan data Kode Gudang.');window.location='data_kopi.php';</script>";
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
					<li><a href="data_kopi.php"class="active">
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
        <h1>Edit Kopi <?php echo $data['id_kopi']; ?></h1>
      <center>
      <form method="POST" action="../assets/src/proses/kopi/proses_edit.php" enctype="multipart/form-data" >
      <section class="base">
        
        <!-- menampung nilai id produk yang akan di edit -->
        <input name="id_kopi" value="<?php echo $data['id_kopi']; ?>" hidden />
        <div>
          <label>Nama Kopi</label>
          <input type="text" name="nama_kopi" autofocus="" required="" value="<?php echo $data['nama_kopi']; ?>" />
        </div>


        <div>
          <label>Stok Kopi</label>
          <input type="text" name="stok" autofocus="" required="" value="<?php echo $data['stok']; ?>"/>
        </div> 

		    <div>
          <label>Harga Kopi</label>
          <input type="text" name="harga" autofocus="" required="" value="<?php echo $data['harga']; ?>"/>
        </div> 
		
        <div>
          <label>ID Supplier</label>
          <select name="id_supplier">
            <option><?php echo $data['id_supplier']; ?></option>
           <?php
              $query = "SELECT * FROM supplier";
              $result = mysqli_query($koneksi,$query);
              foreach($result as $data1) {
                  echo"<option value='".$data1['id_supplier']."'>".$data1['id_supplier']."</option>";                                  
                                                    }    
              ?>
              
        </select>
        </div>
        <div>
          <label>Kode Rak</label>
          <select name="kode_rak">
           <option><?php echo $data['kode_rak']; ?></option>
           <?php
              $query = "SELECT * FROM rak ";
              $result = mysqli_query($koneksi,$query);
              foreach($result as $data2) {
                  echo"<option value='".$data2['kode_rak']."'>".$data2['kode_rak']."</option>";                                  
                                                    }    
              ?>
              
        </select>
        </div>
        <div>
         <button type="submit">Simpan Perubahan</button>
        </div>
        </section>
      </form>
	  </div>
  </body>
</html>