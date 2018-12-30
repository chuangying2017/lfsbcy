<?php if (!defined('THINK_PATH')) exit();?>    <!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title>品牌文化</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo ($config["title"]); ?></title>
    <script src="/Public/js/home/jquery-1.8.3.min.js"></script>
    <link href="/Public/style/mobile/lfss.css" rel="stylesheet" />

</head>
<body>
<div class="frame">

    <div class="header-Img">
        <img src="/Public/images/home/1.png" alt="" style="width: 40%">
    </div>
    <div class="jies">
        <ul>
            <li><a href="<?php echo U('Index/index');?>"><img src="/Public/images/home/首页.png" alt=""></a></li>
            <li><a href="<?php echo U('Article/product',array('id'=>'100'));?>"><img src="/Public/images/home/3.png" alt=""></a></li>
            <li><a href="<?php echo U('Article/activitylist',array('id'=>'6'));?>"><img src="/Public/images/home/4.png" alt=""></a></li>
            <li><a href="<?php echo U('Index/drugstore',array('id'=>'101'));?>"><img src="/Public/images/home/5.png" alt=""></a></li>
            <li><a href="<?php echo U('Article/activitylist',array('id'=>'7'));?>"><img src="/Public/images/home/6.png" alt=""></a></li>
            <li><a href="#" onclick="show();return false;" ><img src="/Public/images/home/源自名山_03.png" alt=""></a></li>
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
                margin-top:0; 
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
    <div id="div1_1">
         <ul style="width: 100%;" class="ul-flex">
            <?php if(is_array($data)): foreach($data as $k=>$v): ?><li><a href="<?php echo U('Article/pages',array('id'=>$v['art_type'],ids=>$v['id']));?>" <?php if($k < count($data) -1 ): ?>class="columnas" <?php else: ?>class="columna"<?php endif; ?>><?php echo ($v["name"]); ?></a></li>
                <!-- <div style="display: inline-block;width: 1px;background: #e35c56;height: 60px"></div> --><?php endforeach; endif; ?>

        </ul>
    </div>
    <div class="shang"></div>
    <div class="GO_body" style="margin-top:-50px;">
        <div class="GO_body1">
            <div class="act_body">
                <a>
                    <?php if(is_array($list)): foreach($list as $k=>$v): ?><a href="<?php echo U('Article/pages',array('id'=>$v['art_type'],ids=>$v['id']));?>"  style="width: 87%;
    display: inline-block;"><span style="display: inline-block;padding-right: 2%;">.</span><?php echo ($v["art_title"]); ?></a>
                        <span class="act_span">+</span>
                        <div style="height: 1px;width: 90%;background:  #eae5d5;margin-left: 5%"></div><?php endforeach; endif; ?>
                </a>
            </div>

        </div>
    </div>
    <div class="xia"></div>
<script>
 $(function(){
        $(".brand_img p img").addClass("brand_img1");
    });
    function show() {
        if (document.getElementById('div3_1').style.display == 'none') {
            document.getElementById('div3_1').style.display = 'block';
            $("#div3_1").removeClass("isShow");
        }
        else
        {
            document.getElementById('div3_1').style.display = 'none'
            $("#div3_1").attr("class","isShow");

        }

    }
</script>
</body>
</html>