<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title>罗浮山百草油</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="<?php echo ($config["keywords"]); ?>"/>
    <meta name="description" content="<?php echo ($config["description"]); ?>"/>
    <link href="/Public/style/mobile/lfss.css" rel="stylesheet" />
    <link href="/Public/style/mobile/flexslider.css" rel="stylesheet" />
    <script src="/Public/js/home/jquery-1.8.3.min.js"></script>
    <script src="/Public/js/home/jquery.flexslider-min.js"></script>
    <script type="text/javascript">
        window.onload = $(function () {
            $(".flexslider").flexslider({
                slideshowSpeed: 4000, //展示时间间隔ms
                animationSpeed: 400, //滚动时间ms
                touch: true //是否支持触屏滑动
            });

          /*  var oDiv = document.getElementById("rollss");
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
            };*/
        });
    </script>
</head>
<body>
<div id="rollss rollss">
    <div class="circlename" style="padding: 10px 5px;">
        <a href="<?php echo U('Index/index');?>" class="link-active">首页</a>
        <!-- <a href="<?php echo U('Article/product',array('id'=>'100'));?>" class="aNone">产品展销</a> -->
        <a href="<?php echo U('Article/product',array('id'=>'100'));?>" class="aNone">产品介绍</a>
        <a href="<?php echo U('Article/activitylist',array('id'=>'6'));?>" class="aNone">功效用法</a>
        <a href="<?php echo U('Article/brand',array('id'=>'102'));?>" class="aNone">品牌文化</a>
        <a href="<?php echo U('Index/drugstore',array('id'=>'101'));?>" class="aNone">GO药店</a>
    </div>
    <style>

        a{ 
text-decoration:none; }
    .circlename > .aNone {
        color: #0f8ac6;
        font-size: 14px;
    }
    .circlename > .aNone:hover {
        background: none;
    }
    .link-active {
            font-weight: 700;
            font-size: 16px;
            color: #2a8434
        }
        body {
            background: #fff
        }
    </style>
</div>
<div class="frame">
    <!-- <div class="head">
        <button class="back" onclick="history.go(-1)"></button>
        <div class="name">罗浮山百草油</div>
        <a class="list" onclick="shows();return false;"></a>
        <div class="jiathis_style_32x32" id="share" style="display: none;">
            <a class="jiathis_button_qzone"></a>
            <a class="jiathis_button_tsina"></a>
            <a class="jiathis_button_tqq"></a>
            <a class="jiathis_button_weixin"></a>
            <a class="jiathis_button_renren"></a>
            <a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank"></a>
        </div>
        <script type="text/javascript" src="http://v3.jiathis.com/code/jia.js" charset="utf-8"></script>
    </div> -->

    <!-- <div class="clearH45"></div> -->

    <div style="text-align: center;padding: 0px 0 10px 0;font-size: 23px;color: #0f8ac6">
        <strong>罗浮山百草油</strong>

    </div>

    <div class="flexslider">
        <ul class="slides">
            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="flex-active-slide" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;" ><a ><img  src="/<?php echo ($vo["image_path"]); ?>" /></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
    <!-- 轮播end -->
<style>
    body {
        padding: 0;
    }
        #rollss, .rollsss { margin: 0; padding: 0; width: 100%; position: relative; }
        #rollss .warpss, .rollsss .warpss { margin: 0; padding: 0; width: 100%; height: 100px; text-align: center; overflow: hidden; position: relative; }
        #rollss ul, .rollsss ul { margin: 20px 0 0 0; padding: 0; list-style: none; position: absolute; left: 0; top: 0;width: 100%; height:60%; }
        #rollss li, .rollsss li { margin: 0; padding: 0; list-style: none; float: left; width:23%; height:50% ;line-height: 150px; margin-right: 2%; }
        #rollss .circlea, .rollsss .circlea { margin: 0; padding: 0; float: left; display: block; width: 82px; height:50%; margin: 0 auto; }
        #rollss .circleimg, .rollsss .circleimg { margin: 0; padding: 0; float: left; display: block; position: absolute; width:23%; height: 100%; }
        #rollss .circlename, .rollsss .circlename { margin: 0; padding: 0; float: left; display: block; position: absolute; top: 65%; width: 100%; line-height: 30px; text-align: center; color: #8d5028; font-size: 14px; }
        #rollss .circlename a, .rollsss .circlename a{width: 24%;display: inline-block;color: #8D5028}
    </style>


    <!-- <div class="rollsss"> -->
        <!-- <div class="warpss">
            <ul>
                <?php if(is_array($printlist)): $i = 0; $__LIST__ = $printlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                        <a class="circlea" href="<?php echo U('Article/index_page',array('id'=>'','ids'=>$vo['id']));?>">
                            <img src="/<?php echo ($vo["url_img"]); ?>" class="circleimg" />
                            <p><?php echo ($vo["title"]); ?></p>
                        </a>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div> -->
        <!-- <div class="circlename">
            <a href="<?php echo U('Article/product',array('id'=>'100'));?>">产品展销</a>
           <a href="<?php echo U('Article/activitylist',array('id'=>'6'));?>">功效用法</a>
            <a href="<?php echo U('Article/brand',array('id'=>'102'));?>">品牌文化</a>
        <a href="<?php echo U('Index/drugstore',array('id'=>'101'));?>">GO药店</a>
        </div> -->
    <!-- </div> -->
</div>
<!-- <div>
    <div style="display: inline-block;width: 100%;background: #d7cfbc;height: 1px">
        <div>
            <?php if(is_array($map)): foreach($map as $key=>$v): ?><a href="<?php echo U('Article/pages',array('id'=>$v['art_type'],ids=>$v['id']));?>" >
                    <div style="width: 100%;height: 80px;margin:3% 0%;border-bottom: 1px solid #d7cfbc">
                        <div style="float: left;width: 20%;height: 100%;padding-left: 2%"><img src="/<?php echo ($v['art_img']); ?>" alt="" style="width: 100%;height: 90%;"></div>
                        <div style="float: left;width: 75%;height: 100%; color:#8D5028;padding-left: 2%">
                            <p style="font-size: 17px;padding-bottom:2%"> <span><strong><?php echo ($v["art_title"]); ?></strong></span></p>
                            <p style="font-size: 13px;"> <span><?php echo ($v["art_info"]); ?></span></p>
                        </div>
                    </div> </a><?php endforeach; endif; ?>
        </div>
    </div>
</div> -->

</body>
</html>

<script>
    function shows() {
        if(document.getElementById('share').style.display == 'none'){
            $("#share").attr("style","block");
        }else
        {
            document.getElementById('share').style.display = 'none'
        }
    }
</script>