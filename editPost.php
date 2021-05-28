<?php
        include('./php/show-blog.php');
        include('./php/getEditPost.php');
        error_reporting(0);
        session_start();
?>

<!DOCTYPE html>
<html lang="en">

<?php include './templates/head.php'; ?>

<body>

  <!-- Navigation -->
  <?php include './templates/nav.php'; 
  ?>


  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/writing.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1>Edit your blog</h1>
            <span class="subheading">"Tears are words that need to be written."<br>Paulo Coelho</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <form action="" method="post" enctype="multipart/form-data">
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <p style="margin: 0;">Edit cover for your post here!</p>
              <input name="cover_img" type="file" class="form-control" id="cover-img">
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Title</label>
              <input value='<?php 
                $tmp = getDetail($_SESSION['postId']);
                while ($row3 = mysqli_fetch_array($tmp)) {
                    $title = $row3['blog_title'];
                } echo $title;
                ?>' name="title" type="text" class="form-control" placeholder="Title" id="title" required data-validation-required-message="Please enter your blog title.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Message</label>
              <textarea name="content" rows="15" class="form-control" placeholder="Write your blog here" id="content" required data-validation-required-message="Please enter your blog contents.">
              <?php 
                $tmp = getDetail($_SESSION['postId']);
                while ($row3 = mysqli_fetch_array($tmp)) {
                    $content = $row3['blog_content'];
                } echo $content;
                ?>'
              </textarea>
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <br>
          <button name="submit" type="submit" class="btn btn-primary" id="create-blog-button">Edit</button>
        </form>
      </div>
    </div>
  </div>

  <hr>

  <!-- Footer -->
  <?php include './templates/footer.php'; ?>

  <!-- JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>

</body>

</html>