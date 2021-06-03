<!DOCTYPE html>
<html lang="en">

<?php 
include './php/getContact.php';
include './templates/head.php'; ?>

<body>

  <!-- Navigation -->
  <?php include './templates/nav.php'; ?>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/contact-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1>List of Contacts</h1>
            <span class="subheading">Have questions? I have answers.</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->

  <hr>

  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="input-group rounded">
            <?php 
                $result = getContacts();
                if ($result != false) {
                    while ($row = mysqli_fetch_array($result)) {
                        echo "
                            <div class='d-flex flex-row align-items-center commented-user'>
                                <h5 class='mr-2'>". $row['contact_name'] ."</h5><span class='dot mb-1'></span><span class='mb-1 ml-2'>". $row['contact_message'] ."</span>
                            </div>
                            <br /><hr>";
                        
                    }
                }
            ?>
        </div>
        
        <div class="post-preview" id="basePosts">
          
        </div>
        
        <hr>
        <!-- Pager -->
        
      </div>
    </div>
  </div>

  <!-- Footer -->
  <?php include './templates/footer.php'; ?>

  <!-- Bootstrap core JavaScript -->
  <?php include './templates/scrips.php'; ?>

</body>

</html>
