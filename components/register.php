<?php
include "../config/config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PlayVerse-Register</title>
  <link rel="icon" href="../images/logo.jpg">
  <link rel="stylesheet" href="../public/register.css" />
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous" />
  <script
    src="https://kit.fontawesome.com/91c32085df.js"
    crossorigin="anonymous"></script>
</head>

<body>
  <div class="back-button">
    <button type="button" class="btn btn-primary back"><i class="fa-solid fa-angle-left m-1"></i>Back</button>
  </div>
  <div class="login-container">
    <form method="post" action="../controller/controller.php" class="register text-align-center">
      <p class="title">Register</p>
      <?php
      if ($_SESSION['error'] !== '') {  ?>
        <p style="color:red;" class="message text-center">
          <?php echo $_SESSION['error']; ?>
        </p>
      <?php
      }
      $_SESSION['error'] = ""; ?>
      <?php
      if ($_SESSION['error'] !== '') {  ?>
        <p style="color:orange;" class="message text-center">
          <?php echo $_SESSION['error']; ?>
        </p>
      <?php
      }
      $_SESSION['error'] = ""; ?>
      <div class="flex">
        <label>
          <input class="input" type="text" name="fname" />
          <span>Firstname</span>
        </label>

        <label>
          <input class="input" type="text" name="lname" />
          <span>Lastname</span>
        </label>
      </div>

      <label>
        <input class="input" type="email" name="email" />
        <span>Email</span>
      </label>

      <label>
        <input class="input" type="password" name="password" />
        <span>Password</span>
      </label>
      <label>
        <input class="input" type="password" name="cpassword" />
        <span>Confirm password</span>
      </label>
      <button type="submit" class="submit">Submit</button>
      <p class="signin">
        Already have an acount ? <a href="Login.php">Signin</a>
      </p>
    </form>
  </div>
  <script src="../public/backbtn.js"></script>
</body>

</html>