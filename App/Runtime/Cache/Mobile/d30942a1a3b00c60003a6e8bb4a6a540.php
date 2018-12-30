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
                <li><a href="<?php echo U('Article/brand',array('id'=>'102'));?>" ><img src="/Public/images/home/7.png" alt=""></a></li>
                <li><a href="<?php echo U('Article/pagess',array('id'=>'103'));?>"><img src="/Public/images/home/产品问答_03.png" alt=""></a></li>
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
                       <li><a href="<?php echo U('Article/about',array('id'=>'19'));?>" <?php if($_GET['id']== 19 ): ?>class="columnas producthot" <?php else: ?> class="columnas"<?php endif; ?> >联系我们</a></li>
        <li><a href="<?php echo U('Article/pagess',array('id'=>'103'));?>" class="columnas">产品问答</a></li>
        <li><a href="<?php echo U('Article/about',array('id'=>'20'));?>" <?php if($_GET['id']== 20 ): ?>class="producthot"<?php endif; ?> >客户留言</a></li>
                   </ul>
               </div>
        <div id="div3">
   <ul style="width: 90%;margin-left: -6%;background:#da251d;">
            <?php if(is_array($data)): foreach($data as $k=>$v): ?><li><a href="<?php echo U('Article/pages',array('id'=>$v['art_type'],ids=>$v['id']));?>"><?php echo ($v["name"]); ?></a></li>
                <div style="display: inline-block;width: 1px;background: #e35c56;height: 60px"></div><?php endforeach; endif; ?>
      <li><a href="<?php echo U('Article/pages_pp',array('id'=>'13'));?>" <?php if($_GET['id']== 13 ): ?>class="producthot"<?php endif; ?> >百草传说</a></li>

        </ul>
        </div>
        <div class="shang"></div>
        <div class="productright" style="padding: 10px 20px;box-sizing: border-box;margin-left: 5%;margin-top:-50px;">
            <div class="productrighttwo" >
                    <?php echo ($relust["art_content"]); ?>
            </div>
        </div>
        <div class="xia" style="float:left"></div>
    <script src="/Public/js/home/jquery-1.8.3.min.js"></script>
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
        $(function(){
            $(".pages_img p img ").attr("style","");
        });
    </script>
</body>
</html>