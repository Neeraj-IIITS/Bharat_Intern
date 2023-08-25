<?php
if (!isset($_SESSION)) {session_start();}
error_reporting(E_ALL&~E_NOTICE&~E_STRICT&~E_WARNING);
$dt = date("Y-m-d");
$rupeesymbol = "₹";
include "dbconnection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>TutorEase - Empowering Education, One Click at a Time.</title>
    <link href="assets/img/dp_pic.png" rel="icon">

    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <link href="assets/css/style.css" rel="stylesheet">

    <link href="assets/css/jquery.dataTables.min.css" rel="stylesheet">
</head>

<body>

    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container">
            <div class="header-container d-flex align-items-center">
                <div class="logo mr-auto">
                    <h1 class="text-light">
                        <a href="index.php">
                            <span>TutorEase</span>
                        </a>
                    </h1>
                </div>

                <nav class="nav-menu d-none d-lg-block">
                    <ul>

                        <li class="<?php
                            if (basename($_SERVER['PHP_SELF']) == "index.php") {
                                echo ' active ';
                            }
                            ?>">
                            <a href="index.php">Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                        </li>

                        <!-- For Records -->

                        <li class="drop-down"><a
                                href="#">Articles&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                            <ul>
                                <li><a href="displayarticles.php?articletype=Programming">Programming</a></li>
                                <li><a href="displaynews.php?articletype=Web Development">Web Development</a></li>
                            </ul>
                        </li>
                        
                        <?php
                            if (isset($_SESSION['adminid'])) {
                        ?>
                        <li class="drop-down 
                        <?php
                            if (basename($_SERVER['PHP_SELF']) == "adminpanel.php" || basename($_SERVER['PHP_SELF']) == "adminpanel.php" || basename($_SERVER['PHP_SELF']) == "admin.php" || basename($_SERVER['PHP_SELF']) == "viewadmin.php" || basename($_SERVER['PHP_SELF']) == "chngadminpassword.php" || basename($_SERVER['PHP_SELF']) == "article.php" || basename($_SERVER['PHP_SELF']) == "viewarticle.php") {
                                echo ' active ';
                            }
                        ?>">
                        </li>

                        <li class="drop-down"><a href="#">General Settings</a>
                            <ul>
                                <li><a href="adminpanel.php">Admin Panel</a></li>
                                <li><a href="admin.php">Add Admin</a></li>
                                <li><a href="viewadmin.php">View Admin</a></li>
                                <li><a href="chngadminpassword.php">Change My Password</a></li>
                                <li><a href="article.php">Add Article</a></li>
                                <li><a href="viewarticle.php">View Article</a></li>
                            </ul>
                        </li>

                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                    </li>
                
                    <?php
                        }
                    ?>
                    </ul>
                </nav>
            </div>
    </header>