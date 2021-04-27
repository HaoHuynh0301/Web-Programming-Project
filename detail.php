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

  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <?php 
            $result = getDetail($_GET['id']);
            while ($row = mysqli_fetch_array($result)) {
              echo "<h1>".  $row['blog_title'] . "</h1><hr>
                    <p>". $row['blog_content'] ."</p>";
            }
          ?>
        </div>
      </div>
    </div>
  </article>
  <hr>

  <!-- Footer -->
  <?php include './templates/footer.php'; ?>

  <!-- JavaScript -->
  <?php include './templates/scrips.php'; ?>


</body>

</html>