<!DOCTYPE html>
<html>
      <head>
  		<meta charset="utf-8">
  			<title>Задания</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	  </head>
<body>
<link rel="stylesheet" href="http://bootstraptema.ru/plugins/2015/bootstrap3/bootstrap.min.css" />
<script src="http://bootstraptema.ru/plugins/jquery/jquery-1.11.3.min.js"></script>
<script src="http://bootstraptema.ru/plugins/2016/easing/jquery.easing.min.js"></script>
<style>
.btn {		
	position: relative;	
	padding: 1.4rem 4.2rem;
	padding-right: 3.1rem;
	font-size: 1.4rem;
	color: var(--inv);
	letter-spacing: 1.1rem;
	text-transform: uppercase;
	transition: all 600ms cubic-bezier(0.77, 0, 0.175, 1);	
	cursor: pointer;
	user-select: none;
}

.btn:before, .btn:after {
	content: '';
	position: absolute;	
	transition: inherit;
	z-index: -1;
}

.btn:hover {
	color: var(--def);
	transition-delay: .6s;
}

.btn:hover:before {
	transition-delay: 0s;
}

.btn:hover:after {
	background: var(--inv);
	transition-delay: .4s;
}

/* From Top */

.from-top:before, 
.from-top:after {
	left: 0;
	height: 0;
	width: 100%;
}

.from-top:before {
	bottom: 0;	
	border: 1px solid var(--inv);
	border-top: 0;
	border-bottom: 0;
}

.from-top:after {
	top: 0;
	height: 0;
}

.from-top:hover:before,
.from-top:hover:after {
	height: 100%;
}

/* From Left */

.from-left:before, 
.from-left:after {
	top: 0;
	width: 0;
	height: 100%;
}

.from-left:before {
	right: 0;
	border: 1px solid var(--inv);
	border-left: 0;
	border-right: 0;	
}

.from-left:after {
	left: 0;
}

.from-left:hover:before,
.from-left:hover:after {
	width: 100%;
}

/* From Right */

.from-right:before, 
.from-right:after {
	top: 0;
	width: 0;
	height: 100%;
}

.from-right:before {
	left: 0;
	border: 1px solid var(--inv);
	border-left: 0;
	border-right: 0;	
}

.from-right:after {
	right: 0;
}

.from-right:hover:before,
.from-right:hover:after {
	width: 100%;
}

/* From Middle */

.from-middle:before {
	top: 0;
	left: 50%;
	height: 100%;
	width: 0;
	border: 1px solid var(--inv);
	border-left: 0;
	border-right: 0;
}

.from-middle:after {
	bottom: 0;
	left: 0;
	height: 0;
	width: 100%;
	background: var(--inv);
}

.from-middle:hover:before {
	left: 0;
	width: 100%;
}

.from-middle:hover:after {
	top: 0;
	height: 100%;
}

/* From Bottom */

.from-bottom:before, 
.from-bottom:after {
	left: 0;
	height: 0;
	width: 100%;
}

.from-bottom:before {
	top: 0;	
	border: 1px solid var(--inv);
	border-top: 0;
	border-bottom: 0;
}

.from-bottom:after {
	bottom: 0;
	height: 0;
}

.from-bottom:hover:before,
.from-bottom:hover:after {
	height: 100%;
}


/* ~~~~~~~~~~~~ GLOBAL SETTINGS ~~~~~~~~~~~~ */

*, *:before, *:after {
	box-sizing: border-box;
}

body {
	--def: #96B7C4; 	
	--inv: #fff;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	height: 100vh;
	width: 100%;
	background-image: linear-gradient(-25deg, #f6fcd6 0%, #96B7C4 100%);
}

html {
	font-size: 12px;
	font-family: 'Playfair Display', serif;
}

div {margin-bottom: 3rem;}
div:last-child {margin-bottom: 0;}
</style>
 <div class="box" id="box">
 <div class="box_content">
 <div class="menu_box_list">
 <ul>
    	<li><div class="btn from-left"> <a href="zadaniya">Задания из файла</a></div>
    	<li><div class="btn from-right"> <a href="json">Записная книжка</a></div>
    	<li><div class="btn from-middle"><a href="tests">Тесты </a></div>
    	<li><div class="btn from-bottom"><a href="weather">Погодный информер</a></div>
    	<li><div class="btn from-top"> <a href="weather/nobootstrap_weather/index.php">Погодный информер без оформления</a></div>
    	<li><div class="btn from-left"> <a href="php720">PHP720</a></div>
 <div class="clearfix"></div>
 </ul>
 </div>
 </div> 
 </div>
 
 <script>
 var $ = jQuery.noConflict();
 $(function() {
 $('#activator').click(function(){
 $('#box').animate({'top':'0px'},500);
 });
 $('#boxclose').click(function(){
 $('#box').animate({'top':'-700px'},500);
 });
 });
</script>


</body>
