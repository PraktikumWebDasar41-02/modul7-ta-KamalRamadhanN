<?php
include'conn.php';
$nim=$_GET['nim'];
mysqli_query($conn,"DELETE FROM kuliah WHERE nim = $nim");
if (mysqli_affected_rows($conn)>0) {
	echo "Berhasil";
	header('location:conn.php');
}
?>