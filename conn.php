<?php
include'view.php';
$data = mysqli_query($conn,"SELECT * FROM kuliah");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Data</title>
</head>
<body>
		<form action="conn.php" method="get">
		<label>Cari : </label>
		<input type="text" name="cari">
		<input type="submit" name="search" value="CARI DATA">
		</form>

	<?php 
		if (isset($_GET["search"])) {
			$search = $_GET["cari"];
			echo "hasil dari : ".$search."";
		}

	 ?>
	<table border="1">
		<tr>
		<th>Nama</th>
		<th>Nim</th>
		<th>Tanggal Lahir</th>
		<th>Jenis Kelamin</th>
		<th>Prodi</th>
		<th>Fakultas</th>
		<th>Asal</th>
		<th>Moto</th>
		<th>Aksi</th>
		</tr>

			<?php 
			if (isset($_GET["search"])) {
				$cari = $_GET["cari"];
				$data = mysqli_query($conn, "SELECT * FROM kuliah WHERE nama like '%".$search."%'"); 
			} else {
				 $data = mysqli_query($conn, "SELECT * FROM kuliah");
			}

			 while ($y = mysqli_fetch_assoc($data)) :
		 ?>
		
		<tr>
			<td><?php echo $y["nama"]; ?></td>
			<td><?php echo $y["nim"]; ?></td>
			<td><?php echo $y["tgl"]; ?></td>
			<td><?php echo $y["jk"]; ?></td>
			<td><?php echo $y["prodi"]; ?></td>
			<td><?php echo $y["fakultas"]; ?></td>
			<td><?php echo $y["alamat"]; ?></td>
			<td><?php echo $y["moto"]; ?></td>
			<td> <a href="hapus.php?nim=<?php echo $y['nim']; ?>">Hapus</a>
				<a href="edit.php?nim=<?php echo $y['nim']; ?>">Edit</a>
			</td>
		</tr>

	<?php endwhile; ?>
	</table>
	<a href="input.php"> Tambah Lagi Lah Biar Enak</a>
</body>
</html>