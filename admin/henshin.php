<?php 
include "../koneksi.php";
$id = $_GET['siapa'];
$user=$_POST['username'];
$nama = $_POST['nama'];
$passlama = $_POST['passlama'];
$passbaru = $_POST['passbaru'];


$sql=mysqli_query($dbh,"UPDATE admin set username = '$user', nama_admin='$nama', password='$passbaru' where id_admin='$id'");
    
 
if ($sql) {
    echo "<script>alert('Data berhasil Diubah');document.location='index-admin.php' </script> ";
}else {
    echo mysqli.error($dbh);
    echo "<script>alert('Data gagal iubah');document.location='index-admin.php' </script> ";
}

 ?>