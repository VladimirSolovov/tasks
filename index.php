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
body{background-color:#222}
.menu{
 float:left;
}
.menu{
margin:4em 2em;
}
.box{
 position:absolute;
 top:-1200px;
 width:100%;
 color:#fff;
 margin:auto;
 padding:0px;
 z-index:999999;
 text-align:right;
 left:0;
}
a.boxclose{
 cursor: pointer;
 text-align: center;
 display: block;
 position: absolute;
 top: 46px;
 right: 320px;
}
.menu_box_list {
 display: inline-block;
 float: right;
 margin-right: 35em;
}
.menu_box_list ul li {
 display:inline-block;
}
.menu_box_list li a{
 color: #fff;
 font-size: 1.2em;
 font-weight:400;
 display: block;
 padding:0.5em 0.5em;
 text-decoration:none;
 text-transform: uppercase;
 -webkit-transition: all 0.5s ease-in-out;
 -moz-transition: all 0.5s ease-in-out;
 -o-transition: all 0.5s ease-in-out;
 transition: all 0.5s ease-in-out;
 letter-spacing: 0.1em;
}
.menu_box_list li a:hover,.menu_box_list ul li.active a{
 color:#E74C3C;
}
.menu_box_list ul {
 background:transparent;
 padding:50px;
}
.menu_box_list li a > i > img{
 vertical-align:middle;
 padding-right:10px;
}
@media (max-width:1280px){ 
a.boxclose {
 right: 190px;
}
.menu_box_list {
 margin-right: 25em;
}
}
@media (max-width:1024px){ 
a.boxclose {
 right: 104px;
}
.menu_box_list {
 margin-right: 14em;
}
}
@media (max-width:768px){ 
.menu_box_list {
 margin-right: 3em;
}
a.boxclose {
 right: 28px;
 top:18px;
}
.menu_box_list ul li {
 display:block;
}
.menu_box_list ul {
 background:transparent;
 padding:1em 20em;
 margin:28px 0px;
 text-align:center;
}
}
@media (max-width:640px){ 
.menu_box_list ul {
padding: 1em 15em;
}
}
@media (max-width:480px){ 
.menu_box_list ul {
 padding: 1em 9.5em;
}
}
@media (max-width:320px){ 
a.boxclose {
 right: 15px;
 top: 4px;
}
.menu_box_list ul {
 padding: 0em 5.2em;
 margin: 14px 0px;
}
.menu_box_list li a {
 padding: 0.4em 0.5em;
}
.menu_box_list {
 margin-right: 1em;
}
}
</style>

<div class="menu"> 
 <a href="#" id="activator"><img src="http://bootstraptema.ru/snippets/menu/2016/button/menu.png" alt="" /></a>
 <div class="box" id="box">
 <div class="box_content">
 <div class="menu_box_list">
 <ul>
    	<li><a href="zadaniya">Задания из файла</a></li>
    	<li><a href="json">Записная книжка</a></li>
    	<li><a href="tests">Тесты</a></li>
    	<li><a href="weather">Погодный информер</a></li>
    	<li><a href="weather/nobootstrap_weather/index.php">Погодный информер без оформления</a></li>
    	<li><a href="php720">PHP720</a></li>
 <div class="clearfix"></div>
 </ul>
 </div>
 <a class="boxclose" id="boxclose"><img src="http://bootstraptema.ru/snippets/menu/2016/button/close.png" alt="" /></a>
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
