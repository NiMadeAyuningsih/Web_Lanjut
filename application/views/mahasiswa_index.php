<!DOCTYPE html>
<html>
<head>
	<title>mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css')?>">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark shadow" style="background-color: #3175bf">
		<a href="" class="navbar-brand">
			TUGAS
		</a>
		<div class="navbar-nav">
			<a href="" class="nav-link active">HOME</a>
			<a href="<?= site_url('mahasiswa/tambah')?>" class="nav-link">Tambah Data</a>
		</div>
		<div class="navbar-nav ml-auto">
			<a href="" class="nav-link active">DEAYU</a>
		</div>
	</nav>
	<div class="alert alert-success text-center mt-4">
		Data Mahasiswa
	</div>
	<div class="container">
	<table class="table table-bordered table-sm">
		<tr>
			<th>No</th>
			<th>Nim</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Aksi</th>
		</tr>
		<tr>
			<td>1</td>
			<td>1810330027</td>
			<td>deayu</td>
			<td>Mataram</td>
			<td>
				<a href="" class="btn btn-info btn-sm">Edit</a>
				<a href="" class="btn btn-danger btn-sm">Hapus</a>
			</td>
		</tr>
	</table>
</div>
	

</body>
</html>