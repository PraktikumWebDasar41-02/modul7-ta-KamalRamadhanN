<!DOCTYPE html>
<html>
<head>
	<title>From Pendataan</title>
</head>
<body>
	<form method="POST">
		<table>
			<tr>
				<td>From Pendataan</td>
			</tr>

			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>

			<tr>
				<td>Nim</td>
				<td><input type="text" name="nim"></td>
			</tr>

			<tr>
				<td>Tanggal Lahir</td>
				<td><input type="date" name="tgl"></td>
			</tr>

			<tr>
				<td>Jenis Kelamin</td>
				<td>
					<select name="jk">
						<option value="Laki-laki">Pria</option>
						<option value="Wanita">Wanita</option>
					</select>
				</td>
			</tr>

			<tr>
				<td>Program Studi</td>
				<td>
					<select name="prodi">
						<option  value="D3 Manajemen Informatika">D3 Manajemen Informatika</option>
						<option  value="D3 Informatika">D3 Informatika</option>
						<option  value="D3 Manajemen Pemasaran">D3 Manajemen Pemasaran</option>
						<option  value="D3 Perhotelan">D3 Perhotelan</option>
						<option  value="D3 Teknik Komputer">Teknik Komputer</option>
					</select>
				</td>
			</tr>

			<tr>
				<td>Fakultas</td>
				<td>
					<input type="radio" name="fakultas" value="Fakultas Ilmu Terapan">Fakultas Ilmu Terapan</input><br>
					<input type="radio" name="fakultas" value="Fakultas Industri Kreatif">Fakultas Industri Kreatif</input><br>
					<input type="radio" name="fakultas" value="Fakultas Informatika">Fakultas Informatika</input><br>
					<input type="radio" name="fakultas" value="Fakultas Rekayasa Industri">Fakultas Rekayasa Industri</input>
				</td>
			</tr>

			<tr>
				<td>Asal</td>
				<td><input type="textarea" name="alamat"></td>
			</tr>

			<tr>
				<td>Moto</td>
				<td><input type="textarea" name="moto"></td>
			</tr>

			<tr>
				<td><input type="submit" name="send"></td>
			</tr>
		</table>
	</form>
</body>
</html>

<?php
$conn = mysqli_connect("localhost","root","","modul1");

if (isset($_POST['send'])) {
	$nama=$_POST['nama'];
	$nim=$_POST['nim'];
	$tgl_lahir=$_POST['tgl'];
	$jenis_kelamin=$_POST['jk'];
	$prodi=$_POST['prodi'];
	$fakultas=$_POST['fakultas'];
	$asal=$_POST['alamat'];
	$moto=$_POST['moto'];

$con=mysqli_query($conn,"INSERT INTO kuliah VALUES('$nama','$nim','$tgl_lahir','$jenis_kelamin','$prodi','$fakultas','$asal','$moto')");

if ($con){
	echo "Data Berhasil Disimpan";
	header('Location:conn.php');
}else{
	echo "Data Gagal Disimpan";
}

}
?>