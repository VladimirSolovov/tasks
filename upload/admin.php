<?php
if(isset($_FILES['userfile']['name']))
{
	$error = $_FILES['userfile']['error'];
	if(!$error){
		$name = basename($_FILES['userfile']['name']);
		$type = strtolower(substr($name, 1+strpos($name, ".")));
		$extentions = "json";
		if($type != $extentions)
			echo "Файл имеет недопустимое расширение";
	}else{
		$uploaddir = getcwd(). '/tests/' . $name;
		if(file_exists($uploaddir)){
			echo "Файл $name уже существуетю Выберите другой файл!</br>";
		}else{
			$tmp_name = $_FILES['userfile']['tmp_name'];
			move_uploaded_file($tmp_name, $uploaddir);
			echo "Файл $name успешно отправлен!</br>";
		}
		}
}elseif (empty(($_FILES['username']['name']))){
	echo "Файл не выбран\n";
}else{
	echo "Ошибка загрузка файла!\n";
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Загрузить файл теста</title>
		<meta charset="utf-8">
	</head>
<body>
	<div> 
	<form enctype="multipart/form-data" action="list.php" method="post">
	<fieldset>
		<legend><strong>Выберите файл для загрузки:</strong></legend>
		<input name="name" type="file" placeholder="Выбрать файл с тестом:"/>
		<button type="submit" value="Отправить файл">Отправить файл</button>
	</fieldset>
	<p><a href="list.php">Перейти к списку доступных тестов</a></p>>
</form>
</div>
</body>
</html>