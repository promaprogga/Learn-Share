<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="../css/user.css">

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="../css/style1.css">
    <!-- <link rel="stylesheet" href="css/header.css"> -->
    <title>Learn & Share</title>
    <?php
    session_start();
    include("../include/link.php");
    ?>
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <span class="logo_name " style="margin-left: 33px">Learn & Share</span>
        </div>
        <!-- <ul class="nav-links">
            <li>
                <a href="../new_home.php" class="active">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="../profile_check.php">
                    <i class='bx bx-user'></i>
                    <span class="links_name">Profile</span>
                </a>
            </li>
            <li>
                <a href="../post.php">
                    <i class='bx bx-book-alt'></i>
                    <span class="links_name">Post</span>
                </a>
            </li>
            <li>
                <a href="requested_book.php">
                    <i class='bx bx-box'></i>
                    <span class="links_name">Requested Book</span>
                </a>
            </li>
            <li>
                <a href="../Review/book_review.php">
                    <i class='bx bx-list-ul'></i>
                    <span class="links_name">Book Review</span>
                </a>
            </li>
            <li>
                <a href="../chat.php">
                    <i class='bx bx-list-ul'></i>
                    <span class="links_name">Live Chat</span>
                </a>
            </li>
            <li class="log_out">
                <a href="../index.php">
                    <i class='bx bx-log-out'></i>
                    <span class="links_name">Log out</span>
                </a>
            </li>
        </ul> -->
    </div>
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard"></span>
            </div>
            <div>
                <form action="new_search.php" method="post">
                    <center>
                        <li>
                            <a href="tutor.php">
                                <span class="links_name">Post as a tutor</span>
                            </a>
                        </li>
                    </center>
                    <br>
                </form>
            </div>
        </nav>



        <div class="home-content">

            <div>
                <form action="review_search.php" method="post">
                    <center>
                        <input type="text" name="search" size="48" placeholder="Search by Title">
                        <input type="submit" value="Search">
                    </center>
                    <br>
                </form>
            </div>
            <div class="overview-boxes">
                <div class="service_part" id="service_section">
                    <div class="service_hed">
                        </p>
                    </div>
                    <div class="row ml-2 mr-2 mb-4">
                        <?php
                        include '../include/dbConnect.php';
                        $sql = "SELECT category,isbn,title,author,edition,publication,email FROM  book_request ";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {

                            while ($row = $result->fetch_assoc()) {
                                $category = $row['category'];
                                $isbn     =  $row['isbn'];
                                $title     =  $row['title'];
                                $author     =  $row['author'];
                                $edition     =  $row['edition'];
                                $publication     =  $row['publication'];
                                $email1         = $row['email'];
                        ?>
                                <div class="col-md-4 mb-2">
                                    <div class="p-2  bg-light text-left">
                                        <b>Name</b> : <?php echo $category; ?>
                                        <br>
                                        Institution : <?php echo $isbn; ?>
                                        <br>
                                        Exprience : <?php echo $title; ?>
                                        <br>
                                        Preferable Subject : <?php echo $author; ?>
                                        <br>
                                        Preferable Location : <?php echo $edition; ?>
                                        <br>
                                        Preferable Time : <?php echo $publication; ?>
                                        <div>
                                            <?php
                                            echo " <a href=owner.php?review_email=$email1>Contact</a>"
                                            ?>
                                        </div>

                                    </div>
                                </div>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="end_part">
            <p>© learn & Share</p>
        </div>
    </section>

    <script>
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function() {
            sidebar.classList.toggle("active");
            if (sidebar.classList.contains("active")) {
                sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else
                sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        }
    </script>

</body>

</html>