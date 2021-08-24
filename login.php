<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="#">
        <title>Coffeeshop</title>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery.validate.min.js"></script>
        <link rel="stylesheet" href="login.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>

    <body>
        <div class="layer1">
            <div class="banner1">
                <br>
                <h1>Welcome!</h1>

                <hr class="line">
            </div>
            <br>
            <form method="post" class="form">
                <label for="">Username:</label> <br>
                <input type="text" name="username" placeholder="Your Username" required> <br>
                <br>
                <label for="">Password: </label> <br>
                <input type="password" name="password" id="password" placeholder="Your Password" required> <br>
                <br>
                <input type="checkbox" class="show">
                <label for="" style="font-size:15px; color: #707070 ">&nbsp;Show Password</label>
                <br><br>
                <?php
                        include("koneksi.php");

                        if(isset($_POST['btnlogin']))
                            {
                                $username = $_POST['username'];
                                $password = $_POST['password'];

                                $sql = "SELECT * FROM staff WHERE username = '{$username}' and password = '{$password}'";
                                $query = mysqli_query($koneksi, $sql);
                                $count = mysqli_num_rows($query);

                                if(!$query)
                                    {
                                         die("Query gagal". mysqli_error($koneksi));
                                    }

                                if(!empty($username) && (!empty($password)))
                                    {
                                        if($count==0)
                                        {
                                            echo "<center style='color: red; font-size: 15px'>"."Nama pengguna atau kata sandi salah"."</center>";
                                        }
                                        else
                                        {
                                            while ($row = mysqli_fetch_array($query))
                                            {   
                                                $user = $row['username'];
                                                $pass = $row['password'];
                                                $nama_staff = $row['nama_staff'];
                                                $jabatan = $row['jabatan'];
                                            }
                                            if($username == $user && $password == $pass && $jabatan == 'Manager')
                                            {
                                                header("Location: manager/data_staff.php");
                                                $_SESSION['username'] = $user;
                                                $_SESSION['nama_staff'] = $nama_staff;
                                                $_SESSION['jabatan'] = $jabatan;
                                            }
                                            else if ($username == $user && $password == $pass && $jabatan == 'Pengatur Gudang')
                                            {
                                                header("Location: staff-gudang/data_staff.php");
                                                $_SESSION['username'] = $user;
                                                $_SESSION['nama_staff'] = $nama_staff;
                                                $_SESSION['jabatan'] = $jabatan;
                                            }
                                            else if ($username == $user && $password == $pass && $jabatan == 'Pelayan')
                                            {
                                                header("Location: staff-lainnya/data_staff.php");
                                                $_SESSION['username'] = $user;
                                                $_SESSION['nama_staff'] = $nama_staff;
                                                $_SESSION['jabatan'] = $jabatan;
                                            }
                                            else if ($username == $user && $password == $pass && $jabatan == 'Bartender')
                                            {
                                                header("Location: staff-lainnya/data_staff.php");
                                                $_SESSION['username'] = $user;
                                                $_SESSION['nama_staff'] = $nama_staff;
                                                $_SESSION['jabatan'] = $jabatan;
                                            }
                                            else if ($username == $user && $password == $pass && $jabatan == 'Kasir')
                                            {
                                                header("Location: staff-lainnya/data_staff.php");
                                                $_SESSION['username'] = $user;
                                                $_SESSION['nama_staff'] = $nama_staff;
                                                $_SESSION['jabatan'] = $jabatan;
                                            }
                                            else if ($username == $user && $password == $pass && $jabatan == 'Cleaning Service')
                                            {
                                                header("Location: staff-lainnya/data_staff.php");
                                                $_SESSION['username'] = $user;
                                                $_SESSION['nama_staff'] = $nama_staff;
                                                $_SESSION['jabatan'] = $jabatan;
                                            } 
                                            else if ($username == $user && $password == $pass && $jabatan == 'Security')
                                            {
                                                header("Location: staff-lainnya/data_staff.php");
                                                $_SESSION['username'] = $user;
                                                $_SESSION['nama_staff'] = $nama_staff;
                                                $_SESSION['jabatan'] = $jabatan;
                                            }     
                                            else
                                            {
                                                echo "<center style='color: red; font-size: 15px'>"."Pengguna tidak ditemukan"."</center>";
                                            }
                                        }
                                    }
                                    else if(empty($username)){
                                        echo "<center style='color: red; font-size: 15px'>Nama pengguna tidak boleh kosong</center>";
                                    }
                                    else{
                                        echo "<center style='color: red; font-size: 15px'>Kata sandi tidak boleh kosong</center>";
                                    }
                                }
                            ?>
                <input type="submit" name="btnlogin" value="Login" name="login">
            </form>
        </div>
        <script type="text/javascript">
            $(document).ready(function(){       
                $('.show').click(function(){
                    if($(this).is(':checked')){
                        $('#password').attr('type','text');
                    }
                    else{
                        $('#password').attr('type','password');
                    }
                });
            });
        </script>
    </body>
</html>
