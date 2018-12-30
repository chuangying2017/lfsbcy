<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/Public/H-ui/lib/html5.js"></script>
<script type="text/javascript" src="/Public/H-ui/lib/respond.min.js"></script>
<script type="text/javascript" src="/Public/H-ui/lib/PIE_IE678.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/Public/H-ui/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/Public/H-ui/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/Public/H-ui/lib/Hui-iconfont/1.0.7/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/Public/H-ui/lib/icheck/icheck.css" />
<link rel="stylesheet" type="text/css" href="/Public/H-ui/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/Public/H-ui/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>图片列表</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 图片管理<span class="c-gray en">&gt;</span> 首页大图 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<form method="post" action="/index.php/Admin/Picture/index.html">
<div class="pd-20">
  <div class="text-c">
     
  </div>
  </form>
  <div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onClick='datadel("<?php echo U('Picture/datadelPicture');?>")' class="btn btn-danger radius">
                                                              <i class="Hui-iconfont">&#xe6e2;</i>  批量删除</a> 
  <a class="btn btn-primary radius"  onClick="showPage('600','400','添加图片','<?php echo U('Picture/pictureadd');?>')"
     href="javascript:;">
      <i class="Hui-iconfont">&#xe600;</i>  添加图片</a></span> <span class="r">共有数据：<strong><?php echo ($count); ?></strong> 条</span> </div>
  <table class="table table-border table-bordered table-bg table-hover table-sort">
    <thead>
      <tr class="text-c">
        <th width="40"><input name="delid" type="checkbox" value=""></th>
        <th width="80">ID</th>
        <th width="150">类型</th>
        <th width="150">图片</th>
        <th width="150">创建时间</th>
        <th width="150">更新日期</th>
        <th width="150">操作人员</th>
        <th width="60">发布状态</th>
        <th width="70">操作</th>
      </tr>
    </thead>
    <tbody>
	<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="text-c">
        <td><input name="delid" type="checkbox" value="<?php echo ($vo["id"]); ?>"></td>
        <td><?php echo ($vo["id"]); ?></td>
        <td><?php echo ($type[$vo['type']]); ?></td>
        <td><img class="picture-thumb" src="/<?php echo ($vo["image_path_thumb"]); ?>" width='200' height='80'></td>
        <td><?php echo (date('Y-m-d H:i:s',$vo["create_date"])); ?></td>
        <td><?php echo (date('Y-m-d H:i:s',$vo["replace_date"])); ?></td>
        <td><?php echo ($vo["admin"]); ?></td>
	<?php if($vo["status"] == 2 ): ?><td class="td-status"><span  class="label">已停用</span></td>
        <td class="f-14 td-manage"><a style="text-decoration:none"  onClick="start(this,'<?php echo ($vo["id"]); ?>','<?php echo U('Picture/picture_start');?>','<?php echo U('Picture/picture_stop');?>')" href="javascript:;" title=""><i class="Hui-iconfont">&#xe631;</i></a>
	<?php else: ?>
	<td class="td-status"><span class="label label-success">已启用</span></td>
        <td class="f-14 td-manage"><a style="text-decoration:none" onClick="stop(this,'<?php echo ($vo["id"]); ?>','<?php echo U('Picture/picture_stop');?>','<?php echo U('Picture/picture_start');?>')"  href="javascript:;" title=""><i class="Hui-iconfont">&#xe6e1;</i></a><?php endif; ?>
        <a style="text-decoration:none" class="ml-5" onClick="showPage('600','400','图库编辑','<?php echo U('Picture/pictureedit',array('id'=>$vo['id']));?>')" href="javascript:;" title="编辑"> <i class="Hui-iconfont">&#xe6df;</i></a>
        <a style="text-decoration:none" class="ml-5" onClick="del(this,'<?php echo ($vo["id"]); ?>','<?php echo U('Picture/pictureDel');?>')" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
      </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    </tbody>
  </table>
  <div id="pageNav" class="pageNav"><?php echo ($page); ?></div>
</div>

<script type="text/javascript" src="/Public/H-ui/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/Public/H-ui/lib/layer/2.1/layer.js"></script>
<script type="text/javascript" src="/Public/H-ui/lib/laypage/1.2/laypage.js"></script> 
<script type="text/javascript" src="/Public/H-ui/lib/My97DatePicker/WdatePicker.js"></script> 
<script type="text/javascript" src="/Public/H-ui/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="/Public/H-ui/lib/icheck/jquery.icheck.min.js"></script> 
<script type="text/javascript" src="/Public/H-ui/lib/jquery.validation/1.14.0/jquery.validate.min.js"></script>
<script type="text/javascript" src="/Public/H-ui/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/Public/H-ui/lib/jquery.validation/1.14.0/messages_zh.min.js"></script>
<script type="text/javascript" src="/Public/H-ui/static/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="/Public/H-ui/static/h-ui.admin/js/H-ui.admin.js"></script> 

</body>
</html>