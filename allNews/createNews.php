<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="addNews.php" method="POST" enctype="multipart/form-data">
    <br>
    <input type="text" name="title" placeholder="Введите заголовок новости">
    <br>
    <textarea name="description" id="" cols="30" rows="10"></textarea>
    <br>
    <input type="text" name="image" placeholder="вставьте ссылку фото">
    <br>
    <input type="date" name="date" placeholder="Введите дату создания">
    <br>
    <button type="submit">Добавить</button>
    <button type="reset">Очистить</button>
</form>

</body>
</html>

