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
  <link rel="stylesheet" href="style2.css" />

  <link rel="stylesheet" href="css/loginstyle.css">
  <link href="dashboard/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body style="background-image: url('images/signup1.jpg');">

  <?php include 'includes/navbar.php'; ?>

  <?php
  if (isset($_POST['signup'])) {
    require "gump.class.php";
    $gump = new GUMP();
    $_POST = $gump->sanitize($_POST);

    $gump->validation_rules(array(
      'username'    => 'required|alpha_numeric|max_len,20|min_len,4',
      'name'        => 'required|alpha_space|max_len,30|min_len,5',
      'email'       => 'required|valid_email',
      'password'    => 'required|max_len,50|min_len,6',
    ));
    $gump->filter_rules(array(
      'username' => 'trim|sanitize_string',
      'name'     => 'trim|sanitize_string',
      'password' => 'trim',
      'email'    => 'trim|sanitize_email',
    ));
    $validated_data = $gump->run($_POST);

    if ($validated_data === false) {
  ?>
      <center>
        <font color="red"> <?php echo $gump->get_readable_errors(true); ?> </font>
      </center>
  <?php
    } else if ($_POST['password'] !== $_POST['repassword']) {
      echo  "<center><font color='red'>Passwords do not match </font></center>";
    } else {
      $username = $validated_data['username'];
      $checkusername = "SELECT * FROM users WHERE username = '$username'";
      $run_check = mysqli_query($conn, $checkusername) or die(mysqli_error($conn));
      $countusername = mysqli_num_rows($run_check);
      if ($countusername > 0) {
        echo  "<center><font color='red'>Username is already taken! try a different one</font></center>";
      }
      $email = $validated_data['email'];
      $checkemail = "SELECT * FROM users WHERE email = '$email'";
      $run_check = mysqli_query($conn, $checkemail) or die(mysqli_error($conn));
      $countemail = mysqli_num_rows($run_check);
      if ($countemail > 0) {
        echo  "<center><font color='red'>Email is already taken! try a different one</font></center>";
      } else {
        $name = $validated_data['name'];
        $email = $validated_data['email'];
        $pass = $validated_data['password'];
        $password = password_hash("$pass", PASSWORD_DEFAULT);
        $role = $_POST['role'];
        $course = $_POST['course'];
        $gender = $_POST['gender'];
        $joindate = date("F j, Y");
        $query = "INSERT INTO users(username,name,email,password,role,course,gender,joindate,token) VALUES ('$username' , '$name' , '$email', '$password' , '$role', '$course', '$gender' , '$joindate' , '' )";
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
        if (mysqli_affected_rows($conn) > 0) {
          echo "<script>alert('SUCCESSFULLY REGISTERED');
        window.location.href='login.php';</script>";
        } else {
          echo "<script>alert('Error Occured');</script>";
        }
      }
    }
  }
  ?>
  <br>

  <div class="container">


    <div class="form" style="background-color: transparent; margin-left: 200px;">
      <form id="contactform" method="POST">
        <p class="contact"><label for="name" style="color:#000000;">Name</label></p>
        <input id="name" name="name" placeholder="First and last name" required="" tabindex="1" type="text" value="<?php if (isset($_POST['signup'])) {
                                                                                                                      echo $_POST['name'];
                                                                                                                    } ?>">

        <p class="contact"><label for="email" style="color:#000000;">Email</label></p>
        <input id="email" name="email" placeholder="example@domain.com" required="" type="email" value="<?php if (isset($_POST['signup'])) {
                                                                                                          echo $_POST['email'];
                                                                                                        } ?>">

        <p class="contact"><label for="username" style="color:#000000;">Create a username</label></p>
        <input id="username" name="username" placeholder="username" required="" tabindex="2" type="text" value="<?php if (isset($_POST['signup'])) {
                                                                                                                  echo $_POST['username'];
                                                                                                                } ?>">

        <p class="contact"><label for="password" style="color:#000000;">Create a password</label></p>
        <input type="password" id="password" name="password" required="">
        <p class="contact"><label for="repassword" style="color:#000000;">Confirm your password</label></p>
        <input type="password" id="repassword" name="repassword" required="">

        <p class="contact"><label for="gender" style="color:#000000;">Gender </label></p>
        <select class="select-style gender" name="gender">
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select><br><br>

        <p class="contact"><label for="role" style="color:#000000;">I am a..</label></p>
        <select class="select-style gender" name="role">
          <option value="teacher">Teacher</option>
          <option value="student">Student</option>
        </select><br><br>

        <p class="contact"><label for="course" style="color:#000000;">I teach/study..</label></p>
        <select class="select-style gender" name="course">
          <option value="Computer Science">Computer Sc Engineering</option>
          <option value="Electrical">Electrical Engineering</option>
          <option value="Mechanical">Mechanical Engineering</option>
        </select><br><br>

        <input class="buttom" name="signup" id="submit" tabindex="5" value="Sign me up!" type="submit">
      </form>
    </div>
  </div>

</body>

</html>