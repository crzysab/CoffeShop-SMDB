<!DOCTYPE html>
<html>
  <head>
    <title>Doffeeshop</title>
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
         <a href="#">Coffeeshop</a>
      </div>
    </div>
    <div class="content">
        <div class="container" style="margin-top: 30px; margin-bottom: 30px;">  
      <?php
      echo "<h1 align='center' style='color: red'>Anda belum login. Silahkan login terlebih dahulu</h1>";
      echo "<h1 align='left' style='color: red'>Logout untuk dapat menuju halaman login</h1>";
    ?>
  </div>
    </div>
  </body>
</html>