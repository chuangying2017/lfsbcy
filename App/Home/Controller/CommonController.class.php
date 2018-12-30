<?php

namespace Home\Controller;

use Think\Controller;

/**
 * 会员模块公共控制器
 * @author 285734743
 * 
 */
class CommonController extends Controller {

    function _initialize() {
        $basedata = basewebconfing();
		  if(isMobile()){
            C('DEFAULT_MODULE','Mobile');
            header('Location: /Mobile/Index/index.html');
            exit;
        }
        if ($basedata['onoff'] == 0) {
            $this->assign('webmsg', '网站维护中');
            $this->display('Common:info');
            exit;
        }
        $this->assign('config',$basedata);
        $links_table=M('links');
        $link=$links_table->select();
        $this->assign('link',$link);
      
    }

}
