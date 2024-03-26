<?php
include("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Light Grey</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/core.css">
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
                            <a href="../index.php">Home</a>
                        </li>
                        <li class="menu_link shadow">
                            <a href="../news.php">Latest News</a>
                        </li>
                        <li class="menu_link shadow">
                            <a href="../porfolio.php">Portfolio</a>
                        </li>
                        <li class="menu_link shadow">
                            <a href="../aboutus.php">About Us</a>
                        </li>
                        <li class="menu_link">
                            <a href="../contact.php">Contact</a>
                        </li>
                        <li class="menu_link">
                            <a href="../allNews/manageNews.php">Manage news</a>
                        </li>
                    </ul>

                </div>
            </div>

        </header>
        <div class="about_us">
            <div class="container">
                <div class="inner_aboutus">
                    <div class="who_we_are">
                        <h4>Who We Are</h4>
                        <div class="text_img">
                            <img src="../images/armchair.jpg" alt="armchair">
                            <p><i>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</i>
                            <a href="../index.html">Light Gray Template</a> is provided for your personal or commercial websites. Validate
                                <a href="">XTML</a> & <a href="../index.html">CSS</a>. Credits go to <a href="../index.html">Free Photos</a> for photos and
                                <a href="../index.html">Free Vector</a> for icons used in this template.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text Lorem Ipsum has been the industry's standard dummy text  </p>
                        </div>
                        <div class="service">
                            <h4>Our Service</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deleniti fugit laboriosam nulla perspiciatis quas
                                quod ratione suscipit ut, vero? Asperiores deleniti dolor ea enim facilis iste minus sit voluptas?
                                Amet blanditiis dolore fuga laborum maiores necessitatibus nesciunt pariatur sapiente tempora voluptatibus </p>
                        </div>
                        <div class="check_point">
                            <ul class="left">
                                <li><img src="../images/check.png" alt="check">Sent elementum velit in tortor faucibus</li>
                                <li><img src="../images/check.png" alt="check">Praesent tempor quam a tupis</li>
                                <li><img src="../images/check.png" alt="check">Sent elementum velit in tortor faucibus</li>
                                <li><img src="../images/check.png" alt="check">Praesent tempor quam a tupis</li>
                                <li><img src="../images/check.png" alt="check">Sent elementum velit in tortor faucibus</li>
                            </ul>
                            <ul class="right">
                                <li><img src="../images/check.png" alt="check">Praesent tempor quam a tupis</li>
                                <li><img src="../images/check.png" alt="check">Sent elementum velit in tortor faucibus</li>
                                <li><img src="../images/check.png" alt="check">Praesent tempor quam a tupis</li>
                                <li><img src="../images/check.png" alt="check">Sent elementum velit in tortor faucibus</li>
                                <li><img src="../images/check.png" alt="check">Praesent tempor quam a tupis</li>
                            </ul>
                        </div>
                        <button class="gray">More</button>
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
                        <div class="testimonials">
                            <h4>Testimonals</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <i><strong>Steven - Web Designer</strong></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <p>Copyright<a href="../index.html"> &copy; 2048 My company Name</a></p>
        </footer>
    </div>
</body>
</html>