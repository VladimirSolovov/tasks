<?php
include '/templates/header.php';
$file = file_get_contents(__DIR__.'/tests/'.$_GET['namefile']);
$data = json_decode($file, true);
include '/templates/footer.php';
?>