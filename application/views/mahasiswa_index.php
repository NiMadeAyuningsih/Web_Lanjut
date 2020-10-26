<!DOCTYPE html>
<html>
<head>
	<title>mahasiswa</title>
</head>
<body>

	<h1>mahasiswa</h1>
	<h3>selamat datang ,<?=$nama_lengkap ?></h3>
	<p>jenis_kelamin saya <?= $jenis_kelamin ?></p>
	<p>nim saya <?= $nim ?> </p>
	<hr>
	<a href="<?= site_url('mahasiswa/tambah')?>">Tambah</a>
	<table border="1">
		<tr>
			<th>nim</th>
			<th>nama mahasiswa</th>
		</tr>
		<?php foreach ($mahasiswa as $key): ?>
			<tr>
				<td><?= $key['nim'] ?></td>
				<td><?= $key['nama'] ?></td>
			</tr>
		<?php endforeach  ?>
		
	</table>
	<?= $mahasiswa[0]['nim'] ?>

</body>
</html>