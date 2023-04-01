<?php include 'includes/connection.php'; ?>
<?php include('includes/adminheader.php');  ?>
<?php include 'includes/adminnav.php'; ?>

<?php
include("class/users.php");
$ans = new  users;
$answer = $ans->answer($_POST);
?>
<!DOCTYPE HTML>
<html lang="en-US">

<head>
  <meta charset="UTF-8">
  <title>Answer</title>
  <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->

</head>

<body>

  <?php

  ?>
  <br>


  <center>
    <?php
    $total_qus = $answer['right'] + $answer['wrong'] + $answer['no_answer'];
    $attempt_qus = $answer['right'] + $answer['wrong'];
    ?>
    <div class="container">
      <br>
      <br>
      <br>
      <br>
      <br>
      <div class="col-sm-2"></div>
      <div class="col-sm-8">
        <h2 style="color:#fff">Your Quiz results</h2>
        <table class="table table-bordered" style="color:#fff">
          <thead>
            <tr>
              <th>Total number of Questions</th>
              <th style="color:#fff;"><?php echo $total_qus; ?></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Attempted qusetions</td>
              <td style="color:#fff;"><?php echo $attempt_qus; ?></td>
            </tr>
            <tr>
              <td>Right answer </td>
              <td style="color:#fff;"><?php echo $answer['right']; ?></td>
            </tr>
            <tr>
              <td>Wrong answer</td>
              <td style="color:#fff;"><?php echo $answer['wrong']; ?></td>
            </tr>
            <tr>
              <td>No answer</td>
              <td style="color:#fff;"><?php echo $answer['no_answer']; ?></td>
            </tr>
            <tr>
              <td>Your result</td>
              <td style="color:#fff;"><?php
                                      $per = ($answer['right'] * 100) / ($total_qus);

                                      // echo $per . "%";
                                      echo number_format((float)$per, 2, '.', '');
                                      ?></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-sm-2"></div>
    </div>


  </center>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


</body>


</html>