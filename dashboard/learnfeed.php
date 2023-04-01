<?php include 'includes/connection.php'; ?>

<?php include 'includes/adminheader.php';
?>
<?php
if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {

    header("location: index.php");
}
?>
<div>
    <?php ?>
    <?php include 'includes/adminnav.php'; ?>
    <!-- <div style="background-image: url('../images/green-slate.jpg');"> -->
    <div style="background-image: url('');">
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12" >
                    <h1 class="page-header" style="color:#fff; " >
                        <div class="col-xs-4">
                            <a href="addlearnfeed.php" class="btn btn-primary">Add New Video</a>
                        </div>
                        LEARN FEED
                        <span style="display: flex; justify-content: flex-end;">
                            <form action="review_search.php" method="post">
                                <center>
                                    <input type="text" name="search" size="10" placeholder="Search by Title">
                                    <input type="submit" value="Search">
                                </center>
                                <br>
                            </form>
                        </span>
                    </h1>

                    <div class="row">
                        <div class="col-lg-12">

                            <div class="row">
                                <?php

                                $query = "SELECT * FROM videos where status='Approved'  ORDER BY file_id DESC";
                                $run_query = mysqli_query($conn, $query) or die(mysqli_error($conn));
                                if (mysqli_num_rows($run_query) > 0) {
                                    while ($row = mysqli_fetch_array($run_query)) {
                                        $file_id = $row['file_id'];
                                        $title = $row['title'];
                                        $description = $row['description'];
                                        $file = $row['file'];
                                        $file_uploader = $row['file_uploader'];
                                ?>
                                        <div class="col-md-4 mb-2 blogShort  panel-default" tyle="color:#fff;">
                                            <div class="row">
                                                <div class="col-md-12  mb-3 ">
                                                    <h2 style="color:#fff;"><?php echo $title;  ?></h2>
                                                </div>
                                                <div class="col-md-12">

                                                    <video width="420" height="280" play controls>
                                                        <source src="learnfeed/videos/<?php echo $file; ?>" type="video/mp4">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                </div>
                                                <div class="col-md-12" style="margin-top: 10px;margin-bottom:50px ;text-align: justify;">
                                                    <em style="color:#fff;">Uploaded By <a href='viewprofile.php?name=$file_uploader' target='_blank'> <?php echo $file_uploader; ?> </a></em>

                                                    <article style="color:#fff;">
                                                        <?php echo $description;  ?>
                                                    </article>

                                                </div>

                                            </div>


                                        </div>

                                <?php }
                                } ?>
                            </div>



                        </div>
                    </div>





                    <script src="js/jquery.js"></script>


                    <script src="js/bootstrap.min.js"></script>

                    </body>

                    </html