<?php 
include('./php/db-connector.php');

if (isset($_POST['submit'])) {
    $name = textboxValue("name");
    $email = textboxValue("email");
    $phone = textboxValue("phone");
    $message = textboxValue("message");

    $sql = "INSERT INTO contact(contact_email, contact_message, contact_name, contact_phonenumber) VALUES ('$emai', '$message', '$name', '$phone')";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo mysqli_error($conn);
    } else {
        echo "<script>alert('Get contact successfully!')</script>";
    }
}
?>