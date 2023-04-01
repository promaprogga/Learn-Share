
<?php
      session_start();
      ?>
<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <title>Pustok Khana</title>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-white bg-white">
    <a class="navbar-brand" href="../new_home.php">
      <img src="../images/Pustok Khana.png" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="../new_home.php">Home</a>
        </li>
      </ul>
    </div>
  </nav>
  
  <div class="form_area mt-5 mb-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form_item p-3 shadow bg-light rounded">
            <h3 class="text-center">Tutor Info</h3>
            <form action="post_store.php" method="post">
              <table align="center" cellpadding="4" cellspacing="4">
                <tr>
                  <td> Full Name :</td>
                  <td> <input type="text" name="category" size="40"> </td>
                </tr>
                <tr>
                  <td> Institution :</td>
                  <td> <input type="text" name="isbn" size="40"> </td>
                </tr>
                <tr>
                  <td> From When are you Teaching? </td>
                  <td> <input type="text" name="title" size="40"> </td>
                </tr>
                <tr>
                  <td> What do you Teach? </td>
                  <td> <input type="text" name="author" size="40"> </td>
                </tr>
                <tr>
                  <td> Preferable Location :</td>
                  <td> <input type="text" name="edition" size="40"> </td>
                </tr>
                <tr>
                  <td> Preferable Time: </td>
                  <td> <input type="text" name="publication" size="40"> </td>
                </tr>
                <tr>
                  <td></td>
                  <td>
                    <input type="submit" name="request" value="submit">
                    <input type="reset" value="Reset">
                  </td>
                </tr>
              </table>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>

</html>
