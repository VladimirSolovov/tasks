<?php
$jsonarr = $_POST;
$delsymbol = [' ', '<', '>', '\r', '\n'];
$nullsymbol = '';
$jsonarr = str_replace($delsymbol, $nullsymbol, $jsonarr);
file_put_contents('userdata.json', json_encode($jsonarr));
?>