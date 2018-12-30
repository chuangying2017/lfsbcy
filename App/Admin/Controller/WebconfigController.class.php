<?php

namespace Admin\Controller;

use Admin\Controller\CommonController;

class WebconfigController extends CommonController {
    /*     * *
     *
     * 系统设置
     */

    public function index() {

        $webconfig = M('webconfig');
        if (IS_POST) {


            $arr = array(
                'id' => '1',
                'value' => json_encode($_POST),
            );

            $rel = $webconfig->save($arr);
            if ($rel) {

                showMsg(1, '修改成功');
            } else {
                showMsg(2, '修改失败');
            }
        }
        $webconfig = $webconfig->where('id=1')->find();
        $arr = json_decode($webconfig['value'], true);
        $this->assign('config', $arr);
        $this->display();
    }

   

    public function about(){
        $webconfig = M('webconfig');
        if(IS_POST){
       
        
        $relust=$webconfig->save($_POST);
        if ($relust) {

                showMsg(1, '操作成功');
            } else {
                showMsg(2, '操作失败');
            }
        }
        $row=$webconfig->find(2);
        $this->assign('row',$row);
        $this->display();
    }

}
