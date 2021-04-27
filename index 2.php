<?php require_once('./php/show-blog.php') ?>

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
            <a href="create-blog.php" class="btn btn-outline-light mt-3" style="border-radius: 50px; padding: 0.75em 1.5em">
              Write now
            </a>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-preview">
          <?php
          $result = getData();
          while ($row = mysqli_fetch_array($result)) {
          ?>
            <a href="post.php">
              <h2 class="post-title">
                <?php echo $row['blog_title']?>
              </h2>
              <h3 class="post-subtitle">
                <?php 
                echo mb_substr($row['blog_content'], 0, 100, "UTF-8") . "..." ;
                ?>
              </h3>
            </a>
            <p class="post-meta">Posted on <?php echo $row['blog_date']?></p>
          <?php
          }
          ?>
        </div>
        <hr>
        <!-- Pager -->
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div>
      </div>
    </div>
  </div>

  <hr>

  <!-- Footer -->
  <?php include 'footer.php'; ?>

  <!-- JavaScript -->
  <?php include 'scrips.php'; ?>

</body>

</html>