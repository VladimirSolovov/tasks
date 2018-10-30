<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Погода на <?echo date('l jS \of F Y H:i:s ');?></title>
 </head>
 <body>

<?php

$file = file_get_contents('http://api.openweathermap.org/data/2.5/weather?id=479123&&units=metric&APPID=298c03f998a6dacd9a3dc62866ecc316');
				
$json = json_decode($file);
?>
<p><em><span style="font-size:22px">Температура: <?=$json->main->temp?>℃</span></em></p>
<p><em><span style="font-size:22px">Давление: <?=$json->main->pressure*0.75?> мм рт. ст.</span></em></p>
<p><em><span style="font-size:22px">Скорость ветра: <?=$json->wind->speed?> м/c</span></em></p>
<p><em><span style="font-size:22px">Влажность: <?=$json->main->humidity?> %</span></em></p>
<p><em><span style="font-size:22px">Состояние атмосферы: <?=$json->weather[0]->description?></span></em></p>