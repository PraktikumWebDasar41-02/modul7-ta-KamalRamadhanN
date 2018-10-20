<?php

$conn = mysqli_connect("localhost","root","","modul1");

if (isset($_POST["update"])) {
	$nama=$_POST['nama'];
	$nim=$_POST['nim'];
	$tgl_lahir=$_POST['tgl'];
	$jenis_kelamin=$_POST['jk'];
	$prodi=$_POST['prodi'];
	$fakultas=$_POST['fakultas'];
	$asal=$_POST['alamat'];
	$moto=$_POST['moto'];

$con=mysqli_query($conn,"UPDATE kuliah SET 
					nama = '$nama',
					nim = '$nim',
					tgl='$tgl_lahir',
					jk='$jenis_kelamin',
					prodi='$prodi',
					fakultas='$fakultas',
					alamat='$asal',
					moto='$moto'
					WHERE nim=$nim;
					 )");

if (mysqli_affected_rows($conn) > 0){
	echo "Data Berhasil Diupdate";
	header('Location:conn.php');
}else{
	echo "Data Gagal Diipdate";
}
}


?>