<?php 
include "koneksi.php";
?>

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
                </div>
                <div class="panel panel-body">
                 <div class="row">
                  <?php 

                  $halaman = 24;
                  $page = isset($_GET['ke']) ? (int)$_GET['ke'] : 1;
                  $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;


                  $sql = "select * from tumbuhan_obat";

                  $hasil = mysqli_query($dbh, $sql);
                  $total = mysqli_num_rows($hasil);
                  $tampil = ceil($total/$halaman);
                  
                  $sqlu = "select * from tumbuhan_obat LIMIT $mulai, $halaman" ;
                  $query = mysqli_query($dbh, $sqlu) or die(mysqli_error($dbh));

                 while ($data = mysqli_fetch_assoc($query)) {              
                   

                  $olah = "select COUNT(cara_pengolahan) from tumbuhan_obat where khasiat = 'maag' group by cara_pengolahan";

                   ?>
                   <!-- seragamkan ukurannya -->


                  <div class="col-lg-3">
                    
                      <!-- link berdasarkan nama tapi ga buat file baru -->
                      <a href="wiki_tumbuhan.php?pohon=<?php echo $data['id_tumbuhan'] ?>">
                        <img src="gambar/<?php 
                        if(empty($data['gambar'])){
                            echo "daun-kartun-png-1.png";
                        }else{
                            echo $data['gambar']; 
                        
                        }?>"
                        alt="<?php echo $data['nama_tumbuhan']; ?>" width="140" height="120">
                        <div class="desc">
                          <p style="font-size:13px;">
                           <?php echo $data['nama_tumbuhan']; ?> 
                          </p>
                        </div>
                      </a>
                    
                  </div>
                  <?php 
                 } ?>
                </div>
                <div class="pagination">
                <?php for ($i=1; $i<=$tampil ; $i++){ ?>
                  <li><a href="?ke=<?php echo $i; ?>"><?php echo $i; ?></a>
               </li>
                
                <?php } ?>
                                    
                </div>
                    

                </center>
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
