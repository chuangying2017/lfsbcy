<?php

namespace Admin\Controller;

use Admin\Controller\CommonController;

class LinksController extends CommonController {

    public function index() {

        $links_table = M('links');
        $count = $links_table->where($map)->count(); // 查询满足要求的总记录数
        $Page = new \Think\Page($count, 30); // 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show = $Page->show(); //
        $list = $links_table->order('id desc')->where($map)->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('type', getproducttype());
        $this->assign('page', $show);
        $this->assign('list', $list);
        $this->assign('count', $count);
        $this->assign('arr', $search);
        $this->display();
    }

    public function linksadd() {

        $links_table = M('links');
        if (IS_POST) {
            $relust = $links_table->add($_POST);
            if ($relust) {
                showMsg(1, '操作成功');
            } else {
                showMsg(2, '操作失败');
            }
        } else {
            $this->display();
        }
    }

    //编辑咨讯
    public function linksedit() {

        $links_table = M('links');
        if (IS_POST) {
            $relust = $links_table->save($_POST);
            if ($relust) {
                showMsg(1, '操作成功');
            } else {
                showMsg(2, '操作失败');
            }
        }

        $id = I('get.id');
        $links_row = $links_table->where(array('id' => $id))->find();
        $this->assign('links_row', $links_row);
        $this->display();
    }

    public function linksDel() {
        $links_table = M('links');
        $relsult = $links_table->where('id=' . I('get.id'))->delete();
        if ($relsult) {
            showMsg(1, '操作成功');
        } else {
            showMsg(2, '操作失败');
        }
    }

    public function datadelLinks() {
        $links_table = M('links');
        $str = I('get.str');
        $str = rtrim($str, ',');
        unset($data);
        $data['id'] = array('in', $str);
        $relsult = $links_table->where($data)->delete();
        if ($relsult) {
            showMsg(1, '操作成功');
        } else {
            showMsg(2, '操作失败');
        }
    }

}
