<?php 
include '../../koneksi.php';
include 'rumus.php';

$id = $_GET['hitung'];

$a11 = $_POST['a11'];
$a12 = $_POST['a12'];
$a13 = $_POST['a13'];
$a14 = $_POST['a14'];

$a21 = $_POST['a21'];
$a22 = $_POST['a22'];
$a23 = $_POST['a23'];
$a24 = $_POST['a24'];

$a31 = $_POST['a31'];
$a32 = $_POST['a32'];
$a33 = $_POST['a33'];
$a34 = $_POST['a34'];

$a41 = $_POST['a41'];
$a42 = $_POST['a42'];
$a43 = $_POST['a43'];
$a44 = $_POST['a44'];


$cm1[0]=$ahp1[0]/$tahp[0];
$cm1[1]=$ahp1[1]/$tahp[1];
$cm1[2]=$ahp1[2]/$tahp[2];
$cm1[3]=$ahp1[3]/$tahp[3];
$baris[0]=array_sum($cm1);
$eigen[0]=$baris[0]/4;

$cm2[0]=$ahp2[0]/$tahp[0];
$cm2[1]=$ahp2[1]/$tahp[1];
$cm2[2]=$ahp2[2]/$tahp[2];
$cm2[3]=$ahp2[3]/$tahp[3];
$baris[1]=array_sum($cm2);
$eigen[1]=$baris[1]/4;

$cm3[0]=$ahp3[0]/$tahp[0];
$cm3[1]=$ahp3[1]/$tahp[1];
$cm3[2]=$ahp3[2]/$tahp[2];
$cm3[3]=$ahp3[3]/$tahp[3];
$baris[2]=array_sum($cm3);
$eigen[2]=$baris[2]/4;

$cm4[0]=$ahp4[0]/$tahp[0];
$cm4[1]=$ahp4[1]/$tahp[1];
$cm4[2]=$ahp4[2]/$tahp[2];
$cm4[3]=$ahp4[3]/$tahp[3];
$baris[3]=array_sum($cm4);
$eigen[3]=$baris[3]/4;

$ci = (($tahp[0]*$eigen[0])+($tahp[1]*$eigen[1])+($tahp[2]*$eigen[2])+($tahp[3]*$eigen[3]));
$cr = (($ci-4)/3)/0.9;

if ($cr < 0.1) {
    $sql=mysqli_query($dbh,"UPDATE bobot set a11='$a11', a12 = '$a12', a13 = '$a13', a14 = '$a14', a21 = '$a21', a22 = '$a22', a23 = '$a23', a24 = '$a24', a31 = '$a31', a32 = '$a32', a33 = '$a33', a34 = '$a34', a41 = '$a41', a42 = '$a42', a43 = '$a43', a44 = '$a44' WHERE id = '$id'");
    echo "<script>alert('Bobot berhasil Diubah');document.location='hitungan.php' </script> ";
}else {
    echo mysqli_error($dbh);
    echo "<script>alert('Bobot gagal diubah karena CR lebih besar dari 0.1');document.location='ubah-hitung.php?hitung=$id' </script> ";
}



 ?>
