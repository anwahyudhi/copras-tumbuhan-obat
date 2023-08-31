<?php 
include "../../koneksi.php";
session_start();
 ?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>SISTEM PENDUKUNG KEPUTUSAN PEMILIHAN TUMBUHAN HUTAN BERKHASIAT OBAT UNTUK SISTEM PENCERNAAN  </title>

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
                    <a href="../index-admin.php">
                    <h3>SPK PEMILIHAN TUMBUHAN OBAT HUTAN UNTUK SISTEM PENCERNAAN  </h3>
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
                      <div class="mx-auto">
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
                                    <li><?php $id = $_SESSION['id_amin'] ?>
                                        <a href="../edit-profil.php?siapa=<?php echo $id ?>">Ubah</a></li>
                                    
                                    <li><a href="../logout.php">Log out</a></li>
                                 </ul>
                            </div>
                        </ul>
                    </div>
                      </div>
                        
                </nav>
                <div class="panel panel-default">
                <center>
                <div class="panel panel-heading">
                    <h2>Data Tanaman Obat Hutan</h2>
                  <a href="tambah-tanaman.php" class="btn btn-success btn-fill">
                    <i class="glyphicon glyphicon-plus"></i>
                    <span>Tambah Data Tanaman</span>
                  </a>
                </div>
              </center>
                <!-- 
                - disini pake perulangan dari database, tapi databasenya harus diubah agar bisa manggil dari database
                = dan juga formnya akan nambahkan gambar yang diperlukan jika perlu
                - gambar diedit diluar biar ukurannya seragam
                -->
                  
                <div class="panel panel-body">
                  
        
                  <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                      <thead>
                        <tr>
                          <td>No</td>
                          <td>Nama Tumbuhan</td>
                          <td>Latin</td>
                          <td>Jenis Tumbuhan</td>
                          <td>Bagian Tumbuhan</td>
                          <td>Cara Pengolahan</td>
                          <td>Cara Penggunaan</td>
                          <td>Khasiat</td>

                          <td>aksi</td>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                          $sql = "SELECT * FROM tumbuhan_obat";
                          $no  = 1; 
                        foreach ($dbh->query($sql) as $data) :
                        ?>
                        <tr>
                          <td> <?php echo $no; ?> </td>
                          <td> <?php echo $data['nama_tumbuhan']; ?></td>
                          <td> <i><?php echo $data['latin']; ?></i></td>
                          <td><?php echo $data['jenis_tumbuhan']; ?></td>
                          <td><?php echo $data['bagian_tumbuhan']; ?></td>
                          <td><?php echo $data['cara_pengolahan']; ?></td>
                          <td><?php echo $data['cara_penggunaan']; ?></td>
                          <td> <?php echo $data['khasiat']; ?></td>
                          <td> 
                            
                            <a href="edit-tanaman.php?pohon=<?php echo $data['id_tumbuhan'] ?>" class="btn btn-warning btn-sm btn-fill btn-block">
                              <i class="glyphicon glyphicon-pencil"></i>
                              <span>ubah</span>
                            </a>   
                
                            <a class="btn btn-danger btn-sm btn-fill btn-block" href="hapus-tumbuhan.php?id=<?php echo $data['id_tumbuhan'] ?>" onclick="return confirm('Apa anda yakin dengan penghapusan data?');">
                                <i class="glyphicon glyphicon-trash"></i> 
                                <span>hapus</span>
                            </a>
                          </td>
                          
                        </tr>
                        <?php
                        $no++;  
                        endforeach;
                         ?>
                      </tbody>
                    </table>
                  </div>
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
