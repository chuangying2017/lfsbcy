<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title><?php echo ($arr["name"]); ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo ($config["title"]); ?></title>
    <meta name="keywords" content="<?php echo ($config["keywords"]); ?>"/>
    <meta name="description" content="<?php echo ($config["description"]); ?>"/>
    <link href="/Public/style/mobile/lfss.css" rel="stylesheet" />
    <script type="text/javascript">
    </script>
</head>
<body>
        <div class="frame">
                <!-- <div id="rollss rollss">
                    <div class="circlename" style="padding: 10px 5px;">
                        <a href="<?php echo U('Index/index');?>" class="aNone">首页</a>
                        <a href="<?php echo U('Article/product',array('id'=>'100'));?>" class="link-active">产品介绍</a>
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
                            color: #8D5028
                        }
                    </style>
                </div> -->
                <div class="header-Img">
                    <img src="/Public/images/home/1.png" alt="" style="width: 40%">
                </div>
                <div class="jies">
                    <ul>
                        <li><a href="<?php echo U('Index/index');?>"><img src="/Public/images/home/首页.png" alt=""></a></li>
                        <li><a href="javascript:;" ><img src="/Public/images/home/产品介绍-功能主治_03.png" alt=""></a></li>
                        <li><a href="<?php echo U('Article/activitylist',array('id'=>'6'));?>"><img src="/Public/images/home/4.png" alt=""></a></li>
                        <li><a href="<?php echo U('Index/drugstore',array('id'=>'101'));?>"><img src="/Public/images/home/5.png" alt=""></a></li>
                        <li><a href="<?php echo U('Article/activitylist',array('id'=>'7'));?>"><img src="/Public/images/home/6.png" alt=""></a></li>
                        <li><a href="<?php echo U('Article/brand',array('id'=>'102'));?>" ><img src="/Public/images/home/7.png" alt=""></a></li>
                        <li><a href="<?php echo U('Article/pagess',array('id'=>'103'));?>"><img src="/Public/images/home/1.8.png" alt=""></a></li>
                    </ul>
                </div>
                <div id="div1_1">
                    <ul style="width: 100%;" class="ul-flex">
                        <?php if(is_array($data)): foreach($data as $k=>$v): ?><li><a href="<?php echo U('Article/products',array('id'=>$v['art_type'],'ids'=>$v['id']));?>" <?php if($k < count($data) -1 ): ?>class="columnas" <?php else: ?>class="columna"<?php endif; ?> ><?php echo ($v["name"]); ?></a></li>
                         <!-- <div style="display: inline-block;width: 1px;background: #e35c56;height: 60px" class="border-last" ></div> --><?php endforeach; endif; ?>
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
                    .productright {
            width: 90%;
            margin-left: 5%;
            box-sizing: border-box;
            margin-top: -50px;
        }
                </style>
    <div>
            <div class="shang"></div>
        <div class="productright">
            <div class="productrighttwo" style="overflow-y: hidden;  min-height: 612px;height:auto;">
                <!--<b>【百草油功能】：祛风解毒，消肿止痛。用于感冒头痛，虫蚊咬伤，无名肿毒，舟车眩晕。</b>-->
                 <div class="act_body">
                    <a>
                        <?php if(is_array($data1)): foreach($data1 as $k=>$v): ?><a href="<?php echo U('Article/jieshao',array('id'=>$v['art_type'],'ids'=>$v['id']));?>" style="width: 87%;
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
        <div class="xia" style="float: left;"></div>
    </div>
</div>

<script src="/Public/js/home/jquery-1.8.3.min.js"></script>
<script>
    function show() {
        if (document.getElementById('div1').style.display == 'block') {
            document.getElementById('div1').style.display = 'none';
            $("#div1").removeClass("isShow");
        }
        else
        {
            document.getElementById('div1').style.display = 'block'
            $("#div1").attr("class","isShow");

        }

    }
</script>
</body>
</html>