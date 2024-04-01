<?php
include("../db.php");
if (isset($_POST['title'])) {
    $title = $_POST['title'];
    if ($title == '') {
        unset($title);
    }
}

/*----------------------------------------*/
if (isset($_POST['description'])) {
    $description = $_POST['description'];
    if ($description == '') {
        unset($description);
    }
}
/*----------------------------------------*/
if (isset($_POST['image'])) {
    $image = $_POST['image'];
    if ($image == '') {
        unset($image);
    }
}
/*----------------------------------------*/
if (isset($_POST['date'])) {
    $date = $_POST['date'];
    if ($date == '') {
        unset($date);
    }
}


if (isset($_POST['id'])) {
    $id = $_POST['id'];
    if ($id == '') {
        unset($id);
    }
}

/*-------------------------------*/

if (isset($title) && isset($description) && isset($image) && isset($date)) {
    $result = mysqli_query($connect, "UPDATE updatt SET title='$title', date='$date',
                                  description='$description', image='$image' WHERE id='$id' ");

    if ($result == true) {
        echo("Вы успешно обновили данные");
    } else {
        echo "Ошибка при обновлении данных: " . mysqli_error($connect);
    }

} else {
    echo "qwerty";
}


?>