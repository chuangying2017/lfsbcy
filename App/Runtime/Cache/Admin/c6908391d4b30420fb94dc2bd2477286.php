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
      <form action="/index.php/Admin/Pharmacy/pharmacyedit/id/15.html"  method="post" enctype="multipart/form-data" class="SubmiForm" id="form-pharmacy-add"  >
          <input type="hidden" name="id" value="<?php echo ($pharmacy_row["id"]); ?>">
      <table class="table table-bg">
        <tbody>
        
            <tr>
                <th class="text-r"><span class="c-red">*</span> 药店名称： </th>
                <td>
                    <span> 
                       
                        <input type="text" value="<?php echo ($pharmacy_row["name"]); ?>" class="input-text" style="width:300px;" name="name" datatype="*" nullmsg=" 药店名称不能为空" ></span>
                </td>
               
            </tr>
             
          <tr>
          
            <th class="text-r"><span class="c-red">*</span> 药店电话： </th>
            <td><input type="text" style="width:300px" class="input-text" placeholder="" value="<?php echo ($pharmacy_row["tel"]); ?>" id="user-name" name="tel" datatype="*" nullmsg="药店电话不能为空">

          </tr>
            <tr>
          
            <th class="text-r"><span class="c-red">*</span> 地址： </th>
            <td id="region_container">
          </tr>
           <tr>
                <th class="text-r"><span class="c-red">*</span> 街道/路口等： </th>
                <td>
                    <span> 
                       
                        <input type="text" class="input-text" style="width:300px;" value="<?php echo ($pharmacy_row["address"]); ?>" name="address" datatype="*" nullmsg="街道不能为空" ></span>
                </td>
               
            </tr>
          <tr>
            <th></th>
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
<script type="text/javascript" src="/Public/H-ui/lib/Validform/5.3.2/Validform_v5.3.2_min.js"></script>
<script type="text/javascript" src="/Public/js/admin/jquery.form.js"  ></script>
<script type="text/javascript" src="/Public/H-ui/lib/address/addre_area.js"></script> 
<script type="text/javascript" src="/Public/H-ui/lib/address/address-select.min.js"></script>
<script type="text/javascript">
      $(".SubmiForm").Validform({
                callback:function(form){
		 $("#form-pharmacy-add").ajaxSubmit({
			//dataType:'script',
			type:'post',
			url: "/Admin/Pharmacy/pharmacyedit",    
			success: function(data){   
                                 data= JSON.parse(data);
				if(data.status==1){
				 layer.msg(data.msg,{icon: 1,time:1000},function(){
				  var index = parent.layer.getFrameIndex(window.name); //先得到当前iframe层的索引
                                    parent.location.reload();
                                    parent.layer.close(index);
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
 
        

 var province, capital, city;
        for (var i = 0; i < address_data[0].Province.length; i++) {
            if (address_data[0].Province[i].Name == "") {
                province = address_data[0].Province[i].Name;
                for (var j = 0; j < address_data[0].Province[i].Capital.length; j++) {
                    if (address_data[0].Province[i].Capital[j].Name == "") {
                        city = address_data[0].Province[i].Capital[j].Name;
                        for (var k = 0; k < address_data[0].Province[i].Capital[j].City.length; k++) {
                            if (address_data[0].Province[i].Capital[j].City[k].Name == "") {
                                capital = address_data[0].Province[i].Capital[j].City[k].Name;
                            }
                        }
                    }
                }
            }
        }
           // create_address_select('', 'region_container', 'Name', '', '', '');
         create_address_select('', 'region_container', 'Name', '<?php echo ($pharmacy_row["province"]); ?>', '<?php echo ($pharmacy_row["city"]); ?>', '<?php echo ($pharmacy_row["area"]); ?>');
</script>