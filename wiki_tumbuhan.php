<?php 
include 'koneksi.php';
$id = $_GET['pohon'];
$query=mysqli_query($dbh,"select * from tumbuhan_obat where id_tumbuhan='$id'");
$data=mysqli_fetch_array($query);
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>SISTEM PENDUKUNG KEPUTUSAN PEMILIHAN TUMBUHAN HUTAN BERKHASIAT OBAT UNTUK SISTEM PENCERNAAN  </title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="asset/index.css">
    </head>
    <body>



        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <a href="index.php"><center>
                    <h3>SPK PEMILIHAN TUMBUHAN OBAT HUTAN UNTUK SISTEM PENCERNAAN  </h3>    
                    </center>
                        <strong>
                            <i class="glyphicon glyphicon-home"></i>
                        </a></strong>
                </div>

                <ul class="list-unstyled components">
                    <li>
                        <a href="data_tanaman.php">
                            <center>
                            Data Tanaman Obat    
                            </center>
                        </a>
                    </li>
                    <li>
                      <a href="rekomendasi.php" aria-expanded="false">
                            <center>
                            Rekomendasi Tanaman Obat    
                            </center>
                            </a>
                    </li>

                <ul class="list-unstyled CTAs">
                    <hr>
                    <center>
                        <h4><?php echo date('Y') ?></h4>
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
                            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Masuk</a></li>
                        </ul>
                    </div>
                </nav>
                <div class="panel panel-default">
                <center>
                <div class="panel panel-heading">
                    <h2>Tanaman Obat Hutan</h2>
                    <h2><?php echo $data['nama_tumbuhan']; ?></h2>
                </div>
                <div class="panel-body">
            	<img src="gambar/<?php 
                        if(empty($data['gambar'])){
                            echo "daun-kartun-png-1.png";
                        }else{
                            echo $data['gambar']; 
                        
                        }?>"
                        class="img-thumbnail" width="300" heigth="300" ></center>
                <div class="panel-body">
                    <p>
                    Nama Tumbuhan: <strong><?php echo $data['nama_tumbuhan']; ?></strong></p>
                    <p>Nama Latin: <i><strong><?php echo $data['latin']; ?></strong></i></p>
                    <p>Famili: <i><strong><?php echo $data['famili']; ?></strong></i></p>
                <p>Dapat menyembuhkan <strong><?php echo $data['khasiat']; ?></strong>
                Bagian tumbuhan yang digunakan adalah <strong><?php echo $data['bagian_tumbuhan']; ?></strong>
                dengan cara pengunaan <strong><?php echo $data['cara_penggunaan']; ?></strong>
                dan diolah dengan cara <strong><?php echo $data['cara_pengolahan']; ?></strong></p>
                
                </div>
                <div class="panel-heading">
                <p><strong>Cara Penggunaan</strong></p>     
                </div>
                <div class="panel-body">
                    <p>
                    <?php echo nl2br($data['resep']); ?>         
                    </p>
                </div>
                
                
                </div>
                <br><br><br>
                
                </div>
                

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
