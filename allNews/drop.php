<?php
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    if ($id == '') {
        unset($id);
    }
}

if (isset($id)) {
    include ('../db.php');
    $result = mysqli_query($connect, "DELETE FROM updatt WHERE id='$id' ");
    if ($result==true){
        echo "<h1>Новость успешно удалена</h1>";
    }else{
        echo "<h1 style='color: red;'>Ошибка в коде</h1>";
    }
}else{
    echo "<h1>Вы не выбрали новость</h1>";
}
?>