<?php include('./php/login-operation.php'); ?>

<!DOCTYPE html>
<html lang="en">

<?php include './templates/head.php'; ?>

<body>

	<!-- Navigation -->
	<!-- <nav><?php include './templates/nav.php'; ?></nav> -->

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
			<a class='navbar-brand' href='index.php'>Blog website</a>
			<button class='navbar-toggler navbar-toggler-right' type='button' data-toggle='collapse' data-target='#navbarResponsive' aria-controls='navbarResponsive' aria-expanded='false' aria-label='Toggle navigation'>
				Menu
				<i class='fas fa-bars'></i>
			</button>
			<div class='collapse navbar-collapse' id='navbarResponsive'>
				<ul class='navbar-nav ml-auto'>
					<li class='nav-item'>
						<a class='nav-link' href='index.php'>Home</a>
					</li>
					<li class='nav-item'>
						<a class='nav-link' href='about.php'>About</a>
					</li>
					<li class='nav-item'>
						<a class='nav-link' href='post 2.php'>Sample Post</a>
					</li>
					<li class='nav-item'>
						<a class='nav-link' href='contact.php'>Contact</a>
					</li>
					<li class='nav-item'>
						<a class='nav-link' href='login.php'>Login</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

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

	<!-- Footer -->
	<?php include './templates/footer.php'; ?>

</body>

</html>