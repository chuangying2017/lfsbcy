<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title>罗浮山百草油</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo ($config["title"]); ?></title>
    <meta name="keywords" content="<?php echo ($config["keywords"]); ?>"/>
    <meta name="description" content="<?php echo ($config["description"]); ?>"/>
    <link href="/Public/style/mobile/lfss.css" rel="stylesheet" />
    <link href="/Public/style/mobile/flexslider.css" rel="stylesheet" />
    <script src="/Public/js/home/jquery-1.8.3.min.js"></script>
    <script src="/Public/js/home/jquery.flexslider-min.js"></script>
    <style  type='text/css'>
        #Validform_msg {
            font-size:14px;
            width:300px;
            -webkit-box-shadow:2px 2px 3px #aaa;
            -moz-box-shadow:2px 2px 3px #aaa;
            background:#fff;
            position:absolute;
            top:0;
            right:50px;
            z-index:99999;
            display:none;
            filter:progid:DXImageTransform.Microsoft.Shadow(Strength=3,Direction=135,Color='#999999');
            box-shadow:2px 2px 0 rgba(0,0,0,0.1)
        }
        #Validform_msg .iframe {
            position:absolute;
            left:0;
            top:-1px;
            z-index:-1
        }
        #Validform_msg .Validform_title {
            font-size:20px;
            padding:10px;
            text-align:left;
            color:#fff;
            position:relative;
            background-color:#fcc900
        }
        #Validform_msg a.Validform_close:link,#Validform_msg a.Validform_close:visited {
            position:absolute;
            right:8px;
            top:6px;
            color:#fff;
            text-decoration:none;
            font-family:Verdana
        }
        #Validform_msg a.Validform_close:hover {
            color:#fff
        }
        #Validform_msg .Validform_info {
            padding:10px;
            border:1px solid #bbb;
            border-top:0;
            text-align:left
        }
    </style>

    <script src="/Public/js/home/jquery-1.8.3.min.js" type="text/javascript"></script>
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
    <div id="div2" class="isshow">
        <ul>
            <li><a href="<?php echo U('Article/about',array('id'=>'19'));?>" <?php if($_GET['id']== 19 ): ?>class="producthot"<?php endif; ?> >联系我们</a></li>
            <li style="border-right:1px solid #e35c56 ;"><a href="<?php echo U('Article/pagess',array('id'=>'103'));?>">产品问答</a></li>
            <li style="border-right:1px solid #e35c56 ;"><a href="<?php echo U('Article/about',array('id'=>'20'));?>" <?php if($_GET['id']== 20 ): ?>class="producthot"<?php endif; ?> >客户留言</a></li>
        </ul>
    </div>
    <div class="bodydiv w10">
        <ul class="productleft">

        <div class="productright1">
            <div class="callcenter" style="overflow-y: hidden;">
                <?php if($id == 19 ): echo ($data); ?>
                    <div class="storemap"  style="width: 100%; height: 334px;" id="allmap">

                        <?php elseif($id == 14): ?>
                        <ul class="sharingul">
                            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                                    <a href="<?php echo U('Article/pagess',array('id'=>$vo['art_type'],'ids'=>$vo['id']));?>" ><?php echo ($vo["art_title"]); ?></a>
                                    <span>></span>
                                </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                        <div class="page">
                            <?php echo ($page); ?>

                        </div>
                        <?php else: ?>
                        <form action="/index.php/Mobile/Article/about/id/19.html"  method="post" enctype="multipart/form-data" class="SubmiForm" id="form-article-add"  >
                            <div style='height:40px;margin-top:30px;'>
                                <div style="width:20%;float: left;height:30px;line-height:30px;text-align: center;" > 主题： </div>
                                <div style='float: left;'>
                                    <input type="text"  style='height:10px;line-height: 10px;padding:10px;width:100%;' name="subject" datatype="*" nullmsg="主题不能为空">
                                </div>
                            </div>
                            <div >
                                <div style="width:20%;float: left;height:30px;line-height:30px;text-align: center;" >  内容：</div>
                                <div  style="width:94%;float: left;">
                                    <textArea style="height:300px;width:100%;padding:10px;" datatype="*" name='content' nullmsg="内容不能为空"></textarea>
                                </div>
                            </div>
                            <div  style='text-align: center;'>
                                <button type="submit" style="height:35px;width:80px;line-height: 35px;text-align: center;margin-top:10px;font-size: 14px; background:#f60a00;border:0px;color: #fff;"> 提交</button>
                            </div>
                        </form><?php endif; ?>

            </div>

        </div>
        </ul>
    </div>
</div>
<script>
    function show() {
        if (document.getElementById('div2').style.display == 'block') {
            document.getElementById('div2').style.display = 'none';
            $("#div2").removeClass("isShow");
        }
        else
        {
            document.getElementById('div2').style.display = 'block';
            $("#div2").attr("class","isShow");

        }

    }
</script>
</body>
</html>
<script type="text/javascript" src="/Public/H-ui/lib/Validform/5.3.2/Validform_v5.3.2_min.js"></script>
<script type="text/javascript" src="/Public/js/admin/jquery.form.js"  ></script>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=3E298706f055a5e23f063a1413f21565"></script>
<script type="text/javascript">

    // 百度地图API功能
    var map = new BMap.Map("allmap");
    var point = new BMap.Point(114.408775,23.0753288);
    map.centerAndZoom(point,12);
    // 创建地址解析器实例
    var myGeo = new BMap.Geocoder();
    // 将地址解析结果显示在地图上,并调整地图视野
    myGeo.getPoint("罗浮山国药", function(point){
        if (point) {
            map.centerAndZoom(point, 12);
            map.addOverlay(new BMap.Marker(point));


        }else{
            alert("您选择地址没有解析到结果!");
        }
    }, "惠州市");




    $(".SubmiForm").Validform({
        callback:function(form){
            $("#form-article-add").ajaxSubmit({
                //dataType:'script',
                type:'post',
                url: "/Home/Article/about",
                success: function(data){
                    data= JSON.parse(data);
                    if(data.status==1){
                        alert(data.msg);
                        location.reload();
                    }else {
                        alert(data.msg);
                    }

                },
                resetForm: false,
                clearForm: false
            });

            return false;
        },
        tiptype:1,

    });

</script>