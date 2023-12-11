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

		#content {
			margin-left: 250px;
			padding: 20px;
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
		<h2>Admin Dashboard</h2>
		<p>Welcome to the admin panel. This is the main content area.</p>
	</div>

	<!-- Bootstrap JS and Popper.js -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>


</body>

</html>