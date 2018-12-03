<!DOCTYPE html>
<html>
<head>
	<title>Регистрация</title>
	<meta charset="UTF-8">
    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <form action="registration.php" method="post">
        <div class="row">
            <label for="name">Логин:</label>
            <input type="name" class="text" name="name" id="name" />
            <div class="error" id="login-error"><?=$errors['login'];?></div>
        <div class="row">
            <label for="password">Пароль:</label>
            <input type="password" class="text" name="password" id="password"/>
        <div class="row">
            <input type="submit" name="submit" id="btn-submit" value="Зарегистрироваться" />
        </div>
    </form>
</body>
</html>>