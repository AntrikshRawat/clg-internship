<?php
include "../config/config.php";
$sql = mysqli_query($conn, "SELECT * FROM users ORDER BY id DESC");
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
if (empty($fname) || empty($lname) || empty($email) || empty($password) || empty($cpassword)) {
  $_SESSION['error'] = "Please fill the blank fields!";
  header("location:" . $siteurl . "/components/register.php");
} else {
  if ($password !== $cpassword) {
    $_SESSION['error'] = "Confirm password didn't match!";
    header("location:" . $siteurl . "/components/register.php");
    return false;
  }
  while ($data = mysqli_fetch_array($sql)) {
    if ($data['email'] === $email) {
      $_SESSION['error'] = "User Already Exist!";
      header("location:" . $siteurl . "/components/register.php");
      return false;
    }
  }
  $sql = "INSERT INTO users(fname , lname, email , password)
                    VALUES('$fname' , '$lname' ,'$email','$password' )";
  if (mysqli_query($conn, $sql)) {
    $_SESSION['success'] = $fname;
    header("location:" . $siteurl . "/components/index.php");
  } else {
    echo "error" . mysqli_error($conn);
  }
}
