<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="login/globalsLog.css" />
    <link rel="stylesheet" href="login/styleLog.css" />
  </head>
  <body>

  <?php
  include 'config.php';
  if (isset($_POST['submit'])) {
    $user_name = $_POST['username'];
    $password = $_POST['password'];

    $user_search = "select * from registration where username='$user_name' ";
    $query = mysqli_query($conn, $user_search);
    $user_count = mysqli_num_rows($query);
    if ($user_count) {
      $user_pass = mysqli_fetch_assoc($query);

      $db_pass = $user_pass['password'];
      $password = password_verify($password,$db_pass);
      if ($password) {
        session_start();
        $_SESSION['username'] = $user_name; // Store username in session
        // Redirect to homepage or any other authenticated page
        header("Location: index.php");
        exit();
    }
    
      if ($password) {
  ?>
  <script>
    //alert("Login Successful");
    location.replace("index.html");
  </script>
  <?php
      } else {
      ?>
  <script>
    alert("Password Incorrect");
  </script>
  <?php
      }
    }else{
      ?>
  <script>
    alert("Invalid UserName");
  </script>
  <?php
    }
  }
  ?>


<form class="codopedia-login-page" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
    <div class="codopedia-login-page">
      <div class="div">
        <div class="overlap">
          <div class="rectangle"></div>
          <div class="object-other"></div>
        </div>
        <img class="social-media-icons" src="login/img/social-media-icons.png" />
        <div class="rectangle-2">
          <input type="text" name="username" placeholder="Enter your e-mail ID" required/>
        </div>

        <div class="rectangle-3">
          <input type="password" name="password" placeholder="Enter password" minlength="4" maxlength="9" required/>
        </div>

        <div class="text-wrapper">Username:</div>
        <p class="dont-have-and">
          <span class="span">Don't have and account? </span> <span class="text-wrapper-2"><a href="indexRegi.php" id="register">Register</a></span>
        </p>
        <div class="text-wrapper-3">Welcome Back!</div>
        <div class="group">
        <div class="overlap-group"><button type="submit" name="submit" class="text-wrapper-4" id="form-open">Login</button></div>
        </div>
        <div class="text-wrapper-5">Password:</div>
        <div class="overlap-2">
          <div class="rectangle-4"></div>
          <div class="rectangle-5"></div>
        </div>
      </div>
    </div>
    
   </form>
    <script src="scriptLog.js"></script>
  </body>
</html>
