<?php include 'includes/connection.php'; ?>
<?php include('includes/adminheader.php');  ?>
<?php include 'includes/adminnav.php'; ?>

<!DOCTYPE html>
<html>

<head>

  <title>Learn&Share | Home</title>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <!-- Start Normalize CSS -->
  <link rel="stylesheet" type="text/css" href="css/normalize.css">

  <!-- Start Custom CSS -->
  <link rel="stylesheet" type="text/css" href="css/home.css">
  <link rel="stylesheet" type="text/css" href="css/newHome.css">

  <!-- Start Global CSS -->
  <link rel="stylesheet" type="text/css" href="css/global.css">


</head>

<body>

  <section class="home" id="home">

    <div class="swiper home-slider">

      <div class="swiper-wrapper">

        <div class="swiper-slide box" style="background: url(images/4.jpg);">
          <div class="content">
            <h1>Share note to others</h1>

            <h3>Start Learning & Improve Your Skills</h3>

            <p>Share your knowledge with others.This is where classmates can come in handy.</p>
            <div class="button">
              <a href="./index.php" class="btn">Learn More</a>
            </div>
          </div>
        </div>
        <div class="swiper-slide box" style="background: url(images/8.jpg);">
          <div class="content">
            <h1>Learnfeed</h1>

            <h3>Go through the learnfeed and enrich your knowledge</h3>

            <p>Get different type of tutorials on a single place..</p>
            <div class="button">
              <a href="./learnfeed.php" class="btn">Learn More</a>
            </div>
          </div>
        </div>
        <div class="swiper-slide box" style="background: url(images/7.jpg);">
          <div class="content">
            <h1>Blog</h1>

            <h3>Share note to others</h3>

            <p>Share your knowledge with others.This is where classmates can come in handy. </p>
            <div class="button">
              <a href="#" class="btn">Learn More</a>
            </div>
          </div>
        </div>
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

    </div>

  </section>

  <!-- <section class="courses" id="courses">
    <h1 class="heading"> <span>Our Featured </span> Courses </h1>

    <div class="box-container">

      <div class="box">
        <img src="images/course-01.jpg" alt="">
        <div class="info">
          <h2>HTML5 For Beginners</h2>

          <h6>This course was designed for students starting out in Front End Web Development wanting to learn HTML5 to
            get started........</h6>
          <a href="#" class="btn">Learn More</a>
        </div>
      </div>
      <div class="box">
        <img src="images/course-02.jpg" alt="">
        <div class="info">
          <h2>CSS3 For Beginners</h2>

          <h6>This course was designed for students starting out in Front End Web Development wanting to learn HTML5 to
            get started........</h6>
          <a href="#" class="btn">Learn More</a>
        </div>
      </div>

      <div class="box">
        <img src="images/course-03.jpg" alt="">
        <div class="info">
          <h2>JAVASCRIPT For Beginners</h2>

          <h6>This course was designed for students starting out in Front End Web Development wanting to learn HTML5 to
            get started........</h6>
          <a href="#" class="btn">Learn More</a>
        </div>
      </div>


    </div>

  </section> -->



  <!-- <section id="about" class="about">
    <h1 class="heading">About Learn Tech Plus</h1>

    <div class="box-container">

      <div class="box">

        <h3>Students</h3>

        <p>82,000+</p>

      </div>

      <div class="box">

        <h3>Reviews</h3>

        <p>1,100+</p>

      </div>

      <div class="box">

        <h3>Courses</h3>

        <p>10+</p>

      </div>
    </div>

  </section> -->




  <!-- <section class="learntech" id="learntech">

    <h1 class="heading">Learn & Share </h1>

    <div class="swiper blogs-slider">

      <div class="swiper-wrapper">

        <div class="swiper-slide slide">
          <div class="image">
            <img src="images/learntechnow.jpg" alt="">
          </div>
          <div class="content">
            <h3>Learn Tech Now</h3>
            <p>Daily Video Series Covering Tech Topics!</p>
            <a href="#" class="btn">Watch Now</a>
          </div>
        </div>

        <div class="swiper-slide slide">
          <div class="image">
            <img src="images/learntechpodcast.jpg" alt="">
          </div>
          <div class="content">
            <h3>Learn Tech Podcast</h3>
            <p>Daily Podcast Series Covering Tech Topics.</p>
            <a href="#" class="btn">Listen Now</a>
          </div>
        </div>

        <div class="swiper-slide slide">
          <div class="image">
            <img src="images/techtipsblog.jpg" alt="">
          </div>
          <div class="content">
            <h3>Tech Tips Blog</h3>
            <p>Daily Blog Covering Tech Topics.</p>
            <a href="#" class="btn">Read Now</a>
          </div>
        </div>



      </div>

    </div>

  </section> -->
  <section style="background-color: #fff;">
    <section class="top-banner flexible-container">
      <div class="half-width">



        <h3>Share note to others</h3>

        <p>Share your knowledge with others.This is where classmates can come in handy. Sharing external resources,
          class discussions, Q&A sessions and constructive conversations are all means to developing arguments and
          deepening your understanding. That’s how you can really take advantage of all the smart people around
          you
        </p>
        <a class="link-button" target=”_blank” href="">Share Note</a>
      </div>

      <div class="half-width">
        <img src="images/newslide1.jpg" alt="profile picture">

      </div>
    </section>


    <section class="section2 flexible-container">

      <div class="half-width">
        <img src="images/newslide2.jpg" alt="Picture">
      </div>

      <div class="half-width">


        <h2>Go through the learnfeed and enrich your knowledge</h3>

          <p>Get different type of tutorials on a single place. And if you are a expert on any subject ,you can
            upload tutorials on that subject and spread the knowledge with others. Happy Learning!!!</p>
          <a class="link-button" target=”_blank” href="">Learn Feed</a>
      </div>
    </section>


    <section class="top-banner flexible-container">
      <div class="half-width">



        <h3>Share note to others</h3>

        <p>Share your knowledge with others.This is where classmates can come in handy. Sharing external resources,
          class discussions, Q&A sessions and constructive conversations are all means to developing arguments and
          deepening your understanding. That’s how you can really take advantage of all the smart people around
          you
        </p>
        <a class="link-button" target=”_blank” href="">Attend a Quiz</a>
      </div>

      <div class="half-width">
        <img src="images/newslide3.jpg" alt="profile picture">

      </div>

    </section>
  </section>



  <section>

    <!-- Page Heading -->
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header" style="color:#fff;">

          Latest Blog
        </h1>

        <div class="row">
          <div class="col-lg-12">

            <div class="row">
              <?php

              $query = "SELECT * FROM blog  ORDER BY file_id DESC LIMIT 3";
              $run_query = mysqli_query($conn, $query) or die(mysqli_error($conn));
              if (mysqli_num_rows($run_query) > 0) {
                while ($row = mysqli_fetch_array($run_query)) {
                  $file_id = $row['file_id'];
                  $title = $row['title'];
                  $description = $row['description'];
                  $file = $row['image'];
              ?>

                  <div>


                    <div class="col-md-10 blogShort panel panel-default">
                      <h2>
                        <?php echo $title;  ?>
                      </h2>
                      <img src="images/<?php echo $file;  ?>" alt="post img" class="pull-left img-responsive thumb margin10 img-thumbnail" style="height: 150px;width: 150px;margin-right:5px;">

                      <article style="text-align: justify;">

                        <?php echo substr($description, 0, 500) . '...';  ?>

                      </article>
                      <a style="margin-bottom: 10px;" class="btn btn-primary pull-right marginBottom10" href="singlepost.php?id=<?php echo $file_id;  ?>">READ MORE</a>
                    </div>
                  </div>
              <?php }
              } ?>
            </div>

            <footer>
              <p style="color: #fff;">All rights reserved | Learn & Share</p>

            </footer>


            <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

            <!-- custom js file links  -->
            <script src="js/homeScript.js"></script>

            <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
            <script>
              AOS.init({
                delay: 400,
                duration: 800
              });
            </script>

            <script src="js/jquery.js"></script>
            <script src="js/bootstrap.min.js"></script>


</body>

</html>