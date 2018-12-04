<?php
include '/templates/header.php';
$findfile = ($_GET['namefile']);
$dir = 'tests/';
$files = scandir($dir);
foreach ($files as $file) {
	if($file == $findfile)
		$a = json_decode($file);
}
print_r($a);
include '/templates/footer.php';
?>