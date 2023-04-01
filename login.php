<?php include 'includes/connection.php'; ?>
<!DOCTYPE html>
<html>

<head>
	<title>Learn & Share</title>
	<script src="dashboard/js/tinymce/tinymce.min.js"></script>
	<script src="dashboard/js/tinymce/script.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/cms-home.css">
	<link rel="stylesheet" type="text/css" href="css/material-icons.css">
	<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/demo.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">

	<link rel="stylesheet" href="stylee.css" />
	<link rel="stylesheet" href="style2.css"/>

	<link rel="stylesheet" href="css/loginstyle.css">
	<link href="dashboard/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body style="background-image: url('images/login.jpg');">
	
<!-- <div style="background-image: url('images/login.jpg');"> -->


<?php include 'includes/navbar.php'; ?>

<?php
session_start();
if (isset($_POST['login'])) {
  $username  = $_POST['user'];
  $password = $_POST['pass'];
  mysqli_real_escape_string($conn, $username);
  mysqli_real_escape_string($conn, $password);
  $query = "SELECT * FROM users WHERE username = '$username'";
  $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
  
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
      $id = $row['id'];
      $user = $row['username'];
      $pass = $row['password'];
      $name = $row['name'];
      $email = $row['email'];
      $role = $row['role'];
      $course = $row['course'];
      if (password_verify($password, $pass)) {
        $_SESSION['id'] = $id;
        $_SESSION['username'] = $username;
        $_SESSION['name'] = $name;
        $_SESSION['email']  = $email;
        $_SESSION['role'] = $role;
        $_SESSION['course'] = $course;
        header('location: dashboard/home.php');
      } else {
        echo "<script>alert('invalid username/password');
      window.location.href= 'login.php';</script>";
      }
    }
  } else {
    echo "<script>alert('invalid username/password');
      window.location.href= 'login.php';</script>";
  }
}
?>


<div class="login-card" style="background-color: transparent; margin-top: 100px; margin-right: 120px; border-radius: 10px; opacity: 1;" >
  <h1 style="color:#000000;"><b>Log-in</h1><br>
  <form method="POST">
    <input style="background:#fff;color:#000;" type="text" name="user" placeholder="Username" required="">
    <input style="background:#fff;color:#000;" type="password" name="pass" placeholder="Password" required="">
    <input type="submit" name="login" class="login login-submit" value="login">
  </form>

  <div class="login-help">
    <a href="signup.php" style="color:#000000;">Register</a> • <a href="recoverpassword.php" style="color:#000000;">Forgot Password</a>
  </div>
</div>

<script src='css/jquery.min.js'></script>
<script src='css/jquery-ui.min.js'></script>
<!-- </div> -->
</body>

</html>