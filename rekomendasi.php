<?php 
include "koneksi.php";
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
                    <h2>Rekomendasi Tanaman Obat Hutan</h2>
                </div>
                <div class="panel-body">
                <p>Disini anda akan mengetahui tanaman hutan yang direkomendasikan berdasarkan penyakit anda!</p>
            
                <div class="container-fluid">
                    <form class="form" action="hasil.php" method="POST">
                        <div class="form-group">
                            <label>Nama Penyakit:</label>
                            <select name="sakit" class="form-control">
                                <?php 
                                    $sql = "SELECT DISTINCT khasiat FROM tumbuhan_obat";
                                    
                                    foreach ($dbh->query($sql) as $data) :
                                ?>
                                <option value="<?php echo $data['khasiat']; ?>"><?php echo $data['khasiat']; ?></option>
                                <?php
                                endforeach;
                                 ?>
                            </select>
                            
                        </div>

                        <div class="form-check-inline">
                            <label class="form-check-label">Cara Penggunaan:</label>
                            <br>
                                <?php 
                                    $sql1 = "SELECT DISTINCT cara_penggunaan FROM tumbuhan_obat";
                                     
                                    foreach ($dbh->query($sql1) as $data1) :
                                ?>
                                
                                    <label class="checkbox-inline">
                                <input type="checkbox" name="guna[ ]" value="<?php echo $data1['cara_penggunaan']; ?>" > <?php echo $data1['cara_penggunaan']; ?>        
                                </label>    
                                
                                
                            <?php
                                endforeach;
                            ?>
                        </div>
                            
                        
                            <br>
                        <div class="form-group">
                            <label>Cara Pengolahan:</label>
                            <br>
                            
                                <?php 
                                    $sql1 = "SELECT DISTINCT cara_pengolahan FROM tumbuhan_obat";
                                     
                                    foreach ($dbh->query($sql1) as $data1) :
                                ?>
                            
                            <label class="checkbox-inline">
                                <input type="checkbox" name="olah[ ]" value="<?php echo $data1['cara_pengolahan'];?>" > <?php echo $data1['cara_pengolahan']; ?>
                            </label>
                                <?php
                                endforeach;
                                 ?>
                            
                        </div>

                        <div class="form-group">
                            <label>Bagian Tumbuhan:</label>
                            <br>
                                <?php 
                                    $sql1 = "SELECT DISTINCT bagian_tumbuhan FROM tumbuhan_obat";
                                     
                                    foreach ($dbh->query($sql1) as $data1) :
                                ?>
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="bagian[ ]" value=<?php echo $data1['bagian_tumbuhan']; ?> > <?php echo $data1['bagian_tumbuhan']; ?>
                                </label>
                                <?php
                                endforeach;
                                 ?>
                            </select>
                            
                        </div>

                        <div class="form-group">
                            <label>Jenis Tumbuhan:</label>
                            <br>
                                <?php 
                                    $sql1 = "SELECT DISTINCT jenis_tumbuhan FROM tumbuhan_obat";
                                     
                                    foreach ($dbh->query($sql1) as $data1) :
                                ?>
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="jenis[ ]" value="<?php echo $data1['jenis_tumbuhan']; ?>" class="checkbo"> <?php echo $data1['jenis_tumbuhan']; ?>
                                </label>
                                <?php
                                endforeach;
                                 ?>
                            
                        </div>

                    <div class="form-group">
                            <input type="submit" required name="hasil" value = "Hasil" class="btn btn-success btn-fill" onclick="return confirm('Apa anda yakin dengan  data anda?');">
                </div>
                    </form>
                </div>
                </div>
                </div>
                

                </div>
                </center>
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
