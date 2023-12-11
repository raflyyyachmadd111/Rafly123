<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Login Page</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!-- Custom styles -->
	<style>
		body {
			display: flex;
			align-items: center;
			justify-content: center;
			height: 100vh;
			margin: 0;
			background-color: #f8f9fa;
		}

		.card {
			width: 300px;
		}
	</style>
</head>

<body>

	<div class="card">
		<div class="card-body">
			<h3 class="text-center mb-4">Login</h3>

			<!-- Login Form -->
			<?php
			if (!empty($error_message)) {
				echo '<p style="color: red; text-align: center;">' . $error_message . '</p>';
			}
			if (!empty($success_message)) {
				echo '<p style="color: green; text-align: center;">' . $success_message . '</p>';
			}
			?>
			<form method="post" action="<?= base_url('auth/login'); ?>">
				<div class="form-group">
					<label for="loginUsername">Username:</label>
					<input type="text" class="form-control" name="username" placeholder="Enter your username" required>
				</div>
				<div class="form-group">
					<label for="loginPassword">Password:</label>
					<input type="password" class="form-control" name="password" placeholder="Enter your password" required>
				</div>
				<button type="submit" class="btn btn-primary btn-block">Login</button>
			</form>

			<div class="text-center mt-3">
				<p>Don't have an account? <a href="<?= base_url('register') ?>">Register here</a></p>
			</div>
		</div>
	</div>

	<!-- Bootstrap JS and Popper.js -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>