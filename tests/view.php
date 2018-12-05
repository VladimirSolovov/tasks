<?php
include '/templates/header.php';
$file = file_get_contents(__DIR__.'/tests/'.$_GET['namefile']);
$data = json_decode($file, true);
foreach ($data[0] as $quest) {
	?><pre><?
	 echo $quest['textQwestion']?><br><?;
	?><pre><?
	foreach ($quest['answer'] as $k => $variant) {
?>
    <input type="radio" name="answer" value="answer" ><?echo $variant;?><br/>
<?
	}
}
include '/templates/footer.php';
?>