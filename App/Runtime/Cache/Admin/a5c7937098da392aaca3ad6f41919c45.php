<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/Public/H-ui/lib/html5.js"></script>
<script type="text/javascript" src="/Public/H-ui/lib/respond.min.js"></script>
<script type="text/javascript" src="/Public/H-ui/lib/PIE_IE678.js"></script>
<![endif]-->
<link href="/Public/H-ui/static/h-ui/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="/Public/H-ui/static/h-ui.admin/css/H-ui.login.css" rel="stylesheet" type="text/css" />
<link href="/Public/H-ui/static/h-ui.admin/css/style.css" rel="stylesheet" type="text/css" />
<link href="/Public/H-ui/lib/Hui-iconfont/1.0.7/iconfont.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>后台登录 </title>
<meta name="keywords" content="">
<meta name="description" content="">
</head>
<body>
<input type="hidden" id="TenantId" name="TenantId" value="" />
<div class="header"></div>
<div class="loginWraper">
  <div id="loginform" class="loginBox">
    <form class="form form-horizontal" action="index.html" method="post">
      <div class="row cl">
        <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60d;</i></label>
        <div class="formControls col-xs-8">
          <input id="" name="username" type="text" placeholder="账户" class="input-text size-L username"><br />
		  <span class='username_tip tip' ></span>
        </div>
      </div>
      <div class="row cl">
        <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60e;</i></label>
        <div class="formControls col-xs-8">
          <input id="" name="pwd" type="password" placeholder="密码" class="input-text size-L pwd"><br />
		  <span class='password_tip tip'></span>
        </div>
      </div>
      <div class="row cl">
        <div class="formControls col-xs-8 col-xs-offset-3">
          <input class="input-text size-L code" type="text" placeholder="验证码" style="width:150px;"  name='code' value=''>
          <img src="<?php echo U('index/code');?>" id='code' onclick="this.src='<?php echo U('Index/code');?>?d='+Math.random();" style='width:140px;height:40px;'> <a id="kanbuq" href="javascript:;" onclick="document.getElementById('code').src='<?php echo U('Index/code');?>?d='+Math.random();">看不清，换一张</a>
		<span class='code_tip tip'></span>  </div>
      </div>
      <div class="row cl">
      <!--  <div class="formControls col-xs-8 col-xs-offset-3">
          <label for="online">
            <input type="checkbox" name="online" id="online" value="">
            使我保持登录状态</label>
        </div>-->
      </div>
      <div class="row cl">
        <div class="formControls col-xs-8 col-xs-offset-3">
          <input name="" type="submit" onclick='login_check()' class="btn btn-success radius size-L" value="&nbsp;登&nbsp;&nbsp;&nbsp;&nbsp;录&nbsp;">
          <input name="" type="reset" class="btn btn-default radius size-L" value="&nbsp;取&nbsp;&nbsp;&nbsp;&nbsp;消&nbsp;">
        </div>
      </div>
    </form>
  </div>
</div>
<div class="footer">Copyright <?php echo ($config["copyright"]); ?></div>
<script type="text/javascript" src="/Public/H-ui/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/Public/H-ui/static/h-ui/js/H-ui.js"></script> 
<script type="text/javascript">
    if (window != top){
        top.location.href = location.href;
    }
</script>
</body>
</html>