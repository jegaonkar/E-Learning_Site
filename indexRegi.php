<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="registration/globalsRegi.css" />
    <link rel="stylesheet" href="registration/styleRegi.css" />
  </head>

  
  <body>
    <?php
    // if ($_SERVER['REQUEST_METHOD'] == 'POST')
    include 'config.php';
    if (isset($_POST['submit'])) {
      $fname = $_POST['full_name'];
      $email = mysqli_real_escape_string($conn, $_POST['email']);
      $user_name = mysqli_real_escape_string($conn, $_POST['username']);
      $password = mysqli_real_escape_string($conn, $_POST['password']);
      $comfirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);
  
      $pass = password_hash($password, PASSWORD_BCRYPT);
      $cpass = password_hash($comfirm_password, PASSWORD_BCRYPT);
      $unamequery = "select * from registration where username='$user_name'";
      $query = mysqli_query($conn, $unamequery);
      $uname_count = mysqli_num_rows($query);
      if ($uname_count > 0) {
        ?>  

        <script>
          alert("User name already exists");
        </script>
        <?php
          } else {
            if ($password === $comfirm_password) {
              $insertquery = "INSERT INTO registration(fname, username, email, password, confirm_password)
                 VALUES('$fname','$user_name', '$email','$pass','$cpass')";
      
              if (mysqli_query($conn, $insertquery)) {
        ?>
        <script>
          alert("Registration Successful");
        </script>
        <?php
              } else {
                  ?>
        <script>
          alert(" No Connecetion ");
        </script>
        <?php
              }
      
            } else {
                  ?>
        <script>
          alert(" Password are not Matching ");
        </script>
        <?php
            }
          }
      
        }
                ?>
             
    <form class="signup-form" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
    <div class="codopedia-register">
      <div class="div">
        <div class="overlap">
          <input type="text" placeholder="Enter a username" maxlength="15" name="username" required>
        </div>
        <div class="overlap-group">
        <input type="text" placeholder="Enter your name" maxlength="35" name="full_name" required />
        </div>
        <div class="overlap-2">
        <input type="password" placeholder="Enter password" minlength="4" maxlength="9" name="password" required/>
        </div>
        <div class="overlap-3">
        <input type="email" placeholder="Enter your e-mail ID" name="email" required/>
        </div>
        <div class="overlap-4">
        <input type="password" placeholder="Enter password again" minlength="4" maxlength="9" name="confirm_password" required/>
        </div>
        <div class="overlap-5">
          <div class="div-2">Username:</div>
        </div>
        <div class="overlap-6">
          <div class="div-2">Full name:</div>
        </div>
        <div class="overlap-7">
          <p class="div-2">
            <span class="text-wrapper">Already have an account? </span>
            <span class="span"><a href="log.php">Login</a></span>
            <span class="text-wrapper">&nbsp;</span>
          </p>
        </div>
        <div class="overlap-8">
          <div class="group">
          <button type="submit" name="submit" class="text-wrapper-2">Sign Up</button>
          </div>
        </div>
        <div class="overlap-9">
          <div class="div-2">Password:</div>
        </div>
        <div class="overlap-10">
          <div class="div-2">Email:</div>
        </div>
        <div class="overlap-11">
          <div class="div-2">Confirm Password:</div>
        </div>
        <div class="overlap-12">
          <div class="rectangle"></div>
          <div class="rectangle-2"></div>
          <img class="object-other" src="registration/img/object-other-8.png" />
        </div>
        <div class="social-media-icons-wrapper">
          <img class="social-media-icons" src="registration/img/social-media-icons-1.png" />
        </div>
        <div class="overlap-13">
          <p class="p">Please Fill out form to Register!</p>
        </div>
      </div>
    </div>
      </form>
  </body>
</html>
