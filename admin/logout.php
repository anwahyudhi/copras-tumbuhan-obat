<?php
	session_start();
	echo "<script>alert('Logout berhasil ');document.location='../index.php' </script> ";
	unset($_SESSION['username']);
	session_destroy();	
?>
//penggunaan kontroller klo ga ada sesion admin