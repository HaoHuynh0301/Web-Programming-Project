<?php require_once('./php/show-blog.php') ?>

<!DOCTYPE html>
<html lang="en">

<?php include './templates/head.php'; ?>

<body>

  <!-- Navigation -->
  <?php include './templates/nav.php'; ?>

  <!-- Page Header -->
  <?php
    $res = getDetail($_GET['id']);
    while ($row3 = mysqli_fetch_array($res)) {
      $url = "'php/upload-img/blog-img/" . $row3['blog_img'] . "'";
      echo '<header class="masthead" style="background-image: url(' . $url . ')">';
    }
  ?>
  <!-- <header class="masthead" style="background-image: url('img/post-bg.jpg')"> -->
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <?php 
              $result = getDetail($_GET['id']);
              while ($row = mysqli_fetch_array($result)) {
                echo "<h1>".  $row['blog_title'] . "</h1>";
                
                $user = getUser($row['user_id']);
                while ($row2 = mysqli_fetch_array($user)) {
                  echo "<span class='meta'>Posted by
                          <a href='#'>" . $row2['users_username'] . "</a>
                          on " . $row['blog_date'] ."
                        </span>";
                }
              }
            ?>
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
              echo "<p>". $row['blog_content'] ."</p>";
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