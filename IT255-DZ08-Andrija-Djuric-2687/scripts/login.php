<?php
session_start();
include("functions.php");
if (isset($_POST['submit'])) {

    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];

    if (!empty($email) && !empty($password)) {
        if (checkUser($email, $password)) {
            $_SESSION['email'] = $email;
			echo "<script>alert('Success.');</script>";
			header("Location: ../user_logged_in.html");
        } else {
			echo "<script>alert('Failure.');</script>";
            echo "Error: Wrong email or password. Go back and try again.";
        }
    } else {
		echo "<script>alert('Failure.');</script>";
        echo "You haven't entered all of the input fields!"; // there's a front-end "prevention" for this as well
    }
}
?>