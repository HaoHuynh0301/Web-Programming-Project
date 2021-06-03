<?php 
session_save_path('C:\xampp\tmp');
session_start();
if(empty($_SESSION["auth"]) || $_SESSION["auth"] == 'false') {
    echo "
		<nav class='navbar navbar-expand-lg navbar-light fixed-top' id='mainNav'>
	    <div class='container'>
	      <a class='navbar-brand' href='index.php'>Blog website</a>
	      <button class='navbar-toggler navbar-toggler-right' type='button' data-toggle='collapse' data-target='#navbarResponsive' aria-controls='navbarResponsive' aria-expanded='false' aria-label='Toggle navigation'>
	        Menu
	        <i class='fas fa-bars'></i>
	      </button>
	      <div class='collapse navbar-collapse' id='navbarResponsive'>
	        <ul class='navbar-nav ml-auto'>
	          <li class='nav-item'>
	            <a class='nav-link' href='index.php?i=0'>Home</a>
	          </li>
	          <li class='nav-item'>
	            <a class='nav-link' href='post.php'>Sample Post</a>
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
	";
}
else if($_SESSION["auth"] == 'true') {
	$sql_title = "SELECT * FROM contact";
	$Result = mysqli_query($GLOBALS['conn'], $sql_title);

	if (mysqli_num_rows($Result) > 0) {
		$totalContact = mysqli_num_rows($Result);
		echo "
			<nav class='navbar navbar-expand-lg navbar-light fixed-top' id='mainNav'>
			<div class='container'>
			<a class='navbar-brand' href='index.php'>Blog website</a>
			<button class='navbar-toggler navbar-toggler-right' type='button' data-toggle='collapse' data-target='#navbarResponsive' aria-controls='navbarResponsive' aria-expanded='false' aria-label='Toggle navigation'>
				Menu
				<i class='fas fa-bars'></i>
			</button>
			<div class='collapse navbar-collapse' id='navbarResponsive'>
				<ul class='navbar-nav ml-auto'>
				<li class='nav-item'>
					<a class='nav-link' href='index.php?i=0'>Home</a>
				</li>
				<li class='nav-item'>
					<a class='nav-link' href='post.php'>Sample Post</a>
				</li>
				<li class='nav-item'>
					<a class='nav-link' href='contact.php'>Contact</a>
				</li>
				<li class='nav-item'>
					<a class='nav-link' href='logout.php'>Logout</a>
				</li>
				<li class='nav-item dropdown' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
					<a class='nav-link' href='logout.php'><i class='fas fa-chevron-circle-down' style='font-size: 1.5em;'></i></a>
					<div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>
						<a class='dropdown-item' href='#'><span class='badge badge-pill badge-danger'>" . $totalContact . "</span>  Contacts</a>
						<a class='dropdown-item' href='#'>Another action</a>
						<a class='dropdown-item' href='#'>Something else here</a>
					</div>
				</li>
				</ul>
			</div>
			</div>
		</nav>
		";
	}
}
?>