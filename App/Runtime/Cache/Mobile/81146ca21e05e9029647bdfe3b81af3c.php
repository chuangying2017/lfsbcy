<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title>GO药店</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo ($config["title"]); ?></title>
    <meta name="keywords" content="<?php echo ($config["keywords"]); ?>"/>
    <meta name="description" content="<?php echo ($config["description"]); ?>"/>
    <link href="/Public/style/mobile/lfss.css" rel="stylesheet" />
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=3E298706f055a5e23f063a1413f21565"></script>
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
        <li><a href="#"><img src="/Public/images/home/GO药店-恢复的_03.png" alt=""></a></li>
        <li><a href="<?php echo U('Article/activitylist',array('id'=>'7'));?>"><img src="/Public/images/home/6.png" alt=""></a></li>
        <li><a href="<?php echo U('Article/brand',array('id'=>'102'));?>"><img src="/Public/images/home/7.png" alt=""></a></li>
        <li><a href="<?php echo U('Article/pagess',array('id'=>'103'));?>"><img src="/Public/images/home/1.8.png" alt=""></a></li>
    </ul>
</div>
<div class="shang"></div>
        <div class="GO_body" style="margin-top:-50px;">
            <div class="GO_body1">
                <div style="color:#8d5028;padding-top:15px;padding-left: 18px;font-size: 12px"><strong>查找门店</strong></div>
                <div style="padding-left: 18px;margin-top: 10px">
                    <input class="text1" type="text" id="address" name="address" style="margin-bottom:5px;height:23px;line-height:23px;width:50%"/>
                    <a class="ann" onclick="search_map();">搜索</a>
                </div>
                <div style="color:#8d5028;padding-top:15px;padding-left: 18px;font-size: 12px"><strong>最近门店</strong></div>
                <div class="baixing">
                    <p class="bxyf">
                    <div class="storeadd" id="info"></div>
                    <div class="storeadd" id="phone"></div>
                    </p>
                    <div class="storemap"  style="width:90%; height: 254px;margin:10px" id="allmap">
                        <!--<img src="/Public/images/home/gopharmacy3.jpg" class="map" />-->
                    </div>
                        <ul class="addressmore" id="listLi">
                        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                                <div class="one"><?php echo ($vo["name"]); ?></div>
                                <div class="two"><?php echo ($vo["address"]); ?></div>
                                <div class="two"><?php echo ($vo["tel"]); ?></div>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="xia"></div>
    </div>
    <input type="hidden" id="lng" value="114.331398" />
    <input type="hidden" id="lat" value="23.897445" />
    <input type="hidden" id="lng1" value="" />
    <input type="hidden" id="lat1" value="" />


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
        map.centerAndZoom(point, 20);
        map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放

        var geolocation = new BMap.Geolocation();
        geolocation.getCurrentPosition(function (r) {
            if (this.getStatus() == BMAP_STATUS_SUCCESS) {
                $("#lng").val(r.point.lng);
                $("#lat").val(r.point.lat);
                var point = new BMap.Point(r.point.lng, r.point.lat);
                map.centerAndZoom(point, 20);
                var options = {
                    onSearchComplete: function (results) {
                        // 判断状态是否正确
                        //if (local.getStatus() == BMAP_STATUS_SUCCESS) {
                        var htmlStr = "";
                        for (var i = 0; i < results.getCurrentNumPois() ; i++) {
                            var title = results.getPoi(i).title;
                            var address = results.getPoi(i).address;
                            var phoneNumber = results.getPoi(i).phoneNumber;

                            if(typeof(phoneNumber)=="undefined"){
                                phoneNumber='';
                            } else{
                                phoneNumber='<div class="two">' + phoneNumber +'</div>';
                            }
                            htmlStr += '<li><div class="one">' + title + '</div><div class="two">' + address + '</div>'+phoneNumber+'</li>';

                            //s.push(results.getPoi(i).title + ", " + results.getPoi(i).address + ", " + results.getPoi(i).phoneNumber);
                            //console.log(results.getPoi(i));
                            if(i==0){
                                var oneHtml='<div class="storeaname" id="name">'+title+'</div> <div class="storeadd" id="info">'+address+'</div><div class="storeadd" id="phone">'+phoneNumber+'</div>';
                                $("#nearAddress").html(oneHtml);
                            }
                        }

                        $("#listLi").html(htmlStr);
                        //}

                    }
                };
                var local1 = new BMap.LocalSearch(map, options);
                local1.search("药房");
                var local = new BMap.LocalSearch(map, {
                    renderOptions: { map: map }
                });
                local.search("药房");
            }
            else {
                alert('找不到您的位置' + this.getStatus());
            }
        }, { enableHighAccuracy: true })

    });

    function search_map() {
        yichu();
        var address=$("#address").val();
        // 创建地址解析器实例
        var myGeo = new BMap.Geocoder();
        myGeo.getPoint(address, function (point) {
            if (point) {
                map.clearOverlays();
                map.centerAndZoom(point, 20);
                map.addOverlay(new BMap.Marker(point));
                //console.log(point);
                var options = {
                    onSearchComplete: function (results) {
                        // 判断状态是否正确
                        if (local.getStatus() == BMAP_STATUS_SUCCESS) {
                            var htmlStr = "";
                            for (var i = 0; i < results.getCurrentNumPois() ; i++) {
                                console.log(results.getPoi(i));
                                var title = results.getPoi(i).title;
                                var address = results.getPoi(i).address;
                                var phoneNumber = results.getPoi(i).phoneNumber;
                                if(typeof(phoneNumber)=="undefined"){
                                    phoneNumber='';
                                } else{
                                    phoneNumber='<div class="two">' + phoneNumber +'</div>';
                                }
                                htmlStr += '<li><div class="one">' + title + '</div><div class="two">' + address + '</div>'+phoneNumber+'</li>';

                                //s.push(results.getPoi(i).title + ", " + results.getPoi(i).address + ", " + results.getPoi(i).phoneNumber);
                                //console.log(results.getPoi(i));
                                if(i==0){
                                    var oneHtml='<div class="storeaname" id="name">'+title+'</div> <div class="storeadd" id="info">'+address+'</div><div class="storeadd" id="phone">'+phoneNumber+'</div>';
                                    $("#nearAddress").html(oneHtml);
                                }
                            }

                            $("#listLi").html(htmlStr);
                        }
                    }
                };
                var local1 = new BMap.LocalSearch(map, options);
                local1.search($(".text1").val());
                var local = new BMap.LocalSearch(map, {
                    renderOptions: { map: map }
                });
                local.search($(".text1").val());

            } else {
                alert("请输入您要查找的城市!");
            }
        }, "惠州市");


    }


    function yichu()
    {
        for (var i = 0; i <map.getOverlays().length; i++) {
            map.removeOverlay(map.getOverlays()[i]);
            if(i>0)
            {
                i--;
            }
        }
        if(map.getOverlays().length>0)
        {
            map.removeOverlay(map.getOverlays()[0]);

        }
    }
    $(function () {
        $(".text1").val("必须在药店前输入城市名");
        $(".text1").css("color", "gray");
        $(".text1").focus(function () {
            var val = $(".text1").val();
            if (val == "必须在药店前输入城市名") {
                $(".text1").val("");
                $(".text1").css("color", "black");
            }
        });
        $(".text1").blur(function () {
            var val = $(".text1").val();
            if (val=="") {
                $(".text1").val("必须在药店前输入城市名");
                $(".text1").css("color", "gray");
            }
        });
    });

</script>