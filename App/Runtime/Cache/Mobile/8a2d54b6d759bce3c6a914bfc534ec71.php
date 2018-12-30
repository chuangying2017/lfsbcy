<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title>罗浮山百草油</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo ($config["title"]); ?></title>
    <script src="/Public/js/home/jquery-1.8.3.min.js"></script>
    <link href="/Public/style/mobile/lfss.css" rel="stylesheet" />

</head>
<body>
<div class="frame">

    <div style="text-align: center;padding-top: 20px" class="header-Img">
        <img src="/Public/images/home/1.png" alt="" style="width: 40%">
    </div>
    <div class="jies">
        <ul>
            <li><a href="<?php echo U('Index/index');?>"><img src="/Public/images/home/2.png" alt=""></a></li>
            <li><a href="<?php echo U('Article/product',array('id'=>'100'));?>"><img src="/Public/images/home/3.png" alt=""></a></li>
            <li><a href="<?php echo U('Article/activitylist',array('id'=>'6'));?>"><img src="/Public/images/home/4.png" alt=""></a></li>
            <li><a href="<?php echo U('Index/drugstore',array('id'=>'101'));?>"><img src="/Public/images/home/5.png" alt=""></a></li>
            <li><a href="<?php echo U('Article/activitylist',array('id'=>'7'));?>"><img src="/Public/images/home/6.png" alt=""></a></li>
            <li><a href="<?php echo U('Article/brand',array('id'=>'102'));?>"><img src="/Public/images/home/7.png" alt=""></a></li>
            <li><a href="<?php echo U('Article/pagess',array('id'=>'103'));?>"><img src="/Public/images/home/1.8.png" alt=""></a></li>
        </ul>
    </div>
    <style>
            #div1_1 {
                position: relative;
                width: 90%;
                margin-left: 5%;
                margin: 15px 5% 0 5%;
            }
            .border-last:last-child {
                display: none;
            }
            .ul-flex {
                display: flex;
            }
            .ul-flex > li {
                flex: 1;
                /* writing-mode:tb-rl; */
                text-align: center;
            }
            #div1_1 ul li {
                padding: 0;
            }
            #div1_1 ul li a {
                position: relative;
                width: 100%;
                display: inline-block;
                padding: 10px 0;
            }
            #div1_1 ul {
                padding: 0;
            }
            .GO_body {
                margin-top:-50px; 
                box-sizing: border-box;
            }
            #div1_1 ul li .columnas::after{
                position: absolute;
                right: 0;
                content: '';
                width: 2px;
                top: 30%;
                background-color: #f8f8;
                bottom: 20%;
            }
        </style>
    <div id="div3">
        <ul style="background-image: url('/Public/images/home/山_03.png');width: 90%;margin-left: -6%">
            <?php if(is_array($map1)): foreach($map1 as $k=>$v): ?><li style="border-right:1px solid #e35c56;"><a href="<?php echo U('Article/pages',array('id'=>$v['art_type'],'ids'=>$v['id']));?>"><?php echo ($v["art_title"]); ?></a></li><?php endforeach; endif; ?>
        </ul>
    </div>
    <div class="shang"></div>
    <div class="GO_body" style="min-height: 500px">
        <div class="GO_body1" style="overflow-y: scroll;min-height: 500px">
            
                <div style="padding:0% 5% 0% 5%;max-height: 500px" >
                    <div class="pages_img">
                        <div class="pages_div"><?php echo ($relust["content"]); ?></div>
                    </div>
                </div>
        </div>
    </div>
    <div class="xia"></div>
</div>


<script>
$(function(){
            $(".pages_img p img ").attr("style","");
        });
$(function(){
            $(".pages_div p img ").attr("style","");
        });
    function show() {
        if (document.getElementById('div3').style.display == 'block') {
            document.getElementById('div3').style.display = 'none';
            $("#div3").removeClass("isShow");
        }
        else
        {
            document.getElementById('div3').style.display = 'block'
            $("#div3").attr("class","isShow");

        }

    }
</script>
</body>
</html>