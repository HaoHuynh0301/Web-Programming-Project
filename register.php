<?php
require_once('./php/register-operation.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <meta name='description' content=''>
    <meta name='author' content=''>

    <title>Blog website</title>

    <!-- Bootstrap core CSS -->
    <link href='vendor/bootstrap/css/bootstrap.min.css' rel='stylesheet'>

    <!-- Custom fonts for this template -->
    <link href='vendor/fontawesome-free/css/all.min.css' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href='css/clean-blog.min.css' rel='stylesheet'>

    <style>
        body {
            background-image: url('img/library.jpg');
            background-repeat: no-repeat;
            background-size: 100%;
        }

        img {
            min-width: 30%;
            max-width: 50px;
            border-radius: 50%;
            display: block;
        }
    </style>
</head>

<body>

    <!-- Navigation -->
    <nav><?php include './templates/nav.php'; ?></nav>

    <header class="masthead">
    </header>

    <form action="" method='post' enctype="multipart/form-data">
        <div class="container d-flex justify-content-center">
            <div class="row" style="margin-top: 3em;">
                <div class="card mb-3" style="padding: 1em; box-shadow: 2px 2px 10px; min-width: 400px;">
                    <h3 class="d-flex justify-content-center mb-3">Sign up</h3>
                    <div class="input-group mb-3">
                        <img class="mx-auto d-block" src="img/balnk-avatar.png" id="profile-img-display" alt="blank-avartar" onclick="triggerClick()">
                        <input name="profile_img" type="file" class="custom-file-input" id="profile-img" onchange="displayImage(this)" style="display: none;">
                    </div>
                    <div class="input-group mb-3 d-flex justify-content-center">
                        <label for="profile-img-display" style="color: #737373; font-size: 8pt;">Click to change profile image</label>
                    </div>
                    <div class="input-group mb-3">
                        <input name="email" type="Email" class="form-control" placeholder="Email" style="border-radius: 50px;">
                    </div>
                    <div class="input-group mb-3">
                        <input name="username" type="text" class="form-control" placeholder="Username" style="border-radius: 50px;">
                    </div>
                    <div class="input-group mb-3">
                        <input name="password" type="password" class="form-control" placeholder="Password" style="border-radius: 50px;">
                    </div>
                    <div class="input-group mb-3">
                        <input name="confirm_password" type="password" class="form-control" placeholder="Confirm password" style="border-radius: 50px;">
                    </div>
                    <div class="input-group">
                        <button name="submit" type="submit" class="btn btn-primary" style="border-radius: 50px; padding: 0.5em; width: 100%;">Sign up</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

</body>

<script>
    function triggerClick(e) {
        document.querySelector('#profile-img').click();
    }

    function displayImage(e) {
        if (e.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.querySelector('#profile-img-display').setAttribute('src', e.target.result);
            }
            reader.readAsDataURL(e.files[0]);
        }
    }
</script>

</html>