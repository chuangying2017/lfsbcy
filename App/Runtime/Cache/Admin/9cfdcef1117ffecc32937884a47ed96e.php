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
<title></title>
</head>
<body>
<div class="pd-20">
  <div class="Huiform">
      <form action="/index.php/Admin/Webconfig/about.html"  method="post" enctype="multipart/form-data" class="SubmiForm" id="form-article-add"  >
          <input type='hidden' value='2' name='id'>
      <table class="table table-bg">
        <tbody>
            <tr>
            <td>
                <textarea id="editor"  name="value" style="width:770px;height:400px;" class='editor'  datatype="*" nullmsg="内容不能为空" >
                    <?php echo ($row["value"]); ?>
                </textarea>
			</td>
          </tr>
          <tr>
            <td>
			<button  class="btn btn-primary radius"  type="submit"><i class="Hui-iconfont">&#xe632;</i> 保存</button>
			</td>
          </tr>
        </tbody>
      </table>
    </form>
  </div>
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
<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/Public/H-ui/lib/My97DatePicker/WdatePicker.js"></script>  
<script type="text/javascript" src="/Public/H-ui/lib/webuploader/0.1.5/webuploader.min.js"></script> 
<script type="text/javascript" src="/Public/H-ui/lib/ueditor/1.4.3/ueditor.config.js"></script> 
<script type="text/javascript" src="/Public/H-ui/lib/ueditor/1.4.3/ueditor.all.min.js"> </script> 
<script type="text/javascript" src="/Public/H-ui/lib/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript" src="/Public/H-ui/lib/Validform/5.3.2/Validform_v5.3.2_min.js"></script>
<script type="text/javascript" src="/Public/js/admin/jquery.form.js"  ></script>

<script type="text/javascript">
    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
 var  ue=UE.getEditor('editor');
 
      $(".SubmiForm").Validform({
                callback:function(form){
		 $("#form-article-add").ajaxSubmit({
			//dataType:'script',
			type:'post',
			url: "/Admin/Webconfig/about",    
//			beforeSubmit: function(){
//				layer.msg('正在上传中...',{icon:6,time:1000});
//			},
			success: function(data){   
                                 data= JSON.parse(data);
				if(data.status==1){
				 layer.msg(data.msg,{icon: 1,time:1000},function(){
				  var index = parent.layer.getFrameIndex(window.name); //先得到当前iframe层的索引
                                   location.reload();  
                                });
				}else {
				layer.msg(data.msg,{icon:2,time:1000});
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