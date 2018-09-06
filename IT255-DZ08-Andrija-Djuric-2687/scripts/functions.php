<?php
include("config.php");

function checkIfUserExists($email){

    global $conn;
    $sql   = "SELECT * FROM user WHERE email=?";
    $query = $conn->prepare($sql);
    $query->bind_param('s', $email);
    $query->execute();
    $query->store_result();
    if ($query->num_rows > 0) {
        return true;
    } else {
        return false;
    }
    $query->close();
}

function addUser($fullname, $email, $password, $dob, $country){

    global $conn;
        $insert = "INSERT INTO user (fullname, email, password, dob, country) VALUES (?,?,?,?,?)";
        $query  = $conn->prepare($insert);
        $query->bind_param('sssss', $fullname, $email, md5($password), $dob, $country);
        $query->execute();
        $query->close();
}

function checkUser($email, $password) {

    global $conn;
    $sql = "SELECT * FROM user WHERE email=? AND password=?";
    $query = $conn->prepare($sql);
    $query->bind_param('ss', $email, md5($password));
    $query->execute();
    $query->store_result();
    if ($query-> num_rows > 0) {
        return 1;
    } else {
        return 0;
    }
    $query->close();
}
?>