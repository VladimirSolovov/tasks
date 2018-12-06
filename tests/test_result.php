<?php
include '/templates/header.php';
$resjson = file_get_contents('result.json');
$result = json_decode($resjson, TRUE);
$result = array_values($_POST['userAnswer']);
$corr = array_values($_POST['correct']);
file_put_contents('result.json', json_encode($result));
if($result == $corr){
	echo "Тест пройден!";
}else{
	echo "Где-то ошибка!";
}
?><p><a href="index.php">К списку тестов</a></p>
<?
include '/templates/footer.php';
?>