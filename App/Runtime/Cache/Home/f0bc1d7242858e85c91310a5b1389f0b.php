<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       <title>罗浮山百草油</title>
     <meta name="keywords" content="<?php echo ($config["keywords"]); ?>"/>
     <meta name="description" content="<?php echo ($config["description"]); ?>"/>
    <link href="/Public/style/home/BCYCSSs.css" rel="stylesheet" />
    <link href="/Public/style/home/flexslider.css" rel="stylesheet" />
    <script src="/Public/js/home/jquery-1.8.3.min.js"></script>
    <script src="/Public/js/home/jquery.flexslider-min.js"></script>
    <script type="text/javascript">
    window.onload = $(function () {
            $(".flexslider").flexslider({
                slideshowSpeed: 4000, //展示时间间隔ms
                animationSpeed: 400, //滚动时间ms
                touch: true //是否支持触屏滑动
            });

            var oDiv = document.getElementById("rollss");
            var oUl = oDiv.getElementsByTagName("ul")[0];
            var oLi = oUl.getElementsByTagName("li");
            var timer = null;
            var iSpeed = -1;　// 滚动速度，数字越大，滚动越快！烈火(liehuo.net)网小编注。
            oUl.innerHTML += oUl.innerHTML;
            oUl.style.width = (oLi[0].offsetWidth + 255) * oLi.length + "px";
            var fun = null;
            fun = function () {
                oUl.style.left = oUl.offsetLeft + iSpeed + "px";
                if (oUl.offsetLeft < -oUl.offsetWidth / 2) {
                    oUl.style.left = "0px";
                }
                else if (oUl.offsetLeft > 0) {
                    oUl.style.left = -oUl.offsetWidth / 2 + "px";
                };
            };
            timer = setInterval(fun, 30);
            oUl.onmouseover = function () { //鼠标经过时  清除定时器  停止图片的滚动
                clearInterval(timer);
            };
            oUl.onmouseout = function () {  //鼠标离开后  继续滚动图片
                timer = setInterval(fun, 30);
            };
        });
    </script>
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

    <!--图片轮播-->
    <div class="flexslider">
        <ul class="slides">
            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a><img src="/<?php echo ($vo["image_path"]); ?>" /></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
    <!--图片轮播End-->

<!--    <ul class="circle w10">
        <?php if(is_array($printlist)): $i = 0; $__LIST__ = $printlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
            <a class="circlea" href="<?php echo U('Article/page',array('id'=>$vo['art_type'],'ids'=>$vo['id']));?>">
                <img src="/<?php echo ($vo["url_img"]); ?>" class="circleimg" />
                <img src="/Public/images/home/circle.png" class="circleimg" />
            </a>
            <div class="circlename"><?php echo ($vo["title"]); ?></div>
        </li><?php endforeach; endif; else: echo "" ;endif; ?>
        
    </ul>-->

<style>
        #rollss { margin: 0; padding: 0; width: 1000px; margin: 38px auto 0; position: relative; }
            #rollss .warpss { margin: 0; padding: 0; width: 1000px; height: 176px; text-align: center; overflow: hidden; position: relative; }
            #rollss ul { margin: 0; padding: 0; list-style: none; position: absolute; left: 0; top: 0; height: 176px; }
            #rollss li { margin: 0; padding: 0; list-style: none; float: left; width: 205px; height: 176px; line-height: 150px; margin-right: 50px; }
            #rollss .circlea { margin: 0; padding: 0; float: left; display: block; width: 205px; height: 176px; margin: 0 auto; }
            #rollss .circleimg { margin: 0; padding: 0; float: left; display: block; position: absolute; width: 205px; height: 146px; }
            #rollss .circlename { margin: 0; padding: 0; float: left; display: block; position: absolute; top: 146px; width: 205px; line-height: 30px; text-align: center; color: #8d5028; font-size: 14px; }
    </style>

    <div id="rollss">
        <div class="warpss">
            <ul>
                 <?php if(is_array($printlist)): $i = 0; $__LIST__ = $printlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                    <a class="circlea" href="<?php echo U('Article/index_page',array('id'=>'','ids'=>$vo['id']));?>">
                       <img src="/<?php echo ($vo["url_img"]); ?>" class="circleimg" />
               
                        <div class="circlename"><?php echo ($vo["title"]); ?></div>
                    </a>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
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