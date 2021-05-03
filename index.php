<?php
require_once('./php/show-blog.php');
?>

<!DOCTYPE html>
<html lang="en">

<?php include './templates/head.php'; ?>

<body>

  <!-- Navigation -->
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
          <?php 
            if(isset($_SESSION['username'])) {
              echo "<li class='nav-item'>
                      <a class='nav-link' href='login.php'>Login</a>
                    </li>";
            } else {
              echo "<li class='nav-item'>
                      <a class='nav-link' href='login.php'>Login</a>
                    </li>";
            }
          ?>
        </ul>
      </div>
    </div>
  </nav>

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