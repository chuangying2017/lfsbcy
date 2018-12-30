<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title>客服中心</title>
    <link href="/Public/style/mobile/lfss.css" rel="stylesheet" />
</head>
<body>
<div class="frame">
    <div class="head">
        <button class="back" onclick="history.go(-1)"></button>
        <div class="name">罗浮山百草油</div>
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
            <li><a href="<?php echo U('Index/index');?>"><img src="/Public/images/home/首页.png" alt=""></a></li>
            <li><a href="<?php echo U('Article/product',array('id'=>'100'));?>"><img src="/Public/images/home/3.png" alt=""></a></li>
            <li><a href="<?php echo U('Article/activitylist',array('id'=>'6'));?>"><img src="/Public/images/home/4.png" alt=""></a></li>
            <li><a href="<?php echo U('Index/drugstore',array('id'=>'101'));?>"><img src="/Public/images/home/5.png" alt=""></a></li>
            <li><a href="<?php echo U('Article/activitylist',array('id'=>'7'));?>"><img src="/Public/images/home/6.png" alt=""></a></li>
            <li><a href="<?php echo U('Article/brand',array('id'=>'102'));?>"><img src="/Public/images/home/7.png" alt=""></a></li>
            <li><a href="#" onclick="show();return false;" ><img src="/Public/images/home/产品问答_03.png" alt=""></a></li>
        </ul>
    </div>
    <div id="div2_1" class="isshow">
        <ul>
            <li style="border-right:1px solid #e35c56 ;"><a href="<?php echo U('Article/about',array('id'=>'19'));?>" <?php if($_GET['id']== 19 ): ?>class="producthot"<?php endif; ?> >联系我们</a></li>
            <li style="border-right:1px solid #e35c56 ;"><a href="">产品问答</a></li>
            <li><a href="<?php echo U('Article/about',array('id'=>'20'));?>" <?php if($_GET['id']== 20 ): ?>class="producthot"<?php endif; ?> >客户留言</a></li>
        </ul>
    </div>

    <div class="GO_body">
        <div class="GO_body1">
            <div class="act_body">

                <a>
                    <?php if(is_array($map)): foreach($map as $k=>$v): ?><a href="<?php echo U('Article/pages',array('id'=>$v['art_type'],'ids'=>$v['id']));?>" style="width: 87%;
    display: inline-block;"><span style="display: inline-block;padding-right: 2%;">.</span><?php echo ($v["art_title"]); ?></a>
                        <span class="act_span">+</span>
                        <div style="height: 1px;width: 90%;background:  #eae5d5;margin-left: 5%"></div><?php endforeach; endif; ?>
                </a>
            </div>
 <div class="page">
              <?php echo ($page); ?>
            </div>
        </div>

    </div>
</div>

<script src="/Public/js/home/jquery-1.8.3.min.js"></script>
<script>
    function show() {
        if (document.getElementById('div2_1').style.display == 'none') {
            document.getElementById('div2_1').style.display = 'block';
            $("#div2_1").removeClass("isShow");
        }
        else
        {
            document.getElementById('div2_1').style.display = 'none';
            $("#div2_1").attr("class","isShow");

        }

    }
</script>
</body>
</html>