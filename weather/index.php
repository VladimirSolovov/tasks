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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

<style>
.box{
 overflow: hidden;
 box-shadow: 0 0 3px rgba(0,0,0,0.3);
 position: relative;
}
.box:before{
 content: "";
 width: 100%;
 height: 100%;
 background-image: repeating-linear-gradient(45deg,transparent,transparent 10px,rgba(0,0,0,0.1) 10px,rgba(0,0,0,0.1) 20px);
 position: absolute;
 top: 0;
 left: 0;
 z-index: 1;
 opacity: 0;
 transition: all 0.3s ease 0s;
}
.box:hover:before{ opacity: 1; }
.box img{
 width: 100%;
 height: auto;
 transform: scale(1.2);
 transition: all 0.3s ease 0s;
}
.box:hover img{
 filter: sepia(100%) grayscale(100%) ;
 transform: scale(1);
}
.box .box-content{
 width: 70%;
 height: 100%;
 padding: 15px 0 0 15px;
 background: rgba(0,0,0,0.7);
 position: absolute;
 top: 0;
 left: -100%;
 transition: all 0.3s ease 0s;
}
.box:hover .box-content{ left: 0; }
.box .title{
 font-size: 20px;
 font-weight: 600;
 font-style: italic;
 color: #fff;
 letter-spacing: 1px;
 text-transform: uppercase;
 text-shadow: 0 0 2px #ea1e1f;
 margin: 0;
}
.box .post{
 display: inline-block;
 font-size: 14px;
 color: #fff;
 letter-spacing: 2px;
 text-transform: capitalize;
 transition: all 0.8s ease 0.3s;
}
.box .icon{
 padding: 0;
 margin: 0;
 list-style: none;
 text-align: center;
 position: absolute;
 top: 50%;
 right: -100%;
 z-index: 1;
 transform: translateY(-50%);
 transition: all 0.3s ease 0s;
}
.box:hover .icon{ right: 25px; }
.box .icon:after{
 content: "";
 width: 130%;
 height: 100%;
 background: rgba(234,30,31,0.7);
 position: absolute;
 top: 0;
 left: 50%;
 z-index: -1;
}
.box .icon li{
 display: block;
 margin: 10px 0;
}
.box .icon li a{
 display: block;
 width: 40px;
 height: 40px;
 line-height: 40px;
 background: #fff;
 font-size: 18px;
 color: #ea1e1f;
 box-shadow: 0 0 10px rgba(0,0,0,0.4) inset;
 transition: all 0.3s ease 0s;
}
.box .icon li a:hover{
 background: #ea1e1f;
 color: #fff;
 box-shadow: 0 0 10px #ea1e1f;
}
@media only screen and (max-width:990px){
 .box{ margin-bottom: 30px; }
}
</style>

<div class="container"><div class="row">

 <div class="col-md-3 col-sm-6">
 <div class="box">
 <img src="http://bootstraptema.ru/images/demo/600x600/demo1.jpeg" alt="1">
 <div class="box-content">
 <h3 class="title">Температура</h3>
 <span class="post"><?=$json->main->temp?>℃</span>
 </div>
 <ul class="icon">
 </ul>
 </div>
 </div>

 <div class="col-md-3 col-sm-6">
 <div class="box">
 <img src="http://bootstraptema.ru/images/demo/600x600/demo2.jpeg" alt="2">
 <div class="box-content">
 <h3 class="title">Давление</h3>
 <span class="post"><?=$json->main->pressure*0.75?> мм рт. ст.</span>
 </div>
 <ul class="icon">
 </ul>
 </div>
 </div>

 <div class="col-md-3 col-sm-6">
 <div class="box">
 <img src="http://bootstraptema.ru/images/demo/600x600/demo3.jpeg" alt="3">
 <div class="box-content">
 <h3 class="title">Скорость ветра</h3>
 <span class="post"><?=$json->wind->speed?> м/c</span>
 </div>
 <ul class="icon">
 </ul>
 </div>
 </div>

 <div class="col-md-3 col-sm-6">
 <div class="box">
 <img src="http://bootstraptema.ru/images/demo/600x600/demo4.jpeg" alt="4">
 <div class="box-content">
 <h3 class="title">Влажность</h3>
 <span class="post"><?=$json->main->humidity?> %</span>
 </div>
 <ul class="icon">
 </ul>
 </div>
 </div>

  <div class="col-md-3 col-sm-6">
 <div class="box">
 <img src="http://bootstraptema.ru/images/demo/600x600/demo4.jpeg" alt="5">
 <div class="box-content">
 <h3 class="title">Состояние атмосферы</h3>
 <span class="post"><?=$json->weather[0]->description?> </span>
 </div>

</div></div>