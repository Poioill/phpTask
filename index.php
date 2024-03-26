<?php
include ("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Light Grey</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/core.css">
    <link rel="stylesheet" href="css/header_footer.css">
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
                            <a href="allNews/manageNews.php">Manage news</a>
                        </li>
                    </ul>

                </div>
            </div>

        </header>

        <div class="welcome">
            <div class="container">
                <div class="inner_welcome">
                    <div class="welcome_left">

                    <?php 
                        $result = mysqli_query($connect, "SELECT * from welcome");
                        $myrow = mysqli_fetch_array($result);

                        do {
                            printf('
                            
                                <h1>%s</h1>
                                <p>%s</p>
                                <button><a href="welcomeOne.php?id=%s">Learn More</a></button>
                            </div>
                            <div class="welcome_right">
                                <img src="%s" alt="chemodan">
                            </div>
                            ', $myrow['intro'], $myrow['des'], $myrow['id'], $myrow['image']);
                        }
                        while ($myrow = mysqli_fetch_array($result));
                    ?>
                        

                </div>
            </div>
        </div>

        <div class="cards">
            <div class="container">
                <div class="cards_inner">
                    <?php 
                        $result = mysqli_query($connect, "SELECT * from advertise");
                        $myrow = mysqli_fetch_array($result);

                        do {
                            printf('
                            <div class="card">
                                <h3>%s</h3>
                                <p>%s</p>
                                <button><a href="moreAdvertise.php?id=%s">More</a></button>
                            </div>
                            ', $myrow['title'], $myrow['description'], $myrow['id']);
                        }
                        while ($myrow = mysqli_fetch_array($result));
                    ?>
                </div>
            </div>
        </div>

        <div class="page_content">
            <div class="container">
                <div class="inner_page_content">
                    <div class="updates">
                        <h4>Latest Update</h4>

                        <?php 
                            $result = mysqli_query($connect, "SELECT * from updatt");
                            $myrow = mysqli_fetch_array($result);

                            do {
                                printf('
                                <div class="news">
                                    <img src="%s" alt="small_picture">
                                    <div class="text-content">
                                        <h6>%s</h6>
                                        <p>%s</p>
                                    </div>
                                </div>
                                <div class="gray_line"></div>
                                <span class="date">%s</span>
                                ', $myrow['image'], $myrow['title'], $myrow['description'],  $myrow['date']);
                            }
                            while ($myrow = mysqli_fetch_array($result));
                        ?>
                        <?php 
                            $result = mysqli_query($connect, "SELECT * from updatt");
                            $myrow = mysqli_fetch_array($result);
                            
                            printf('
                            <button class="gray"><a href="allNews/allNews.php?id=%s">View All</a></button>
                            ', $myrow['id']);

                        ?>
                    </div>
                    <div class="introduction">
                        <?php 
                            $result = mysqli_query($connect, "SELECT * from aboutus");
                            $myrow = mysqli_fetch_array($result);

                            do {
                                printf('
                                <h4>%s</h4>
                                <div class="news_2">
                                    <div class="text_content_2">
                                        <p class="cursive">%s</p>
                                        <p>%s</p>
                                    </div>
                                    <img src="%s" alt="big_picture">
                                </div>
                                ', $myrow['title'], $myrow['text_one'],  $myrow['text_two'],  $myrow['image']);
                            }
                            while ($myrow = mysqli_fetch_array($result));
                        ?>
                
                        <div class="check_point">
                            
                            <ul class="left">
                            <?php 
                                $result = mysqli_query($connect, "SELECT * from advantages");
                                $myrow = mysqli_fetch_array($result);

                                do {
                                    printf('
                                    <li><img src="%s" alt="check">%s</li>
                                    ',  $myrow['image'], $myrow['text']);
                                }
                                while ($myrow = mysqli_fetch_array($result));
                            ?>
                            </ul>
                            <ul class="right">
                                <li><img src="images/check.png" alt="check">Praesent tempor quam a tupis</li>
                                <li><img src="images/check.png" alt="check">Sent elementum velit in tortor faucibus</li>
                                <li><img src="images/check.png" alt="check">Praesent tempor quam a tupis</li>
                                <li><img src="images/check.png" alt="check">Sent elementum velit in tortor faucibus</li>
                                <li><img src="images/check.png" alt="check">Praesent tempor quam a tupis</li>
                            </ul>
                        </div>
                        <button class="gray"><a href="aboutus.php">More</a></button>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <p>Copyright<a href="index.html"> &copy; 2048 My company Name</a></p>
        </footer>
    </div>






</body>
</html>