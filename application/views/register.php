<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Register Page</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!-- Custom styles -->
	<style>
		body {
			background-color: #f8f9fa;
		}

		.register-container {
			margin-top: 5%;
		}
	</style>
</head>

<body>

	<div class="container register-container">
		<div class="row justify-content-center">
			<div class="col-md-6 col-lg-4">
				<div class="card">
					<div class="card-body">
						<h3 class="text-center">Register</h3>
						<form>
							<div class="form-group">
								<label for="username">Username:</label>
								<input type="text" class="form-control" id="username" placeholder="Enter your username" required>
							</div>
							<div class="form-group">
								<label for="email">Email:</label>
								<input type="email" class="form-control" id="email" placeholder="Enter your email" required>
							</div>
							<div class="form-group">
								<label for="password">Password:</label>
								<input type="password" class="form-control" id="password" placeholder="Enter your password" required>
							</div>
							<button type="submit" class="btn btn-primary btn-block">Register</button>
						</form>
						<p class="text-center mt-3">Already have an account? <a href="<?= base_url('login') ?>">Login here</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Bootstrap JS and Popper.js -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>