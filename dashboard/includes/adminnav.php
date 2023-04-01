<nav class="navbar navbar-fixed-top" style="background-color: #0c535a;" style="color:#fff">


    <!-- <div class="navbar-header">
        <a class="navbar-brand" href="../index.php" style="color:#f9fb84" style="font-size:50px">Learn & Share</a>
    </div> -->
    <ul class="nav navbar top-nav">

        <?php if ($_SESSION['role'] == 'admin') {
        ?>
            <li>
                <a class="navbar-brand" href="" style="color:#f9fb84" style="font-size:50px">Protibaad</a>
            </li>
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#user"><i class="fa fa-fw fa-users"></i> Users <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="user" class="collapse">
                    <li>
                        <a href="./users.php" style="color: #fff;">View All Users</a>
                    </li>

                </ul>
            </li>
            <!-- <li>
                <a href="javascript:;" class="dropdown-toggle" data-toggle="collapse" data-target="#posts"><i class="fa fa-fw fa-file-text"></i> My Account <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="posts" class="collapse">
                    <li>
                        <a href="./viewprofile.php?name=<?php echo $_SESSION['username']; ?>"> View Profile</a>
                    </li>
                    <li>
                        <a href="./userprofile.php?section=<?php echo $_SESSION['username']; ?>">Edit Profile</a>
                    </li>
                </ul>
            </li> -->
            <li>
                <a href="admin_quiz.php" class="active">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Quiz</span>
                </a>
            </li>
            <li>
                <a href="adminuploadnote.php" class="active">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">E-book</span>
                </a>
            </li>
            <li>
                <a href="addcategory.php" class="active">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Category</span>
                </a>
            </li>
            <li>
                <a href="adminlearnfeed.php" class="active">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Learn Feed</span>
                </a>
            </li>
            <li>
                <a href="adminblogpost.php" class="active">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Blog</span>
                </a>
            </li>
            <li>
                <a href="poll/index.php" class="active">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Poll</span>
                </a>
            </li>


        <?php } elseif ($_SESSION['role'] == 'teacher') { ?>

            <li>
                <a href="javascript:;" class="dropdown-toggle" data-toggle="collapse" data-target="#posts"><i class="fa fa-fw fa-file-text"></i> My Account <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="posts" class="collapse">
                    <li>
                        <a href="./viewprofile.php?name=<?php echo $_SESSION['username']; ?>"> View Profile</a>
                    </li>
                    <li>
                        <a href="./userprofile.php?section=<?php echo $_SESSION['username']; ?>">Edit Profile</a>
                    </li>
                </ul>
            </li>


            <li>
                <a href="blog.php" class="active">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Blog</span>
                </a>
            </li>
            <li>
                <a href="tutor.php" class="active">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Tutor</span>
                </a>
            </li>


        <?php } else { ?>
            <li>
                <a class="navbar-brand" href="./home.php" style="color:#f9fb84" style="font-size:60px">Protibaad</a>
            </li>

            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#user"> Notes <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="user" class="collapse">

                    <li>
                        <a href="./index.php" style="color:#ffffff;">View All Notes</a>
                    </li>
                    <li>
                        <a href="./notes.php" style="color:#ffffff;">My Notes</a>
                    </li>
                    <li>
                        <a href="./uploadnote.php" style="color:#ffffff;">Upload Note</a>
                    </li>



                </ul>
            </li>

            <li>
                <a href="buddy.php" class="active">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Discussion</span>
                </a>
            </li>
            <li>
                <a href="quiz.php" class="active">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Quiz</span>
                </a>
            </li>
            <li>
                <a href="learnfeed.php" class="active">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Learn Feed</span>
                </a>
            </li>
            <li>
                <a href="ebook.php" class="active">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">E-book</span>
                </a>
            </li>
            <li>
                <a href="blog.php" class="active">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Blog</span>
                </a>
            </li>
            <li>
                <a href="poll/poll.php" class="active">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Poll</span>
                </a>
            </li>
            <!-- <li>
                <a href="simulation.php" class="active">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Simulation</span>
                </a>
            </li> -->

        <?php } ?>

        <li class="dropdown" id="dropdown" style="float: right; margin-right: 80px">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['name']; ?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="./viewprofile.php?name=<?php echo $_SESSION['username']; ?>"> View Profile</a>
                </li>
                <li>
                    <a href="./userprofile.php?section=<?php echo $_SESSION['username']; ?>"><i class="fa fa-fw fa-user"></i> Edit Profile</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="../logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>



    </ul>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">



    </div>
</nav>