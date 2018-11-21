<h2>task 14</h2>
	<?php
			$text = "1a2b3c4b5d6e7f8g9h0";
			$zreplace = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '0'];
			$str1 = '';
			$strrep = str_replace($zreplace, $str1, $text); //Дана строка с буквами и цифрами, например, '1a2b3c4b5d6e7f8g9h0'. Удалите из нее все цифры. То есть в нашем случае должна получится строка 'abcbdefgh'
		echo $text;
	?>
		<pre>
	<?php	
		echo $strrep;
	?>
<h2>task 13</h2>

	<?php
		$image = 'icon.jpg';
		$search = 'jpg'; //Дана строка. Проверьте, что она заканчивается на '.png' или на '.jpg'. Если это так, выведите 'да', если не так - 'нет'
			if(substr($image, strlen($image)-strlen($search))){
			echo 'yes';
		}
			else{
				echo 'no';
			}
	?>
<h2>task 12</h2>
	<?php
		$mystring = 'http://vk.com';
		$rest = substr($mystring, 0, 5);
		$rest2 = substr($mystring, 0, 4);
		if($rest == 'https'){
  		echo "Protocol https://";
		}elseif($rest2 == 'http'){
 		 echo "Protocol http://";}
 	?>
<h2>task 11</h2>
	<?php
		$str = 'london is the capital of great britain';
		echo ucwords($str); //Дана строка 'london is the capital of great britain'. Сделайте из нее строку 'London Is The Capital Of Great Britain'
	?>
<h2>task 10</h2>
	<?php
		$sum=0;
		$num = [[5, 45, 8], [12, 1, 11]]; //найти сумму многомерного массива
			for ($i=0;$i<count($num);$i++){
   			$sum+=array_sum($num[$i]); 
	}
		echo 'summary all elements ' .$sum;
	?>	
<h2>task 9</h2>

	<?php
		$symb = '12345678';
		var_dump(preg_replace('/(.)(.)/u', '$2$1', $symb));
	?>
<h2>task 8</h2>
	<?php
		$arnum = ['1','2', '3', '4', '5', '6'];
		$arr2 = [];
		for ($i = 0; $i<= count($arnum)-0; $i=$i+2){
			$key = $arnum[$i];
			$arr2[$key] = $arnum[$i+1];}
			print_r($arr2)

	?>
<h2>task 7</h2>
	<?php
		$arrnum = [1,3,2,4]; 
		$Arrsum =[]; 
		foreach($arrnum as $keynum){ 
		for($i = 1; $i <= $keynum; $i++){ 			
		$Arrsum[] = $keynum;} 
		} 
		print_r($Arrsum);
	?>
<h2>task 6</h2>
	<?php
		$arr3 = [1, 1, 1, 3, 3, 3, 2, 4, 4];
		$newArr2 = [];
		$elems = count($arr3);
	for ($i = 0; $i < $elems; $i++) {
		$value = $arr3[$i];
		unset($arr3[$i]);
	if (in_array($value, $arr3)) {
			$newArr2[] = $value;
		}
		$arr3[$i] = $value;
	}
	$arr3 = $newArr2;
	echo var_dump($arr3);
	?>
<h2>task 5</h2>
	<?php
		$str = 'Phasellus gravida fermentum pellentesque. Aenean non neque mollis nisl dapibus eleifend';
		$word = explode(' ', $str);
		$max_symb = max(array_map('strlen', $word));
		foreach ($word as $ssymb) {
			$long = strlen($ssymb);
			if ($long >= $max_symb){
				 echo '<strong>'.$ssymb.'</strong>';
			}else{
			echo $ssymb.' '; 
			} 
		}
	?>
<h2>task 4</h2>
	<?php
		$arrword = explode('_', 'var_test_text');
		$str  = '';
		foreach ($arrword as $key => $elword) {
			if($key !=0) {
				$str .= ucfirst($elword);}
				else {$str .= $elword;
				}
			}
		echo $str;
	?>
<h2>task 3</h2>
	<?php
		$password = 'gj575';
		$lpass = strlen($password);
		$str = strlen(preg_replace("/[^0-9]/", '', $password));
		if ($str <= 2){
     	 	echo "В пароле должно быть больше 2 цифр";
    	}else if ($lpass < 5){
      		echo "пароль должен состоять минимум из 5 символов";
    	}else if ($lpass >10){
     		echo "пароль должен состоять максимум из 10 символов";
		}else{
 			echo "Надежный пароль";
		}		
	?>
<h2>task 2</h2>
	<?php
		$txt = 'Phasellus gravida fermentum pellentesque. Aenean non neque mollis nisl dapibus eleifend. Sed interdum dui nec dictum elementum. Proin eget semper dolor, ut commodo nibh. Quisque vitae pharetra ligula. Sed dictum, sem sed pellentesque aliquam, tellus sapien dapibus magna, eu suscipit lacus augue sed velit. Ut vehicula sagittis nulla, et aliquet elit. Quisque tincidunt sem nibh, finibus dictum nisl vulputate quis. In vitae nisl et lacus pulvinar ornare id ac libero. Morbi pharetra fringilla erat ut lacinia.';
		$words = explode(' ', $txt);
			foreach ($words as $wsymb) {
				echo mb_strimwidth("$wsymb ", 0, 9, "* ");
			}
	?>
<h2>task 1</h2>
	<?php
		$text2 = 'Phasellus gravida fermentum pellentesque. Aenean non neque mollis nisl dapibus eleifend. Sed interdum dui nec dictum elementum. Proin eget semper dolor, ut commodo nibh. Quisque vitae pharetra ligula. Sed dictum, sem sed pellentesque aliquam, tellus sapien dapibus magna, eu suscipit lacus augue sed velit. Ut vehicula sagittis nulla, et aliquet elit. Quisque tincidunt sem nibh, finibus dictum nisl vulputate quis. In vitae nisl et lacus pulvinar ornare id ac libero. Morbi pharetra fringilla erat ut lacinia.';		
		$nodottxt = str_replace([',', '.'], '', $text2);	//убрал знаки препинания, иначе сортировка начинается заново после 												   после каждого символа
		$textarray = array_unique(explode(' ', $nodottxt));
		natcasesort($textarray);;
		$headletter = $textarray[0][0];
		print_r($headletter);
		foreach ($textarray as $wrd) {
			if ($wrd[0] != $headletter){
				$headletter = $wrd[0];
				echo $headletter ?><br><?;
			}
			echo $wrd ?><br><?;
		}
	?>
