<?php
session_start();
include '../include/dbConnect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>learn & Share</title>
    <?php include '../include/link.php'; ?>
    <title>Document</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-white bg-white">
        <!-- <a class="navbar-brand" href="../new_home.php">
            <img src="../images/Pustok Khana.png" alt="">
        </a> -->
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

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 mt-5">
                <table class="table table-striped border">
                    <thead class="table-primary">
                        <tr>
                            <th></th>
                            <th>User Info</th>
                        </tr>
                    </thead>
                    <?php
                    $email = $_GET['review_email'];
                    $sql = "SELECT name, email, phone_no, city, st_name FROM  user_panel WHERE `email`='$email '";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $name = $row["name"];
                            $email = $row["email"];
                            $phone_no = $row["phone_no"];
                            $city = $row["city"];
                            $st_name = $row["st_name"];
                    ?>
                            <tbody>
                                <tr>
                                    <th scope="row">Name : </th>
                                    <td>
                                        <?php echo $name; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Email : </th>
                                    <td><?php echo $email; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">City : </th>
                                    <td><?php echo $city; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Phone No : </th>
                                    <td><?php echo $phone_no; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Street Name : </th>
                                    <td><?php echo $st_name; ?></td>
                                </tr>
                            </tbody>

                    <?php
                        }
                    }
                    ?>

                </table>
            </div>

        </div>
    </div>

</body>

</html>