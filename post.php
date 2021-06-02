<?php require_once('./php/show-blog.php') ?>

<!DOCTYPE html>
<html lang="en">

<?php include './templates/head.php'; ?>
<body>

  <!-- Navigation -->
  <?php include './templates/nav.php'; ?>

  <?php 
    $result = getSamplePost();
  ?>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/post-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1>
            <?php
              $content = "";
              while ($row = mysqli_fetch_array($result)) {
                echo "<h1>". $row['blog_title']. "</h1>";
                $content = $row['blog_content'];
              }
            ?>
            </h1>
            <span class="meta">Posted by
              <a href="#">Start Bootstrap</a>
              on August 24, 2019</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
           <p><?php echo $content; ?> </p>
        </div>
      </div>
    </div>
  </article>

  <hr>

    <!-- Footer -->
  <?php include 'footer.php'; ?>

  <!-- JavaScript -->
  <?php include 'scrips.php'; ?>

</body>

</html>
