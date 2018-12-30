<?php

namespace Home\Controller;

use Home\Controller\CommonController;

class IndexController extends CommonController {

    //首页
    public function index() {
        $picture_table = M('picture');
        $print_table = M('print');
        $list = $picture_table->where(array('type' => 1, 'status' => 1))->limit(3)->select();
        $printlist = $print_table->order('id desc')->select();
        $this->assign('printlist', $printlist);
        $this->assign('list', $list);
        $this->display();
    }

    //药店
    public function drugstore() {
        $pharmacy_table = M('pharmacy');
        $list = $pharmacy_table->select();
        $this->assign('list', $list);
        $this->display();
    }

    public function map() {


        $lat = $_POST['lat'];
        $lon = $_POST['lng'];
        $sql = 'select * from web_pharmacy order by ACOS(SIN((' . $lat . ' * 3.1415) / 180 ) *SIN((lat * 3.1415) / 180 ) +COS((' . $lat . ' * 3.1415) / 180 ) * COS((lat * 3.1415) / 180 ) *COS((' . $lon . ' * 3.1415) / 180 - (lng * 3.1415) / 180 ) ) * 6380 asc limit 10';
        $map = M()->query($sql);
        $count = count($map);
        for ($i = 0; $i < $count; $i++) {
            $arr[$i]['id'] = $i;
            $arr[$i]['latitude'] = $map[$i]['lat'];
            $arr[$i]['longitude'] = $map[$i]['lng'];
            $arr[$i]['name'] = $map[$i]['name'];
            $arr[$i]['address'] = $map[$i]['address'];
            $arr[$i]['tel'] = $map[$i]['tel'];
        }
        exit(json_encode($arr));
    }

    public function search() {
        $Province = $_POST['Province'];
        $City = $_POST['City'];
        $Capital = $_POST['Capital'];
        $map = M('pharmacy')->where(array('province' => $Province, 'city' =>$Capital , 'area' => $City))->select();
        if ($map) {
            $count=count($map);
            for ($i = 0; $i < $count; $i++) {
                $arr[$i]['id'] = $i;
                $arr[$i]['latitude'] = $map[$i]['lat'];
                $arr[$i]['longitude'] = $map[$i]['lng'];
                $arr[$i]['name'] = $map[$i]['name'];
                $arr[$i]['address'] = $map[$i]['address'];
                $arr[$i]['tel'] = $map[$i]['tel'];
            }
            exit(json_encode(array('status'=>1,'data'=> $arr)));
        }
        else{
            exit(json_encode(array('status'=>2)));
        }
       
    }

}
