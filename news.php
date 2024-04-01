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
    <link rel="stylesheet" href="../css/newa.css">
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
                            <a href="allNews/manageNews.php">Manage news</a>
                        </li>
                    </ul>

                </div>
            </div>
        </header>

        <div class="place_holder_news">
            <div class="container">
                <div class="left_news">
                    <?php 
                        $result = mysqli_query($connect, "SELECT * from updatt");
                        $myrow = mysqli_fetch_array($result);

                        do {
                            printf('
                            <div class="post_box">
                                <div class="post_header">
                                    <p class="post_meta"><span class="cat">Posted in <a href="#">Web Templates</a>, <a href="#">CSS</a></span> | Date: <span>%s</span></p>
                                    <h5>%s</h5>
                                </div>
                                <a href="#"><img src="%s" alt="small_picture" width="400"></a>
                                <p>%s<a href="http://validator.w3.org/check?uri=referer" ><strong>XHTML</strong></a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" ><strong>CSS</strong></a>.</p>
                                <button class="gray"><a href="allNews/moreNews.php?id=%s">More</a></button>
                                <div class="cleaner"></div>
                            </div>
                            ', $myrow['date'], $myrow['title'], $myrow['image'],  $myrow['description'],  $myrow['id'] );
                        }
                        while ($myrow = mysqli_fetch_array($result));
                    ?>
                </div>

                <div class="right_news">
                    <div class="categoris">
                        <h4>Categories</h4>
                        <div class="check_point">
                            <ul class="left">
                                <li><img src="../images/check.png" alt="check">Sent elementum velit in </li>
                                <li><img src="../images/check.png" alt="check">Praesent tempor quam a tupis</li>
                                <li><img src="../images/check.png" alt="check">Sent elementum velit in </li>
                                <li><img src="../images/check.png" alt="check">Praesent tempor quam a tupis</li>
                                <li><img src="../images/check.png" alt="check">Sent elementum velit in </li>
                                <li><img src="../images/check.png" alt="check">Sent elementum velit in</li>
                                <li><img src="../images/check.png" alt="check">Praesent tempor quam a tupis</li>
                                <li><img src="../images/check.png" alt="check">Sent elementum velit in </li>
                            </ul>
                        </div>
                    </div>
                    <div class="our_news">
                        <h4>Our News</h4>

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
                        <?php 

                            $result = mysqli_query($connect, "SELECT * from testimonials");
                            $myrow = mysqli_fetch_array($result);

                            do {
                                printf('
                                <div class="testimonials">
                                    <h4>%s</h4>
                                    <p>%s</p>
                                    <i><strong>%s</strong></i>
                                </div>
                                ', $myrow['title'], $myrow['text'], $myrow['name']);
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
    </div>
</body>
</html>