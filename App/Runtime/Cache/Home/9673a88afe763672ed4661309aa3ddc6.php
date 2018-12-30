<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>罗浮山百草油</title>
     <meta name="keywords" content="<?php echo ($config["keywords"]); ?>"/>
     <meta name="description" content="<?php echo ($config["description"]); ?>"/>
    <link href="/Public/style/home/BCYCSSs.css" rel="stylesheet" />
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
                color: #2a8434;
                font-weight: 700;
                font-size: 18px;
            }
        </style>
    <div class="bodydiv w10">
        <ul class="productleft">
            <li class="first" ></li>
            <li><a href="<?php echo U('Article/about',array('id'=>'19'));?>" <?php if($_GET['id']== 19 ): ?>class="producthot"<?php endif; ?> >联系我们</a></li>
            <li><a href="<?php echo U('Article/about',array('id'=>'14'));?>" <?php if($_GET['id']== 14 ): ?>class="producthot"<?php endif; ?> >产品问答</a></li>
            <li><a href="<?php echo U('Article/about',array('id'=>'20'));?>" <?php if($_GET['id']== 20 ): ?>class="producthot"<?php endif; ?> >客户留言</a></li>
            <li class="last"></li>
        </ul>
        <div class="productright">
            <div class="callcenter" style="    overflow-y: hidden;">

                <?php if($id == 19 ): echo ($data); ?>
                    <div class="storemap"  style="width: 570px; height: 434px;margin:0px 0px 0px 50px" id="allmap"></div>
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
                     <form action="/index.php/Article/about/id/19.html"  method="post" enctype="multipart/form-data" class="SubmiForm" id="form-article-add"  >
                    <div style='height:40px;margin-top:30px;'>
                        <div style="width:100px;float: left;height:30px;line-height:30px;text-align: center;" > 主题： </div>
                        <div style='float: left;'>
                            <input type="text"  style='height:10px;line-height: 10px;padding:10px;width:562px;' name="subject" datatype="*" nullmsg="主题不能为空">
                        </div>
                    </div>
                    <div >
                        <div style="width:100px;float: left;height:30px;line-height:30px;text-align: center;" >  内容：</div>
                        <div  style="width:600px;float: left;">
                        <textArea style="height:300px;width:564px;padding:10px;" datatype="*" name='content' nullmsg="内容不能为空"></textarea>
                        </div>
                    </div>
                    <div  style='text-align: center;'>
                        <button type="submit" style="height:35px;width:80px;line-height: 35px;text-align: center;margin-top:10px;font-size: 14px; background:#f60a00;border:0px;color: #fff;"> 提交</button>
                    </div>
                         </form><?php endif; ?>
            </div>
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
<script type="text/javascript" src="/Public/H-ui/lib/Validform/5.3.2/Validform_v5.3.2_min.js"></script>
<script type="text/javascript" src="/Public/js/admin/jquery.form.js"  ></script>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=3E298706f055a5e23f063a1413f21565"></script>
<script type="text/javascript">
var map = new BMap.Map("allmap");
    var point = new BMap.Point(114.408775,23.0753288);
    map.centerAndZoom(point,12);
	map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放
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