<?php
include '../../koneksi.php';

$id = $_GET['pohon'];
$nama = $_POST['nama'];
$jenis = $_POST['jenis'];
$olahan = $_POST['diolah'];
$guna = $_POST['digunakan'];
$khasiat = $_POST['khasiat'];
$resep = $_POST['resep'];
$latin = $_POST['latin'];
//upload gambar 
$gambarnama = $_FILES['gambar']['name'];


$file_ext = explode('.', $gambarnama);
$flex = strtolower(end($file_ext));

$filenamenew = $nama.".".$flex;
$simpan = '../../gambar/'.$gambarnama;


$sql=mysqli_query($dbh,"UPDATE tumbuhan_obat set nama_tumbuhan='$nama', jenis_tumbuhan = '$jenis', cara_pengolahan = '$olahan', cara_penggunaan = '$guna', khasiat = '$khasiat', gambar = '$filenamenew', resep = '$resep', latin = '$latin' WHERE id_tumbuhan = '$id'"); 
if ($sql) {
	move_uploaded_file($_FILES['gambar']['tmp_name'], $simpan);
    echo "<script>alert('Data berhasil tersimpan');document.location='data-tanaman-admin.php' </script>";
}else {
    echo "<script>alert('Data gagal iubah');document.location='data-tanaman-admin.php' </script> ";
    
}
?>