<?php
$dir = getcwd() . '/tests/';
$filelist = scandir($dir, 1);
function getList($filelist){
	if(!$filelist){
		echo "<h3>Тесты не найдены!</h3>";
	}else{
		echo "<h3>Список тестов</h3>";
		for($i=0; $i<(count($filelist)-2); $i++){
			echo '<li>' . $filelist[$i] . '</li>';
		}
		echo "</ol>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Список тестов</title>
</head>
	<body>
		<div>
			Вы авторизированны как: <?= $_SESSION['user_name'] ?>
			<a href="/tests/enter.php?action=logout">Выйти</a>
			<?php getList($filelist)?>
			<? if($_SESSION['user_name'] == 'admin'){ ?>
				<p><a href="admin.php">Загрузить новый тест</a></p>
			<? } ?>
</div>
</body>
</html>