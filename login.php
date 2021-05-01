<?php 
include('./php/login-operation.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset='utf-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
	<meta name='description' content=''>
	<meta name='author' content=''>

	<title>Blog website</title>

	<!-- Bootstrap core CSS -->
	<link href='vendor/bootstrap/css/bootstrap.min.css' rel='stylesheet'>

	<!-- Custom fonts for this template -->
	<link href='vendor/fontawesome-free/css/all.min.css' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

	<!-- Custom styles for this template -->
	<link href='css/clean-blog.min.css' rel='stylesheet'>

	<style>
		body {
			background-image: url('img/library.jpg');
			background-repeat: no-repeat;
			background-size: 100%;
		}
	</style>
</head>

<body>

	<!-- Navigation -->
	<nav><?php include './templates/nav.php'; ?></nav>

	<header class="masthead">
	</header>

	<session id="login">
		<form action="" method='post' style="margin: 15%;">
			<div class="container d-flex justify-content-center">
				<div class="row">
					<div class="card mb-3" style="min-width: 500px; padding: 1em;">
						<h3 class="d-flex justify-content-center mb-3">Login</h3>
						<div class="input-group mb-3">
							<input name="username" type="text" class="form-control" placeholder="Username" required style="border-radius: 50px;">
						</div>
						<div class="input-group mb-3">
							<input name="password" type="password" class="form-control" placeholder="Password" required style="border-radius: 50px;">
						</div>
						<div class="input-group">
							<button name="submit" type="submit" class="btn btn-primary" style="border-radius: 50px; padding: 0.5em; width: 100%;">Login</button>
						</div>
						<p style="font-size: 12pt;">Don't have account? <a href="register.php">Register here</a></p>
					</div>
				</div>
			</div>
		</form>
	</session>

</body>

</html>