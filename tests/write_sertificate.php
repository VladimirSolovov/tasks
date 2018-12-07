<?php
session_start();
$im = imagecreatefromjpeg('sertifikat2_5aa75edb2858d.jpg');
$black = imagecolorallocate($im, 0x00, 0x00, 0x00);
$font_file = './9690.ttf';
$text = 'Уважаемый ' . $_SESSION['username'] . ' !
Вы успешно прошли тест!
Ваша оценка:' . $_GET['action'];
imagettftext($im, 20, 0, 90, 300, $black, $font_file, $text);
header('Content-Type: image/jpeg');
imagejpeg($im);
imagedestroy($im);
?>
