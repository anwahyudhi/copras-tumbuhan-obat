<?php 
include "../../koneksi.php";
include "rumus.php";





session_start();
 ?>


<!DOCTYPE html>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>



        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <a href="index-admin.php">
                    <h3>SPK PEMILIHAN TUMBUHAN OBAT HUTAN UNTUK SISTEM PENCERNAAN  </h3>
                        <strong>
                            <i class="glyphicon glyphicon-home"></i>
                        </a></strong>
                </div>

                <ul class="list-unstyled components">
                    <li>
                        <a href="../tanaman/data-tanaman-admin.php">
                            <i class="glyphicon glyphicon-briefcase"></i>
                            Data Tanaman Obat
                        </a>
                        <a href="hitungan.php" aria-expanded="false">
                            <i class="glyphicon glyphicon-duplicate"></i>
                            Perhitungan
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
                    <h2>Halaman Hasil Perhitungan</h2>
                </div>
                </center>
                <div class="panel-body">
                    <div class="panel-heading">
                    </div>
                    <div class="panel-body">
                        <h3><center>AHP</center></h3>
                        <center>    
                    <a href="ubah-hitung.php?hitung=<?php echo $totalan['id'] ?>" class="btn btn-warning"> 
                    <i class="glyphicon glyphicon-pencil"></i>
                    <span>Ubah Hitungan</span>
                    </a>
                    </center>
                                <hr>
                                <h3>Matriks</h3>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Kriteria</td>
                                        <td>Jenis Tumbuhan</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Jenis Tumbuhan</td>
                                            <td><?php 
                                                
                                                echo $totalan['a11'];
                                             ?></td>
                                            <td><?php 
                                                $ahp1[1]=5;
                                                echo $totalan['a11'];
                                             ?></td>
                                            <td><?php 
                                                $ahp1[2]=3;
                                                echo $totalan['a11'];
                                             ?></td>
                                            <td><?php 
                                                $ahp1[3]=2;
                                                echo $totalan['a11'];
                                             ?></td>
                                        </tr>

                                        <tr>
                                            <td>Cara Pengolahan</td>
                                            <td><?php 
                                                $ahp2[0]=0.20;
                                                echo $totalan['a11'];
                                             ?></td>
                                            <td><?php 
                                                $ahp2[1]=1;
                                                echo $ahp2[1];
                                             ?></td>
                                            <td><?php 
                                                $ahp2[2]=0.50;
                                                echo $ahp2[2];
                                             ?></td>
                                            <td><?php 
                                                $ahp2[3]=0.33;
                                                echo $ahp2[3];
                                             ?></td>
                                        </tr>

                                        <tr>
                                            <td>Cara Pemanfaatan</td>
                                            <td><?php 
                                                $ahp3[0]=0.33;
                                                echo $ahp3[0];
                                             ?></td>
                                            <td><?php 
                                                $ahp3[1]=2;
                                                echo $ahp3[1];
                                             ?></td>
                                            <td><?php 
                                                $ahp3[2]=1;
                                                echo $ahp3[2];
                                             ?></td>
                                            <td><?php 
                                                  $ahp3[3]=0.25;
                                                echo $ahp3[3];
                                             ?></td>
                                        </tr>

                                        <tr>
                                            <td>Bagian Tumbuhan</td>
                                            <td><?php 
                                                $ahp4[0]=0.5;
                                                echo $ahp4[0];
                                             ?></td>
                                            <td><?php 
                                                $ahp4[1]=3;
                                                echo $ahp4[1];
                                             ?></td>
                                            <td><?php 
                                                $ahp4[2]=4;
                                                echo $ahp4[2];
                                             ?></td>
                                            <td><?php 
                                                $ahp4[3]=1;
                                                echo $ahp4[3];
                                             ?></td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah</td>
                                            <td><?php 
                                            $tahp[0] = $ahp1[0]+$ahp2[0]+$ahp3[0]+$ahp4[0];
                                            echo $tahp[0]; ?></td>
                                            <td><?php 
                                            $tahp[1] = $ahp1[1]+$ahp2[1]+$ahp3[1]+$ahp4[1];
                                            echo $tahp[1]; ?></td>
                                            <td><?php 
                                            $tahp[2] = $ahp1[2]+$ahp2[2]+$ahp3[2]+$ahp4[2];
                                            echo $tahp[2]; ?></td>
                                            <td><?php 
                                            $tahp[3] = $ahp1[3]+$ahp2[3]+$ahp3[3]+$ahp4[3];
                                            echo $tahp[3]; ?></td>
                                        </tr>
                                    </tbody>                                    
                                </table>
                                <h3>Matriks Normalisasi</h3>
                                    <table class="table table-hovered table-bordered">
                                        <thead>
                                            <td></td>
                                            <td>C1</td>
                                            <td>C2</td>
                                            <td>C3</td>
                                            <td>C4</td>
                                            <td>Jumlah Baris</td>
                                            <td>Prioritas Eigein</td>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                    <td>C1</td>
                                                    <td>
                                                        <?php $cm1[0]=$ahp1[0]/$tahp[0];
                                                        echo $cm1[0]; ?>
                                                    </td>
                                                    <td>
                                                    <?php $cm1[1]=$ahp1[1]/$tahp[1];
                                                        echo $cm1[1]; ?></td>
                                                    <td><?php $cm1[2]=$ahp1[2]/$tahp[2];
                                                        echo $cm1[2]; ?></td>
                                                    <td><?php $cm1[3]=$ahp1[3]/$tahp[3];
                                                        echo $cm1[3]; ?></td>
                                                    </td>
                                                    <td><?php 
                                                    $baris[0]=array_sum($cm1);
                                                    echo $baris[0];
                                                     ?></td>
                                                    <td><?php $eigen[0]=$baris[0]/4;
                                                        echo $eigen[0]; ?></td>
                                                    </td>
                                            </tr>
                                            <tr>                  

                                                <td>C2</td>
<td>    
                                                        <?php $cm2[0]=$ahp2[0]/$tahp[0];
                                                        echo $cm2[0]; ?>
                                                    </td>
                                                    <td>
                                                   <?php $cm2[1]=$ahp2[1]/$tahp[1];
                                                        echo $cm2[1]; ?></td>
                                                    <td><?php $cm2[2]=$ahp2[2]/$tahp[2];
                                                        echo $cm2[2]; ?></td>
                                                    <td><?php $cm2[3]=$ahp2[3]/$tahp[3];
                                                        echo $cm2[3]; ?></td>
                                                    </td>
                                                    <td><?php 
                                                    $baris[1]=array_sum($cm2);
                                                    echo $baris[1];
                                                     ?></td>
                                                    <td><?php $eigen[1]=$baris[1]/4;
                                                        echo $eigen[1]; ?></td>
                                                    </td>
                                            </tr>
                                            <tr>                    

                                                <td>C3</td>
                                                    <td>
                                                        <?php $cm3[0]=$ahp3[0]/$tahp[0];
                                                        echo $cm3[0]; ?>
                                                    </td>
                                                    <td>
                                                   <?php $cm3[1]=$ahp3[1]/$tahp[1];
                                                        echo $cm3[1]; ?></td>
                                                    <td><?php $cm3[2]=$ahp3[2]/$tahp[2];
                                                        echo $cm3[2]; ?></td>
                                                    <td><?php $cm3[3]=$ahp3[3]/$tahp[3];
                                                        echo $cm3[3]; ?></td>
                                                    </td>
                                                    <td><?php 
                                                    $baris[2]=array_sum($cm3);
                                                    echo $baris[2];
                                                     ?></td>
                                                    <td><?php $eigen[2]=$baris[2]/4;
                                                        echo $eigen[2]; ?></td>
                                                    </td>
                                            </tr>
                                            <tr>                    

                                                <td>C4</td>
                                                   <td>
                                                        <?php $cm4[0]=$ahp4[0]/$tahp[0];
                                                        echo $cm4[0]; ?>
                                                    </td>
                                                    <td>
                                                   <?php $cm4[1]=$ahp4[1]/$tahp[1];
                                                        echo $cm4[1]; ?></td>
                                                    <td><?php $cm4[2]=$ahp4[2]/$tahp[2];
                                                        echo $cm4[2]; ?></td>
                                                    <td><?php $cm4[3]=$ahp4[3]/$tahp[3];
                                                        echo $cm4[3]; ?></td>
                                                    </td>
                                                    <td><?php 
                                                    $baris[3]=array_sum($cm4);
                                                    echo $baris[3];
                                                     ?></td>
                                                    <td><?php $eigen[3]=$baris[3]/4;
                                                        echo $eigen[3]; ?></td>
                                                    </td>
                                            </tr>
                                            <tr>
                                                <td>Total</td>
                                                    <td><?php 
                                                    $tm[0] = $cm1[0]+$cm2[0]+$cm3[0]+$cm4[0];
                                                    echo $tm[0]?></td>
                                                    <td><?php 
                                                    $tm[1] = $cm1[1]+$cm2[1]+$cm3[1]+$cm4[1];
                                                    echo $tm[1]?></td>
                                                    <td><?php 
                                                    $tm[2] = $cm1[2]+$cm2[2]+$cm3[2]+$cm4[2];
                                                    echo $tm[2]?></td>
                                                    <td><?php 
                                                    $tm[3] = $cm1[3]+$cm2[3]+$cm3[3]+$cm4[3];
                                                    echo $tm[3]?></td>
                                                    <td><?php 
                                                    $tm[4]=$baris[0]+$baris[1]+$baris[2]+$baris[3];
                                                    echo $tm[4];
                                                     ?></td>
                                                    <td><?php 
                                                    $tm[5]=$eigen[0]+$eigen[1]+$eigen[2]+$eigen[3];
                                                     echo $tm[5];?></td>
                                            </tr>



                                        </tbody>
                                    </table>

                                    <table class="table table-hovered table-bordered">
                                        <thead>
                                            <td>CI</td>
                                            <td>CR</td>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <?php 
                                                    $ci = (($tahp[0]*$eigen[0])+($tahp[1]*$eigen[1])+($tahp[2]*$eigen[2])+($tahp[3]*$eigen[3]));
                                                    echo $ci;
                                                     ?>
                                                </td>
                                                <td rowspan="2"><?php 
                                                $cr = (($ci-4)/3)/0.9;
                                                echo $cr;
                                                 ?></td>
                                            </tr>
                                            <tr>
                                                <td><?php echo ($ci-4)/3;?>
                                            </td>
                                                </tr>
                                        </tbody>
                                    </table>

                                    <h3>Sub Kriteria</h3>
                                    <hr>
                            <table class="table table-hovered table-bordered">
                                <thead>
                                    <td>Jenis Tumbuhan</td>
                                    <td>Nilai</td>
                                    <td>Jumlah</td>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Pohon</td>
                                        <td><?php echo $diare22; ?></td>
                                        <td><?php  echo $diare22/$total ?></td>
                                    </tr>
                                    <tr>
                                        <td>Perdu</td>
                                        <td><?php echo $diare25; ?></td>
                                        <td><?php  echo $diare25/$total ?></td>
                                    </tr>
                                    <tr>
                                        <td>Liana</td>
                                        <td><?php echo $diare23; ?></td>
                                        <td><?php  echo $diare23/$total ?></td>
                                    </tr>
                                    <tr>
                                        <td>Semak</td>
                                        <td><?php echo $diare26; ?></td>
                                        <td><?php  echo $diare26/$total ?></td>
                                    </tr>
                                    <tr>
                                        <td>Herba</td>
                                        <td><?php echo $diare24; ?></td>
                                        <td><?php  echo $diare24/$total ?></td>
                                    </tr>
                                </tbody>
                            </table>

                            <table class="table table-hovered table-bordered">
                                <thead>
                                    <td>Cara Pengolahan</td>
                                    <td>Nilai</td>
                                    <td>Jumlah</td>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Direbus</td>
                                        <td><?php echo $diare3; ?></td>
                                        <td><?php  echo $diare3/$total ?></td>
                                    </tr>
                                    <tr>
                                        <td>Langsung</td>
                                        <td><?php echo $diare1; ?></td>
                                        <td><?php  echo $diare1/$total ?></td>
                                    </tr>
                                    <tr>
                                        <td>Dihaluskan</td>
                                        <td><?php echo $diare2; ?></td>
                                        <td><?php  echo $diare2/$total ?></td>
                                    </tr>
                                </tbody>
                            </table>

                            <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Cara Penggunaan</td>
                                        <td>Nilai</td>
                                        <td>Jumlah</td>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Dimakan</td>
                                            <td><?php echo $diare6; ?></td>
                                            <td><?php  echo $diare6/$total ?></td>
                                        </tr>
                                        <tr>
                                            <td>Dikumur</td>
                                            <td><?php echo $diare8; ?></td>
                                            <td><?php  echo $diare8/$total ?></td>
                                        </tr>
                                        <tr>
                                            <td>Diminum</td>
                                            <td><?php echo $diare5; ?></td>
                                            <td><?php  echo $diare5/$total ?></td>
                                        </tr>
                                        <tr>
                                            <td>Dioleskan</td>
                                            <td><?php echo $diare7; ?></td>
                                            <td><?php  echo $diare7/$total ?></td>
                                        </tr>
                                    </tbody>
                            </table>

                            <table class="table table-hovered table-bordered">
                                <thead>
                                    <td>Bagian yang Digunakan</td>
                                    <td>Nilai</td>
                                    <td>Jumlah</td>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Daun</td>
                                        <td><?php echo $diare16; ?></td>
                                        <td><?php echo $diare16/$total ?></td>
                                    </tr>
                                    <tr>
                                        <td>Akar</td>
                                        <td><?php echo $diare11; ?></td>
                                        <td><?php echo $diare11/$total ?></td>
                                    </tr>
                                    <tr>
                                        <td>Buah</td>
                                        <td><?php echo $diare21; ?></td>
                                        <td><?php echo $diare21/$total ?></td>
                                    </tr>
                                    <tr>
                                        <td>Biji</td>
                                        <td><?php echo $diare20; ?></td>
                                        <td><?php echo $diare20/$total ?></td>
                                    </tr>
                                    <tr>
                                        <td>Batang</td>
                                        <td><?php echo $diare17; ?></td>
                                        <td><?php echo $diare17/$total ?></td>
                                    </tr>
                                    <tr>
                                        <td>Getah</td>
                                        <td><?php echo $diare18; ?></td>
                                        <td><?php echo $diare18/$total ?></td>
                                    </tr>
                                    <tr>
                                        <td>Bunga</td>
                                        <td><?php echo $diare19; ?></td>
                                        <td><?php echo $diare19/$total ?></td>
                                    </tr>
                                    <tr>
                                        <td>Kulit Batang</td>
                                        <td><?php echo $diare15; ?></td>
                                        <td><?php echo $diare15/$total ?></td>
                                    </tr>

                                    <tr>
                                        <td>Semua</td>
                                        <td><?php echo $diare13; ?></td>
                                        <td><?php echo $diare13/$total ?></td>
                                    </tr>

                                    <tr>
                                        <td>Umbi</td>
                                        <td><?php echo $diare12; ?></td>
                                        <td><?php echo $diare12/$total ?></td>
                                    </tr>

                                    <tr>
                                        <td>Kulit Buah</td>
                                        <td><?php echo $diare14; ?></td>
                                        <td><?php echo $diare14/$total ?></td>
                                    </tr>
                                </tbody>
                            </table>


                        <ul class="nav nav-tabs">
                            <li><a data-toggle="tab" href="#diare">Diare</a></li>
                            <li><a data-toggle="tab" href="#maag">Maag</a></li>
                            <li><a data-toggle="tab" href="#sariawan">Sariawan</a></li>
                            <li><a data-toggle="tab" href="#ambeien">Ambeien</a></li>
                            <li><a data-toggle="tab" href="#perut">Sakit Perut</a></li>
                            <li><a data-toggle="tab" href="#sembelit">Sembelit</a></li>
                            <li><a data-toggle="tab" href="#disentri">Disentri</a></li>
                            <li><a data-toggle="tab" href="#gigi">Sakit Gigi</a></li>
                            <li><a href="#cacingan" data-toggle="tab" >Cacingan</a></li>
                        </ul>
                      
                        <br><br>
                        <div class="tab-content">
                            <div id="diare" class="tab-pane">
                                <h3><center>COPRAS</center></h3>
                                <hr>
                                <h4>Matriks</h4>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Nama</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $no = 0;
                                            $k1 = array();
                                            $k2 = array();
                                            $k3 = array();
                                            $k4 = array();
                                            
                                            $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Diare'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                        ?>
                                          <tr>
                                          <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                          
                                          <td><?php 
                                          if ($datas['cara_pengolahan'] == 'Langsung') {
                                              echo $diare1/$total;
                                              $k1[$no] = $diare1/$total;
                                          }elseif ($datas['cara_pengolahan'] == 'Dihaluskan') {
                                            echo $diare2/$total;
                                            $k1[$no] = $diare2/$total;
                                          }elseif ($datas['cara_pengolahan'] == 'Direbus') {
                                            echo $diare3/$total;
                                            $k1[$no] = $diare3/$total;
                                          }else{
                                            echo 0;
                                            $k1[$no] = 0;
                                          }?>
                                              
                                          </td>

                                          
                                          <td><?php
                                            if ($datas['cara_penggunaan'] == 'Diminum' ) {
                                                echo $diare5/$total;
                                                $k2[$no] = $diare5/$total;
                                                
                                            }elseif ($datas['cara_penggunaan'] == "Dimakan") {
                                                echo $diare6/$total;
                                                $k2[$no] = $diare6/$total;
                                                
                                            }elseif ($datas['cara_penggunaan'] == "Dioles") {
                                                echo $diare7/$total;
                                                $k2[$no] = $diare7/$total;
                                                
                                            }elseif ($datas['cara_penggunaan'] == "Dikumur") {
                                                echo $diare8/$total;
                                                $k2[$no] = $diare8/$total;
                                                
                                            }else{
                                                $k2[$no] = 0;
                                                echo 0;
                                            }?></td>

                                            <td>
                                                <?php 
                                                if ($datas['bagian_tumbuhan'] == "Akar" ) {
        echo $diare11/$total;
        $k3[$no] = $diare11/$total;

    }elseif ($datas['bagian_tumbuhan'] == "Umbi") {
        echo $diare12/$total;
        $k3[$no] = $diare12/$total;
        
    }elseif ($datas['bagian_tumbuhan'] == "Semua") {
        echo $diare13/$total;
        $k3[$no] = $diare13/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Kulit Buah") {
        echo $diare14/$total;
        $k3[$no] = $diare14/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Kulit Batang") {
        
        $k3[$no] = $diare15/$total;
        echo $k3[$no];
        
    }elseif ($datas['bagian_tumbuhan'] == "Daun") {
        echo $diare16/$total;
        $k3[$no] = $diare16/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Batang") {
        echo $diare17/$total;
        $k3[$no] = $diare17/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Getah") {
        echo $diare18/$total;
        $k3[$no] = $diare18/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Bunga") {
        echo $diare19/$total;
        $k3[$no] = $diare19/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Biji") {
        echo $diare20/$total;
        $k3[$no] = $diare20/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Buah") {
        echo $diare21/$total;
        $k3[$no] = $diare21/$total;
        
    }else{
        echo 0;
        $k3[$no] = 0;
    }
                                                 ?>
                                            </td>

                                            <td>
                                                <?php 
    if ($datas['jenis_tumbuhan'] == "Pohon") {
        echo $diare22/$total;
        $k4[$no] = $diare22/$total;
    }elseif ($datas['jenis_tumbuhan'] == "Liana") {
        echo $diare23/$total;
        $k4[$no] = $diare23/$total;
    }
    elseif ($datas['jenis_tumbuhan'] == "Herba") {
        echo $diare24/$total;
        $k4[$no] = $diare24/$total;
    }
    elseif ($datas['jenis_tumbuhan'] == "Perdu") {
        echo $diare25/$total;
        $k4[$no] = $diare25/$total;
    }
    elseif ($datas['jenis_tumbuhan'] == "Semak") {
        echo $diare26/$total;
        $k4[$no] = $diare26/$total;
    }else{
        echo 0;
        $k4[$no] = 0;
    }
                                                 ?>
                                            </td>    
                                          </tr>
                                          <?php
                                                $no++;
                                                endforeach;
                                        ?>
                                        <tr>
                                            <td> Jumlah</td>
                                            <td><?php $k111 = array_sum($k1) ;
                                            echo $k111; ?></td>
                                            <td><?php 
                                            $k211 = array_sum($k2) ;
                                            echo $k211 ; ?></td>
                                            <td><?php 
                                            $k311 = array_sum($k3) ;
                                            echo $k311 ; ?></td>
                                            <td><?php 
                                            $k411 = array_sum($k4) ;
                                            echo $k411 ; ?></td>
                                        </tr>
                                       
                                    </tbody>
                                    
                                </table>
                                <h4>Normalisasi Matriks</h4>
                                <hr>
                                <table class="table table-bordered table-hovered">
                                    <thead>
                                        <td>Nama</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $not = 0;
                                            $k11 = array();
                                            $k21 = array();
                                            $k31 = array();
                                            $k41 = array();
                                            
                                            $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Diare'";

                                            foreach ($dbh->query($sql) as $datas) :
                                        ?>
                                          <tr>
                                          <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                            <td><?php 
                                          if ($datas['cara_pengolahan'] == 'Langsung') {
                                              $k11[$not]=$k1[$not]/$k111;
                                              echo $k11[$not];
                                          }elseif ($datas['cara_pengolahan'] == 'Dihaluskan') {
                                            $k11[$not]=$k1[$not]/$k111;
                                              echo $k11[$not];
                                          }elseif ($datas['cara_pengolahan'] == 'Direbus') {
                                            $k11[$not]=$k1[$not]/$k111;
                                              echo $k11[$not];
                                          }
                                          else{
        
                                          $k11[$not]=$k1[$not]/$k111;
                                          echo $k11[$not];

                                            }?>
                                              </td>

                                              
                                                  <td><?php
                                            if ($datas['cara_penggunaan'] == 'Diminum' ) {
                                                $k21[$not]=$k2[$not]/$k211;

                                                echo $k21[$not];
                                                
                                            }elseif ($datas['cara_penggunaan'] == "Dimakan") {
                                                $k21[$not]=$k2[$not]/$k211;

                                                echo $k21[$not];
                                            }elseif ($datas['cara_penggunaan'] == "Dioles") {
                                                $k21[$not]=$k2[$not]/$k211;

                                                echo $k21[$not];
                                            }elseif ($datas['cara_penggunaan'] == "Dikumur") {
                                                $k21[$not]=$k2[$not]/$k211;

                                                echo $k21[$not];
                                            }else{
        $k21[$not]=$k2[$not]/$k211;

                                                echo $k21[$not];
    }?></td>

                                              <td>
                                                <?php 
                                                if ($datas['bagian_tumbuhan'] == "Akar" ) {
        $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    }elseif ($datas['bagian_tumbuhan'] == "Umbi") {
     $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
       
    }elseif ($datas['bagian_tumbuhan'] == "Semua") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Kulit Buah") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Kulit Batang") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Daun") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Batang") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Getah") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Bunga") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Biji") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Buah") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
        
    }else{
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    }
                                                 ?>
                                            </td>

                                            <td>
                                                <?php 
    if ($datas['jenis_tumbuhan'] == "Pohon") {
        $k41[$not]=$k4[$not]/$k411;

                                                echo $k41[$not];
    
    }elseif ($datas['jenis_tumbuhan'] == "Liana") {
    
        $k41[$not]=$k4[$not]/$k411;

                                                echo $k41[$not];
    }
    elseif ($datas['jenis_tumbuhan'] == "Herba") {
    
        $k41[$not]=$k4[$not]/$k411;
        echo $k41[$not];

                                                
    }
    elseif ($datas['jenis_tumbuhan'] == "Perdu") {
    
        $k41[$not]=$k4[$not]/$k411;

                                                echo $k41[$not];
    }
    elseif ($datas['jenis_tumbuhan'] == "Semak") {
    
        $k41[$not]=$k4[$not]/$k411;

                                                echo $k41[$not];
    }else{
        $k41[$not]=$k4[$not]/$k411;

                                                echo $k41[$not];
    }
                                                 ?>
                                            </td>    
                                         </tr>
                                         <?php 
                                         $not++;
                                         endforeach;
                                          ?>
                                                                           
                                    </tbody>
                                </table>
                                <h4>Normalisasi Bobot</h4>
                                <hr>
                                <table class="table table-bordered table-hovered">
                                    <thead>
                                        <td>Nama</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                        <td>Jumlah Bobot Benefit</td>
                                        <td>Qi</td>
                                        <td>Utilitas (Pi%)</td>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $bobot1 = 0.09;
                                            $bobot2 = 0.13;
                                            $bobot3 = 0.32;
                                            $bobot4 = 0.46;
                                            $not = 0;
                                            $c1 = array();
                                            $c2 = array();
                                            $c3 = array();
                                            $c4 = array();
                                            
                                            $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Diare'";

                                            foreach ($dbh->query($sql) as $datas) :

                                            
                                        
                                        
                                          if ($datas['cara_pengolahan'] == 'Langsung') {
                                              $c1[$not] =  $k11[$not]*$bobot1;
                                              
                                          }elseif ($datas['cara_pengolahan'] == 'Dihaluskan') {
                                            $c1[$not] =  $k11[$not]*$bobot1;
                                              
                                          }elseif ($datas['cara_pengolahan'] == 'Direbus') {
                                            $c1[$not] =  $k11[$not]*$bobot1;
                                          }else{
                                          $c1[$not] =  $k11[$not]*$bobot1;
                                          }
                                              

                                              
                                                 
                                            if ($datas['cara_penggunaan'] == 'Diminum' ) {
                                                $c2[$not] =  $k21[$not]*$bobot2;
                                              
                                            }elseif ($datas['cara_penggunaan'] == "Dimakan") {
                                                $c2[$not] =  $k21[$not]*$bobot2;
                                              
                                            }elseif ($datas['cara_penggunaan'] == "Dioles") {
                                                $c2[$not] =  $k21[$not]*$bobot2;
                                              
                                            }elseif ($datas['cara_penggunaan'] == "Dikumur") {
                                                $c2[$not] =  $k21[$not]*$bobot2;
                                            }else{
                                                  $c2[$not] =  $k21[$not]*$bobot2;
                                          }

                                              
                                                if ($datas['bagian_tumbuhan'] == "Akar" ) {
        $c3[$not] =  $k31[$not]*$bobot3;
    }elseif ($datas['bagian_tumbuhan'] == "Umbi") {
     $c3[$not] =  $k31[$not]*$bobot3;
    }elseif ($datas['bagian_tumbuhan'] == "Semua") {
        $c3[$not] =  $k31[$not]*$bobot3;
    }elseif ($datas['bagian_tumbuhan'] == "Kulit buah") {
    $c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Kulit Batang") {
$c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Daun") {
$c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Batang") {
$c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Getah") {
$c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Bunga") {
$c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Biji") {
 $c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Buah") {
    $c3[$not] =  $k31[$not]*$bobot3;
    }else{
    $c3[$not] =  $k31[$not]*$bobot3;
                                          }
                                            

                                            
    if ($datas['jenis_tumbuhan'] == "Pohon") {
        $c4[$not] =  $k41[$not]*$bobot4;
    }elseif ($datas['jenis_tumbuhan'] == "Liana") {
    $c4[$not] =  $k41[$not]*$bobot4;}
    elseif ($datas['jenis_tumbuhan'] == "Herba") {
        $c4[$not] =  $k41[$not]*$bobot4;}
    elseif ($datas['jenis_tumbuhan'] == "Perdu") {
    $c4[$not] =  $k41[$not]*$bobot4;}
    elseif ($datas['jenis_tumbuhan'] == "Semak") {
    $c4[$not] =  $k41[$not]*$bobot4;
    }else{
    $c4[$not] =  $k41[$not]*$bobot4;
    }
                                            
                                                 $benefit[$not] = $c1[$not]+$c2[$not]+$c3[$not]+$c4[$not]; 
                                            
                                         $not++;
                                         endforeach;
                                         $noti = 0;
                                         foreach ($dbh->query($sql) as $datas) {
                                          ?>
                            <tr>
                                <td> <?php echo $datas['nama_tumbuhan'] ;?></td>
                                <td><?php echo number_format($c1[$noti],4); ?></td>
                                <td><?php echo number_format($c2[$noti],4); ?></td>
                                <td><?php echo number_format($c3[$noti],4); ?></td>
                                <td><?php echo number_format($c4[$noti],4); ?></td>
                                <td><?php echo number_format($benefit[$noti],4); ?></td>
                                <td><?php echo number_format($benefit[$noti],4); ?></td>
                                <td><?php echo number_format(($benefit[$noti]/max($benefit))*100, 2);
                                    $pi[$noti] = ($benefit[$noti]/max($benefit))*100;  ?>%</td>
                            </tr>
                        <?php  
                        $ranking = "update tumbuhan_obat SET qi = '$benefit[$noti]', pi = '$pi[$noti]' where id_tumbuhan ='$datas[id_tumbuhan]'";
                        if ($dbh->query($ranking) === TRUE) {
                           }
                        $noti++;
                    } ?>
                                
                            </tbody>
                            </table>
                            </div>
                        
                            <!-- Hitungan MAAG -->
                            <div id="maag" class="tab-pane">
                                <h3><center>COPRAS</center></h3>
                                <hr>
                                <h4>Matriks</h4>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Nama</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $no = 0;
                                            $k1 = array();
                                            $k2 = array();
                                            $k3 = array();
                                            $k4 = array();
                                            
                                            $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Maag'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                        ?>
                                          <tr>
                                          <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                          
                                          <td><?php 
                                          if ($datas['cara_pengolahan'] == 'Langsung') {
                                              echo $diare1/$total;
                                              $k1[$no] = $diare1/$total;
                                          }elseif ($datas['cara_pengolahan'] == 'Dihaluskan') {
                                            echo $diare2/$total;
                                            $k1[$no] = $diare2/$total;
                                          }elseif ($datas['cara_pengolahan'] == 'Direbus') {
                                            echo $diare3/$total;
                                            $k1[$no] = $diare3/$total;
                                          }else{
                                            echo 0;
                                            $k1[$no] = 0;
                                          }?>
                                              
                                          </td>

                                          
                                          <td><?php
                                            if ($datas['cara_penggunaan'] == 'Diminum' ) {
                                                echo $diare5/$total;
                                                $k2[$no] = $diare5/$total;
                                                
                                            }elseif ($datas['cara_penggunaan'] == "Dimakan") {
                                                echo $diare6/$total;
                                                $k2[$no] = $diare6/$total;
                                                
                                            }elseif ($datas['cara_penggunaan'] == "Dioles") {
                                                echo $diare7/$total;
                                                $k2[$no] = $diare7/$total;
                                                
                                            }elseif ($datas['cara_penggunaan'] == "Dikumur") {
                                                echo $diare8/$total;
                                                $k2[$no] = $diare8/$total;
                                                
                                            }else{
                                                $k2[$no] = 0;
                                                echo 0;
                                            }?></td>

                                            <td>
                                                <?php 
                                                if ($datas['bagian_tumbuhan'] == "Akar" ) {
        echo $diare11/$total;
        $k3[$no] = $diare11/$total;

    }elseif ($datas['bagian_tumbuhan'] == "Umbi") {
        echo $diare12/$total;
        $k3[$no] = $diare12/$total;
        
    }elseif ($datas['bagian_tumbuhan'] == "Semua") {
        echo $diare13/$total;
        $k3[$no] = $diare13/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Kulit buah") {
        echo $diare14/$total;
        $k3[$no] = $diare14/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Kulit Batang") {
        
        $k3[$no] = $diare15/$total;
        echo $k3[$no];
        
    }elseif ($datas['bagian_tumbuhan'] == "Daun") {
        echo $diare16/$total;
        $k3[$no] = $diare16/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Batang") {
        echo $diare17/$total;
        $k3[$no] = $diare17/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Getah") {
        echo $diare18/$total;
        $k3[$no] = $diare18/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Bunga") {
        echo $diare19/$total;
        $k3[$no] = $diare19/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Biji") {
        echo $diare20/$total;
        $k3[$no] = $diare20/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Buah") {
        echo $diare21/$total;
        $k3[$no] = $diare21/$total;
        
    }else{
        echo 0;
        $k3[$no] = 0;
    }
                                                 ?>
                                            </td>

                                            <td>
                                                <?php 
    if ($datas['jenis_tumbuhan'] == "Pohon") {
        echo $diare22/$total;
        $k4[$no] = $diare22/$total;
    }elseif ($datas['jenis_tumbuhan'] == "Liana") {
        echo $diare23/$total;
        $k4[$no] = $diare23/$total;
    }
    elseif ($datas['jenis_tumbuhan'] == "Herba") {
        echo $diare24/$total;
        $k4[$no] = $diare24/$total;
    }
    elseif ($datas['jenis_tumbuhan'] == "Perdu") {
        echo $diare25/$total;
        $k4[$no] = $diare25/$total;
    }
    elseif ($datas['jenis_tumbuhan'] == "Semak") {
        echo $diare26/$total;
        $k4[$no] = $diare26/$total;
    }else{
        echo 0;
        $k4[$no] = 0;
    }
                                                 ?>
                                            </td>    
                                          </tr>
                                          <?php
                                                $no++;
                                                endforeach;
                                        ?>
                                        <tr>
                                            <td> Jumlah</td>
                                            <td><?php $k111 = array_sum($k1) ;
                                            echo $k111; ?></td>
                                            <td><?php 
                                            $k211 = array_sum($k2) ;
                                            echo $k211 ; ?></td>
                                            <td><?php 
                                            $k311 = array_sum($k3) ;
                                            echo $k311 ; ?></td>
                                            <td><?php 
                                            $k411 = array_sum($k4) ;
                                            echo $k411 ; ?></td>
                                        </tr>
                                       
                                    </tbody>
                                    
                                </table>
                                <h4>Normalisasi Matriks</h4>
                                <hr>
                                <table class="table table-bordered table-hovered">
                                    <thead>
                                        <td>Nama</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $not = 0;
                                            $k11 = array();
                                            $k21 = array();
                                            $k31 = array();
                                            $k41 = array();
                                            
                                            $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Maag'";

                                            foreach ($dbh->query($sql) as $datas) :
                                        ?>
                                          <tr>
                                          <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                            <td><?php 
                                          if ($datas['cara_pengolahan'] == 'Langsung') {
                                              $k11[$not]=$k1[$not]/$k111;
                                              echo $k11[$not];
                                          }elseif ($datas['cara_pengolahan'] == 'Dihaluskan') {
                                            $k11[$not]=$k1[$not]/$k111;
                                              echo $k11[$not];
                                          }elseif ($datas['cara_pengolahan'] == 'Direbus') {
                                            $k11[$not]=$k1[$not]/$k111;
                                              echo $k11[$not];
                                          }
                                          else{
                                            $k11[$not]=$k1[$not]/$k111;
                                              echo $k11[$not];
    }?>
                                              </td>

                                              
                                                  <td><?php
                                            if ($datas['cara_penggunaan'] == 'Diminum' ) {
                                                $k21[$not]=$k2[$not]/$k211;

                                                echo $k21[$not];
                                                
                                            }elseif ($datas['cara_penggunaan'] == "Dimakan") {
                                                $k21[$not]=$k2[$not]/$k211;

                                                echo $k21[$not];
                                            }elseif ($datas['cara_penggunaan'] == "Dioles") {
                                                $k21[$not]=$k2[$not]/$k211;

                                                echo $k21[$not];
                                            }elseif ($datas['cara_penggunaan'] == "Dikumur") {
                                                $k21[$not]=$k2[$not]/$k211;

                                                echo $k21[$not];
                                            }else{
                                                $k21[$not]=$k2[$not]/$k211;

                                                echo $k21[$not];
    }?></td>

                                              <td>
                                                <?php 
                                                if ($datas['bagian_tumbuhan'] == "Akar" ) {
        $k31[$not]=$k1[$not]/$k311;

                                                echo $k31[$not];
    }elseif ($datas['bagian_tumbuhan'] == "Umbi") {
     $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
       
    }elseif ($datas['bagian_tumbuhan'] == "Semua") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Kulit buah") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Kulit Batang") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Daun") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Batang") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Getah") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Bunga") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Biji") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Buah") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
        
    }else{
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    }
                                                 ?>
                                            </td>

                                            <td>
                                                <?php 
    if ($datas['jenis_tumbuhan'] == "Pohon") {
        $k41[$not]=$k4[$not]/$k411;

                                                echo $k41[$not];
    
    }elseif ($datas['jenis_tumbuhan'] == "Liana") {
    
        $k41[$not]=$k4[$not]/$k411;

                                                echo $k41[$not];
    }
    elseif ($datas['jenis_tumbuhan'] == "Herba") {
    
        $k41[$not]=$k4[$not]/$k411;

                                                echo $k41[$not];
    }
    elseif ($datas['jenis_tumbuhan'] == "Perdu") {
    
        $k41[$not]=$k4[$not]/$k411;

                                                echo $k41[$not];
    }
    elseif ($datas['jenis_tumbuhan'] == "Semak") {
    
        $k41[$not]=$k4[$not]/$k411;

                                                echo $k41[$not];
    }else{
        $k41[$not]=$k4[$not]/$k411;

                                                echo $k41[$not];
    }
                                                 ?>
                                            </td>    
                                         </tr>
                                         <?php 
                                         $not++;
                                         endforeach;
                                          ?>
                                                                           
                                    </tbody>
                                </table>
                                <h4>Normalisasi Bobot</h4>
                                <hr>
                                <table class="table table-bordered table-hovered">
                                    <thead>
                                        <td>Nama</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                        <td>Jumlah Bobot Benefit</td>
                                        <td>Qi</td>
                                        <td>Utilitas (Pi%)</td>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $bobot1 = 0.09;
                                            $bobot2 = 0.13;
                                            $bobot3 = 0.32;
                                            $bobot4 = 0.46;
                                            $not = 0;
                                            $c1 = array();
                                            $c2 = array();
                                            $c3 = array();
                                            $c4 = array();
                                            
                                            $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Maag'";

                                            foreach ($dbh->query($sql) as $datas) :

                                            
                                        
                                        
                                          if ($datas['cara_pengolahan'] == 'Langsung') {
                                              $c1[$not] =  $k11[$not]*$bobot1;
                                              
                                          }elseif ($datas['cara_pengolahan'] == 'Dihaluskan') {
                                            $c1[$not] =  $k11[$not]*$bobot1;
                                              
                                          }elseif ($datas['cara_pengolahan'] == 'Direbus') {
                                            $c1[$not] =  $k11[$not]*$bobot1;
                                          }else{
                                            $c1[$not] =  $k11[$not]*$bobot1;
                                          }
                                              

                                              
                                                 
                                            if ($datas['cara_penggunaan'] == 'Diminum' ) {
                                                $c2[$not] =  $k21[$not]*$bobot2;
                                              
                                            }elseif ($datas['cara_penggunaan'] == "Dimakan") {
                                                $c2[$not] =  $k21[$not]*$bobot2;
                                              
                                            }elseif ($datas['cara_penggunaan'] == "Dioles") {
                                                $c2[$not] =  $k21[$not]*$bobot2;
                                              
                                            }elseif ($datas['cara_penggunaan'] == "Dikumur") {
                                                $c2[$not] =  $k21[$not]*$bobot2;
                                            }else{
                                                $c2[$not] =  $k21[$not]*$bobot2;
                                            }

                                              
                                                if ($datas['bagian_tumbuhan'] == "Akar" ) {
        $c3[$not] =  $k31[$not]*$bobot3;
    }elseif ($datas['bagian_tumbuhan'] == "Umbi") {
     $c3[$not] =  $k31[$not]*$bobot3;
    }elseif ($datas['bagian_tumbuhan'] == "Semua") {
        $c3[$not] =  $k31[$not]*$bobot3;
    }elseif ($datas['bagian_tumbuhan'] == "Kulit Buah") {
    $c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Kulit Batang") {
$c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Daun") {
$c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Batang") {
$c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Getah") {
$c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Bunga") {
$c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Biji") {
 $c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Buah") {
    $c3[$not] =  $k31[$not]*$bobot3;
    }else{
   $c3[$not] =  $k31[$not]*$bobot3;
                                          }
                                            

                                            
    if ($datas['jenis_tumbuhan'] == "Pohon") {
        $c4[$not] =  $k41[$not]*$bobot4;
    }elseif ($datas['jenis_tumbuhan'] == "Liana") {
    $c4[$not] =  $k41[$not]*$bobot4;}
    elseif ($datas['jenis_tumbuhan'] == "Herba") {
        $c4[$not] =  $k41[$not]*$bobot4;}
    elseif ($datas['jenis_tumbuhan'] == "Perdu") {
    $c4[$not] =  $k41[$not]*$bobot4;}
    elseif ($datas['jenis_tumbuhan'] == "Semak") {
    $c4[$not] =  $k41[$not]*$bobot4;
    }else{
   $c4[$not] =  $k41[$not]*$bobot4;
    }
                                            
                                                 $benefit[$not] = $c1[$not]+$c2[$not]+$c3[$not]+$c4[$not]; 
                                            
                                         $not++;
                                         endforeach;
                                         $noti = 0;
                                         foreach ($dbh->query($sql) as $datas) {
                                          ?>
                            <tr>
                                <td> <?php echo $datas['nama_tumbuhan'] ;?></td>
                                <td><?php echo number_format($c1[$noti],4); ?></td>
                                <td><?php echo number_format($c2[$noti],4); ?></td>
                                <td><?php echo number_format($c3[$noti],4); ?></td>
                                <td><?php echo number_format($c4[$noti],4); ?></td>
                                <td><?php echo number_format($benefit[$noti],4); ?></td>
                                <td><?php echo number_format($benefit[$noti],4); ?></td>
                                <td><?php echo number_format(($benefit[$noti]/max($benefit))*100, 2);
                                $pi[$noti] = ($benefit[$noti]/max($benefit))*100;  ?>%</td>
                            </tr>
                        <?php
                        $ranking = "update tumbuhan_obat SET qi = '$benefit[$noti]', pi = '$pi[$noti]' where id_tumbuhan ='$datas[id_tumbuhan]'";
                        if ($dbh->query($ranking) === TRUE) {
                           }  
                        $noti++;
                    } ?>
                                
                            </tbody>


</table>
                            </div>
                            <!-- Hitungan Sariawan -->
                            <div id="sariawan" class="tab-pane">
                                <h3><center>COPRAS</center></h3>
                                <hr>
                                <h4>Matriks</h4>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Nama</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $no = 0;
                                            $k1 = array();
                                            $k2 = array();
                                            $k3 = array();
                                            $k4 = array();
                                            
                                            $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Sariawan'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                        ?>
                                          <tr>
                                          <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                          
                                          <td><?php 
                                          if ($datas['cara_pengolahan'] == 'Langsung') {
                                              echo $diare1/$total;
                                              $k1[$no] = $diare1/$total;
                                          }elseif ($datas['cara_pengolahan'] == 'Dihaluskan') {
                                            echo $diare2/$total;
                                            $k1[$no] = $diare2/$total;
                                          }elseif ($datas['cara_pengolahan'] == 'Direbus') {
                                            echo $diare3/$total;
                                            $k1[$no] = $diare3/$total;
                                          }else{
                                            echo 0;
                                            $k1[$no] = 0;
                                          }?>
                                              
                                          </td>

                                          
                                          <td><?php
                                            if ($datas['cara_penggunaan'] == 'Diminum' ) {
                                                echo $diare5/$total;
                                                $k2[$no] = $diare5/$total;
                                                
                                            }elseif ($datas['cara_penggunaan'] == "Dimakan") {
                                                echo $diare6/$total;
                                                $k2[$no] = $diare6/$total;
                                                
                                            }elseif ($datas['cara_penggunaan'] == "Dioles") {
                                                echo $diare7/$total;
                                                $k2[$no] = $diare7/$total;
                                                
                                            }elseif ($datas['cara_penggunaan'] == "Dikumur") {
                                                echo $diare8/$total;
                                                $k2[$no] = $diare8/$total;
                                                
                                            }else{
                                                $k2[$no] = 0;
                                                echo 0;
                                            }?></td>

                                            <td>
                                                <?php 
                                                if ($datas['bagian_tumbuhan'] == "Akar" ) {
        echo $diare11/$total;
        $k3[$no] = $diare11/$total;

    }elseif ($datas['bagian_tumbuhan'] == "Umbi") {
        echo $diare12/$total;
        $k3[$no] = $diare12/$total;
        
    }elseif ($datas['bagian_tumbuhan'] == "Semua") {
        echo $diare13/$total;
        $k3[$no] = $diare13/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Kulit buah") {
        echo $diare14/$total;
        $k3[$no] = $diare14/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Kulit Batang") {
        
        $k3[$no] = $diare15/$total;
        echo $k3[$no];
        
    }elseif ($datas['bagian_tumbuhan'] == "Daun") {
        echo $diare16/$total;
        $k3[$no] = $diare16/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Batang") {
        echo $diare17/$total;
        $k3[$no] = $diare17/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Getah") {
        echo $diare18/$total;
        $k3[$no] = $diare18/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Bunga") {
        echo $diare19/$total;
        $k3[$no] = $diare19/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Biji") {
        echo $diare20/$total;
        $k3[$no] = $diare20/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Buah") {
        echo $diare21/$total;
        $k3[$no] = $diare21/$total;
        
    }else{
        echo 0;
        $k3[$no] = 0;
    }
                                                 ?>
                                            </td>

                                            <td>
                                                <?php 
    if ($datas['jenis_tumbuhan'] == "Pohon") {
        echo $diare22/$total;
        $k4[$no] = $diare22/$total;
    }elseif ($datas['jenis_tumbuhan'] == "Liana") {
        echo $diare23/$total;
        $k4[$no] = $diare23/$total;
    }
    elseif ($datas['jenis_tumbuhan'] == "Herba") {
        echo $diare24/$total;
        $k4[$no] = $diare24/$total;
    }
    elseif ($datas['jenis_tumbuhan'] == "Perdu") {
        echo $diare25/$total;
        $k4[$no] = $diare25/$total;
    }
    elseif ($datas['jenis_tumbuhan'] == "Semak") {
        echo $diare26/$total;
        $k4[$no] = $diare26/$total;
    }else{
        echo 0;
        $k4[$no] = 0;
    }
                                                 ?>
                                            </td>    
                                          </tr>
                                          <?php
                                                $no++;
                                                endforeach;
                                        ?>
                                        <tr>
                                            <td> Jumlah</td>
                                            <td><?php $k111 = array_sum($k1) ;
                                            echo $k111; ?></td>
                                            <td><?php 
                                            $k211 = array_sum($k2) ;
                                            echo $k211 ; ?></td>
                                            <td><?php 
                                            $k311 = array_sum($k3) ;
                                            echo $k311 ; ?></td>
                                            <td><?php 
                                            $k411 = array_sum($k4) ;
                                            echo $k411 ; ?></td>
                                        </tr>
                                       
                                    </tbody>
                                    
                                </table>

                                
                                <h4>Normalisasi Matriks</h4>
                                <hr>
                                <table class="table table-bordered table-hovered">
                                    <thead>
                                        <td>Nama</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $not = 0;
                                            $k11 = array();
                                            $k21 = array();
                                            $k31 = array();
                                            $k41 = array();
                                            
                                            $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Sariawan'";

                                            foreach ($dbh->query($sql) as $datas) :
                                        ?>
                                          <tr>
                                          <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                            <td><?php 
                                          if ($datas['cara_pengolahan'] == 'Langsung') {
                                              $k11[$not]=$k1[$not]/$k111;
                                              echo $k11[$not];
                                          }elseif ($datas['cara_pengolahan'] == 'Dihaluskan') {
                                            $k11[$not]=$k1[$not]/$k111;
                                              echo $k11[$not];
                                          }elseif ($datas['cara_pengolahan'] == 'Direbus') {
                                            $k11[$not]=$k1[$not]/$k111;
                                              echo $k11[$not];
                                          }
                                          else{
    $k11[$not]=$k1[$not]/$k111;
                                              echo $k11[$not];
                                         }?>
                                              </td>

                                              
                                                  <td><?php
                                            if ($datas['cara_penggunaan'] == 'Diminum' ) {
                                                $k21[$not]=$k2[$not]/$k211;

                                                echo $k21[$not];
                                                
                                            }elseif ($datas['cara_penggunaan'] == "Dimakan") {
                                                $k21[$not]=$k2[$not]/$k211;

                                                echo $k21[$not];
                                            }elseif ($datas['cara_penggunaan'] == "Dioles") {
                                                $k21[$not]=$k2[$not]/$k211;

                                                echo $k21[$not];
                                            }elseif ($datas['cara_penggunaan'] == "Dikumur") {
                                                $k21[$not]=$k2[$not]/$k211;

                                                echo $k21[$not];
                                            }else{
      $k21[$not]=$k2[$not]/$k211;

                                                echo $k21[$not];  }?></td>

                                              <td>
                                                <?php 
                                                if ($datas['bagian_tumbuhan'] == "Akar" ) {
        $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    }elseif ($datas['bagian_tumbuhan'] == "Umbi") {
     $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
       
    }elseif ($datas['bagian_tumbuhan'] == "Semua") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Kulit Buah") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Kulit Batang") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Daun") { 
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Batang") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Getah") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Bunga") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Biji") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Buah") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
        
    }else{
  $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
     }
                                                 ?>
                                            </td>

                                            <td>
                                                <?php 
    if ($datas['jenis_tumbuhan'] == "Pohon") {
        $k41[$not]=$k4[$not]/$k411;

                                                echo $k41[$not];
    
    }elseif ($datas['jenis_tumbuhan'] == "Liana") {
    
        $k41[$not]=$k4[$not]/$k411;

                                                echo $k41[$not];
    }
    elseif ($datas['jenis_tumbuhan'] == "Herba") {
    
        $k41[$not]=$k4[$not]/$k411;

                                                echo $k41[$not];
    }
    elseif ($datas['jenis_tumbuhan'] == "Perdu") {
    
        $k41[$not]=$k4[$not]/$k411;

                                                echo $k41[$not];
    }
    elseif ($datas['jenis_tumbuhan'] == "Semak") {
    
        $k41[$not]=$k4[$not]/$k411;

                                                echo $k41[$not];
    }else{
       $k41[$not]=$k4[$not]/$k411;

                                                echo $k41[$not];
      }
                                                 ?>
                                            </td>    
                                         </tr>
                                         <?php 
                                         $not++;
                                         endforeach;
                                          ?>
                                                                           
                                    </tbody>
                                </table>
                                <h4>Normalisasi Bobot</h4>
                                <hr>
                                <table class="table table-bordered table-hovered">
                                    <thead>
                                        <td>Nama</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                        <td>Jumlah Bobot Benefit</td>
                                        <td>Qi</td>
                                        <td>Utilitas (Pi%)</td>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $bobot1 = 0.09;
                                            $bobot2 = 0.13;
                                            $bobot3 = 0.32;
                                            $bobot4 = 0.46;
                                            $not = 0;
                                            $c1 = array();
                                            $c2 = array();
                                            $c3 = array();
                                            $c4 = array();
                                            
                                            $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Sariawan'";

                                            foreach ($dbh->query($sql) as $datas) :

                                            
                                        
                                        
                                          if ($datas['cara_pengolahan'] == 'Langsung') {
                                              $c1[$not] =  $k11[$not]*$bobot1;
                                              
                                          }elseif ($datas['cara_pengolahan'] == 'Dihaluskan') {
                                            $c1[$not] =  $k11[$not]*$bobot1;
                                              
                                          }elseif ($datas['cara_pengolahan'] == 'Direbus') {
                                            $c1[$not] =  $k11[$not]*$bobot1;
                                          }else{
                                           $c1[$not] =  $k11[$not]*$bobot1;
                                          }
                                              

                                              
                                                 
                                            if ($datas['cara_penggunaan'] == 'Diminum' ) {
                                                $c2[$not] =  $k21[$not]*$bobot2;
                                              
                                            }elseif ($datas['cara_penggunaan'] == "Dimakan") {
                                                $c2[$not] =  $k21[$not]*$bobot2;
                                              
                                            }elseif ($datas['cara_penggunaan'] == "Dioles") {
                                                $c2[$not] =  $k21[$not]*$bobot2;
                                              
                                            }elseif ($datas['cara_penggunaan'] == "Dikumur") {
                                                $c2[$not] =  $k21[$not]*$bobot2;
                                            }else{
                                               $c2[$not] =  $k21[$not]*$bobot2;
                                             }

                                              
                                                if ($datas['bagian_tumbuhan'] == "Akar" ) {
        $c3[$not] =  $k31[$not]*$bobot3;
    }elseif ($datas['bagian_tumbuhan'] == "Umbi") {
     $c3[$not] =  $k31[$not]*$bobot3;
    }elseif ($datas['bagian_tumbuhan'] == "Semua") {
        $c3[$not] =  $k31[$not]*$bobot3;
    }elseif ($datas['bagian_tumbuhan'] == "Kulit buah") {
    $c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Kulit Batang") {
$c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Daun") {
$c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Batang") {
$c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Getah") {
$c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Bunga") {
$c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Biji") {
 $c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Buah") {
    $c3[$not] =  $k31[$not]*$bobot3;
    }else{
    $c3[$not] =  $k31[$not]*$bobot3;
                                          }
                                            

                                            
    if ($datas['jenis_tumbuhan'] == "Pohon") {
        $c4[$not] =  $k41[$not]*$bobot4;
    }elseif ($datas['jenis_tumbuhan'] == "Liana") {
    $c4[$not] =  $k41[$not]*$bobot4;}
    elseif ($datas['jenis_tumbuhan'] == "Herba") {
        $c4[$not] =  $k41[$not]*$bobot4;}
    elseif ($datas['jenis_tumbuhan'] == "Perdu") {
    $c4[$not] =  $k41[$not]*$bobot4;}
    elseif ($datas['jenis_tumbuhan'] == "Semak") {
    $c4[$not] =  $k41[$not]*$bobot4;
    }else{
    $c4[$not] =  $k41[$not]*$bobot4;
    }
                                            
                                                 $benefit[$not] = $c1[$not]+$c2[$not]+$c3[$not]+$c4[$not]; 
                                            
                                         $not++;
                                         endforeach;
                                         $noti = 0;
                                         foreach ($dbh->query($sql) as $datas) {
                                          ?>
                            <tr>
                                <td> <?php echo $datas['nama_tumbuhan'] ;?></td>
                                <td><?php echo number_format($c1[$noti],4); ?></td>
                                <td><?php echo number_format($c2[$noti],4); ?></td>
                                <td><?php echo number_format($c3[$noti],4); ?></td>
                                <td><?php echo number_format($c4[$noti],4); ?></td>
                                <td><?php echo number_format($benefit[$noti],4); ?></td>
                                <td><?php echo number_format($benefit[$noti],4); ?></td>
                                <td><?php echo number_format(($benefit[$noti]/max($benefit))*100, 2);
                                  $pi[$noti] = ($benefit[$noti]/max($benefit))*100;
                                  ?>%</td>
                            </tr>
                        <?php
                        $ranking = "update tumbuhan_obat SET qi = '$benefit[$noti]', pi = '$pi[$noti]' where id_tumbuhan ='$datas[id_tumbuhan]'";
                        if ($dbh->query($ranking) === TRUE) {
                           }  
                        $noti++;
                    } ?>
                                
                            </tbody>


</table>
                            </div>
                            <!-- Hitungan Ambeien -->
                            <div id="ambeien" class="tab-pane">
                                <!-- copras -->
                                <h3><center>COPRAS</center></h3>
                                <hr>
                                <h4>Matriks</h4>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Nama</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $no = 0;
                                            $k1 = array();
                                            $k2 = array();
                                            $k3 = array();
                                            $k4 = array();
                                            
                                            $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Ambeien'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                        ?>
                                          <tr>
                                          <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                          
                                          <td><?php 
                                          if ($datas['cara_pengolahan'] == 'Langsung') {
                                              echo $diare1/$total;
                                              $k1[$no] = $diare1/$total;
                                          }elseif ($datas['cara_pengolahan'] == 'Dihaluskan') {
                                            echo $diare2/$total;
                                            $k1[$no] = $diare2/$total;
                                          }elseif ($datas['cara_pengolahan'] == 'Direbus') {
                                            echo $diare3/$total;
                                            $k1[$no] = $diare3/$total;
                                          }else{
                                            echo 0;
                                            $k1[$no] = 0;
                                          }?>
                                              
                                          </td>

                                          
                                          <td><?php
                                            if ($datas['cara_penggunaan'] == 'Diminum' ) {
                                                echo $diare5/$total;
                                                $k2[$no] = $diare5/$total;
                                                
                                            }elseif ($datas['cara_penggunaan'] == "Dimakan") {
                                                echo $diare6/$total;
                                                $k2[$no] = $diare6/$total;
                                                
                                            }elseif ($datas['cara_penggunaan'] == "Dioles") {
                                                echo $diare7/$total;
                                                $k2[$no] = $diare7/$total;
                                                
                                            }elseif ($datas['cara_penggunaan'] == "Dikumur") {
                                                echo $diare8/$total;
                                                $k2[$no] = $diare8/$total;
                                                
                                            }else{
                                                $k2[$no] = 0;
                                                echo 0;
                                            }?></td>

                                            <td>
                                                <?php 
                                                if ($datas['bagian_tumbuhan'] == "Akar" ) {
        echo $diare11/$total;
        $k3[$no] = $diare11/$total;

    }elseif ($datas['bagian_tumbuhan'] == "Umbi") {
        echo $diare12/$total;
        $k3[$no] = $diare12/$total;
        
    }elseif ($datas['bagian_tumbuhan'] == "Semua") {
        echo $diare13/$total;
        $k3[$no] = $diare13/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Kulit buah") {
        echo $diare14/$total;
        $k3[$no] = $diare14/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Kulit Batang") {
        
        $k3[$no] = $diare15/$total;
        echo $k3[$no];
        
    }elseif ($datas['bagian_tumbuhan'] == "Daun") {
        echo $diare16/$total;
        $k3[$no] = $diare16/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Batang") {
        echo $diare17/$total;
        $k3[$no] = $diare17/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Getah") {
        echo $diare18/$total;
        $k3[$no] = $diare18/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Bunga") {
        echo $diare19/$total;
        $k3[$no] = $diare19/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Biji") {
        echo $diare20/$total;
        $k3[$no] = $diare20/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Buah") {
        echo $diare21/$total;
        $k3[$no] = $diare21/$total;
        
    }else{
        echo 0;
        $k3[$no] = 0;
    }
                                                 ?>
                                            </td>

                                            <td>
                                                <?php 
    if ($datas['jenis_tumbuhan'] == "Pohon") {
        echo $diare22/$total;
        $k4[$no] = $diare22/$total;
    }elseif ($datas['jenis_tumbuhan'] == "Liana") {
        echo $diare23/$total;
        $k4[$no] = $diare23/$total;
    }
    elseif ($datas['jenis_tumbuhan'] == "Herba") {
        echo $diare24/$total;
        $k4[$no] = $diare24/$total;
    }
    elseif ($datas['jenis_tumbuhan'] == "perdu" or $datas['jenis_tumbuhan'] == "Perdu") {
        echo $diare25/$total;
        $k4[$no] = $diare25/$total;
    }
    elseif ($datas['jenis_tumbuhan'] == "Semak") {
        echo $diare26/$total;
        $k4[$no] = $diare26/$total;
    }else{
        echo 0;
        $k4[$no] = 0;
    }
                                                 ?>
                                            </td>    
                                          </tr>
                                          <?php
                                                $no++;
                                                endforeach;
                                        ?>
                                        <tr>
                                            <td> Jumlah</td>
                                            <td><?php $k111 = array_sum($k1) ;
                                            echo $k111; ?></td>
                                            <td><?php 
                                            $k211 = array_sum($k2) ;
                                            echo $k211 ; ?></td>
                                            <td><?php 
                                            $k311 = array_sum($k3) ;
                                            echo $k311 ; ?></td>
                                            <td><?php 
                                            $k411 = array_sum($k4) ;
                                            echo $k411 ; ?></td>
                                        </tr>
                                       
                                    </tbody>
                                    
                                </table>
                                
                                <h4>Normalisasi Matriks</h4>
                                <hr>
                                <table class="table table-bordered table-hovered">
                                    <thead>
                                        <td>Nama</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $not = 0;
                                            $k11 = array();
                                            $k21 = array();
                                            $k31 = array();
                                            $k41 = array();
                                            
                                            $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Ambeien'";

                                            foreach ($dbh->query($sql) as $datas) :
                                        ?>
                                          <tr>
                                          <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                            <td><?php 
                                          if ($datas['cara_pengolahan'] == 'Langsung') {
                                              $k11[$not]=$k1[$not]/$k111;
                                              echo $k11[$not];
                                          }elseif ($datas['cara_pengolahan'] == 'Dihaluskan') {
                                            $k11[$not]=$k1[$not]/$k111;
                                              echo $k11[$not];
                                          }elseif ($datas['cara_pengolahan'] == 'Direbus') {
                                            $k11[$not]=$k1[$not]/$k111;
                                              echo $k11[$not];
                                          }
                                          else{
         $k11[$not]=$k1[$not]/$k111;
                                              echo $k11[$not];
                                       }?>
                                              </td>

                                              
                                                  <td><?php
                                            if ($datas['cara_penggunaan'] == 'Diminum' ) {
                                                $k21[$not]=$k2[$not]/$k211;

                                                echo $k21[$not];
                                                
                                            }elseif ($datas['cara_penggunaan'] == "Dimakan") {
                                                $k21[$not]=$k2[$not]/$k211;

                                                echo $k21[$not];
                                            }elseif ($datas['cara_penggunaan'] == "Dioles") {
                                                $k21[$not]=$k2[$not]/$k211;

                                                echo $k21[$not];
                                            }elseif ($datas['cara_penggunaan'] == "Dikumur") {
                                                $k21[$not]=$k2[$not]/$k211;

                                                echo $k21[$not];
                                            }else{
       $k21[$not]=$k2[$not]/$k211;

                                                echo $k21[$not];
                                            }?></td>

                                              <td>
                                                <?php 
                                                if ($datas['bagian_tumbuhan'] == "Akar" ) {
        $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    }elseif ($datas['bagian_tumbuhan'] == "Umbi") {
     $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
       
    }elseif ($datas['bagian_tumbuhan'] == "Semua") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Kulit buah") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Kulit Batang") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Daun") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Batang") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Getah") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Bunga") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Biji") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Buah") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
        
    }else{
     $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
        
    }
                                                 ?>
                                            </td>

                                            <td>
                                                <?php 
    if ($datas['jenis_tumbuhan'] == "Pohon") {
        $k41[$not]=$k4[$not]/$k411;

                                                echo $k41[$not];
    
    }elseif ($datas['jenis_tumbuhan'] == "Liana") {
    
        $k41[$not]=$k4[$not]/$k411;

                                                echo $k41[$not];
    }
    elseif ($datas['jenis_tumbuhan'] == "Herba") {
    
        $k41[$not]=$k4[$not]/$k411;

                                                echo $k41[$not];
    }
    elseif ($datas['jenis_tumbuhan'] == "Perdu") {
    
        $k41[$not]=$k4[$not]/$k411;

                                                echo $k41[$not];
    }
    elseif ($datas['jenis_tumbuhan'] == "Semak") {
    
        $k41[$not]=$k4[$not]/$k411;

                                                echo $k41[$not];
    }else{
     $k41[$not]=$k4[$not]/$k411;

                                                echo $k41[$not];
       }
                                                 ?>
                                            </td>    
                                         </tr>
                                         <?php 
                                         $not++;
                                         endforeach;
                                          ?>
                                                                           
                                    </tbody>
                                </table>
                                <h4>Normalisasi Bobot</h4>
                                <hr>
                                <table class="table table-bordered table-hovered">
                                    <thead>
                                        <td>Nama</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                        <td>Jumlah Bobot Benefit</td>
                                        <td>Qi</td>
                                        <td>Utilitas (Pi%)</td>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $bobot1 = 0.09;
                                            $bobot2 = 0.13;
                                            $bobot3 = 0.32;
                                            $bobot4 = 0.46;
                                            $not = 0;
                                            $c1 = array();
                                            $c2 = array();
                                            $c3 = array();
                                            $c4 = array();
                                            
                                            $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Ambeien'";

                                            foreach ($dbh->query($sql) as $datas) :

                                            
                                        
                                        
                                          if ($datas['cara_pengolahan'] == 'Langsung') {
                                              $c1[$not] =  $k11[$not]*$bobot1;
                                              
                                          }elseif ($datas['cara_pengolahan'] == 'Dihaluskan') {
                                            $c1[$not] =  $k11[$not]*$bobot1;
                                              
                                          }elseif ($datas['cara_pengolahan'] == 'Direbus') {
                                            $c1[$not] =  $k11[$not]*$bobot1;
                                          }else{
                                           $c1[$not] =  $k11[$not]*$bobot1;
                                            }
                                              

                                              
                                                 
                                            if ($datas['cara_penggunaan'] == 'Diminum' ) {
                                                $c2[$not] =  $k21[$not]*$bobot2;
                                              
                                            }elseif ($datas['cara_penggunaan'] == "Dimakan") {
                                                $c2[$not] =  $k21[$not]*$bobot2;
                                              
                                            }elseif ($datas['cara_penggunaan'] == "Dioles") {
                                                $c2[$not] =  $k21[$not]*$bobot2;
                                              
                                            }elseif ($datas['cara_penggunaan'] == "Dikumur") {
                                                $c2[$not] =  $k21[$not]*$bobot2;
                                            }else{
                                             $c2[$not] =  $k21[$not]*$bobot2;
                                               }

                                              
                                                if ($datas['bagian_tumbuhan'] == "Akar" ) {
        $c3[$not] =  $k31[$not]*$bobot3;
    }elseif ($datas['bagian_tumbuhan'] == "Umbi") {
     $c3[$not] =  $k31[$not]*$bobot3;
    }elseif ($datas['bagian_tumbuhan'] == "Semua") {
        $c3[$not] =  $k31[$not]*$bobot3;
    }elseif ($datas['bagian_tumbuhan'] == "Kulit buah") {
    $c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Kulit Batang") {
$c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Daun") {
$c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Batang") {
$c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Getah") {
$c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Bunga") {
$c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Biji") {
 $c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Buah") {
    $c3[$not] =  $k31[$not]*$bobot3;
    }else{
      $c3[$not] =  $k31[$not]*$bobot3;
                                        }
                                            

                                            
    if ($datas['jenis_tumbuhan'] == "Pohon") {
        $c4[$not] =  $k41[$not]*$bobot4;
    }elseif ($datas['jenis_tumbuhan'] == "Liana") {
    $c4[$not] =  $k41[$not]*$bobot4;}
    elseif ($datas['jenis_tumbuhan'] == "Herba") {
        $c4[$not] =  $k41[$not]*$bobot4;}
    elseif ($datas['jenis_tumbuhan'] == "Perdu") {
    $c4[$not] =  $k41[$not]*$bobot4;}
    elseif ($datas['jenis_tumbuhan'] == "Semak") {
    $c4[$not] =  $k41[$not]*$bobot4;
    }else{
    $c4[$not] =  $k41[$not]*$bobot4;
    }
                                            
                                                 $benefit[$not] = $c1[$not]+$c2[$not]+$c3[$not]+$c4[$not]; 
                                            
                                         $not++;
                                         endforeach;
                                         $noti = 0;
                                         foreach ($dbh->query($sql) as $datas) {
                                          ?>
                            <tr>
                                <td> <?php echo $datas['nama_tumbuhan'] ;?></td>
                                <td><?php echo number_format($c1[$noti],4); ?></td>
                                <td><?php echo number_format($c2[$noti],4); ?></td>
                                <td><?php echo number_format($c3[$noti],4); ?></td>
                                <td><?php echo number_format($c4[$noti],4); ?></td>
                                <td><?php echo number_format($benefit[$noti],4); ?></td>
                                <td><?php echo number_format($benefit[$noti],4); ?></td>
                                <td><?php echo number_format(($benefit[$noti]/max($benefit))*100, 2);  
                                $pi[$noti] = ($benefit[$noti]/max($benefit))*100; ?>%</td>
                            </tr>
                        <?php  
                        $ranking = "update tumbuhan_obat SET qi = '$benefit[$noti]', pi = '$pi[$noti]' where id_tumbuhan ='$datas[id_tumbuhan]'";
                        if ($dbh->query($ranking) === TRUE) {
                           }
                        $noti++;
                    } ?>
                                
                            </tbody>


</table>
                            </div>
                            <!-- Hitungan Sakit Perut -->
                            <div id="perut" class="tab-pane">
                                <!-- copras -->
                                <h3><center>COPRAS</center></h3>
                                <hr>
                                <h4>Matriks</h4>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Nama</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $no = 0;
                                            $k1 = array();
                                            $k2 = array();
                                            $k3 = array();
                                            $k4 = array();
                                            
                                            $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Sakit Perut'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                        ?>
                                          <tr>
                                          <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                          
                                          <td><?php 
                                          if ($datas['cara_pengolahan'] == 'Langsung') {
                                              echo $diare1/$total;
                                              $k1[$no] = $diare1/$total;
                                          }elseif ($datas['cara_pengolahan'] == 'Dihaluskan') {
                                            echo $diare2/$total;
                                            $k1[$no] = $diare2/$total;
                                          }elseif ($datas['cara_pengolahan'] == 'Direbus') {
                                            echo $diare3/$total;
                                            $k1[$no] = $diare3/$total;
                                          }else{
                                            echo 0;
                                            $k1[$no] = 0;
                                          }?>
                                              
                                          </td>

                                          
                                          <td><?php
                                            if ($datas['cara_penggunaan'] == 'Diminum' ) {
                                                echo $diare5/$total;
                                                $k2[$no] = $diare5/$total;
                                                
                                            }elseif ($datas['cara_penggunaan'] == "Dimakan") {
                                                echo $diare6/$total;
                                                $k2[$no] = $diare6/$total;
                                                
                                            }elseif ($datas['cara_penggunaan'] == "Dioles") {
                                                echo $diare7/$total;
                                                $k2[$no] = $diare7/$total;
                                                
                                            }elseif ($datas['cara_penggunaan'] == "Dikumur") {
                                                echo $diare8/$total;
                                                $k2[$no] = $diare8/$total;
                                                
                                            }else{
                                                $k2[$no] = 0;
                                                echo 0;
                                            }?></td>

                                            <td>
                                                <?php 
                                                if ($datas['bagian_tumbuhan'] == "Akar" ) {
        echo $diare11/$total;
        $k3[$no] = $diare11/$total;

    }elseif ($datas['bagian_tumbuhan'] == "Umbi") {
        echo $diare12/$total;
        $k3[$no] = $diare12/$total;
        
    }elseif ($datas['bagian_tumbuhan'] == "Semua") {
        echo $diare13/$total;
        $k3[$no] = $diare13/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Kulit buah") {
        echo $diare14/$total;
        $k3[$no] = $diare14/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Kulit Batang") {
        
        $k3[$no] = $diare15/$total;
        echo $k3[$no];
        
    }elseif ($datas['bagian_tumbuhan'] == "Daun") {
        echo $diare16/$total;
        $k3[$no] = $diare16/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Batang") {
        echo $diare17/$total;
        $k3[$no] = $diare17/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Getah") {
        echo $diare18/$total;
        $k3[$no] = $diare18/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Bunga") {
        echo $diare19/$total;
        $k3[$no] = $diare19/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Biji") {
        echo $diare20/$total;
        $k3[$no] = $diare20/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Buah") {
        echo $diare21/$total;
        $k3[$no] = $diare21/$total;
        
    }else{
        echo 0;
        $k3[$no] = 0;
    }
                                                 ?>
                                            </td>

                                            <td>
                                                <?php 
    if ($datas['jenis_tumbuhan'] == "Pohon") {
        echo $diare22/$total;
        $k4[$no] = $diare22/$total;
    }elseif ($datas['jenis_tumbuhan'] == "Liana") {
        echo $diare23/$total;
        $k4[$no] = $diare23/$total;
    }
    elseif ($datas['jenis_tumbuhan'] == "Herba") {
        echo $diare24/$total;
        $k4[$no] = $diare24/$total;
    }
    elseif ($datas['jenis_tumbuhan'] == "perdu" or $datas['jenis_tumbuhan'] == "Perdu") {
        echo $diare25/$total;
        $k4[$no] = $diare25/$total;
    }
    elseif ($datas['jenis_tumbuhan'] == "Semak") {
        echo $diare26/$total;
        $k4[$no] = $diare26/$total;
    }else{
        echo 0;
        $k4[$no] = 0;
    }
                                                 ?>
                                            </td>    
                                          </tr>
                                          <?php
                                                $no++;
                                                endforeach;
                                        ?>
                                        <tr>
                                            <td> Jumlah</td>
                                            <td><?php $k111 = array_sum($k1) ;
                                            echo $k111; ?></td>
                                            <td><?php 
                                            $k211 = array_sum($k2) ;
                                            echo $k211 ; ?></td>
                                            <td><?php 
                                            $k311 = array_sum($k3) ;
                                            echo $k311 ; ?></td>
                                            <td><?php 
                                            $k411 = array_sum($k4) ;
                                            echo $k411 ; ?></td>
                                        </tr>
                                       
                                    </tbody>
                                    
                                </table>
                                
                                <h4>Normalisasi Matriks</h4>
                                <hr>
                                <table class="table table-bordered table-hovered">
                                    <thead>
                                        <td>Nama</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $not = 0;
                                            $k11 = array();
                                            $k21 = array();
                                            $k31 = array();
                                            $k41 = array();
                                            
                                            $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Sakit Perut'";

                                            foreach ($dbh->query($sql) as $datas) :
                                        ?>
                                          <tr>
                                          <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                            <td><?php 
                                          if ($datas['cara_pengolahan'] == 'Langsung') {
                                              $k11[$not]=$k1[$not]/$k111;
                                              echo $k11[$not];
                                          }elseif ($datas['cara_pengolahan'] == 'Dihaluskan') {
                                            $k11[$not]=$k1[$not]/$k111;
                                              echo $k11[$not];
                                          }elseif ($datas['cara_pengolahan'] == 'Direbus') {
                                            $k11[$not]=$k1[$not]/$k111;
                                              echo $k11[$not];
                                          }
                                          else{
       $k11[$not]=$k1[$not]/$k111;
                                              echo $k11[$not];
                                        }?>
                                              </td>

                                              
                                                  <td><?php
                                            if ($datas['cara_penggunaan'] == 'Diminum' ) {
                                                $k21[$not]=$k2[$not]/$k211;

                                                echo $k21[$not];
                                                
                                            }elseif ($datas['cara_penggunaan'] == "Dimakan") {
                                                $k21[$not]=$k2[$not]/$k211;

                                                echo $k21[$not];
                                            }elseif ($datas['cara_penggunaan'] == "Dioles") {
                                                $k21[$not]=$k2[$not]/$k211;

                                                echo $k21[$not];
                                            }elseif ($datas['cara_penggunaan'] == "Dikumur") {
                                                $k21[$not]=$k2[$not]/$k211;

                                                echo $k21[$not];
                                            }else{
          $k21[$not]=$k2[$not]/$k211;

                                                echo $k21[$not];
    }?></td>

                                              <td>
                                                <?php 
                                                if ($datas['bagian_tumbuhan'] == "Akar" ) {
        $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    }elseif ($datas['bagian_tumbuhan'] == "Umbi") {
     $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
       
    }elseif ($datas['bagian_tumbuhan'] == "Semua") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Kulit buah") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Kulit Batang") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Daun") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Batang") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Getah") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Bunga") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Biji") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Buah") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
        
    }else{
     $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
        
    }
                                                 ?>
                                            </td>

                                            <td>
                                                <?php 
    if ($datas['jenis_tumbuhan'] == "Pohon") {
        $k41[$not]=$k4[$not]/$k411;

                                                echo $k41[$not];
    
    }elseif ($datas['jenis_tumbuhan'] == "Liana") {
    
        $k41[$not]=$k4[$not]/$k411;

                                                echo $k41[$not];
    }
    elseif ($datas['jenis_tumbuhan'] == "Herba") {
    
        $k41[$not]=$k4[$not]/$k411;

                                                echo $k41[$not];
    }
    elseif ($datas['jenis_tumbuhan'] == "Perdu") {
    
        $k41[$not]=$k4[$not]/$k411;

                                                echo $k41[$not];
    }
    elseif ($datas['jenis_tumbuhan'] == "Semak") {
    
        $k41[$not]=$k4[$not]/$k411;

                                                echo $k41[$not];
    }else{
           $k41[$not]=$k4[$not]/$k411;

                                                echo $k41[$not];
    }
                                                 ?>
                                            </td>    
                                         </tr>
                                         <?php 
                                         $not++;
                                         endforeach;
                                          ?>
                                                                           
                                    </tbody>
                                </table>
                                <h4>Normalisasi Bobot</h4>
                                <hr>
                                <table class="table table-bordered table-hovered">
                                    <thead>
                                        <td>Nama</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                        <td>Jumlah Bobot Benefit</td>
                                        <td>Qi</td>
                                        <td>Utilitas (Pi%)</td>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $bobot1 = 0.09;
                                            $bobot2 = 0.13;
                                            $bobot3 = 0.32;
                                            $bobot4 = 0.46;
                                            $not = 0;
                                            $c1 = array();
                                            $c2 = array();
                                            $c3 = array();
                                            $c4 = array();
                                            
                                            $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Sakit Perut'";

                                            foreach ($dbh->query($sql) as $datas) :

                                            
                                        
                                        
                                          if ($datas['cara_pengolahan'] == 'Langsung') {
                                              $c1[$not] =  $k11[$not]*$bobot1;
                                              
                                          }elseif ($datas['cara_pengolahan'] == 'Dihaluskan') {
                                            $c1[$not] =  $k11[$not]*$bobot1;
                                              
                                          }elseif ($datas['cara_pengolahan'] == 'Direbus') {
                                            $c1[$not] =  $k11[$not]*$bobot1;
                                          }else{
                                            $c1[$not] =  0;
                                          }
                                              

                                              
                                                 
                                            if ($datas['cara_penggunaan'] == 'Diminum' ) {
                                                $c2[$not] =  $k21[$not]*$bobot2;
                                              
                                            }elseif ($datas['cara_penggunaan'] == "Dimakan") {
                                                $c2[$not] =  $k21[$not]*$bobot2;
                                              
                                            }elseif ($datas['cara_penggunaan'] == "Dioles") {
                                                $c2[$not] =  $k21[$not]*$bobot2;
                                              
                                            }elseif ($datas['cara_penggunaan'] == "Dikumur") {
                                                $c2[$not] =  $k21[$not]*$bobot2;
                                            }else{
                                              $c2[$not] =  $k21[$not]*$bobot2;
                                             }

                                              
                                                if ($datas['bagian_tumbuhan'] == "Akar" ) {
        $c3[$not] =  $k31[$not]*$bobot3;
    }elseif ($datas['bagian_tumbuhan'] == "Umbi") {
     $c3[$not] =  $k31[$not]*$bobot3;
    }elseif ($datas['bagian_tumbuhan'] == "Semua") {
        $c3[$not] =  $k31[$not]*$bobot3;
    }elseif ($datas['bagian_tumbuhan'] == "Kulit buah") {
    $c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Kulit Batang") {
$c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Daun") {
$c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Batang") {
$c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Getah") {
$c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Bunga") {
$c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Biji") {
 $c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Buah") {
    $c3[$not] =  $k31[$not]*$bobot3;
    }else{
    $c3[$not] =  $k31[$not]*$bobot3;
                                          }
                                            

                                            
    if ($datas['jenis_tumbuhan'] == "Pohon") {
        $c4[$not] =  $k41[$not]*$bobot4;
    }elseif ($datas['jenis_tumbuhan'] == "Liana") {
    $c4[$not] =  $k41[$not]*$bobot4;}
    elseif ($datas['jenis_tumbuhan'] == "Herba") {
        $c4[$not] =  $k41[$not]*$bobot4;}
    elseif ($datas['jenis_tumbuhan'] == "Perdu") {
    $c4[$not] =  $k41[$not]*$bobot4;}
    elseif ($datas['jenis_tumbuhan'] == "Semak") {
    $c4[$not] =  $k41[$not]*$bobot4;
    }else{
    $c4[$not] =  $k41[$not]*$bobot4;
     }
                                            
                                                 $benefit[$not] = $c1[$not]+$c2[$not]+$c3[$not]+$c4[$not]; 
                                            
                                         $not++;
                                         endforeach;
                                         $noti = 0;
                                         foreach ($dbh->query($sql) as $datas) {
                                          ?>
                            <tr>
                                <td> <?php echo $datas['nama_tumbuhan'] ;?></td>
                                <td><?php echo number_format($c1[$noti],4); ?></td>
                                <td><?php echo number_format($c2[$noti],4); ?></td>
                                <td><?php echo number_format($c3[$noti],4); ?></td>
                                <td><?php echo number_format($c4[$noti],4); ?></td>
                                <td><?php echo number_format($benefit[$noti],4); ?></td>
                                <td><?php echo number_format($benefit[$noti],4); ?></td>
                                <td><?php echo number_format(($benefit[$noti]/max($benefit))*100, 2);
                                $pi[$noti] = ($benefit[$noti]/max($benefit))*100;  ?>%</td>
                            </tr>
                        <?php  
                        $ranking = "update tumbuhan_obat SET qi = '$benefit[$noti]', pi = '$pi[$noti]' where id_tumbuhan ='$datas[id_tumbuhan]'";
                        if ($dbh->query($ranking) === TRUE) {
                           }
                        $noti++;
                    } ?>
                                
                            </tbody>


</table>
                            </div>

<!-- Hitungan Sembelit -->
                            <div id="sembelit" class="tab-pane">
                                <!-- copras -->
                                <h3><center>COPRAS</center></h3>
                                <hr>
                                <h4>Matriks</h4>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Nama</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $no = 0;
                                            $k1 = array();
                                            $k2 = array();
                                            $k3 = array();
                                            $k4 = array();
                                            
                                            $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Sembelit'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                        ?>
                                          <tr>
                                          <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                          
                                          <td><?php 
                                          if ($datas['cara_pengolahan'] == 'Langsung') {
                                              echo $diare1/$total;
                                              $k1[$no] = $diare1/$total;
                                          }elseif ($datas['cara_pengolahan'] == 'Dihaluskan') {
                                            echo $diare2/$total;
                                            $k1[$no] = $diare2/$total;
                                          }elseif ($datas['cara_pengolahan'] == 'Direbus') {
                                            echo $diare3/$total;
                                            $k1[$no] = $diare3/$total;
                                          }else{
                                            echo 0;
                                            $k1[$no] = 0;
                                            
                                          }?>
                                              
                                          </td>

                                          
                                          <td><?php
                                            if ($datas['cara_penggunaan'] == 'Diminum' ) {
                                                echo $diare5/$total;
                                                $k2[$no] = $diare5/$total;
                                                
                                            }elseif ($datas['cara_penggunaan'] == "Dimakan") {
                                                echo $diare6/$total;
                                                $k2[$no] = $diare6/$total;
                                                
                                            }elseif ($datas['cara_penggunaan'] == "Dioles") {
                                                echo $diare7/$total;
                                                $k2[$no] = $diare7/$total;
                                                
                                            }elseif ($datas['cara_penggunaan'] == "Dikumur") {
                                                echo $diare8/$total;
                                                $k2[$no] = $diare8/$total;
                                                
                                            }else{
                                                echo 0;
                                                $k2[$no] = 0;
                                          
                                            }?></td>

                                            <td>
                                                <?php 
                                                if ($datas['bagian_tumbuhan'] == "Akar" ) {
        echo $diare11/$total;
        $k3[$no] = $diare11/$total;

    }elseif ($datas['bagian_tumbuhan'] == "Umbi") {
        echo $diare12/$total;
        $k3[$no] = $diare12/$total;
        
    }elseif ($datas['bagian_tumbuhan'] == "Semua") {
        echo $diare13/$total;
        $k3[$no] = $diare13/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Kulit buah") {
        echo $diare14/$total;
        $k3[$no] = $diare14/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Kulit Batang") {
        
        $k3[$no] = $diare15/$total;
        echo $k3[$no];
        
    }elseif ($datas['bagian_tumbuhan'] == "Daun") {
        echo $diare16/$total;
        $k3[$no] = $diare16/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Batang") {
        echo $diare17/$total;
        $k3[$no] = $diare17/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Getah") {
        echo $diare18/$total;
        $k3[$no] = $diare18/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Bunga") {
        echo $diare19/$total;
        $k3[$no] = $diare19/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Biji") {
        echo $diare20/$total;
        $k3[$no] = $diare20/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Buah") {
        echo $diare21/$total;
        $k3[$no] = $diare21/$total;
        
    }else{
        echo 0;
        $k3[$no] = 0;
        
    }
                                                 ?>
                                            </td>

                                            <td>
                                                <?php 
    if ($datas['jenis_tumbuhan'] == "Pohon") {
        echo $diare22/$total;
        $k4[$no] = $diare23/$total;
    }elseif ($datas['jenis_tumbuhan'] == "Liana") {
        echo $diare23/$total;
        $k4[$no] = $diare24/$total;
    }
    elseif ($datas['jenis_tumbuhan'] == "Herba") {
        echo $diare24/$total;
        $k4[$no] = $diare25/$total;
    }
    elseif ($datas['jenis_tumbuhan'] == "perdu" or $datas['jenis_tumbuhan'] == "Perdu") {
        echo $diare25/$total;
        $k4[$no] = $diare26/$total;
    }
    elseif ($datas['jenis_tumbuhan'] == "Semak") {
        echo $diare26/$total;
        $k4[$no] = $diare26/$total;
    }else{
        echo 0;
        $k4[$no] = 0;
        
    }
                                                 ?>
                                            </td>    
                                          </tr>
                                          <?php
                                                $no++;
                                                endforeach;
                                        ?>
                                        <tr>
                                            <td> Jumlah</td>
                                            <td><?php $k111 = array_sum($k1) ;
                                            echo $k111; ?></td>
                                            <td><?php 
                                            $k211 = array_sum($k2) ;
                                            echo $k211 ; ?></td>
                                            <td><?php 
                                            $k311 = array_sum($k3) ;
                                            echo $k311 ; ?></td>
                                            <td><?php 
                                            $k411 = array_sum($k4) ;
                                            echo $k411 ; ?></td>
                                        </tr>
                                       
                                    </tbody>
                                    
                                </table>
                                <h4>Normalisasi Matriks</h4>
                                <hr>
                                <table class="table table-bordered table-hovered">
                                    <thead>
                                        <td>Nama</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $not = 0;
                                            $k11 = array();
                                            $k21 = array();
                                            $k31 = array();
                                            $k41 = array();
                                            
                                            $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Sembelit'";

                                            foreach ($dbh->query($sql) as $datas) :
                                        ?>
                                          <tr>
                                          <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                            <td><?php 
                                          if ($datas['cara_pengolahan'] == 'Langsung') {
                                              $k11[$not]=$k1[$not]/$k111;
                                              echo $k11[$not];
                                          }elseif ($datas['cara_pengolahan'] == 'Dihaluskan') {
                                            $k11[$not]=$k1[$not]/$k111;
                                              echo $k11[$not];
                                          }elseif ($datas['cara_pengolahan'] == 'Direbus') {
                                            $k11[$not]=$k1[$not]/$k111;
                                              echo $k11[$not];
                                          }else{
                                          $k11[$not]=$k1[$not]/$k111;
                                              echo $k11[$not];
                                             
                                          }?>
                                              </td>

                                              
                                                  <td><?php
                                            if ($datas['cara_penggunaan'] == 'Diminum' ) {
                                                $k21[$not]=$k2[$not]/$k211;

                                                echo $k21[$not];
                                                
                                            }elseif ($datas['cara_penggunaan'] == "Dimakan") {
                                                $k21[$not]=$k2[$not]/$k211;

                                                echo $k21[$not];
                                            }elseif ($datas['cara_penggunaan'] == "Dioles") {
                                                $k21[$not]=$k2[$not]/$k211;

                                                echo $k21[$not];
                                            }elseif ($datas['cara_penggunaan'] == "Dikumur") {
                                                $k21[$not]=$k2[$not]/$k211;

                                                echo $k21[$not];
                                            }else{
                                                $k21[$not]=$k2[$not]/$k211;

                                                echo $k21[$not];
                                                
                                            }?></td>

                                              <td>
                                                <?php 
                                                if ($datas['bagian_tumbuhan'] == "Akar" ) {
        $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    }elseif ($datas['bagian_tumbuhan'] == "Umbi") {
     $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
       
    }elseif ($datas['bagian_tumbuhan'] == "Semua") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Kulit buah") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Kulit Batang") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Daun") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Batang") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Getah") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Bunga") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Biji") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Buah") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
        
    }else{
     $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
       
    }
                                                 ?>
                                            </td>

                                            <td>
                                                <?php 
    if ($datas['jenis_tumbuhan'] == "Pohon") {
        $k41[$not]=$k4[$not]/$k411;

                                                echo $k41[$not];
    
    }elseif ($datas['jenis_tumbuhan'] == "Liana") {
    
        $k41[$not]=$k4[$not]/$k411;

                                                echo $k41[$not];
    }
    elseif ($datas['jenis_tumbuhan'] == "Herba") {
    
        $k41[$not]=$k4[$not]/$k411;

                                                echo $k41[$not];
    }
    elseif ($datas['jenis_tumbuhan'] == "Perdu") {
    
        $k41[$not]=$k4[$not]/$k411;

                                                echo $k41[$not];
    }
    elseif ($datas['jenis_tumbuhan'] == "Semak") {
    
        $k41[$not]=$k4[$not]/$k411;

                                                echo $k41[$not];
    }else{
        $k41[$not]=$k4[$not]/$k411;

                                                echo $k41[$not];
    }
                                                 ?>
                                            </td>    
                                         </tr>
                                         <?php 
                                         $not++;
                                         endforeach;
                                          ?>
                                                                           
                                    </tbody>
                                </table>
                                
                                <h4>Normalisasi Bobot</h4>
                                <hr>
                                <table class="table table-bordered table-hovered">
                                    <thead>
                                        <td>Nama</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                        <td>Jumlah Bobot Benefit</td>
                                        <td>Qi</td>
                                        <td>Utilitas (Pi%)</td>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $bobot1 = 0.09;
                                            $bobot2 = 0.13;
                                            $bobot3 = 0.32;
                                            $bobot4 = 0.46;
                                            $not = 0;
                                            $c1 = array();
                                            $c2 = array();
                                            $c3 = array();
                                            $c4 = array();
                                            
                                            $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Sembelit'";

                                            foreach ($dbh->query($sql) as $datas) :

                                            
                                        
                                        
                                          if ($datas['cara_pengolahan'] == 'Langsung') {
                                              $c1[$not] =  $k11[$not]*$bobot1;
                                              
                                          }elseif ($datas['cara_pengolahan'] == 'Dihaluskan') {
                                            $c1[$not] =  $k11[$not]*$bobot1;
                                              
                                          }elseif ($datas['cara_pengolahan'] == 'Direbus') {
                                            $c1[$not] =  $k11[$not]*$bobot1;
                                              
                                          }else{
                                            $c1[$not] =  $k11[$not]*$bobot1;
                                          }
                                              

                                              
                                                 
                                            if ($datas['cara_penggunaan'] == 'Diminum' ) {
                                                $c2[$not] =  $k21[$not]*$bobot2;
                                              
                                            }elseif ($datas['cara_penggunaan'] == "Dimakan") {
                                                $c2[$not] =  $k21[$not]*$bobot2;
                                              
                                            }elseif ($datas['cara_penggunaan'] == "Dioles") {
                                                $c2[$not] =  $k21[$not]*$bobot2;
                                              
                                            }elseif ($datas['cara_penggunaan'] == "Dikumur") {
                                                $c2[$not] =  $k21[$not]*$bobot2;
                                            }else{
                                                $c2[$not] =  $k21[$not]*$bobot2;    
                                            }

                                              
                                                if ($datas['bagian_tumbuhan'] == "Akar" ) {
        $c3[$not] =  $k31[$not]*$bobot3;
    }elseif ($datas['bagian_tumbuhan'] == "Umbi") {
     $c3[$not] =  $k31[$not]*$bobot3;
    }elseif ($datas['bagian_tumbuhan'] == "Semua") {
        $c3[$not] =  $k31[$not]*$bobot3;
    }elseif ($datas['bagian_tumbuhan'] == "Kulit buah") {
    $c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Kulit Batang") {
$c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Daun") {
$c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Batang") {
$c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Getah") {
$c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Bunga") {
$c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Biji") {
 $c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Buah") {
    $c3[$not] =  $k31[$not]*$bobot3;
    }else{
    $c3[$not] =  $k31[$not]*$bobot3;    
    }
                                            

                                            
    if ($datas['jenis_tumbuhan'] == "Pohon") {
        $c4[$not] =  $k41[$not]*$bobot4;
    }elseif ($datas['jenis_tumbuhan'] == "Liana") {
    $c4[$not] =  $k41[$not]*$bobot4;}

    elseif ($datas['jenis_tumbuhan'] == "Herba") {
        $c4[$not] =  $k41[$not]*$bobot4;}
    elseif ($datas['jenis_tumbuhan'] == "Perdu") {
    $c4[$not] =  $k41[$not]*$bobot4;}
    elseif ($datas['jenis_tumbuhan'] == "Semak") {
    $c4[$not] =  $k41[$not]*$bobot4;
}else{
$c4[$not] =  $k41[$not]*$bobot4;    
}
                                            
                                                 $benefit[$not] = $c1[$not]+$c2[$not]+$c3[$not]+$c4[$not]; 
                                            
                                         $not++;
                                         endforeach;
                                         $noti = 0;
                                         foreach ($dbh->query($sql) as $datas) {
                                          ?>
                            <tr>
                                <td> <?php echo $datas['nama_tumbuhan'] ;?></td>
                                <td><?php echo number_format($c1[$noti],4); ?></td>
                                <td><?php echo number_format($c2[$noti],4); ?></td>
                                <td><?php echo number_format($c3[$noti],4); ?></td>
                                <td><?php echo number_format($c4[$noti],4); ?></td>
                                <td><?php echo number_format($benefit[$noti],4); ?></td>
                                <td><?php echo number_format($benefit[$noti],4); ?></td>
                                <td><?php echo number_format(($benefit[$noti]/max($benefit))*100, 2); 
                                $pi[$noti] = ($benefit[$noti]/max($benefit))*100; ?>%</td>
                            </tr>
                        <?php  
                        $ranking = "update tumbuhan_obat SET qi = '$benefit[$noti]', pi ='$pi[$noti]' where id_tumbuhan ='$datas[id_tumbuhan]'";
                        if ($dbh->query($ranking) === TRUE) {
                           }
                        $noti++;
                    } ?>
                                
                            </tbody>


</table>
</div>
                            <div id="disentri" class="tab-pane fade in active">
                                <!-- copras -->
                                <h3><center>COPRAS</center></h3>
                                <hr>
                                <h4>Matriks</h4>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Nama</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $no = 0;
                                            $k1 = array();
                                            $k2 = array();
                                            $k3 = array();
                                            $k4 = array();
                                            
                                            $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Disentri'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                        ?>
                                          <tr>
                                          <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                          
                                          <td><?php 
                                          if ($datas['cara_pengolahan'] == 'Langsung') {
                                              echo $diare1/$total;
                                              $k1[$no] = $diare1/$total;
                                          }elseif ($datas['cara_pengolahan'] == 'Dihaluskan') {
                                            echo $diare2/$total;
                                            $k1[$no] = $diare2/$total;
                                          }elseif ($datas['cara_pengolahan'] == 'Direbus') {
                                            echo $diare3/$total;
                                            $k1[$no] = $diare3/$total;
                                          }else{

                                            $k1[$no] = 0;
                                            echo $k1[$no];
                                        }?>
                                              
                                          </td>

                                          
                                          <td><?php
                                            if ($datas['cara_penggunaan'] == 'Diminum' ) {
                                                echo $diare5/$total;
                                                $k2[$no] = $diare5/$total;
                                                
                                            }elseif ($datas['cara_penggunaan'] == "Dimakan") {
                                                echo $diare6/$total;
                                                $k2[$no] = $diare6/$total;
                                                
                                            }elseif ($datas['cara_penggunaan'] == "Dioles") {
                                                echo $diare7/$total;
                                                $k2[$no] = $diare7/$total;
                                                
                                            }elseif ($datas['cara_penggunaan'] == "Dikumur") {
                                                echo $diare8/$total;
                                                $k2[$no] = $diare8/$total;
                                                
                                            }else{
                                                $k2[$no] = 0;
                                                echo $k2[$no];
                                            }?></td>

                                            <td>
                                                <?php 
                                                if ($datas['bagian_tumbuhan'] == "Akar" ) {
        echo $diare11/$total;
        $k3[$no] = $diare11/$total;

    }elseif ($datas['bagian_tumbuhan'] == "Umbi") {
        echo $diare12/$total;
        $k3[$no] = $diare12/$total;
        
    }elseif ($datas['bagian_tumbuhan'] == "Semua") {
        echo $diare13/$total;
        $k3[$no] = $diare13/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Kulit buah") {
        echo $diare14/$total;
        $k3[$no] = $diare14/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Kulit Batang") {
        
        $k3[$no] = $diare15/$total;
        echo $k3[$no];
        
    }elseif ($datas['bagian_tumbuhan'] == "Daun") {
        echo $diare16/$total;
        $k3[$no] = $diare16/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Batang") {
        echo $diare17/$total;
        $k3[$no] = $diare17/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Getah") {
        echo $diare18/$total;
        $k3[$no] = $diare18/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Bunga") {
        echo $diare19/$total;
        $k3[$no] = $diare19/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Biji") {
        echo $diare20/$total;
        $k3[$no] = $diare20/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Buah") {
        echo $diare21/$total;
        $k3[$no] = $diare21/$total;
        
    }else{
        $k3[$no] = 0;
        echo $k3[$no];
    }
                                                 ?>
                                            </td>

                                            <td>
                                                <?php 
    if ($datas['jenis_tumbuhan'] == "Pohon") {
        echo $diare22/$total;
        $k4[$no] = $diare22/$total;
    }elseif ($datas['jenis_tumbuhan'] == "Liana") {
        echo $diare23/$total;
        $k4[$no] = $diare23/$total;
    }
    elseif ($datas['jenis_tumbuhan'] == "Herba") {
        echo $diare24/$total;
        $k4[$no] = $diare24/$total;
    }
    elseif ($datas['jenis_tumbuhan'] == "perdu" or $datas['jenis_tumbuhan'] == "Perdu") {
        echo $diare25/$total;
        $k4[$no] = $diare25/$total;
    }
    elseif ($datas['jenis_tumbuhan'] == "Semak") {
        echo $diare26/$total;
        $k4[$no] = $diare26/$total;
    }else{
        $k4[$no] = 0;
        echo $k4[$no];
    }
                                                 ?>
                                            </td>    
                                          </tr>
                                          <?php
                                                $no++;
                                                endforeach;
                                        ?>
                                        <tr>
                                            <td> Jumlah</td>
                                            <td><?php $k111 = array_sum($k1) ;
                                            echo $k111; ?></td>
                                            <td><?php 
                                            $k211 = array_sum($k2) ;
                                            echo $k211 ; ?></td>
                                            <td><?php 
                                            $k311 = array_sum($k3) ;
                                            echo $k311 ; ?></td>
                                            <td><?php 
                                            $k411 = array_sum($k4) ;
                                            echo $k411 ; ?></td>
                                        </tr>
                                       
                                    </tbody>
                                    
                                </table>
                                
                                <h4>Normalisasi Matriks</h4>
                                <hr>
                                <table class="table table-bordered table-hovered">
                                    <thead>
                                        <td>Nama</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $not = 0;
                                            $k11 = array();
                                            $k21 = array();
                                            $k31 = array();
                                            $k41 = array();
                                            
                                            $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Disentri'";

                                            foreach ($dbh->query($sql) as $datas) :
                                        ?>
                                          <tr>
                                          <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                            <td><?php 
                                          if ($datas['cara_pengolahan'] == 'Langsung') {
                                              $k11[$not]=$k1[$not]/$k111;
                                              echo $k11[$not];
                                          }elseif ($datas['cara_pengolahan'] == 'Dihaluskan') {
                                            $k11[$not]=$k1[$not]/$k111;
                                              echo $k11[$not];
                                          }elseif ($datas['cara_pengolahan'] == 'Direbus') {
                                            $k11[$not]=$k1[$not]/$k111;
                                              echo $k11[$not];
                                          }else{
                                            $k11[$not]=$k1[$not]/$k111;
                                              echo $k11[$not];
                                            
                                          }?>
                                              </td>

                                              
                                                  <td><?php
                                            if ($datas['cara_penggunaan'] == 'Diminum' ) {
                                                $k21[$not]=$k2[$not]/$k211;

                                                echo $k21[$not];
                                                
                                            }elseif ($datas['cara_penggunaan'] == "Dimakan") {
                                                $k21[$not]=$k2[$not]/$k211;

                                                echo $k21[$not];
                                            }elseif ($datas['cara_penggunaan'] == "Dioles") {
                                                $k21[$not]=$k2[$not]/$k211;

                                                echo $k21[$not];
                                            }elseif ($datas['cara_penggunaan'] == "Dikumur") {
                                                $k21[$not]=$k2[$not]/$k211;

                                                echo $k21[$not];
                                            }else{
                                                $k21[$not]=$k2[$not]/$k211;

                                                echo $k21[$not];
                                                
                                            }?></td>

                                              <td>
                                                <?php 
                                                if ($datas['bagian_tumbuhan'] == "Akar" ) {
        $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    }elseif ($datas['bagian_tumbuhan'] == "Umbi") {
     $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
       
    }elseif ($datas['bagian_tumbuhan'] == "Semua") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Kulit buah") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Kulit Batang") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Daun") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Batang") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Getah") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Bunga") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Biji") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Buah") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
        
    }else{
        $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];    
    }
                                                 ?>
                                            </td>

                                            <td>
                                                <?php 
    if ($datas['jenis_tumbuhan'] == "Pohon") {
        $k41[$not]=$k4[$not]/$k411;

                                                echo $k41[$not];
    
    }elseif ($datas['jenis_tumbuhan'] == "Liana") {
    
        $k41[$not]=$k4[$not]/$k411;

                                                echo $k41[$not];
    }
    elseif ($datas['jenis_tumbuhan'] == "Herba") {
    
        $k41[$not]=$k4[$not]/$k411;

                                                echo $k41[$not];
    }
    elseif ($datas['jenis_tumbuhan'] == "Perdu") {
    
        $k41[$not]=$k4[$not]/$k411;

                                                echo $k41[$not];
    }
    elseif ($datas['jenis_tumbuhan'] == "Semak") {
    
        $k41[$not]=$k4[$not]/$k411;

                                                echo $k41[$not];
    }else{
        $k41[$not]=$k4[$not]/$k411;

                                                echo $k41[$not];   
    }
                                                 ?>
                                            </td>    
                                         </tr>
                                         <?php 
                                         $not++;
                                         endforeach;
                                          ?>
                                                                           
                                    </tbody>
                                </table>
                                <h4>Normalisasi Bobot</h4>
                                <hr>
                                <table class="table table-bordered table-hovered">
                                    <thead>
                                        <td>Nama</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                        <td>Jumlah Bobot Benefit</td>
                                        <td>Qi</td>
                                        <td>Utilitas (Pi%)</td>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $bobot1 = 0.09;
                                            $bobot2 = 0.13;
                                            $bobot3 = 0.32;
                                            $bobot4 = 0.46;
                                            $not = 0;
                                            $c1 = array();
                                            $c2 = array();
                                            $c3 = array();
                                            $c4 = array();
                                            
                                            $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Disentri'";

                                            foreach ($dbh->query($sql) as $datas) :

                                            
                                        
                                        
                                          if ($datas['cara_pengolahan'] == 'Langsung') {
                                              $c1[$not] =  $k11[$not]*$bobot1;
                                              
                                          }elseif ($datas['cara_pengolahan'] == 'Dihaluskan') {
                                            $c1[$not] =  $k11[$not]*$bobot1;
                                              
                                          }elseif ($datas['cara_pengolahan'] == 'Direbus') {
                                            $c1[$not] =  $k11[$not]*$bobot1;
                                              
                                          }else{
                                            $c1[$not] =  $k11[$not]*$bobot1;
                                            
                                          }
                                              

                                              
                                                 
                                            if ($datas['cara_penggunaan'] == 'Diminum' ) {
                                                $c2[$not] =  $k21[$not]*$bobot2;
                                              
                                            }elseif ($datas['cara_penggunaan'] == "Dimakan") {
                                                $c2[$not] =  $k21[$not]*$bobot2;
                                              
                                            }elseif ($datas['cara_penggunaan'] == "Dioles") {
                                                $c2[$not] =  $k21[$not]*$bobot2;
                                              
                                            }elseif ($datas['cara_penggunaan'] == "Dikumur") {
                                                $c2[$not] =  $k21[$not]*$bobot2;
                                            }else{
                                                $c2[$not] =  $k21[$not]*$bobot2;    
                                            }

                                              
                                                if ($datas['bagian_tumbuhan'] == "Akar" ) {
        $c3[$not] =  $k31[$not]*$bobot3;
    }elseif ($datas['bagian_tumbuhan'] == "Umbi") {
     $c3[$not] =  $k31[$not]*$bobot3;
    }elseif ($datas['bagian_tumbuhan'] == "Semua") {
        $c3[$not] =  $k31[$not]*$bobot3;
    }elseif ($datas['bagian_tumbuhan'] == "Kulit buah") {
    $c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Kulit Batang") {
$c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Daun") {
$c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Batang") {
$c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Getah") {
$c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Bunga") {
$c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Biji") {
 $c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Buah") {
    $c3[$not] =  $k31[$not]*$bobot3;
    }else{
    $c3[$not] =  $k31[$not]*$bobot3;    
    }
                                            

                                            
    if ($datas['jenis_tumbuhan'] == "Pohon") {
        $c4[$not] =  $k41[$not]*$bobot4;
    }elseif ($datas['jenis_tumbuhan'] == "Liana") {
    $c4[$not] =  $k41[$not]*$bobot4;}

    elseif ($datas['jenis_tumbuhan'] == "Herba") {
        $c4[$not] =  $k41[$not]*$bobot4;}
    elseif ($datas['jenis_tumbuhan'] == "Perdu") {
    $c4[$not] =  $k41[$not]*$bobot4;}
    elseif ($datas['jenis_tumbuhan'] == "Semak") {
    $c4[$not] =  $k41[$not]*$bobot4;
}else{
$c4[$not] =  $k41[$not]*$bobot4;    
}
                                            
                                                 $benefit[$not] = $c1[$not]+$c2[$not]+$c3[$not]+$c4[$not]; 
                                            
                                         $not++;
                                         endforeach;
                                         $noti = 0;
                                         foreach ($dbh->query($sql) as $datas) {
                                          ?>
                            <tr>
                                <td> <?php echo $datas['nama_tumbuhan'] ;?></td>
                                <td><?php echo number_format($c1[$noti],4); ?></td>
                                <td><?php echo number_format($c2[$noti],4); ?></td>
                                <td><?php echo number_format($c3[$noti],4); ?></td>
                                <td><?php echo number_format($c4[$noti],4); ?></td>
                                <td><?php echo number_format($benefit[$noti],4); ?></td>
                                <td><?php echo number_format($benefit[$noti],4); ?></td>
                                <td><?php echo number_format(($benefit[$noti]/max($benefit))*100, 2);
                                $pi[$noti] = ($benefit[$noti]/max($benefit))*100;  ?>%</td>
                            </tr>
                        <?php  
                        $ranking = "update tumbuhan_obat SET qi = '$benefit[$noti]', pi = '$pi[$noti]' where id_tumbuhan ='$datas[id_tumbuhan]'";
                        if ($dbh->query($ranking) === TRUE) {
                           }
                        $noti++;
                    } ?>
                                
                            </tbody>


</table>
                            </div>
                            <div id="gigi" class="tab-pane fade">
                                <!-- copras -->
                                <h3><center>COPRAS</center></h3>
                                <hr>
                                <h4>Matriks</h4>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Nama</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $no = 0;
                                            $k1 = array();
                                            $k2 = array();
                                            $k3 = array();
                                            $k4 = array();
                                            
                                            $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Sakit Gigi'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                        ?>
                                          <tr>
                                          <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                          
                                          <td><?php 
                                          if ($datas['cara_pengolahan'] == 'Langsung') {
                                              echo $diare1/$total;
                                              $k1[$no] = $diare1/$total;
                                          }elseif ($datas['cara_pengolahan'] == 'Dihaluskan') {
                                            echo $diare2/$total;
                                            $k1[$no] = $diare2/$total;
                                          }elseif ($datas['cara_pengolahan'] == 'Direbus') {
                                            echo $diare3/$total;
                                            $k1[$no] = $diare3/$total;
                                          }else{
                                            $k1[$no] = 0;
                                            echo $k1[$no];
                                          }?>
                                              
                                          </td>

                                          
                                          <td><?php
                                            if ($datas['cara_penggunaan'] == 'Diminum' ) {
                                                echo $diare5/$total;
                                                $k2[$no] = $diare5/$total;
                                                
                                            }elseif ($datas['cara_penggunaan'] == "Dimakan") {
                                                echo $diare6/$total;
                                                $k2[$no] = $diare6/$total;
                                                
                                            }elseif ($datas['cara_penggunaan'] == "Dioles") {
                                                echo $diare7/$total;
                                                $k2[$no] = $diare7/$total;
                                                
                                            }elseif ($datas['cara_penggunaan'] == "Dikumur") {
                                                echo $diare8/$total;
                                                $k2[$no] = $diare8/$total;
                                                
                                            }else{
                                                $k2[$no] = 0;
                                                echo $k2[$no];
                                            }?></td>

                                            <td>
                                                <?php 
                                                if ($datas['bagian_tumbuhan'] == "Akar" ) {
        echo $diare11/$total;
        $k3[$no] = $diare11/$total;

    }elseif ($datas['bagian_tumbuhan'] == "Umbi") {
        echo $diare12/$total;
        $k3[$no] = $diare12/$total;
        
    }elseif ($datas['bagian_tumbuhan'] == "Semua") {
        echo $diare13/$total;
        $k3[$no] = $diare13/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Kulit buah") {
        echo $diare14/$total;
        $k3[$no] = $diare14/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Kulit Batang") {
        
        $k3[$no] = $diare15/$total;
        echo $k3[$no];
        
    }elseif ($datas['bagian_tumbuhan'] == "Daun") {
        echo $diare16/$total;
        $k3[$no] = $diare16/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Batang") {
        echo $diare17/$total;
        $k3[$no] = $diare17/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Getah") {
        echo $diare18/$total;
        $k3[$no] = $diare18/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Bunga") {
        echo $diare19/$total;
        $k3[$no] = $diare19/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Biji") {
        echo $diare20/$total;
        $k3[$no] = $diare20/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Buah") {
        echo $diare21/$total;
        $k3[$no] = $diare21/$total;
        
    }else{
                                                $k3[$no] = 0;
                                                echo $k3[$no];
                                            }
                                                 ?>
                                            </td>

                                            <td>
                                                <?php 
    if ($datas['jenis_tumbuhan'] == "Pohon") {
        echo $diare22/$total;
        $k4[$no] = $diare22/$total;
    }elseif ($datas['jenis_tumbuhan'] == "Liana") {
        echo $diare23/$total;
        $k4[$no] = $diare23/$total;
    }
    elseif ($datas['jenis_tumbuhan'] == "Herba") {
        echo $diare24/$total;
        $k4[$no] = $diare24/$total;
    }
    elseif ($datas['jenis_tumbuhan'] == "perdu" or $datas['jenis_tumbuhan'] == "Perdu") {
        echo $diare25/$total;
        $k4[$no] = $diare25/$total;
    }
    elseif ($datas['jenis_tumbuhan'] == "Semak") {
        echo $diare26/$total;
        $k4[$no] = $diare26/$total;
    }else{
                                                $k4[$no] = 0;
                                                echo $k4[$no];
                                            }
                                                 ?>
                                            </td>    
                                          </tr>
                                          <?php
                                                $no++;
                                                endforeach;
                                        ?>
                                        <tr>
                                            <td> Jumlah</td>
                                            <td><?php $k111 = array_sum($k1) ;
                                            echo $k111; ?></td>
                                            <td><?php 
                                            $k211 = array_sum($k2) ;
                                            echo $k211 ; ?></td>
                                            <td><?php 
                                            $k311 = array_sum($k3) ;
                                            echo $k311 ; ?></td>
                                            <td><?php 
                                            $k411 = array_sum($k4) ;
                                            echo $k411 ; ?></td>
                                        </tr>
                                       
                                    </tbody>
                                    
                                </table>
                                
                                <h4>Normalisasi Matriks</h4>
                                <hr>
                                <table class="table table-bordered table-hovered">
                                    <thead>
                                        <td>Nama</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $not = 0;
                                            $k11 = array();
                                            $k21 = array();
                                            $k31 = array();
                                            $k41 = array();
                                            
                                            $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Sakit Gigi'";

                                            foreach ($dbh->query($sql) as $datas) :
                                        ?>
                                          <tr>
                                          <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                            <td><?php 
                                          if ($datas['cara_pengolahan'] == 'Langsung') {
                                              $k11[$not]=$k1[$not]/$k111;
                                              echo $k11[$not];
                                          }elseif ($datas['cara_pengolahan'] == 'Dihaluskan') {
                                            $k11[$not]=$k1[$not]/$k111;
                                              echo $k11[$not];
                                          }elseif ($datas['cara_pengolahan'] == 'Direbus') {
                                            $k11[$not]=$k1[$not]/$k111;
                                              echo $k11[$not];
                                          }else{
                                            $k11[$not]=$k1[$not]/$k111;
                                              echo $k11[$not];
                                            
                                          }?>
                                              </td>

                                              
                                                  <td><?php
                                            if ($datas['cara_penggunaan'] == 'Diminum' ) {
                                                $k21[$not]=$k2[$not]/$k211;

                                                echo $k21[$not];
                                                
                                            }elseif ($datas['cara_penggunaan'] == "Dimakan") {
                                                $k21[$not]=$k2[$not]/$k211;

                                                echo $k21[$not];
                                            }elseif ($datas['cara_penggunaan'] == "Dioles") {
                                                $k21[$not]=$k2[$not]/$k211;

                                                echo $k21[$not];
                                            }elseif ($datas['cara_penggunaan'] == "Dikumur") {
                                                $k21[$not]=$k2[$not]/$k211;

                                                echo $k21[$not];
                                            }else{
                                                $k21[$not]=$k2[$not]/$k211;

                                                echo $k21[$not];
                                                
                                            }?></td>

                                              <td>
                                                <?php 
                                                if ($datas['bagian_tumbuhan'] == "Akar" ) {
        $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    }elseif ($datas['bagian_tumbuhan'] == "Umbi") {
     $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
       
    }elseif ($datas['bagian_tumbuhan'] == "Semua") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Kulit buah") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Kulit Batang") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Daun") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Batang") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Getah") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Bunga") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Biji") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Buah") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
        
    }else{
        $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
        
    }
                                                 ?>
                                            </td>

                                            <td>
                                                <?php 
    if ($datas['jenis_tumbuhan'] == "Pohon") {
        $k41[$not]=$k4[$not]/$k411;

                                                echo $k41[$not];
    
    }elseif ($datas['jenis_tumbuhan'] == "Liana") {
    
        $k41[$not]=$k4[$not]/$k411;

                                                echo $k41[$not];
    }
    elseif ($datas['jenis_tumbuhan'] == "Herba") {
    
        $k41[$not]=$k4[$not]/$k411;

                                                echo $k41[$not];
    }
    elseif ($datas['jenis_tumbuhan'] == "Perdu") {
    
        $k41[$not]=$k4[$not]/$k411;

                                                echo $k41[$not];
    }
    elseif ($datas['jenis_tumbuhan'] == "Semak") {
    
        $k41[$not]=$k4[$not]/$k411;

                                                echo $k41[$not];
    }else{
            $k41[$not]=$k4[$not]/$k411;

                                                echo $k41[$not];
        
    }
                                                 ?>
                                            </td>    
                                         </tr>
                                         <?php 
                                         $not++;
                                         endforeach;
                                          ?>
                                                                           
                                    </tbody>
                                </table>
                                
                                <h4>Normalisasi Bobot</h4>
                                <hr>
                                <table class="table table-bordered table-hovered">
                                    <thead>
                                        <td>Nama</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                        <td>Jumlah Bobot Benefit</td>
                                        <td>Qi</td>
                                        <td>Utilitas (Pi%)</td>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $bobot1 = 0.09;
                                            $bobot2 = 0.13;
                                            $bobot3 = 0.32;
                                            $bobot4 = 0.46;
                                            $not = 0;
                                            $c1 = array();
                                            $c2 = array();
                                            $c3 = array();
                                            $c4 = array();
                                            
                                            $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Sakit Gigi'";

                                            foreach ($dbh->query($sql) as $datas) :

                                            
                                        
                                        
                                          if ($datas['cara_pengolahan'] == 'Langsung') {
                                              $c1[$not] =  $k11[$not]*$bobot1;
                                              
                                          }elseif ($datas['cara_pengolahan'] == 'Dihaluskan') {
                                            $c1[$not] =  $k11[$not]*$bobot1;
                                              
                                          }elseif ($datas['cara_pengolahan'] == 'Direbus') {
                                            $c1[$not] =  $k11[$not]*$bobot1;
                                              
                                          }else{
                                            $c1[$not] =  $k11[$not]*$bobot1;
                                            
                                          }
                                              

                                              
                                                 
                                            if ($datas['cara_penggunaan'] == 'Diminum' ) {
                                                $c2[$not] =  $k21[$not]*$bobot2;
                                              
                                            }elseif ($datas['cara_penggunaan'] == "Dimakan") {
                                                $c2[$not] =  $k21[$not]*$bobot2;
                                              
                                            }elseif ($datas['cara_penggunaan'] == "Dioles") {
                                                $c2[$not] =  $k21[$not]*$bobot2;
                                              
                                            }elseif ($datas['cara_penggunaan'] == "Dikumur") {
                                                $c2[$not] =  $k21[$not]*$bobot2;
                                            }else{
                                                $c2[$not] =  $k21[$not]*$bobot2;
                                                
                                            }

                                              
                                                if ($datas['bagian_tumbuhan'] == "Akar" ) {
        $c3[$not] =  $k31[$not]*$bobot3;
    }elseif ($datas['bagian_tumbuhan'] == "Umbi") {
     $c3[$not] =  $k31[$not]*$bobot3;
    }elseif ($datas['bagian_tumbuhan'] == "Semua") {
        $c3[$not] =  $k31[$not]*$bobot3;
    }elseif ($datas['bagian_tumbuhan'] == "Kulit buah") {
    $c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Kulit Batang") {
$c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Daun") {
$c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Batang") {
$c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Getah") {
$c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Bunga") {
$c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Biji") {
 $c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Buah") {
    $c3[$not] =  $k31[$not]*$bobot3;
    }else{
    $c3[$not] =  $k31[$not]*$bobot3;    
    }
                                            

                                            
    if ($datas['jenis_tumbuhan'] == "Pohon") {
        $c4[$not] =  $k41[$not]*$bobot4;
    }elseif ($datas['jenis_tumbuhan'] == "Liana") {
    $c4[$not] =  $k41[$not]*$bobot4;}

    elseif ($datas['jenis_tumbuhan'] == "Herba") {
        $c4[$not] =  $k41[$not]*$bobot4;}
    elseif ($datas['jenis_tumbuhan'] == "Perdu") {
    $c4[$not] =  $k41[$not]*$bobot4;}
    elseif ($datas['jenis_tumbuhan'] == "Semak") {
    $c4[$not] =  $k41[$not]*$bobot4;
}else{
    $c4[$not] =  $k41[$not]*$bobot4;    
}
                                            
                                                 $benefit[$not] = $c1[$not]+$c2[$not]+$c3[$not]+$c4[$not]; 
                                            
                                         $not++;
                                         endforeach;
                                         $noti = 0;
                                         foreach ($dbh->query($sql) as $datas) {
                                          ?>
                            <tr>
                                <td> <?php echo $datas['nama_tumbuhan'] ;?></td>
                                <td><?php echo number_format($c1[$noti],4); ?></td>
                                <td><?php echo number_format($c2[$noti],4); ?></td>
                                <td><?php echo number_format($c3[$noti],4); ?></td>
                                <td><?php echo number_format($c4[$noti],4); ?></td>
                                <td><?php echo number_format($benefit[$noti],4); ?></td>
                                <td><?php echo number_format($benefit[$noti],4); ?></td>
                                <td><?php echo number_format(($benefit[$noti]/max($benefit))*100, 2);
                                $pi[$noti] = ($benefit[$noti]/max($benefit))*100;  ?>%</td>
                            </tr>
                        <?php  
                        $ranking = "update tumbuhan_obat SET qi = '$benefit[$noti]', pi = '$pi[$noti]' where id_tumbuhan ='$datas[id_tumbuhan]'";
                        if ($dbh->query($ranking) === TRUE) {
                           }
                        $noti++;
                    } ?>
                                
                            </tbody>


</table>
                            </div>

                            <div id="cacingan" class="tab-pane">
                                <!-- copras -->
                                <h3><center>COPRAS</center></h3>
                                <hr>
                                <h4>Matriks</h4>
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <td>Nama</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $no = 0;
                                            $k1 = array();
                                            $k2 = array();
                                            $k3 = array();
                                            $k4 = array();
                                            
                                            $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Cacingan'";
                                            $result = $dbh -> query($sql);
                                            foreach ($dbh->query($sql) as $datas) :
                                        ?>
                                          <tr>
                                          <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                          
                                          <td><?php 
                                          if ($datas['cara_pengolahan'] == 'Langsung') {
                                              echo $diare1/$total;
                                              $k1[$no] = $diare1/$total;
                                          }elseif ($datas['cara_pengolahan'] == 'Dihaluskan') {
                                            echo $diare2/$total;
                                            $k1[$no] = $diare2/$total;
                                          }elseif ($datas['cara_pengolahan'] == 'Direbus') {
                                            echo $diare3/$total;
                                            $k1[$no] = $diare3/$total;
                                          }else{
                                            $k1[$no] = 0;
                                            echo $k1[$no];
                                          }?>
                                              
                                          </td>

                                          
                                          <td><?php
                                            if ($datas['cara_penggunaan'] == 'Diminum' ) {
                                                echo $diare5/$total;
                                                $k2[$no] = $diare5/$total;
                                                
                                            }elseif ($datas['cara_penggunaan'] == "Dimakan") {
                                                echo $diare6/$total;
                                                $k2[$no] = $diare6/$total;
                                                
                                            }elseif ($datas['cara_penggunaan'] == "Dioles") {
                                                echo $diare7/$total;
                                                $k2[$no] = $diare7/$total;
                                                
                                            }elseif ($datas['cara_penggunaan'] == "Dikumur") {
                                                echo $diare8/$total;
                                                $k2[$no] = $diare8/$total;
                                                
                                            }else{
                                            $k2[$no] = 0;
                                            echo $k2[$no];
                                            }?></td>

                                            <td>
                                                <?php 
                                                if ($datas['bagian_tumbuhan'] == "Akar" ) {
        echo $diare11/$total;
        $k3[$no] = $diare11/$total;

    }elseif ($datas['bagian_tumbuhan'] == "Umbi") {
        echo $diare12/$total;
        $k3[$no] = $diare12/$total;
        
    }elseif ($datas['bagian_tumbuhan'] == "Semua") {
        echo $diare13/$total;
        $k3[$no] = $diare13/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Kulit buah") {
        echo $diare14/$total;
        $k3[$no] = $diare14/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Kulit Batang") {
        
        $k3[$no] = $diare15/$total;
        echo $k3[$no];
        
    }elseif ($datas['bagian_tumbuhan'] == "Daun") {
        echo $diare16/$total;
        $k3[$no] = $diare16/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Batang") {
        echo $diare17/$total;
        $k3[$no] = $diare17/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Getah") {
        echo $diare18/$total;
        $k3[$no] = $diare18/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Bunga") {
        echo $diare19/$total;
        $k3[$no] = $diare19/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Biji") {
        echo $diare20/$total;
        $k3[$no] = $diare20/$total;

        
    }elseif ($datas['bagian_tumbuhan'] == "Buah") {
        echo $diare21/$total;
        $k3[$no] = $diare21/$total;
        
    }else{
                                            $k3[$no] = 0;
                                            echo $k3[$no];
                                          }
                                                 ?>
                                            </td>

                                            <td>
                                                <?php 
    if ($datas['jenis_tumbuhan'] == "Pohon") {
        echo $diare22/$total;
        $k4[$no] = $diare22/$total;
    }elseif ($datas['jenis_tumbuhan'] == "Liana") {
        echo $diare23/$total;
        $k4[$no] = $diare23/$total;
    }
    elseif ($datas['jenis_tumbuhan'] == "Herba") {
        echo $diare24/$total;
        $k4[$no] = $diare24/$total;
    }
    elseif ($datas['jenis_tumbuhan'] == "perdu" or $datas['jenis_tumbuhan'] == "Perdu") {
        echo $diare25/$total;
        $k4[$no] = $diare25/$total;
    }
    elseif ($datas['jenis_tumbuhan'] == "Semak") {
        echo $diare26/$total;
        $k4[$no] = $diare26/$total;
    }else{
                                            $k4[$no] = 0;
                                            echo $k4[$no];
                                          }
                                                 ?>
                                            </td>    
                                          </tr>
                                          <?php
                                                $no++;
                                                endforeach;
                                        ?>
                                        <tr>
                                            <td> Jumlah</td>
                                            <td><?php $k111 = array_sum($k1) ;
                                            echo $k111; ?></td>
                                            <td><?php 
                                            $k211 = array_sum($k2) ;
                                            echo $k211 ; ?></td>
                                            <td><?php 
                                            $k311 = array_sum($k3) ;
                                            echo $k311 ; ?></td>
                                            <td><?php 
                                            $k411 = array_sum($k4) ;
                                            echo $k411 ; ?></td>
                                        </tr>
                                       
                                    </tbody>
                                    
                                </table>
                                <h4>Normalisasi Matriks</h4>
                                <hr>
                                <table class="table table-bordered table-hovered">
                                    <thead>
                                        <td>Nama</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $not = 0;
                                            $k11 = array();
                                            $k21 = array();
                                            $k31 = array();
                                            $k41 = array();
                                            
                                            $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Cacingan'";

                                            foreach ($dbh->query($sql) as $datas) :
                                        ?>
                                          <tr>
                                          <td><?php echo $datas['nama_tumbuhan']; ?></td>
                                            <td><?php 
                                          if ($datas['cara_pengolahan'] == 'Langsung') {
                                              $k11[$not]=$k1[$not]/$k111;
                                              echo $k11[$not];
                                          }elseif ($datas['cara_pengolahan'] == 'Dihaluskan') {
                                            $k11[$not]=$k1[$not]/$k111;
                                              echo $k11[$not];
                                          }elseif ($datas['cara_pengolahan'] == 'Direbus') {
                                            $k11[$not]=$k1[$not]/$k111;
                                              echo $k11[$not];
                                          }else{
                                            $k11[$not]=$k1[$not]/$k111;
                                              echo $k11[$not];
                                            
                                          }?>
                                              </td>

                                              
                                                  <td><?php
                                            if ($datas['cara_penggunaan'] == 'Diminum' ) {
                                                $k21[$not]=$k2[$not]/$k211;

                                                echo $k21[$not];
                                                
                                            }elseif ($datas['cara_penggunaan'] == "Dimakan") {
                                                $k21[$not]=$k2[$not]/$k211;

                                                echo $k21[$not];
                                            }elseif ($datas['cara_penggunaan'] == "Dioles") {
                                                $k21[$not]=$k2[$not]/$k211;

                                                echo $k21[$not];
                                            }elseif ($datas['cara_penggunaan'] == "Dikumur") {
                                                $k21[$not]=$k2[$not]/$k211;

                                                echo $k21[$not];
                                            }else{
                                                $k21[$not]=$k2[$not]/$k211;

                                                echo $k21[$not];
                                                
                                            }?></td>

                                              <td>
                                                <?php 
                                                if ($datas['bagian_tumbuhan'] == "Akar" ) {
        $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    }elseif ($datas['bagian_tumbuhan'] == "Umbi") {
     $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
       
    }elseif ($datas['bagian_tumbuhan'] == "Semua") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Kulit buah") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Kulit Batang") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Daun") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Batang") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Getah") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Bunga") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Biji") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
    
        
    }elseif ($datas['bagian_tumbuhan'] == "Buah") {
    $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];
        
    }else{
        $k31[$not]=$k3[$not]/$k311;

                                                echo $k31[$not];    
    }
                                                 ?>
                                            </td>

                                            <td>
                                                <?php 
    if ($datas['jenis_tumbuhan'] == "Pohon") {
        $k41[$not]=$k4[$not]/$k411;

                                                echo $k41[$not];
    
    }elseif ($datas['jenis_tumbuhan'] == "Liana") {
    
        $k41[$not]=$k4[$not]/$k411;

                                                echo $k41[$not];
    }
    elseif ($datas['jenis_tumbuhan'] == "Herba") {
    
        $k41[$not]=$k4[$not]/$k411;

                                                echo $k41[$not];
    }
    elseif ($datas['jenis_tumbuhan'] == "Perdu") {
    
        $k41[$not]=$k4[$not]/$k411;

                                                echo $k41[$not];
    }
    elseif ($datas['jenis_tumbuhan'] == "Semak") {
    
        $k41[$not]=$k4[$not]/$k411;

                                                echo $k41[$not];
    }else{
        $k41[$not]=$k4[$not]/$k411;

                                                echo $k41[$not];    
    }
                                                 ?>
                                            </td>    
                                         </tr>
                                         <?php 
                                         $not++;
                                         endforeach;
                                          ?>
                                                                           
                                    </tbody>
                                </table>
                                <h4>Normalisasi Bobot</h4>
                                <hr>
                                <table class="table table-bordered table-hovered">
                                    <thead>
                                        <td>Nama</td>
                                        <td>Cara Pengolahan</td>
                                        <td>Cara Pemanfaatan</td>
                                        <td>Bagian Tumbuhan</td>
                                        <td>Jenis Tumbuhan</td>
                                        <td>Jumlah Bobot Benefit</td>
                                        <td>Qi</td>
                                        <td>Utilitas (Pi%)</td>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $bobot1 = 0.09;
                                            $bobot2 = 0.13;
                                            $bobot3 = 0.32;
                                            $bobot4 = 0.46;
                                            $not = 0;
                                            $c1 = array();
                                            $c2 = array();
                                            $c3 = array();
                                            $c4 = array();
                                            
                                            $sql = "SELECT * FROM tumbuhan_obat where khasiat = 'Cacingan'";

                                            foreach ($dbh->query($sql) as $datas) :

                                            
                                        
                                        
                                          if ($datas['cara_pengolahan'] == 'Langsung') {
                                              $c1[$not] =  $k11[$not]*$bobot1;
                                              
                                          }elseif ($datas['cara_pengolahan'] == 'Dihaluskan') {
                                            $c1[$not] =  $k11[$not]*$bobot1;
                                              
                                          }elseif ($datas['cara_pengolahan'] == 'Direbus') {
                                            $c1[$not] =  $k11[$not]*$bobot1;
                                              
                                          }else{
                                            $c1[$not] =  $k11[$not]*$bobot1;
                                          }
                                              

                                              
                                                 
                                            if ($datas['cara_penggunaan'] == 'Diminum' ) {
                                                $c2[$not] =  $k21[$not]*$bobot2;
                                              
                                            }elseif ($datas['cara_penggunaan'] == "Dimakan") {
                                                $c2[$not] =  $k21[$not]*$bobot2;
                                              
                                            }elseif ($datas['cara_penggunaan'] == "Dioles") {
                                                $c2[$not] =  $k21[$not]*$bobot2;
                                              
                                            }elseif ($datas['cara_penggunaan'] == "Dikumur") {
                                                $c2[$not] =  $k21[$not]*$bobot2;
                                            }else{
                                                $c2[$not] =  $k21[$not]*$bobot2;    
                                            }

                                              
                                                if ($datas['bagian_tumbuhan'] == "Akar" ) {
        $c3[$not] =  $k31[$not]*$bobot3;
    }elseif ($datas['bagian_tumbuhan'] == "Umbi") {
     $c3[$not] =  $k31[$not]*$bobot3;
    }elseif ($datas['bagian_tumbuhan'] == "Semua") {
        $c3[$not] =  $k31[$not]*$bobot3;
    }elseif ($datas['bagian_tumbuhan'] == "Kulit buah") {
    $c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Kulit Batang") {
$c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Daun") {
$c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Batang") {
$c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Getah") {
$c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Bunga") {
$c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Biji") {
 $c3[$not] =  $k31[$not]*$bobot3;
        
    }elseif ($datas['bagian_tumbuhan'] == "Buah") {
    $c3[$not] =  $k31[$not]*$bobot3;
    }else{
    $c3[$not] =  $k31[$not]*$bobot3;    
    }
                                            

                                            
    if ($datas['jenis_tumbuhan'] == "Pohon") {
        $c4[$not] =  $k41[$not]*$bobot4;
    }elseif ($datas['jenis_tumbuhan'] == "Liana") {
    $c4[$not] =  $k41[$not]*$bobot4;}

    elseif ($datas['jenis_tumbuhan'] == "Herba") {
        $c4[$not] =  $k41[$not]*$bobot4;}
    elseif ($datas['jenis_tumbuhan'] == "Perdu") {
    $c4[$not] =  $k41[$not]*$bobot4;}
    elseif ($datas['jenis_tumbuhan'] == "Semak") {
    $c4[$not] =  $k41[$not]*$bobot4;
}else{
$c4[$not] =  $k41[$not]*$bobot4;    
}
                                            
                                                 $benefit[$not] = $c1[$not]+$c2[$not]+$c3[$not]+$c4[$not]; 
                                            
                                         $not++;
                                         endforeach;
                                         $noti = 0;
                                         foreach ($dbh->query($sql) as $datas) {
                                          ?>
                            <tr>
                                <td> <?php echo $datas['nama_tumbuhan'] ;?></td>
                                <td><?php echo number_format($c1[$noti],4); ?></td>
                                <td><?php echo number_format($c2[$noti],4); ?></td>
                                <td><?php echo number_format($c3[$noti],4); ?></td>
                                <td><?php echo number_format($c4[$noti],4); ?></td>
                                <td><?php echo number_format($benefit[$noti],4); ?></td>
                                <td><?php echo number_format($benefit[$noti],4); ?></td>
                                <td><?php echo number_format(($benefit[$noti]/max($benefit))*100, 2); 
                                $pi[$noti] = ($benefit[$noti]/max($benefit))*100; ?>%</td>
                            </tr>
                        <?php  
                        $ranking = "update tumbuhan_obat SET qi = '$benefit[$noti]', pi='$pi[$noti]' where id_tumbuhan ='$datas[id_tumbuhan]'";
                        if ($dbh->query($ranking) === TRUE) {
                           }
                        $noti++;
                    } ?>
                                
                            </tbody>


</table>
                            </div>

                        </div>

                </div>
        </div>

    </body>
</html>
