<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  if(empty($_SESSION['nama_staff'])){
    header("Location: error.php");
  }
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Coffeeshop</title>
    <link rel="icon" type="text/css" href="#">
    <link rel="stylesheet" href="assets/src/css/data.css">
  <meta charset="UTF-8">
  <title>Side Accordion Navigation Bar</title>
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <link rel="stylesheet" href="styles.css">
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
  <div class="sidebar">
    <div class="bg_shadow"></div>
    <div class="sidebar_inner">
        <div class="close">
          <i class="fas fa-times"></i>
        </div>
        
        <div class="profile_info">
            <div class="profile_img">
              <img src="profil.png" alt="profile_img">
            </div>
            <div class="profile_data">
                <p class="name"><?php echo $_SESSION['nama_staff'];?></p>
                <span><i></i><?php echo $_SESSION['jabatan'];?></span>
            </div>
        </div>
      
        <ul class="siderbar_menu">
            <li class="active"><a href="#">
              <div class="icon"><i class="fas fa-long-arrow-alt-left"></i></div>
              <div class="title">Back</div>
              </a> 
          </li> 

          <li><a href="#">
              <div class="icon"><i class="fas fa-user"></i></div>
              <div class="title">Kontrol</div>
              <div class="arrow"><i class="fas fa-chevron-down"></i></div>
              </a>
            <ul class="accordion">
       
                 <li><a href="data_gudang.php">Gudang</a></li>
                 <li><a href="data_rak.php">Rak</a></li>
                 <li><a href="data_kopi.php">Kopi</a></li>
                 <li><a href="data_peralatan.php">Peralatan</a></li>
                 <li><a href="data_supplier.php">Supplier</a></li>
       
              </ul>
          </li>  
          <li><a href="#">
              <div class="icon"><i class="fas fa-receipt"></i></div>
              <div class="title">About Us</div>
              <div class="arrow"><i class="fas fa-chevron-down"></i></div>
              </a>
            <ul class="accordion">
                 <li><a href="#">Ilma</a></li>
                 <li><a href="#">Christin</a></li>
                 <li><a href="#">Sabrina</a></li>
                 <li><a href="#">Cornelius</a></li>
                 <li><a href="#">Sultiana</a></li>
                 <li><a href="#">Alexander</a></li>
              </ul>
          </li> 
        </ul>
       <div class="logout_btn">
            <a href="logout.php">Logout</a>  
        </div>
      
    </div>
  </div>
  <div class="main_container">
    <div class="navbar">
       <div class="hamburger">
         <i class="fas fa-bars"></i>
       </div>
       <div class="logo">
         <a href="#">Coffee cenat cenut</a>
      </div>
    </div>
    <div class="content">
    <div class="produk">
    <center><h1>Data Staff</h1><center>
  <br/>
    <table>
      <thead>
        <tr>
          <th>ID Staff</th>
          <th>Nama Staff</th>
          <th>Tempat Lahir</th>
          <th>Tanggal Lahir</th>
          <th>Jabatan</th>
          <th>Alamat</th>
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
      <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>
    </tbody>
    </table>
    </div>
  </div>
  </body>
</html>