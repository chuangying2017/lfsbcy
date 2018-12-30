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
    <div class="head w10 head-img">
        <!-- <a class="logo" href="/">
            <img src="/Public/images/home/logo.jpg" class="logoimg" />
        </a> -->
        <div class="column">
            <a  <?php if($_GET['id']== null ): ?>class="columna columhot" <?php else: ?>class="columna"<?php endif; ?>  href="<?php echo U('Index/index');?>">首页</a>
            <a  <?php if(in_array(($_GET['id']), explode(',',"2,3,4,5,100"))): ?>class="columna columhot" <?php else: ?>class="columna"<?php endif; ?> href="<?php echo U('Article/product',array('id'=>'100'));?>">产品介绍</a>
            <a  <?php if(in_array(($_GET['id']), explode(',',"6"))): ?>class="columna columhot" <?php else: ?>class="columna"<?php endif; ?> href="<?php echo U('Article/activitylist',array('id'=>'6'));?>">使用方法</a>
            <a  <?php if(in_array(($_GET['id']), explode(',',"101"))): ?>class="columna columhot" <?php else: ?>class="columna"<?php endif; ?> href="<?php echo U('Index/drugstore',array('id'=>'101'));?>">G O药店</a>
            <a  <?php if(in_array(($_GET['id']), explode(',',"7"))): ?>class="columna columhot" <?php else: ?>class="columna"<?php endif; ?> href="<?php echo U('Article/huodong',array('id'=>'7'));?>">活动分享</a>
            <a  <?php if(in_array(($_GET['id']), explode(',',"102,8,9,10,11,12,13"))): ?>class="columna columhot" <?php else: ?>class="columna"<?php endif; ?> href="<?php echo U('Article/brand',array('id'=>'102'));?>">品牌文化</a>
            <a  <?php if(in_array(($_GET['id']), explode(',',"103,14,19,20"))): ?>class="columna columhot" <?php else: ?>class="columna"<?php endif; ?> href="<?php echo U('Article/about',array('id'=>'19'));?>">客服中心</a>
        </div>
    </div>
    <style>
        .head {
            padding-top: 8%;
            position: relative;
            height: auto;
            display: inline-block;
            width: 100%;
        }
        .head .column {
            clear: none;
            margin-left: 50%;
            transform: translateX(-50%);
            width: 1000px;
            float: left;
        }
        .head .columna {
            position: relative;
            padding: 10px;
            height: auto;
            background: none;
            color: #52b1ea;
            width: auto;
            box-sizing: border-box;
            margin: 0 auto;
            width: 14%;
            font-weight: 700;
        }
        .head .columhot, .columna {
            color: #8D5028;
            font-weight: 700;
            font-size: 18px;
        }
    </style>

    <!--图片轮播-->
    <div class="flexslider" style="margin-top: -5px;">
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
        #rollss { padding: 0; width: 1000px; margin: 38px auto 0; position: relative; }
            #rollss .warpss { margin: 0 auto; width: 800px; height: 176px; text-align: center; overflow: hidden; position: relative; }
            #rollss ul { margin: 0; padding: 0; list-style: none; position: absolute; left: 0; top: 0; height: 100px; }
            #rollss li { margin: 0; padding: 0; list-style: none; float: left; width: 205px; height: 176px; line-height: 150px; margin-right: 50px; }
            #rollss .circlea { margin: 0; padding: 0; float: left; display: block; width: 205px; height: 176px; margin: 0 auto; }
            #rollss .circleimg { margin: 0; padding: 0; float: left; display: block; position: absolute; width: 180px; height: 100px; }
            #rollss .circlename { margin: 0; padding: 0; float: left; display: block; position: absolute; top: 120px; width: 205px; line-height: 30px; text-align: center; color: #8d5028; font-size: 14px; }
            #rollss {background: url("/Public/images/home/1_03.png") no-repeat;background-size: 1000px 176px}
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
        <div class="link w10 " style=" padding: 25px 0;">
            <div class="youqinglink">友情链接</div>
                <div style="width: 88%;margin-left: 10%;height: 100%;text-align: center;padding-bottom: 30px">
            <?php if(is_array($link)): $i = 0; $__LIST__ = $link;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo ($vo["url"]); ?>"  target="_blank" ><?php echo ($vo["title"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>

        <div class="footmap " style="">
            <div class="footmsg w10 ">
                <div class="footleft footNie">
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
                    <div class="footright footRightStyle">
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
    </div>
    <style>
        body {
            padding-bottom: 120px;
        }
        .youqinglink {
            position: relative;
            width: 100%;
            text-align: center;
            padding: 15px 0;
        }
        .foot .link {
            height: auto;
        }
        .foot .link a {
            width: 20%;
            display: inline-block;
            margin: 0;
            text-align: left
            
        }
        .foot .link a, .foot .link a:hover, .foot .link a:link, .youqinglink {
            color: #5579a1;
            font-weight: 700;
        }
        .footNie {
            margin: 100px 0;
            margin-left: 45%;
            transform: translateX(-50%);
            position: relative;
        }
        .footRightStyle {
            position: absolute;
            right: -200px;
            top: 50%;
            transform: translateY(-50%);
        }
    </style>
</body>
</html>