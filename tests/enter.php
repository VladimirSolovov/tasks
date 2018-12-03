<?php
if(!$_POST['name'] || !$_POST['password']){
    echo 'Вы не заполнили обязательные поля, поле Имя или Пароль пустое';
    die();}
$jsonlist = file_get_contents('userauth/users.json');
$users = json_decode($jsonlist, TRUE);
foreach ($users as $value);
if($_POST['name'] == $value['name'] && $_POST['password'] == $value['password']){
	   include 'list.php'; // перенаправление на нужную страницу
   }else{
	echo "Введены неправильные данные";
	exit();
}
?>