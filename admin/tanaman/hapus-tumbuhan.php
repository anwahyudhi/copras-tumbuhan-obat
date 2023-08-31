<?php
include '../../koneksi.php';

$id = $_GET['id'];
$sql = mysqli_query($dbh,"delete from tumbuhan_obat where id_tumbuhan='$id'") or die(mysqli_error($dbh));
	
	if ($sql) {
			echo "<script>alert('Data Berhasil Dihapus');document.location='data-tanaman-admin.php' </script> ";
		}else {
			echo "<script>alert('Data Gagal Dihapus);document.location='data-tanaman-admin.php' </script> ";
		}
?>