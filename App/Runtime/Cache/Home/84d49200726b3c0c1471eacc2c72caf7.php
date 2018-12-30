<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>罗浮山百草油</title>
    <meta name="keywords" content="<?php echo ($config["keywords"]); ?>" />
    <meta name="description" content="<?php echo ($config["description"]); ?>" />
    <link href="/Public/style/home/BCYCSSs.css" rel="stylesheet" />
    <!-- <style type="text/css">
        body,
        html,
        #l-map {
            width: 100%;
            height: 100%;
            margin: 0;
        }
    </style> -->
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=3E298706f055a5e23f063a1413f21565"></script>

</head>
<style>
    /* body {
        background-position: 0
    } */
</style>

<body style="">
        <div class="head w10 head-img">
        <!-- <a class="logo" href="/">
            <img src="/Public/images/home/logo.jpg" class="logoimg" />
        </a> -->
        <div class="column">
            <a  <?php if($_GET['id']== null ): ?>class="columna columhot" <?php else: ?>class="columna"<?php endif; ?>  href="<?php echo U('Index/index');?>">首页</a>
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
            color: #2a8434 ;
            font-weight: 700;
            font-size: 18px;
        }
    </style>
    <style>
        .pore {
            position: relative;
            width: 100%;
            background-image: url('/Public/images/home/bcg.jpg');
            background-size: 100% 100%;
            margin-top: -5px;
        }
    </style>
    <div class="pore">
            <div class="gopharmacy">
                <div class="gopharmacytwo">
                    <div class="findstorediv">
                        <div class="findstore">查找门店</div>
                        <div class="storeaddressdiv">
                            <div id="region_container" style="width:150px;float:left;">
                                <input class="text" type="text" id="address" name="address" style="margin-bottom:5px;height:28px;line-height:28px;width:100%"
                                />
                            </div>
                            <a class="search" onclick="search_map();">搜索</a>
                        </div>
                    </div>
                    <div class="neareststore">
                        <div class="findstore">最近门店</div>
                        <div class="storediv" id="nearAddress">
                            <div class="storeaname" id="name">百姓大药房</div>
                            <div class="storeadd" id="info"></div>
                            <div class="storeadd" id="phone"></div>
                        </div>
                    </div>
                    <div class="storemap" style="width: 570px; height: 434px;" id="allmap">
                        <!--<img src="/Public/images/home/gopharmacy3.jpg" class="map" />-->
                    </div>
                    <ul class="addressmore" id="listLi">
                        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                                <div class="one">
                                    <?php echo ($vo["name"]); ?>
                                </div>
                                <div class="two">
                                    <?php echo ($vo["address"]); ?>
                                </div>
                                <div class="two">
                                    <?php echo ($vo["tel"]); ?>
                                </div>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    <input type="hidden" id="lng" value="114.331398" />
    <input type="hidden" id="lat" value="23.897445" />
    <input type="hidden" id="lng1" value="" />
    <input type="hidden" id="lat1" value="" />
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
<script src="/Public/js/home/jquery-1.8.3.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/Public/H-ui/lib/address/addre_area.js"></script>
<script type="text/javascript" src="/Public/H-ui/lib/address/address-select.min.js"></script>
<script type="text/javascript">
    var lng = $("#lng").val();
    var lat = $("#lat").val();
    var map = new BMap.Map("allmap");
    var point = new BMap.Point(lng, lat);
    $(function () {
        // 百度地图API功能
        map.centerAndZoom(point, 15);
        map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放

        var geolocation = new BMap.Geolocation();
        geolocation.getCurrentPosition(function (r) {
            if (this.getStatus() == BMAP_STATUS_SUCCESS) {
                $("#lng").val(r.point.lng);
                $("#lat").val(r.point.lat);
                var point = new BMap.Point(r.point.lng, r.point.lat);
                map.centerAndZoom(point, 18);
                var options = {
                    onSearchComplete: function (results) {
                        // 判断状态是否正确
                        //if (local.getStatus() == BMAP_STATUS_SUCCESS) {
                        var htmlStr = "";
                        for (var i = 0; i < results.getCurrentNumPois(); i++) {
                            var title = results.getPoi(i).title;
                            var address = results.getPoi(i).address;
                            var phoneNumber = results.getPoi(i).phoneNumber;

                            if (typeof (phoneNumber) == "undefined") {
                                phoneNumber = '';
                            } else {
                                phoneNumber = '<div class="two">' + phoneNumber + '</div>';
                            }
                            htmlStr += '<li><div class="one">' + title + '</div><div class="two">' + address + '</div>' + phoneNumber + '</li>';

                            //s.push(results.getPoi(i).title + ", " + results.getPoi(i).address + ", " + results.getPoi(i).phoneNumber);
                            //console.log(results.getPoi(i));
                            if (i == 0) {
                                var oneHtml = '<div class="storeaname" id="name">' + title + '</div> <div class="storeadd" id="info">' + address + '</div><div class="storeadd" id="phone">' + phoneNumber + '</div>';
                                $("#nearAddress").html(oneHtml);
                            }
                        }

                        $("#listLi").html(htmlStr);
                        //}

                    }
                };
                var local1 = new BMap.LocalSearch(map, options);
                local1.search("药房", "药店");
                var local = new BMap.LocalSearch(map, {
                    renderOptions: { map: map }
                });
                local.search("药房", "药店");
            }
            else {
                alert('找不到您的位置' + this.getStatus());
            }
        }, { enableHighAccuracy: true })

    });

    function search_map() {
        yichu();
        var address = $("#address").val();
        // 创建地址解析器实例
        var myGeo = new BMap.Geocoder();
        myGeo.getPoint(address, function (point) {
            if (point) {
                map.clearOverlays();
                map.centerAndZoom(point, 16);
                map.addOverlay(new BMap.Marker(point));
                //console.log(point);
                var options = {
                    onSearchComplete: function (results) {
                        // 判断状态是否正确
                        if (local.getStatus() == BMAP_STATUS_SUCCESS) {
                            var htmlStr = "";
                            for (var i = 0; i < results.getCurrentNumPois(); i++) {
                                console.log(results.getPoi(i));
                                var title = results.getPoi(i).title;
                                var address = results.getPoi(i).address;
                                var phoneNumber = results.getPoi(i).phoneNumber;
                                if (typeof (phoneNumber) == "undefined") {
                                    phoneNumber = '';
                                } else {
                                    phoneNumber = '<div class="two">' + phoneNumber + '</div>';
                                }
                                htmlStr += '<li><div class="one">' + title + '</div><div class="two">' + address + '</div>' + phoneNumber + '</li>';

                                //s.push(results.getPoi(i).title + ", " + results.getPoi(i).address + ", " + results.getPoi(i).phoneNumber);
                                //console.log(results.getPoi(i));
                                if (i == 0) {
                                    var oneHtml = '<div class="storeaname" id="name">' + title + '</div> <div class="storeadd" id="info">' + address + '</div><div class="storeadd" id="phone">' + phoneNumber + '</div>';
                                    $("#nearAddress").html(oneHtml);
                                }
                            }
                            $("#listLi").html(htmlStr);
                        }
                    }
                };
                var local1 = new BMap.LocalSearch(map, options);
                local1.search($(".text").val());
                var local = new BMap.LocalSearch(map, {
                    renderOptions: { map: map }
                });
                local.search($(".text").val());

            } else {
                alert("请输入您要查找的城市!");
            }
        }, "惠州市");
    }
    function yichu() {
        for (var i = 0; i < map.getOverlays().length; i++) {
            map.removeOverlay(map.getOverlays()[i]);
            if (i > 0) {
                i--;
            }
        } if (map.getOverlays().length > 0) {
            map.removeOverlay(map.getOverlays()[0]);
        }
    }


    $(function () {
        $(".text").val("必须在药店前输入城市名");
        $(".text").css("color", "gray");
        $(".text").focus(function () {
            var val = $(".text").val();
            if (val == "必须在药店前输入城市名") {
                $(".text").val("");
                $(".text").css("color", "black");
            }
        });
        $(".text").blur(function () {
            var val = $(".text").val();
            if (val == "") {
                $(".text").val("必须在药店前输入城市名");
                $(".text").css("color", "gray");
            }
        });
    });

</script>