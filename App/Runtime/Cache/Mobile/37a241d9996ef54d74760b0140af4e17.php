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

    <div style="text-align: center;padding-top: 20px"  class="header-Img">
        <img src="/Public/images/home/1.png" alt="" style="width: 40%">
    </div>
    <div class="jies">
        <?php if($_GET['id']== "7" ): ?><ul>
            <li><a href="<?php echo U('Index/index');?>"><img src="/Public/images/home/首页.png" alt=""></a></li>
            <li><a href="<?php echo U('Article/product',array('id'=>'100'));?>"><img src="/Public/images/home/3.png" alt=""></a></li>
            <li><a href="<?php echo U('Article/activitylist',array('id'=>'6'));?>"><img src="/Public/images/home/4.png" alt=""></a></li>
            <li><a href="<?php echo U('Index/drugstore',array('id'=>'101'));?>"><img src="/Public/images/home/5.png" alt=""></a></li>
            <li><a href="<?php echo U('Article/activitylist',array('id'=>'7'));?>"><img src="/Public/images/home/活动分享_05.png" alt=""></a></li>
            <li><a href="<?php echo U('Article/brand',array('id'=>'102'));?>"><img src="/Public/images/home/7.png" alt=""></a></li>
            <li><a href="<?php echo U('Article/pagess',array('id'=>'103'));?>"><img src="/Public/images/home/1.8.png" alt=""></a></li>
        </ul>
            <?php else: ?>
            <ul>
                <li><a href="<?php echo U('Index/index');?>"><img src="/Public/images/home/首页.png" alt=""></a></li>
                <li><a href="<?php echo U('Article/product',array('id'=>'100'));?>"><img src="/Public/images/home/3.png" alt=""></a></li>
                <li><a href="<?php echo U('Article/activitylist',array('id'=>'6'));?>"><img src="/Public/images/home/使用方法_03.png" alt=""></a></li>
                <li><a href="<?php echo U('Index/drugstore',array('id'=>'101'));?>"><img src="/Public/images/home/5.png" alt=""></a></li>
                <li><a href="<?php echo U('Article/activitylist',array('id'=>'7'));?>"><img src="/Public/images/home/6.png" alt=""></a></li>
                <li><a href="<?php echo U('Article/brand',array('id'=>'102'));?>"><img src="/Public/images/home/7.png" alt=""></a></li>
                <li><a href="<?php echo U('Article/pagess',array('id'=>'103'));?>"><img src="/Public/images/home/1.8.png" alt=""></a></li>
            </ul><?php endif; ?>
    </div>
    <div id="div3">
        <ul style="width: 90%;margin-left: -6%;background:#da251d;">
            <?php if(is_array($data)): foreach($data as $k=>$v): ?><li><a href="<?php echo U('Article/Activity',array('id'=>$v['art_type'],ids=>$v['id']));?>"><?php echo ($v["name"]); ?></a></li>
                <div style="display: inline-block;width: 1px;background: #e35c56;height: 60px"></div><?php endforeach; endif; ?>
        </ul>
    </div>
    <div class="shang"></div>
    <div class="productright" style="margin-left:5%;margin-top: -50px;">
        <div class="productrighttwo">
            <div style="padding:0% 5% 0% 5%;max-height:500px" >
                <div class="pages_img">

                    <div class="pages_div"><?php echo ($relust["art_content"]); ?></div>
                </div>
            </div>
        </div>
    </div>
    <div class="xia" style="float: left;"></div>
</div>

<script src="/Public/js/home/jquery-1.8.3.min.js"></script>
<script>
    $(function(){
        $(".jies li")
    });
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
        else{
            document.getElementById('div3').style.display = 'block'
            $("#div3").attr("class","isShow");
        }
    }
    $(function(){
        $(".pages_img p img ").attr("style","");
    });
</script>
</body>
</html>