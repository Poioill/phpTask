<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
<h1>Choose blog for update</h1>
<?php
include('../db.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if ($id == '') {
        unset($id);
    }
}

if (!isset($id)) {
    $result = mysqli_query($connect, "SELECT id, title FROM updatt");
    $myrow = mysqli_fetch_array($result);

    do {
        printf("
        <h3>
        <a href='editNews.php?id=%s'>%s</a>
        </h3>", $myrow['id'], $myrow['title']);
    } while ($myrow = mysqli_fetch_array($result));
} else {
    include('../db.php');
    $result2 = mysqli_query($connect, "SELECT * FROM updatt WHERE id='$id' ");
    $myrow2 = mysqli_fetch_array($result2);

    print <<<FORMA
    <form action="updateNews.php" method="POST" enctype="multipart/form-data">
        <br>
        <input type="text" name="title" value="$myrow2[title]">
        <br>
        <textarea name="description" id="" cols="30" rows="10">$myrow2[description]</textarea>
        <br>
        <input type="text" name="image" value="$myrow2[image]">
        <br>
        <input type="date" name="date" value="$myrow2[date]">
        <br>
        <button type="submit" name="id" value="$myrow2[id]">Изменить</button>
        <button type="reset">Очистить</button>
    </form>
      
</form>

FORMA;
}
?>
</body>
</html>