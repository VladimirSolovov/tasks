<?php
if(!$_POST['name'] || !$_POST['password']){
    echo 'Вы не заполнили обязательные поля, поле Имя или Пароль пустое';
    die();  
}
$oldjson = file_get_contents('userauth/users.json');
$jsonarr = json_decode($oldjson, TRUE);
foreach ($jsonarr as $key => $val) {
	if($val['name'] == $_POST['name']){
		echo "Пользователь с таким именем существует";
	die();
	}
}
$jsonarr[] = [
    'name'      => isset($_POST['name']) ? filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING) : '',
    'password'  => isset($_POST['password']) ? filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING) : '',
    'submit'    => ''
];
file_put_contents('userauth/users.json', json_encode($jsonarr));
unset($jsonarr);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Регистрация</title>
	<meta charset="UTF-8">
</head>
	<body>
		<h3>Регистрация прошла успешно</h3>
		<a href="form_auth.php">Войти</a>
	</body>
</html>>