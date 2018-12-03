<?php
if($_GET['action'] == 'logout'){
	unset($_SESSION['user_name']);
	echo "Вы вышли из профиля "?><a href="form_auth.php">Войти</a><?;
}else{
	if(!$_POST['name'] || !$_POST['password']){
	    echo 'Вы не заполнили обязательные поля, поле Имя или Пароль пустое';
	   die();
	}
	$jsonlist = file_get_contents('userauth/users.json');
	$users = json_decode($jsonlist, TRUE);
	foreach ($users as $value){
		if($_POST['name'] == $value['name'] && $_POST['password'] == $value['password']){
			$_SESSION['user_name'] = $_POST['name'];
			   include 'list.php';
		   }else{
			echo "Введены неправильные данные";
			exit();
		}
	}
}

?>