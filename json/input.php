<?php
$oldjson = file_get_contents('data.json');
$jsonarr = json_decode($oldjson, TRUE);
unset($oldjson);
$jsonarr[] = $_POST;
$_POST['name'] = isset($_POST['name']) ? filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING) : '';
$_POST['surname'] = isset($_POST['surname']) ? filter_input(INPUT_POST, 'surname', FILTER_SANITIZE_STRING) : '';
$_POST['address'] = isset($_POST['address']) ? filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING) : '';
$_POST['phone'] = isset($_POST['phone']) ? filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_NUMBER_INT) : '';
file_put_contents('data.json', json_encode($jsonarr));
unset($jsonarr);
?>