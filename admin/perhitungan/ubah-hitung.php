<?php 
include "../../koneksi.php";
session_start();
$id = $_GET['hitung'];
$query=mysqli_query($dbh,"select * from bobot where id='$id'");
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
    <script type="text/javascript">
      function ganti12(){
            var a12 = document.getElementById("a12");
            var a21 = 1/a12.value;
            document.getElementById("a21").value = a21.toFixed(2);
          }

      function ganti13(){
            var a13 = document.getElementById("a13");
            var a31 = 1/a13.value;
            document.getElementById("a31").value = a31.toFixed(2);
          }

      function ganti14(){
            var a14 = document.getElementById("a14");
            var a41 = 1/a14.value;
            document.getElementById("a41").value = a41.toFixed(2);
      }

      function ganti21(){
          var a21 = document.getElementById("a21");
          var a12 = 1/a21.value;
          document.getElementById("a12").value = a12.toFixed(2);
      }

      function ganti23(){
          var a23 = document.getElementById("a23");
          var a32 = 1/a23.value;
          document.getElementById("a32").value = a32.toFixed(2);
      }

      function ganti24(){
          var a24 = document.getElementById("a24");
          var a42 = 1/a24.value;
          document.getElementById("a42").value = a42.toFixed(2);
      }

      function ganti31(){
          var a31 = document.getElementById("a31");
          var a13 = 1/a31.value;
          document.getElementById("a13").value = a13.toFixed(2);
      }

      function ganti32(){
          var a32 = document.getElementById("a32");
          var a23 = 1/a32.value;
          document.getElementById("a23").value = a23.toFixed(2);
      }

      function ganti34(){
          var a34 = document.getElementById("a34");
          var a43 = 1/a34.value;
          document.getElementById("a43").value = a43.toFixed(2);
      }

      function ganti41(){
          var a41 = document.getElementById("a41");
          var a14 = 1/a41.value;
          document.getElementById("a14").value = a14.toFixed(2);
      }

      function ganti42(){
          var a42 = document.getElementById("a42");
          var a24 = 1/a42.value;
          document.getElementById("a24").value = a24.toFixed(2);
      }

      function ganti43(){
          var a43 = document.getElementById("a43");
          var a34 = 1/a43.value;
          document.getElementById("a34").value = a34.toFixed(2);
      }

    </script>
    </head>
    <body>



        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar" style="background-color: #82b74b">
                <div class="sidebar-header" style="background-color: #82b74b">
                    <a href="../index-admin.php">
                   <h3><center>SPK PEMILIHAN TUMBUHAN HUTAN BERKHASIAT OBAT UNTUK PENYAKIT KULIT</center></h3>
                        <strong>
                            <i class="glyphicon glyphicon-home"></i>
                        </a></strong>
                </div>

                <ul class="list-unstyled components">
                    <li class="active">
                        <a href="data-tanaman-admin.php">
                            <i class="glyphicon glyphicon-briefcase"></i>
                            Data Tanaman Obat
                        </a>
                        <a href="../perhitungan/hitungan.php" aria-expanded="false">
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
                            <button type="button" id="sidebarCollapse" class="btn btn-success navbar-btn">
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
                                    <li><?php $id = $_SESSION['id_amin'] ?>
                                        <a href="../edit-profil.php?siapa=<?php echo $id ?>">Ubah</a></li>
                                    
                                    <li><a href="../logout.php">Log out</a></li>
                                 </ul>
                            </div>
                        </ul>
                    </div>
                </nav>
                <div class="panel panel-default">
                <center>
                <div class="panel panel-heading">
                    <h2>Ubah Bobot Perhitungan AHP</h2>
                </div>
              </center>
              <div class="container">
                <table class="table table-hovered table-bordered">
                <thead>
                  <td>Kriteria</td>
                  <td>Jenis Tumbuhan</td>
                  <td>Cara Pengolahan</td>
                  <td>Cara Pemanfaatan</td>
                  <td>Bagian Tumbuhan</td>
                </thead>
                <form class="form" action="berubah.php?hitung=<?php echo $data['id'] ?>" method="post">
                  <tbody>
                  <tr>
                    <td>Jenis Tumbuhan</td>
                    <div class="form-group">
                      <td><input type="number" class="form-control" name="a11" value="<?php echo $data['a11'] ?>" readonly></td>
                      <td><input type="number" id="a12" class="form-control" name="a12" value="<?php echo $data['a12'] ?>" min="0" onchange="ganti12()" step="0.01"> </td>
                      <td><input type="number" id="a13"class="form-control" name="a13" value="<?php echo $data['a13'] ?>" min="0" step="0.01" onchange="ganti13()"></td>
                      <td><input type="number" id="a14"class="form-control" name="a14" value="<?php echo $data['a14'] ?>" min="0" step="0.01" onchange="ganti14()"></td>
                    </div>
                  </tr>
                  <tr>
                    <td>Cara Pengolahan</td>
                    <div class="form-group">
                      <td><input type="number" id="a21" class="form-control" name="a21" value="<?php echo $data['a21'] ?>" min="0" step="0.01" onchange="ganti21()"></td>
                      <td><input type="number" class="form-control" name="a22" value="<?php echo $data['a22'] ?>" readonly></td>
                      <td><input type="number" id="a23" class="form-control" name="a23" value="<?php echo $data['a23'] ?>" min="0" step="0.01"
                        onchange="ganti23()"></td>
                      <td><input type="number" id="a24" class="form-control" name="a24" value="<?php echo $data['a24'] ?>" min="0" step="0.01"
                        onchange="ganti24()"></td>
                    </div>
                  </tr>
                  <tr>
                    <td>Cara Pemanfaatan</td>
                    <div class="form-group">
                      <td><input type="number" id="a31" class="form-control" name="a31" value="<?php echo $data['a31'] ?>" min="0" step="0.01" onchange="ganti31()"></td>
                      <td><input type="number" id="a32" class="form-control" name="a32" value="<?php echo $data['a32'] ?>" min="0" step="0.01" onchange="ganti32()"></td>
                      <td><input type="number" class="form-control" name="a33" value="<?php echo $data['a33'] ?>" readonly></td>
                      <td><input type="number" id="a34" class="form-control" name="a34" value="<?php echo $data['a34'] ?>" min="0" step="0.01" onchange="ganti34()"></td>
                    </div>
                  </tr>
                  <tr>
                    <td>Bagian Tumbuhan</td>
                    <div class="form-group">
                      <td><input type="number" id="a41" class="form-control" name="a41" value="<?php echo $data['a41'] ?>" min="0" step="0.01" onchange="ganti41()"></td>
                      <td><input type="number" id="a42" class="form-control" name="a42" value="<?php echo $data['a42'] ?>" min="0" step="0.01" onchange="ganti42()"></td>
                      <td><input type="number" id="a43" class="form-control" name="a43" value="<?php echo $data['a43'] ?>" min="0" step="0.01" onchange="ganti43()"></td>
                      <td><input type="number" class="form-control" name="a44" value="<?php echo $data['a44'] ?>" readonly></td>
                    </div>
                  </tr>
                </tbody>
              </table>
              <div class="form-group">
                <center>
                  <button type="submit" class="btn btn-default">Submit</button>
                  <button type="reset" class="btn btn-default">Reset</button>   
                </center>
                </div> 
              </div>
                </form>
                
               
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
