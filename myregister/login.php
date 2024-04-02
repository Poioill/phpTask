<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Форма регистрации</title>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="container mt-4">
  <h1>Форма авторизации</h1><br>
  <form action="login_check.php" method="post">
    <input type="text" class="form-control" name="login1" id="login1" placeholder="Введите логин"><br>

    <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>

    <button class="btn btn-success" type="submit">Authorization</button>
    
  </form>
  <a href="register.php">Регистрация</a>
</div>



</body>
</html>