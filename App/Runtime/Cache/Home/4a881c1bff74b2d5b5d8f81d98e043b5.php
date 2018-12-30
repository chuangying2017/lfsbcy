<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>罗浮山百草油</title>
    <meta name="keywords" content="<?php echo ($config["keywords"]); ?>"/>
    <meta name="description" content="<?php echo ($config["description"]); ?>"/>
    <link href="/Public/style/home/BCYCSSs.css" rel="stylesheet" />
</head>
<body>
  <div class="head w10 head-img">
        <!-- <a class="logo" href="/">
            <img src="/Public/images/home/logo.jpg" class="logoimg" />
        </a> -->
        <div class="column">
            <a  <?php if($_GET['id']== null ): ?>class="columna columhot" <?php else: ?>class="columna"<?php endif; ?> href="<?php echo U('Index/index');?>">首页</a>
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
<div class="bodydiv w10">

    <div class="productright" style="width: 980px">
        <?php if($_GET['id']== "40" ): else: ?>
            <div class="callcenter" style="min-height: 680px; overflow-y: hidden;height: auto;width: 918px">
                <ul class="sharingul">
                    <?php if(is_array($map)): foreach($map as $k=>$v): ?><li><a href="<?php echo U('Article/huodong_chanp',array('id'=>$v['art_type'],'ids'=>$v['id']));?>" ><?php echo ($v["art_title"]); ?></a></li><?php endforeach; endif; ?>
                </ul>
                <div class="page">
                    <?php echo ($page); ?>
                </div>
            </div><?php endif; ?>

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