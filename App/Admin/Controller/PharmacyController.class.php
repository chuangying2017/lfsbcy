<?php

namespace Admin\Controller;

use Admin\Controller\CommonController;

class PharmacyController extends CommonController {

    public function index() {

        $pharmacy_table = M('pharmacy');
        $count = $pharmacy_table->where($map)->count(); // 查询满足要求的总记录数
        $Page = new \Think\Page($count, 30); // 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show = $Page->show(); //
        $list = $pharmacy_table->order('id desc')->where($map)->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('type', getproducttype());
        $this->assign('page', $show);
        $this->assign('list', $list);
        $this->assign('count', $count);
        $this->assign('arr', $search);
        $this->display();
    }

    public function pharmacyadd() {

        $pharmacy_table = M('pharmacy');
        if (IS_POST) {
            $url='http://api.map.baidu.com/geocoder/v2/?output=json&address='.$_POST['address'].'&city='.$_POST['city'].'&ak=3E298706f055a5e23f063a1413f21565';
            $data=httpGet($url);
            $data=  json_decode($data,TRUE);
            $_POST['lng']=$data['result']['location']['lng'];
            $_POST['lat']=$data['result']['location']['lat'];
            $relust = $pharmacy_table->add($_POST);
            if ($relust) {
                showMsg(1, '操作成功');
            } else {
                showMsg(2, '操作失败');
            }
        } else {
            $this->display();
        }
    }

    public function pharmacyedit() {

        $pharmacy_table = M('pharmacy');
        if (IS_POST) {
            $url='http://api.map.baidu.com/geocoder/v2/?output=json&address='.$_POST['address'].'&city='.$_POST['city'].'&ak=3E298706f055a5e23f063a1413f21565';
            $data=httpGet($url);
            $data=  json_decode($data,TRUE);
            $_POST['lng']=$data['result']['location']['lng'];
            $_POST['lat']=$data['result']['location']['lat'];
            $relust = $pharmacy_table->save($_POST);
            if ($relust) {
                showMsg(1, '操作成功');
            } else {
                showMsg(2, '操作失败');
            }
        }

        $id = I('get.id');
        $pharmacy_row = $pharmacy_table->where(array('id' => $id))->find();
        $this->assign('pharmacy_row', $pharmacy_row);
        $this->display();
    }

    public function pharmacyDel() {
        $pharmacy_table = M('pharmacy');
        $relsult = $pharmacy_table->where('id=' . I('get.id'))->delete();
        if ($relsult) {
            showMsg(1, '操作成功');
        } else {
            showMsg(2, '操作失败');
        }
    }

    public function datadelPharmacy() {
        $pharmacy_table = M('pharmacy');
        $str = I('get.str');
        $str = rtrim($str, ',');
        unset($data);
        $data['id'] = array('in', $str);
        $relsult = $pharmacy_table->where($data)->delete();
        if ($relsult) {
            showMsg(1, '操作成功');
        } else {
            showMsg(2, '操作失败');
        }
    }

}
