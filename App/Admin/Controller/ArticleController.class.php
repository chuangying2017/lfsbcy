<?php

namespace Admin\Controller;

use Admin\Controller\CommonController;

class ArticleController extends CommonController {
    /*     * *
     *
     * 文章中心
     */

    public function index() {


        if (!empty($_REQUEST['search_starttime']) && !empty($_REQUEST['search_endtime'])) {
            $startime = strtotime($_REQUEST['search_starttime']);
            $endtime = strtotime($_REQUEST['search_endtime']);

            if ($startime <= $endtime) {
                $times = (strtotime($_REQUEST['search_starttime'] . '00:00:00') . ',' . strtotime($_REQUEST['search_endtime'] . '23:59:59'));
                $search['search_starttime'] = $_REQUEST['search_starttime'];
                $search['search_endtime'] = $_REQUEST['search_endtime'];
            } else {
                $times = (strtotime($_REQUEST['search_endtime'] . '00:00:00') . ',' . strtotime($_REQUEST['search_starttime'] . '23:59:59'));
                $search['search_starttime'] = $_REQUEST['search_endtime'];
                $search['search_endtime'] = $_REQUEST['search_starttime'];
            }
            $map['art_time'] = array('between', $times);
            //$timespan = strtotime(urldecode($_REQUEST['start_time'])) . "," . strtotime(urldecode($_REQUEST['end_time']));
        } elseif (!empty($_REQUEST['search_starttime'])) {
            $xtime = strtotime($_REQUEST['search_starttime'] . '00:00:00');
            $map['art_time'] = array("egt", $xtime);
            $search['search_starttime'] = $_REQUEST['search_starttime'];
        } elseif (!empty($_REQUEST['search_endtime'])) {
            $xtime = strtotime($_REQUEST['search_endtime'] . '23:59:59');
            $map['art_time'] = array("elt", $xtime);
            $search['search_endtime'] = $_REQUEST['search_endtime'];
        }
        if (!empty($_REQUEST['search_title'])) {
            $map['art_title'] = array('like', '%' . $_REQUEST['search_title'] . '%');
            $search['search_title'] = $_REQUEST['search_title'];
        }
        if (!empty($_REQUEST['id'])) {
            $map['art_type'] = array('eq', $_REQUEST['id']);
            $search['id'] = $_REQUEST['id'];
        }
        $article_table = M('article');
        $count = $article_table->where($map)->count(); // 查询满足要求的总记录数
        $Page = new \Think\Page($count, 30); // 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show = $Page->show(); //
        $list = $article_table->order('id desc')->where($map)->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('type', getproducttype());
        $this->assign('page', $show);
        $this->assign('list', $list);
        $this->assign('count', $count);
        $this->assign('arr', $search);
        $this->display();
    }

    //分类递归
    public function order($array, $pid = 0) {
        $arr = array();
        foreach ($array as $v) {
            if ($v['pid'] == $pid) {
                if ($v['pid'] != 0) {
                    $v['art_class_name'] = '└' . $v['art_class_name'];
                }
                $arr[] = $v;
                $arr = array_merge($arr, self::order($array, $v['id']));
            }
        }
        return $arr;
    }

    //添加咨讯
    public function articleadd() {

        $article_table = M('article');
        $ptype = array(1, 2, 3, 4, 5,7);
        if (IS_POST) {
            $_POST['art_time'] = time();
           
            if (in_array($_POST['art_type'], $ptype)) {
                unset($_POST['pid']);
                $upload = new \Think\Upload();
                $upload->maxSize = 3145728; // 设置附件上传大小
                $upload->exts = array('jpg', 'gif', 'png', 'jpeg'); // 设置附件上传类型
                $upload->rootPath = 'Public/upload/'; // 设置附件上传根目录
                $upload->savePath = 'article/ueditor/'; // 设置附件上传（子）目录
                $info = $upload->upload();
                if (!$info) {
                    $this->ajaxReturn($upload->getError());
                }
                foreach ($info as $file) {
                    $file_path = 'Public/upload/' . $file['savepath'] . $file['savename'];
                    $_POST['art_img'] = $file_path;
                    $relust = $article_table->add($_POST);
                }
                
            } else {
                $relust = $article_table->add($_POST);
            }

            if ($relust) {
                showMsg(1, '操作成功');
            } else {
                showMsg(2, '操作失败');
            }
        } else {
            $this->assign('type', $_GET['id']);
            $this->display();
        }
    }

    //编辑咨讯
    public function articleedit() {

        $article_table = M('article');
        $ptype = array(1, 2, 3, 4, 5,7);
        if (IS_POST) {
            $_POST['art_time'] = time();

            if (in_array($_POST['art_type'], $ptype)) {
                $upload = new \Think\Upload();
                $upload->maxSize = 3145728; // 设置附件上传大小
                $upload->exts = array('jpg', 'gif', 'png', 'jpeg'); // 设置附件上传类型
                $upload->rootPath = 'Public/upload/'; // 设置附件上传根目录
                $upload->savePath = 'article/ueditor/'; // 设置附件上传（子）目录
                $info = $upload->upload();
                foreach ($info as $file) {
                    $file_path = 'Public/upload/' . $file['savepath'] . $file['savename'];
                    $_POST['art_img'] = $file_path;
                    $relust = $article_table->save($_POST);
                }
                if (!$info) {
                    $this->ajaxReturn($upload->getError());
                }
            } else {
                $relust = $article_table->save($_POST);
            }


            if ($relust) {
                showMsg(1, '操作成功');
            } else {
                showMsg(2, '操作失败');
            }
        }

        $id = I('get.id');
        $article_row = $article_table->where(array('id' => $id))->find();
        $this->assign('article_row', $article_row);
        $this->assign('id', $id);
        $this->assign('type', $article_row['art_type']);
        $this->display();
    }

    public function articlezhang() {
        if (IS_GET) {
            $id = I('get.id');
            $data['id'] = $id;
            $article_row = M('article')->where($data)->find();
        }

        $this->assign('article_row', $article_row);
        $this->display();
    }

    //删除文章
    public function articleDel() {
        $article_table = M('article');
        $relsult = $article_table->where('id=' . I('get.id'))->delete();
        if ($relsult) {
            showMsg(1, '操作成功');
        } else {
            showMsg(2, '操作失败');
        }
    }

    //批量删除文章
    public function datadelArticle() {
        $article_table = M('article');
        $str = I('get.str');
        $str = rtrim($str, ',');
        unset($data);
        $data['id'] = array('in', $str);
        $relsult = $article_table->where($data)->delete();
        if ($relsult) {
            showMsg(1, '操作成功');
        } else {
            showMsg(2, '操作失败');
        }
    }

    //下架
    public function article_stop() {

        $article_table = M('article');
        $relsult = $article_table->where('id=' . I('get.id'))->find();
        if ($relsult['art_status'] == 1) {
            $data['id'] = I('get.id');
            $data['art_status'] = 2;
            $rel1 = $article_table->save($data);
            if ($rel1) {
                showMsg(1, '操作成功');
            } else {
                showMsg(2, '操作失败');
            }
        }
    }

//上架

    public function article_start() {

        $article_table = M('article');
        $relsult = $article_table->where('id=' . I('get.id'))->find();
        if ($relsult['art_status'] == 2) {
            $data['id'] = I('get.id');
            $data['art_status'] = 1;
            $rel1 = $article_table->save($data);
            if ($rel1) {
                showMsg(1, '操作成功');
            } else {
                showMsg(1, '操作失败');
            }
        }
    }

}
