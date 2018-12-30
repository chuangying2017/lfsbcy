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
    <div class="head">
        <button class="back" onclick="history.go(-1)"></button>
        <div class="name" style="text-align: center;font-size: 15px;">罗浮山百草油</div>
        <a class="list" onclick="shows();return false;"></a>
<!-- JiaThis Button BEGIN -->
<div class="jiathis_style_32x32" id="share" style="display: none;">
    <a class="jiathis_button_qzone"></a>
    <a class="jiathis_button_tsina"></a>
    <a class="jiathis_button_tqq"></a>
    <a class="jiathis_button_weixin"></a>
    <a class="jiathis_button_renren"></a>
    <a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank"></a>
</div>
<script type="text/javascript" src="http://v3.jiathis.com/code/jia.js" charset="utf-8"></script>
<!-- JiaThis Button END -->

<script src="/Public/js/home/jquery-1.8.3.min.js"></script>

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

    </div>

    <div class="clearH45"></div>

    <div style="text-align: center;padding-top: 20px">
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
    <div id="div3">
        <ul style="background-image: url('/Public/images/home/山_03.png');width: 90%;margin-left: -6%">
            <?php if(is_array($map1)): foreach($map1 as $k=>$v): ?><li style="border-right:1px solid #e35c56;"><a href="<?php echo U('Article/pages',array('id'=>$v['art_type'],'ids'=>$v['id']));?>"><?php echo ($v["art_title"]); ?></a></li><?php endforeach; endif; ?>
        </ul>
    </div>
    <div class="GO_body" style="min-height: 500px">
        <div class="GO_body1" style="overflow-y: scroll;min-height: 500px">
            
                <div style="padding:0% 5% 0% 5%;max-height: 500px" >
                    <div class="pages_img">
                        <div class="pages_div"><?php echo ($relust["content"]); ?></div>
                    </div>
                </div>
        </div>
    </div>
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