<?php include('../base/header.php'); ?>

<div class="success__wrapper">
    <h1>Здравствуйте, <?= $_COOKIE ['user'] ?></h1>
    <a class="suc__man" href="../allNews/manageNews.php">Manage news</a>
    <button class="suc__btn"><a href="exit.php">Log out</a></button>
</div>
<br><br><br><br><br><br><br><br><br><br>
<?php include('../base/footer.php'); ?>