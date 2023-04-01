<?php include 'includes/connection.php'; ?>
<?php include('includes/adminheader.php');  ?>
<?php include 'includes/adminnav.php'; ?>
<?php
include("class/users.php");
$profile = new users;

?>


<!DOCTYPE html>
<html lang="en" style="background-color: #333;">

<head>
  <title>Quiz</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body style="background-color: #333;">

  <br>
  <br>

  <div class="container">
    <h2 style="color:white">Learn & Share</h2>


    <div class="tab-content">
      <div id="home" class="tab-pane fade in active">

        <center> <button type="button" class="btn btn-primary" a data-toggle="tab" href="#select">Start Quiz</button> </center>

        <div class="col-sm-4"></div>
        <div class="col-sm-4">
          <br>
          <?php
          $profile->cat_shows();

          ?>
          <div id="select" class="tab-pane fade">

            <form method="post" action="qus_show.php">
              <select class="form-control" id="" name="cat">

                <option>Select Topic</option>
                <?php
                foreach ($profile->cat as $category) { ?>
                  <option value="<?php echo $category['id']; ?>"><?php echo $category['cat_name'] ?></option>

                <?php
                }
                ?>
              </select>
              <br>
              <center> <input type="submit" value="Submit" class="btn btn-primary" /> </center>
            </form>
          </div>
          
        </div>
</body>
</html>