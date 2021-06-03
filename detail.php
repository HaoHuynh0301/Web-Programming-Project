<?php require_once('./php/show-blog.php'); 
      include('./php/getMessage.php');
      error_reporting(0);
      session_start();
      $_SESSION['postId'] = $_GET['id'];
?>

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
      $tmpUserName = $row3['user_id'];
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
            if($tmpUserName == $_SESSION['user_id']) {
              echo "<div class='col-lg-8 col-md-10 mx-auto'>
                        <button type='button' class='btn btn-outline-dark mt-3 subheading' data-toggle='modal' data-target='#myModal'>Write your commment</button>
                        <a href='editPost.php' type='button' class='btn btn-outline-dark mt-3 subheading'>Edit</a>
                        </div>
                
              <div class='modal fade' id='myModal' role='dialog'>
                <div class='modal-dialog'>
                
                  <!-- Modal content-->
                  <div class='modal-content'>
                    <div class='modal-header'>
                      <h4 class='modal-title'>Give us your comment</h4>
                      <button type='button' class='close' data-dismiss='modal'>&times;</button>
                    </div>
                    <div class='modal-body'>
                      <form method='POST' aciton='' name='sentMessage' id='contactForm' novalidate>
                          <label for='message'>Write your comment</label>
                          <textarea name = 'message' rows='5' class='form-control' placeholder='Message' id='message' required data-validation-required-message='Please enter a message.'></textarea>
                          <input class='btn btn-outline-dark mt-3 subheading' type='submit' value='SEND'>
                      </form>
                    </div>
                  </div>
                  
                </div>
              </div>";
            } else {
              echo "<div class='col-lg-8 col-md-10 mx-auto'>
                        <button type='button' class='btn btn-outline-dark mt-3 subheading' data-toggle='modal' data-target='#myModal'>Write your commment</button>
                        </div>
                
                <div class='modal fade' id='myModal' role='dialog'>
                <div class='modal-dialog'>
                
                  <!-- Modal content-->
                  <div class='modal-content'>
                    <div class='modal-header'>
                      <h4 class='modal-title'>Give us your comment</h4>
                      <button type='button' class='close' data-dismiss='modal'>&times;</button>
                    </div>
                    <div class='modal-body'>
                      <form method='POST' aciton='' name='sentMessage' id='contactForm' novalidate>
                          <label for='message'>Write your comment</label>
                          <textarea name = 'message' rows='5' class='form-control' placeholder='Message' id='message' required data-validation-required-message='Please enter a message.'></textarea>
                          <input class='btn btn-outline-dark mt-3 subheading' type='submit' value='SEND'>
                      </form>
                    </div>
                  </div>
                  
                </div>
              </div>";
            }       
          ?>
          <h2 class="post-subtitle" style="margin-top:40px">Comments</h2><hr>
          <div class="commented-section mt-2">
            <?php 
            $result=getComment($_GET['id']);
            if($result != false) {
              while ($row = mysqli_fetch_array($result)) {
                echo "
                <div class='d-flex flex-row align-items-center commented-user'>
                    <h5 class='mr-2'>Anonymous user</h5><span class='dot mb-1'></span><span class='mb-1 ml-2'>Posted in ". $row['posted_time'] ."</span>
                </div>
                <div class='comment-text-sm'><span>" . $row['commment_message'] . "</span></div><hr>";
              }
            } else {
              echo "No comments!";
            }
            ?>
        </div>
          
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