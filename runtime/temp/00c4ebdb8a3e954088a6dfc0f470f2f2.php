<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"/www/wwwroot/app.duzhiqiang.com/application/app/view/index/m.html";i:1535728379;}*/ ?>

<<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VIP影视</title>
</head>
<style>
    body {
        font-family: 'Microsoft YaHei', 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    body::before {
        content: ' ';
        position: fixed;
        z-index: -1;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: url('https://i.loli.net/2018/05/19/5b003b9c09d89.jpg');/* https://i.loli.net/2018/05/19/5b003b9c09d89.jpg */
        background-size: cover;
        background-repeat: no-repeat;
        background-size: cover;
    }
	
    .logo {
        width: 80px;
        height: 80px;
        background: url('http://app.duzhiqiang.com/public/static/pcdown/images/detail_logo_magapp.png');
        margin: 0 auto;
        margin-top: calc(30% - 40px);
        background-size: cover;
		border-radius:15px;
        background-repeat: no-repeat;
    }

    @media screen and (min-width: 1000px) {
        body::before {
            background: url('https://i.loli.net/2018/05/19/5b003b9c637bc.jpg');/* https://i.loli.net/2018/05/19/5b003b9c637bc.jpg */
        }

        .logo {
            margin-top: calc(10% - 40px);
        }
    }

    .QH {
		font-size: 20px;
		display: table-cell;
        vertical-align: middle;
        text-align: center;
 
		color: #fff;
   
        margin: 0 auto;
        margin-top: 10px;
        display: block;
        background-size: cover;
        background-repeat: no-repeat;
    }

    .update {
        color: #fff;
        margin: 0 auto;
        margin-top: 10px;
        display: block;
        text-align: center;
        font-weight: 100;
        font-size: 14px;
    }

    .down {
        position: absolute;
        left: 50%;
        bottom: 130px;
        display: block;
        margin: 0 auto;
        width: 220px;
        margin-left: -110px;
        text-decoration: none;
        color: #656565;
        border-radius: 50px;
        background: #f4f4f4;
        font-size: 20px;
        padding: 15px 0;
        opacity: .9;
        text-align: center;
        font-weight: bold;
    }
    .bq {
        position: absolute;
        bottom: 0;
        font-size: 14px;
        text-align: center;
        left: 0;
        right: 0;
        color: #fff;
    }
</style>

<body>
<div class="logo">
</div>
<p class="QH">VIP影视</p>
  <p class="update">当前版本 v1.15 | 2018-08-31</p>
<a class="down" href="https://www.duzhiqiang.com/lz.php?url=https://www.lanzous.com/i1r6q2h&type=down">立即下载</a>
<p class="bq">VIP影视 @ 2018 版权©所有</p>
</body>
<script>
    $('.down').click(function(){
       
                window.location.href="https://www.duzhiqiang.com/lz.php?url=https://www.lanzous.com/i1r6q2h&type=down";
           
    });

//js判断微信浏览器的代码：

function is_weixin(){
    var ua = navigator.userAgent.toLowerCase();
    var qq=ua.match(/MQQBrowser/i)=="mqqbrowser";
    if(ua.match(/MicroMessenger/i)=="micromessenger") {
        return true;
    }else if(ua.indexOf('mobile mqqbrowser')>-1){
        return true;
    }
    else if(ua.match(/QQ/i) == "qq"&&qq==false){
        return true;
    }else if (ua.match(/WeiBo/i) == "weibo") {
        return true;
    }else if(ua.match(/Alipay/i)=="alipay"){
        return true;
    }else {
        return false;
    }
}
</script>
</html>
