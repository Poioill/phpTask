<?php include('../base/header.php'); ?>
        <div class="delete">
        <form action="drop.php" method="POST">
            <?php
            include ('../db.php');
            $result = mysqli_query($connect, "SELECT id, title from updatt");
            $myrow = mysqli_fetch_array($result);

            do{
                printf("<label>
                            <input type='radio' name='id' value='%s'>%s
                        </label><br>",
                $myrow['id'], $myrow['title']);
            }while($myrow = mysqli_fetch_array($result));

            ?>
            <button type="submit">Удалить</button>
        </form>
        </div>
        <br><br><br><br>
        <a href="createNews.php">Add new news</a>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php include('../base/footer.php'); ?>