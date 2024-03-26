<?php
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
if (isset($_POST['date'])) {
    $date = $_POST['date'];
    if ($date == '') {
        unset($date);
    }
}

/*-------------------------------*/

if (isset($title) && isset($description) && isset($image) && isset($date)) {
    include ('../db.php');
    $result = mysqli_query($connect,
        "INSERT INTO updatt(title, description, image, date) VALUES ('$title', '$description', '$image', '$date')");
    if ($result==true){
        echo "Новость успешно добавлена";
    }else{
        echo 'Ошибка в коде';
    }
}else{
    echo 'Заполнили не все поля';
}


?>