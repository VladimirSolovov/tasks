<?php
$oldjson = file_get_contents('userauth/users.json');
$jsonarr = json_decode($oldjson, TRUE);
unset($oldjson);
$jsonarr[] = $_POST;
$_POST['name'] = isset($_POST['name']) ? filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING) : '';
$_POST['surname'] = isset($_POST['password']) ? filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING) : '';
file_put_contents('userauth/users.json', json_encode(jsonarr));
unset($jsonarr);
?>