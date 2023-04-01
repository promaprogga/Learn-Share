
<?php
      session_start();
      include_once '../include/dbConnect.php';
      $email =  $_SESSION['login_email'];
        if (isset($_POST['request'])) {
            $category = $_POST["category"];
            $isbn=$_POST["isbn"];
            $title=$_POST["title"];
            $author=$_POST["author"];
            $edition=$_POST["edition"];
            $publication=$_POST["publication"];
      

            $query = "insert into book_request(category,isbn,title,author,edition,publication,email) 
                  values('$category',$isbn,'$title','$author',$edition,'$publication', '$email')"; 
            $result = mysqli_query($conn, $query);

            header('location: tutor_post.php');

        }
    ?>