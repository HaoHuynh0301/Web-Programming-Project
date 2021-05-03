<?php
require_once('./php/show-blog.php');
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
          if ($result) {
            while ($row = mysqli_fetch_array($result)) {
          ?>
              <a href="detail.php?id=<?php echo $row['blog_id']; ?>">
                <h2 class="post-title">
                  <?php echo $row['blog_title'] ?>
                </h2>
                <h3 class="post-subtitle">
                  <?php
                  echo mb_substr($row['blog_content'], 0, 100, "UTF-8") . "...";
                  ?>
                </h3>
              </a>
              <p class="post-meta">Posted on <?php echo $row['blog_date'] ?></p>
            <?php
            }
          } else {
            echo "<h2 class='post-title'>Don't have any blogs here!</h2>";
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
  <?php include './templates/footer.php'; ?>

  <!-- JavaScript -->
  <?php include './templates/scrips.php'; ?>

  <script>
    function showHint(str) {
      if (str.length == 0) {
        document.getElementById("txtHint").innerHTML = "";
        return;
      } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint").innerHTML = this.responseText;
          }
        }
        xmlhttp.open("GET", "gethint.php?q=" + str, true);
        xmlhttp.send();
      }
    }
  </script>

</body>

</html>