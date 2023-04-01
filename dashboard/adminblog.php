<?php include 'includes/connection.php'; ?>

<?php include 'includes/adminheader.php';
?>
<?php
if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {

  //  header("location: index.php");
}
?>
<div id="wrapper">
    <?php ?>
    <?php include 'includes/adminnav.php'; ?>
    <div id="page-wrapper">

        </br>
        </br>
        </br>
        </br>
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        <div class="col-xs-4">
                            <a href="adminblogpost.php" class="btn btn-primary">Add New Post</a>
                        </div>
                        ALL POST
                    </h1>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">

                                <form action="" method="post">
                                    <table class="table table-bordered table-striped table-hover">


                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Status</th>
                                                <th>View</th>
                                                <th>Delete</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $currentuser = $_SESSION['username'];

                                            $query = "SELECT * FROM blog  ORDER BY file_id DESC";
                                            $run_query = mysqli_query($conn, $query) or die(mysqli_error($conn));
                                            if (mysqli_num_rows($run_query) > 0) {
                                                while ($row = mysqli_fetch_array($run_query)) {
                                                    $file_id = $row['file_id'];
                                                    $file_name = $row['title'];
                                                    $file_description = $row['description'];
                                                    $file_status = $row['status'];
                                                    $file = $row['image'];

                                                    echo "<tr>";
                                                    echo "<td>$file_name</td>";
                                                    echo "<td>$file_description</td>";
                                                    echo "<td>$file_status</td>";
                                                    echo "<td><img src='images/$file' style='color:green;height:50px;width:50px;' class='img-thumbnail' s></td>";
                                                    echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to delete this post?')\" href='?del=$file_id'><i class='fa fa-times' style='color: red;'></i>delete</a></td>";

                                                    echo "</tr>";
                                                }
                                            } else {
                                                echo "<script>alert('Not notes yet! Start uploading now');
    window.location.href= 'uploadnote.php';</script>";
                                            }
                                            ?>


                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>


                    <?php

                    if (isset($_GET['del'])) {
                        $note_del = mysqli_real_escape_string($conn, $_GET['del']);
                        $del_query = "DELETE FROM blog WHERE file_id='$note_del' ";
                        $run_del_query = mysqli_query($conn, $del_query) or die(mysqli_error($conn));
                        if (mysqli_affected_rows($conn) > 0) {
                            echo "<script>alert('note deleted successfully');
            window.location.href='adminnotes.php';</script>";
                        } else {
                            echo "<script>alert('error occured.try again!');</script>";
                        }
                    }
                    ?>


                    <script src="js/jquery.js"></script>


                    <script src="js/bootstrap.min.js"></script>

                    </body>

                    </html