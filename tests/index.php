<?php
session_start();
if(isset($_SESSION['user_name'])){
	include 'list.php';
}else{
	include 'form_auth.php';
}
?>