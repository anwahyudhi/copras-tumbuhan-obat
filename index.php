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
                </div>
                <div class="panel-body">
                <p>Sebelum beralih ke obat dokter, sudah jadi kebiasaan orang-orang Indonesia untuk lebih dulu mencoba “berobat” pakai jamu-jamuan dari tanaman obat. Tanaman obat itu sendiri punya ribuan jenis spesies. Nah dari total 40 ribu macam tanaman obat yang ada di dunia, ternyata hampir 90%-nya berhabitat di Indonesia. Menguntungkan, bukan? Namun begitu, hanya sekitar 9.000 spesies saja yang diduga kuat memiliki khasiat obat, dan bisa Anda tanam sendiri di rumah. </p>
                </div>
                <a href="data_tanaman.php" class="btn btn-info">Tanaman Hutan Obat</a>
                <a href="rekomendasi.php" class="btn btn-info">Rekomendasi Obat Penyakit</a>
                <br><br><br>
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
