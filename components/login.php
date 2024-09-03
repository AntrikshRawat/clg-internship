<?php
include "../config/config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PlayVerse-Login</title>
  <link rel="icon" href="../images/logo.jpg">
  <link rel="stylesheet" href="../public/login.css" />
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
    <form method="post" action="../controller/controller1.php" class="login-form">
      <p class="heading">Login</p>
      <p class="paragraph">Login to your account</p>
      <!-- <p>this is message</p> -->
      <?php
      if ($_SESSION['error'] !== '') {  ?>
        <p style="color:red">
          <?php echo $_SESSION['error']; ?>
        </p>
      <?php
      }
      $_SESSION['error'] = ""; ?>
      <div class="input-group">
        <input name="email" placeholder="Email" type="email" />
      </div>
      <div class="input-group">
        <input
          placeholder="Password"
          name="password"
          type="password" />
      </div>
      <button type="submit" class="form align-items-center m-2">Login</button>
      <div class="bottom-text">
        <p>Don't have an account? <a href="register.php">Sign Up</a></p>
        <p><a href="#">Forgot password?</a></p>
      </div>
    </form>
  </div>
  <script src="../public/backbtn.js"></script>
</body>

</html>