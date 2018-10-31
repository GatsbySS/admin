<?php 
/**
 * 阅读文章页面
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title><?php echo $log_title; ?></title>
<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <style>
      img{
          display: block;
    max-width: 100%;
    height: auto;
      text-align:center;
      margin:3px auto;}
      </style>
  </head>
  <body style="background-color:#f8f8f8;text-align:center;margin:3px auto;">
<div class="container-fluid">
<div class="row">
  <div class="col-md-12 col-xs-12 col-sm-12" style="margin-top:10px;font-size:16px;">
	<?php echo $log_content; ?>

</div></div></div>
      </body>
  </html>
