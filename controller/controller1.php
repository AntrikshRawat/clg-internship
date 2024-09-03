<?php
include "../config/config.php";
$sql = mysqli_query($conn, "SELECT * FROM users ORDER BY id DESC");
$email = $_POST['email'];
$password = $_POST['password'];
if (empty($email) || empty($password)) {
    $_SESSION['error'] = "Please fill the blank fields!";
    header("location:" . $siteurl . "/components/login.php");
} else {
    while ($data = mysqli_fetch_array($sql)) {
        if ($data['email'] === $email && $data['password'] === $password) {
            $_SESSION['success']  = $data['fname'];
            header("location:" . $siteurl . "/components/index.php");
            $_SESSION['error'] = "";
            return false;
        }
        $_SESSION['error']  = "Incorrect Email or Password!";
        header("location:" . $siteurl . "/components/login.php");
    }
}
