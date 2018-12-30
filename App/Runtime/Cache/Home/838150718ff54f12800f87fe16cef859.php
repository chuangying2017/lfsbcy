<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       <title>罗浮山百草油</title>
     <meta name="keywords" content="<?php echo ($config["keywords"]); ?>"/>
     <meta name="description" content="<?php echo ($config["description"]); ?>"/>
    <link href="/Public/style/home/BCYCSSs.css" rel="stylesheet" />
</head>
<body>
      <div class="head w10">
        <a class="logo" href="/">
            <img src="/Public/images/home/logo.jpg" class="logoimg" />
        </a>
        <div class="column">
            <a  <?php if($_GET['id']== null ): ?>class="columna columhot" <?php else: ?>class="columna"<?php endif; ?>  style="line-height: 35px;" href="<?php echo U('Index/index');?>">首页</a>
            <a  <?php if(in_array(($_GET['id']), explode(',',"2,3,4,5,100"))): ?>class="columna columhot" <?php else: ?>class="columna"<?php endif; ?> href="<?php echo U('Article/product',array('id'=>'100'));?>">产品介绍</a>
            <a  <?php if(in_array(($_GET['id']), explode(',',"6"))): ?>class="columna columhot" <?php else: ?>class="columna"<?php endif; ?> href="<?php echo U('Article/activitylist',array('id'=>'6'));?>">使用方法</a>
            <a  <?php if(in_array(($_GET['id']), explode(',',"101"))): ?>class="columna columhot" <?php else: ?>class="columna"<?php endif; ?> href="<?php echo U('Index/drugstore',array('id'=>'101'));?>">G O药店</a>
            <a  <?php if(in_array(($_GET['id']), explode(',',"7"))): ?>class="columna columhot" <?php else: ?>class="columna"<?php endif; ?> href="<?php echo U('Article/huodong',array('id'=>'7'));?>">活动分享</a>
            <a  <?php if(in_array(($_GET['id']), explode(',',"102,8,9,10,11,12,13"))): ?>class="columna columhot" <?php else: ?>class="columna"<?php endif; ?> href="<?php echo U('Article/brand',array('id'=>'102'));?>">品牌文化</a>
            <a  <?php if(in_array(($_GET['id']), explode(',',"103,14,19,20"))): ?>class="columna columhot" <?php else: ?>class="columna"<?php endif; ?> href="<?php echo U('Article/about',array('id'=>'19'));?>">客服中心</a>
        </div>
    </div>

    <div class="gopharmacy">
        <div class="sharingdiv"> 
             <div style='font-size: 18px;text-align: center;height:30px;line-height: 30px;'><?php echo ($relust["title"]); ?></div>
           
            <div style='font-size: 14px;text-align: center;height:25px;line-height: 25px;'> <?php echo (date('Y-m-d',$relust["time"])); ?></div>
            <!--<div style="line-height: 30px;">-->
            <?php echo ($relust["content"]); ?>
            <!--</div>-->
        </div>
    </div>

      <div class="foot">
        <div class="link w10">
            <div style="float: left;margin: 0% 2%">友情链接：</div>
                <div style="width: 88%;margin-left: 10%;height: 100%;margin-top: 1%">
            <?php if(is_array($link)): $i = 0; $__LIST__ = $link;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo ($vo["url"]); ?>"  target="_blank" ><?php echo ($vo["title"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>

        <div class="footmap">
            <div class="footmsg w10">
                <div class="footleft">
                    <div class="footurl">
                        <a>关于我们</a>
                        <span>|</span>
                        <a>帮助中心</a>
                        <span>|</span>
                        <a>友情链接</a>
                        <span>|</span>
                        <a>法律声明</a>
                        <span>|</span>
                        <a>版权信息</a>
                        <span>|</span>
                        <a>网站地图</a>
                    </div>
                    <div><?php echo ($config["info1"]); ?> </div>
                    <div> <?php echo ($config["copyright"]); ?>  <?php echo ($config["icp"]); ?> <?php echo ($config["cnzz"]); ?></div>
                   
                </div>
                <div class="footright">
                    <div class="rightdiv">
                        <img src="/Public/images/home/WeChat.png" class="rightimg" />
                        <div>关注微信</div>
                    </div>
                    <div class="rightdiv">
                        <img src="/Public/images/home/Sina.png" class="rightimg" />
                        <div>关注微博</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>