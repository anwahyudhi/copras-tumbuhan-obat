<?php 
include "../koneksi.php";
session_start();
$id = $_GET['siapa'];
$query=mysqli_query($dbh,"select * from admin where id_admin='$id'");
$data=mysqli_fetch_array($query);


 ?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>SISTEM PENDUKUNG KEPUTUSAN PEMILIHAN TUMBUHAN HUTAN BERKHASIAT OBAT UNTUK PENYAKIT KULIT</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="../../asset/bootstrap/css/bootstrap.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="../../asset/index.css">
    </head>
    <body>



        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <a href="index-admin.php">
                   <h3><center>SPK PEMILIHAN TUMBUHAN HUTAN BERKHASIAT OBAT UNTUK PENYAKIT KULIT</center></h3>
                        <strong>
                            <i class="glyphicon glyphicon-home"></i>
                        </a></strong>
                </div>

                <ul class="list-unstyled components">
                    <li>
                        <a href="tanaman/data-tanaman-admin.php">
                            <i class="glyphicon glyphicon-briefcase"></i>
                            Data Tanaman Obat
                        </a>
                        <a href="perhitungan/hitungan.php" aria-expanded="false">
                            <i class="glyphicon glyphicon-duplicate"></i>
                            Perhitungan
                        </a>
                    </li>

                <ul class="list-unstyled CTAs">
                    <hr>
                    <center>
                        <h4>  <?php echo date('Y') ?></h4>
                    </center>
                    <hr>  
                </ul>
            </nav>

            <!-- Page Content Holder -->
            <div id="content">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span>Toggle Sidebar</span>
                            </button>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <p></p><div class="dropdown"> <!-- warna dropdown menu diubah-->
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
                                    <span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['nama']; ?>
                                <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">   
                                    <li><a href="../logout.php">Log out</a></li>
                                 </ul>
                            </div>
                        </ul>
                    </div>
                </nav>
                <div class="panel panel-default">
                <center>
                <div class="panel panel-heading">
                    <h2>Edit Profil</h2>
                </div>
              </center>
                <div class="panel panel-body">
                 <form class="form" action="henshin.php?siapa=<?php echo $data['id_admin'] ?>" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" value="<?php echo $data['username'] ?>" required>
                  </div>
                  <div class="form-group">
                    <label>Nama Admin</label>
                    <input type="text" name="nama" class="form-control" value="<?php echo $data['nama_admin'] ?>" required>
                  </div>

                  <div class="form-group">
                  <label>Password lama:</label>
                  <input type="password" name="passlama" class="form-control" readonly id="alamatpalsu" value="<?php echo $data['password'] ?>">
                  </div>  

                  <div class="form-group">
                    <label>Password baru:</label>
                    <input type="password" name="passbaru" class="form-control" required id="alamatbaru">

                    <br>
                    <input type="button" onclick="myFunction1()" class="btn" value="Lihat Password">
                  </div>


              <input type="reset" required name="Reset" class="btn btn-warning pull-right btn-fill"> 
              <input type="submit" required name="ganti" value = "Simpan" class="btn btn-success btn-fill" onclick="return confirm('Apa anda yakin dengan Perubahan Data Profil?');">
        </div>
                  </form>
          
          
                  
                

                </div>



                
        </div>





        <!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
         </script>
    </body>
</html>

<script>
var x = document.getElementById("alamatpalsu");
var y = document.getElementById("alamatbaru");
function myFunction() {
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

function myFunction1() {
  if (y.type === "password") {
    y.type = "text";
  } else {
    y.type = "password";
  }
}
</script>