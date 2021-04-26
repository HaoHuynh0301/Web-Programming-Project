<?php 

?>

<!DOCTYPE html>
<html lang="en">

<?php include './templates/head.php'; ?>

<body>

  	<!-- Navigation -->
  	<?php include './templates/nav.php'; ?>

  	<!-- Page Header -->
	 <header class="masthead" style="background-image: url('img/home-bg.jpg')">
	    <div class="overlay"></div>
	    <div class="container">
	      	<div class="row">
	        	<div class="col-lg-8 col-md-10 mx-auto">
	          		<div class="site-heading">
	            		<h1>Clean Blog</h1>
	            		<span class="subheading">“The scariest moment is always just before you start.”<br>Stephen King</span>	
	          		</div>
	        	</div>
	      	</div>
	    </div>
	</header>

    <div class="container">
	    <div class="row">
	      <div class="col-lg-8 col-md-10 mx-auto">
	        <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as possible!</p>
	        <form name="sentMessage" id="contactForm" novalidate>
	          <div class="control-group">
	            <div class="form-group floating-label-form-group controls">
	              <label>Name</label>
	              <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
	              <p class="help-block text-danger"></p>
	            </div>
	          </div>
	          <div class="control-group">
	            <div class="form-group floating-label-form-group controls">
	              <label>Email Address</label>
	              <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
	              <p class="help-block text-danger"></p>
	            </div>
	          </div>
	          <div class="control-group">
	            <div class="form-group col-xs-12 floating-label-form-group controls">
	              <label>Phone Number</label>
	              <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
	              <p class="help-block text-danger"></p>
	            </div>
	          </div>
	          <div class="control-group">
	            <div class="form-group floating-label-form-group controls">
	              <label>Message</label>
	              <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
	              <p class="help-block text-danger"></p>
	            </div>
	          </div>
	          <br>
	          <div id="success"></div>
	          <button type="submit" class="btn btn-primary" id="sendMessageButton">Send</button>
	        </form>
	      </div>
	    </div>
  </div>


</body>
</html>