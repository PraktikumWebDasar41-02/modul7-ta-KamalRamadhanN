<?php 

$conn = mysqli_connect("localhost","root","","modul1");

$nim = $_GET["nim"];

$isidata = mysqli_query($conn, "SELECT * FROM kuliah");
$ambilisi = mysqli_fetch_array($isidata);


 ?>




<!DOCTYPE html>
<html>
<head>
	<title>From Pendataan</title>
</head>
<body>
	<form method="POST" action="update.php">
		<table>
			<tr>
				<td>From Pendataan</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" value="<?php echo $ambilisi["nama"]; ?>"></td>
			</tr>

			<tr>
				<td>Nim</td>
				<td><input type="text" name="nim" value="<?php echo $ambilisi["nim"]; ?>"></td>
			</tr>

			<tr>
				<td>Tanggal Lahir</td>
				<td><input type="date" name="tgl" value="<?php echo $ambilisi["tgl"]; ?>"></td>
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
						<option  value="D3 Manajemen Informatika"<?php echo $ambilisi["prodi"] == "D3 Manajemen Informatika" ? "selected='selected'" : ""; ?>>D3 Manajemen Informatika</option>
						<option  value="D3 Informatika"<?php echo $ambilisi["prodi"] == "D3 Informatika" ? "selected='selected'" : ""; ?>>D3 Informatika</option>
						<option  value="D3 Manajemen Pemasaran" <?php echo $ambilisi["fakultas"] == "D3 Manajemen Pemasaran" ? "selected='selected'" : ""; ?>>D3 Manajemen Pemasaran</option>
						<option  value="D3 Perhotelan" <?php echo $ambilisi["prodi"] == "D3 Perhotelan" ? "selected='selected'" : ""; ?>>D3 Perhotelan</option>
						<option  value="D3 Teknik Komputer" <?php echo $ambilisi["prodi"] == "D3 Teknik Komputer" ? "selected='selected'" : ""; ?>>Teknik Komputer</option>
					</select>
				</td>
			</tr>

			<tr>
				<td>Fakultas</td>
				<td>
					<input type="radio" name="fakultas" value="Fakultas Ilmu Terapan" <?php echo $ambilisi["fakultas"] == "Fakultas Ilmu Terapan" ? "checked" : ""; ?>>Fakultas Ilmu Terapan</input><br>
					<input type="radio" name="fakultas" value="Fakultas Industri Kreatif" <?php echo $ambilisi["fakultas"] == "Fakultas Industri Kreatif" ? "checked" : ""; ?>>Fakultas Industri Kreatif</input><br>
					<input type="radio" name="fakultas" value="Fakultas Informatika" <?php echo $ambilisi["fakultas"] == "Fakultas Informatika" ? "checked" : ""; ?>>Fakultas Informatika</input><br>
					<input type="radio" name="fakultas" value="Fakultas Rekayasa Industri" <?php echo $ambilisi["fakultas"] == "Fakultas Ilmu Terapan" ? "checked" : ""; ?> >Fakultas Rekayasa Industri</input>
				</td>
			</tr>

			<tr>
				<td>Asal</td>
				<td><input type="text" name="alamat" value="<?php echo $ambilisi["alamat"]; ?>"></td>
			</tr>

			<tr>
				<td>Moto</td>
				<td><input type="text" name="moto" value="<?php echo $ambilisi["moto"]; ?>"></td>
			</tr>

			<tr>
				<td><input type="submit" name="update" value="UPDATE"></td>
			</tr>
		</table>
	</form>
</body>
</html>

