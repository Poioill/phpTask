<?php
include ("db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/core.css">
    <link rel="stylesheet" href="../css/header_footer.css">
    <link rel="stylesheet" href="../css/welcome.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page</title>
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
        <div class="welcome">
            <div class="container">
                <?php 
                    $result = mysqli_query($connect, "SELECT * from welcome");
                    $myrow = mysqli_fetch_array($result);

                    do {
                        printf('
                        <div>
                        <h1>%s</h1>
                        <p>%s</p>
                        </div>
                        <div class="welcome_right">
                            <img src="%s" alt="chemodan">
                        </div>
                        </div
                        ', $myrow['intro'], $myrow['des'], $myrow['image']);
                    }
                    while ($myrow = mysqli_fetch_array($result));
                ?>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br>
    <footer>
        <p>Copyright<a href="index.php"> &copy; 2048 My company Name</a></p>
    </footer>
</div>
</body>
</html>