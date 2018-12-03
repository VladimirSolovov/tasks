<!DOCTYPE html>
<html>
<head>
<title>Авторизация</title>
    <meta charset=UTF-8"/>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<form action="enter.php" method="post">
    <div class="row">
        <label for="name">Логин:</label>
        <input type="text" class="text" name="name" id="name" />
    </div>
    <div class="row">
        <label for="password">Пароль:</label>
        <input type="password" class="text" name="password" id="password" />
    </div>
    <div class="row">
        <input type="submit" name="submit" id="btn-submit" value="Авторизоваться" />
    </div>
</form>
<p class="to_reg">Если вы не зарегистрированы в системе, <a href="form_register.php">зарегистрируйтесь</a>.</p>
</body>
</html>