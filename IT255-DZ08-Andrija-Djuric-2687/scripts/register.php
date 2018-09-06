<?php
include("functions.php");
if (isset($_POST['submit'])) {

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $dob = $_POST['dob'];
    $country = $_POST['country'];

    if (!empty($fullname) && !empty($email) && !empty($password) && !empty($confirm_password) && !empty($dob) && !empty($country)
        && ($password == $confirm_password) && !checkIfUserExists($email)) {
        addUser($fullname, $email, $password, $dob, $country);
        header("Location: ../user_registered.html");
    } else {
        echo "<script>alert('Failure.');</script>";
        echo "Possible errors (this error-handling will be redone also):<br>
        ------------------------<br>Password confirmation;<br>Email already used;<br>Input fields empty;<br>
        ------------------------<br>Go back and try again.";
    }
}
?>