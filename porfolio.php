<?php
include ("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Light Gray</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/core.css">
    <link rel="stylesheet" href="../css/portfolio.css">
    <link rel="stylesheet" href="../css/header_footer.css">

    <meta name="viewport" content="width=1200px, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
</head>
<body>
    <div class="wrapper">
        <header>
            <div class="container">
                <div class="inner_header">
                    <div class="search">
                        <h2>Light Grey</h2>
                        <form>
                            <input type="text" id="search" name="q" placeholder="Search..." />
                        </form>
                    </div>
                    <ul class="menu">
                    <li class="menu_link shadow">
                            <a href="index.php">Home</a>
                        </li>
                        <li class="menu_link shadow">
                            <a href="news.php">Latest News</a>
                        </li>
                        <li class="menu_link shadow">
                            <a href="porfolio.php">Portfolio</a>
                        </li>
                        <li class="menu_link shadow">
                            <a href="aboutus.php">About Us</a>
                        </li>
                        <li class="menu_link">
                            <a href="contact.php">Contact</a>
                        </li>
                        <li class="menu_link">
                            <a href="/myregister/login.php">Authorization</a>
                        </li>
                    </ul>

                </div>
            </div>

        </header>

        <div class="gallery">
            <div class="container">
                <div class="gallery_name">
                        <?php 
                            $result = mysqli_query($connect, "SELECT * from gallery");
                            $myrow = mysqli_fetch_array($result);

                            do {
                                printf('
                                <h4>%s</h4>
                                <p>%s</p>
                                ', $myrow['title'], $myrow['text']);
                            }
                            while ($myrow = mysqli_fetch_array($result));
                        ?>
                </div>
                <div class="card-container1">
                        <?php 
                            $result = mysqli_query($connect, "SELECT * from galleryProjects");
                            $myrow = mysqli_fetch_array($result);

                            do {
                                printf('
                                <div class="card1">
                                    <img src="%s" alt="Фото 1">
                                    <div class="text">Project <span>%s</span></div>
                                </div>
                                ', $myrow['image'], $myrow['id']);
                            }
                            while ($myrow = mysqli_fetch_array($result));
                        ?>
                </div>
            </div>
        </div>

        <footer>
            <p>Copyright<a href="../index.html"> &copy; 2048 My company Name</a></p>
        </footer>
    </div>
</body>
</html>