<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Dashboard</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
	<!-- Bootstrap Icons -->
	<!-- Option 1: Include in HTML -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
	<!-- Custom styles -->
	<style>
		body {
			font-family: 'Arial', sans-serif;
			background-color: #f8f9fa;
		}

		#sidebar {
			height: 100%;
			width: 250px;
			position: fixed;
			top: 0;
			left: 0;
			background-color: #333;
			padding-top: 20px;
			padding-left: 10px;
			color: #fff;
			z-index: 1;
		}

		.navbar-brand {
			font-size: 1.5rem;
			font-weight: bold;
		}

		.navbar-toggler {
			color: #fff;
			border-color: #fff;
		}
	</style>
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
			<span class="navbar-brand">Admin Panel</span>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ms-auto">
					<li class="nav-item">
						<a class="nav-link" href="#">
							<i class="bi bi-person"></i> Profile
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
							<i class="bi bi-box"></i> Products
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
							<i class="bi bi-gear"></i> Settings
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('auth/logout'); ?>">
							<i class="bi bi-box-arrow-right"></i> Logout
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div id="content">
		<div class="container">
			<h2 class="text-center">Daftar Barang</h2>
			<!-- Tombol Tambah Barang -->
			<div class="container my-4">
				<a href="<?= base_url('barang/tambah'); ?>" class="btn btn-success">Tambah Barang</a>
			</div>
			<table class="table">
				<thead>
					<tr>
						<th scope="col">ID</th>
						<th scope="col">Nama Barang</th>
						<th scope="col">Harga Barang</th>
						<th scope="col">Stok</th>
						<th scope="col">Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php foreach ($barang as $item) : ?>
						<tr>
							<th scope="row"><?= $item->id; ?></th>
							<td><?= $item->nama_barang; ?></td>
							<td><?= $item->harga_barang; ?></td>
							<td><?= $item->jumlah_barang; ?></td>
							<td>
								<!-- Tambahkan tombol atau tautan untuk aksi di sini -->
								<a href="<?= base_url('barang/edit/' . $item->id); ?>" class="btn btn-warning btn-sm">Edit</a>
								<a href="<?= base_url('barang/delete/' . $item->id); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus barang ini?')">Hapus</a>
							</td>
						</tr>
					<?php endforeach; ?>

				</tbody>
			</table>
		</div>
	</div>

	<!-- Bootstrap JS and Popper.js -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>


</body>

</html>