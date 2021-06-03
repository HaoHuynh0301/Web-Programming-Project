<?php
require_once('./php/show-blog.php');
?>

<!DOCTYPE html>
<html lang="en">
<style> 
  .blur {
    filter: blur(2px);
    -webkit-filter: blur(1px);
    pointer-events: None;
  }
</style>

<?php include './templates/head.php'; ?>

<body>

  <!-- Navigation -->
  <?php include './templates/nav.php'; ?>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/blog.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Blog Site</h1>
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
        <div class="input-group rounded">
          <input type="text" class="form-control rounded" placeholder="Search" aria-label="Search"
            aria-describedby="search-addon" onkeyup="showHint(this.value)">
          <span class="input-group-text border-0" id="search-addon">
            <i class="fas fa-search"></i>
          </span>
        </div>
        <p><span id="txtHint"></span></p>
        
        <div class="post-preview" id="basePosts">
          <?php
          $i = $_GET['i'];
          $result = getData($i*5);
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
              <p class="post-meta">
                <?php
                  $user = getUser($row['user_id']);
                  while ($row2 = mysqli_fetch_array($user)) {
                    echo "Posted by " . $row2['users_username'] . " on " . $row['blog_date'];
                  }
                ?>
              </p>
            <?php
            }
          } else {
            echo "<h2 class='post-title'>Don't have any blogs here!</h2>";
          }
          ?>
        </div>
        <span id="txtHint"></span>
        <hr>
        <!-- Pager -->
        <nav class="float-right" aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item">
              <a style="color: black;" class="page-link" href="<?php $i = $_GET['i']; 
                                                                      if ($i == 0) echo "index.php?i=0";
                                                                      else echo "index.php?i=" . $i-1;  ?>" 
                                                                      aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
              </a>
            </li>
            <li class="page-item"><a style="color: black;" class="page-link" href="index.php?i=0">1</a></li>
            <li class="page-item"><a style="color: black;" class="page-link" href="index.php?i=1">2</a></li>
            <li class="page-item"><a style="color: black;" class="page-link" href="index.php?i=2">3</a></li>
            <li class="page-item">
              <a style="color: black;" class="page-link" href="<?php $i = $_GET['i']; 
                                                                echo "index.php?i=" . $i+1; ?>" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
              </a>
            </li>
          </ul>
        </nav>
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
      var basePost = document.getElementById("basePosts");
      basePost.classList.add("blur");
      if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        basePost.classList.remove("blur");
        return;
      } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint").innerHTML = this.responseText;
          }
        }
        xmlhttp.open("GET", "gethint.php?q="+str, true);
        xmlhttp.send();
      }
    }
  </script>

</body>

</html>