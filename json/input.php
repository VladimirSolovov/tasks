<?php
$oldjson = file_get_contents('data.json');
$jsonarr = json_decode($oldjson, TRUE);
unset($oldjson);
$jsonarr[] = $_POST;
foreach ($jsonarr as $k => $val)
{
	$$k = (empty($_POST[$k])) ? 'default' : strip_tags($val);
}
file_put_contents('data.json', json_encode($jsonarr));
unset($jsonarr);
?>