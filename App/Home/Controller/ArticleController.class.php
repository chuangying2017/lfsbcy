<?php

namespace Home\Controller;

use Home\Controller\CommonController;

class ArticleController extends CommonController {

    //活动分享
    public function activitylist() {
        $article_table = M('article');
        $id = I('get.id', '', 'htmlspecialchars');
        $data = M('power as p')
            ->group('p.name')
            ->join('web_article as a on p.son_id=a.art_type')
            ->field(array('p.pid','p.name','a.art_title','a.id','a.art_type'))
            ->where('pid=85')
            ->order('p.id')
            ->select();
        $this->assign('data', $data);
      
        $map = array('art_status' => 1, 'art_type' => $id);
        $count = $article_table->where($map)->count();
        $Page = new \Think\Pages($count, 10);
        $Page->setConfig('prev', '上一页');
        $Page->setConfig('next', '下一页');
        $Page->setConfig('last', '末页');
        $Page->setConfig('first', '首页');
        $show = $Page->show();
		 $map1 =$article_table->field(array('art_title','id','art_type'))->where( 'art_type='.$id)->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('map', $map1);
        $list =M('power as p')
            ->join('web_article as a on p.son_id=a.art_type')
            ->field(array('p.pid','p.name','a.*'))
            ->where($map)
            ->order('p.id')
            ->select();
        $this->assign('page', $show);
        $this->assign('list', $list);
        $this->display();
    }
    public function huodong() {
        $article_table = M('article');
        $id = I('get.id', '', 'htmlspecialchars');
        $data = M('power as p')
            ->group('p.name')
            ->join('web_article as a on p.son_id=a.art_type')
            ->field(array('p.pid','p.name','a.art_title','a.id','a.art_type'))
            ->where('p.pid=234')
          ->order('p.id')
            ->select();
        $this->assign('data', $data);
       
        $map = array('art_status' => 1, 'art_type' => $id);
        $count = $article_table->where($map)->count();
        $Page = new \Think\Pages($count, 10);
        $Page->setConfig('prev', '上一页');
        $Page->setConfig('next', '下一页');
        $Page->setConfig('last', '末页');
        $Page->setConfig('first', '首页');
        $show = $Page->show();
		$map1 =$article_table->field(array('art_title','id','art_type'))->where( 'art_type='.$id)->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('map', $map1);
        $list =M('power as p')
            ->join('web_article as a on p.son_id=a.art_type')
            ->field(array('p.pid','p.name','a.*'))
            ->where($map)
            ->order('p.id')
            ->select();
        $this->assign('page', $show);
        $this->assign('list', $list);
        $this->display();
    }
    public function huodong_chanp() {
    if (IS_GET) {
        $article_table = M('article');
        $id = I('get.ids', '', 'htmlspecialchars');
        $data = M('power as p')
            ->group('p.name')
            ->join('web_article as a on p.son_id=a.art_type')
            ->field(array('p.pid','p.name','a.art_title','a.id','a.art_type'))
            ->where('p.pid=234')
            ->order('p.id desc')
            ->select();
        $this->assign('data', $data);

        $map1 = $article_table->field(array('art_title','id','art_type'))->where('art_type=1')->select();
        $this->assign('map1',$map1);

        $relust = $article_table->where(array('id' => $id))->find();

        $this->assign('relust', $relust);
        $this->display();
    }
}

    //品牌文化
    public function brand() {
        $article_table = M('article');
        $id = I('get.id', '', 'htmlspecialchars');
        $data = M('power as p')
            ->group('p.name')
            ->join('web_article as a on p.son_id=a.art_type')
            ->field(array('p.pid','p.id','p.name','a.*'))
            ->where(array('p.pid=92','p.son_id<>13'))
            ->order('p.id')
            ->select();
        $this->assign('data', $data);
        $relust = $article_table->where('art_type=8')->find();
        $this->assign('relust', $relust);
        $map =$article_table->field(array('art_title','id','art_type'))->where( 'art_type='.$id)->select();
        $this->assign('map', $map);
            $map = array('art_status' => 1, 'art_type' => $id);
            $count = $article_table->where($map)->count();
            $Page = new \Think\Pages($count, 12);
            $Page->setConfig('prev', '上一页');
            $Page->setConfig('next', '下一页');
            $Page->setConfig('last', '末页');
            $Page->setConfig('first', '首页');
            $show = $Page->show();
            $list =M('power as p')
                ->join('web_article as a on p.son_id=a.art_type')
                ->field(array('p.pid','p.name','a.*'))
                ->where($map)
                ->order('p.id')
                ->select();
            $this->assign('page', $show);
            $this->assign('list', $list);

        $this->display();
    }

    //产品介绍
    public function product() {
        $article_table = M('article');
        $id = I('get.id', '', 'htmlspecialchars');
        $data = M('power as p')
            ->group('p.name')
            ->join('web_article as a on p.son_id=a.art_type')
            ->field(array('p.pid','p.id','p.name','a.*'))
            ->where(array('p.pid=86','son_id<>1','son_id<>4','son_id<>5'))
            ->order('p.id')
            ->select();
        $this->assign('data', $data);
        $relust = $article_table->where('art_type=1')->find();
        $this->assign('relust', $relust);
        $map = array('art_status' => 1, 'art_type' => $id);
        $count = $article_table->where($map)->count();
        $Page = new \Think\Pages($count, 4);
        $Page->setConfig('prev', '上一页');
        $Page->setConfig('next', '下一页');
        $Page->setConfig('last', '末页');
        $Page->setConfig('first', '首页');
        $show = $Page->show();
        $list = M('power as p')
                ->join('web_article as a on p.son_id=a.art_type')
                ->field(array('p.pid','p.id','p.name','a.*'))
                ->where($map)
                ->order('p.id')
                ->select();
        $this->assign('page', $show);
        $this->assign('list', $list);
        $this->display();
    }
    //客服中心
    public function about() {
        $Webconfig_table = M('Webconfig');
        $article_table = M('article');
        $id = I('get.id', '', 'htmlspecialchars');
        if ($id == 19) {
            $row = $Webconfig_table->find(2);
            $this->assign('data', $row['value']);
        } else if ($id == 14) {

            $map = array('art_status' => 1, 'art_type' => $id);
            $count = $article_table->where($map)->count();
            $Page = new \Think\Pages($count,10);
            $Page->setConfig('prev', '上一页');
            $Page->setConfig('next', '下一页');
            $Page->setConfig('last', '末页');
            $Page->setConfig('first', '首页');
            $show = $Page->show();
            $list = $article_table->field('id,art_title,art_img,art_type')->order('art_time desc')->where($map)->limit($Page->firstRow . ',' . $Page->listRows)->select();
            $this->assign('page', $show);
            $this->assign('list', $list);
        }
        if (IS_POST) {
            $subject = I('subject', '', 'htmlspecialchars');
            $content = I('content', '', 'htmlspecialchars');
            $message_table = M('message');
            $rel = $message_table->add(array('subject' => $subject, 'content' => $content, 'addtime' => time()));
            if ($rel) {
                showMsg(1, '留言成功');
            } else {
                showMsg(2, '操作失败');
            }
        }
        $this->assign('id', $id);
        $this->display();
    }

    //文章内页
    public function page() {
        if (IS_GET) {
            $id = I('get.ids', '', 'htmlspecialchars');
            $article_table = M('article');
            $relust = $article_table->where(array('id' => $id))->find();
            $this->assign('relust', $relust);
            $this->display();
        }
    }

    public function pages_chanp() {
        if (IS_GET) {
            $article_table = M('article');
            $id = I('get.ids', '', 'htmlspecialchars');

            $data = M('power as p')
                ->group('p.name')
                ->join('web_article as a on p.son_id=a.art_type')
                ->field(array('p.pid','p.name','a.art_title','a.id','a.art_type'))
                ->where('p.pid=85')
                ->order('p.id')
                ->select();
            $this->assign('data', $data);

            $map1 = $article_table->field(array('art_title','id','art_type'))->where('art_type=1')->select();
            $this->assign('map1',$map1);

            $relust = $article_table->where(array('id' => $id))->find();
            $this->assign('relust', $relust);
            $this->display();
        }
    }
	 public function pages_acti() {
        if (IS_GET) {
            $article_table = M('article');
            $id = I('get.ids', '', 'htmlspecialchars');
            $map =$article_table->field(array('art_title','id','art_type'))->where( 'art_type=6')->select();
            $this->assign('map', $map);
			$map1 =$article_table->field(array('art_title','id','art_type'))->where( 'art_type=7')->select();
            $this->assign('map1', $map1);

            if (in_array($id, array(6,40))) {
                $type = $id;
            } else {
                $type = array('in', '6,40');
            }
            if($id==6){
                $relust = $article_table->where(array('art_type' =>1))->find();
                $this->assign('relust',$relust);
                var_dump($relust);
            }

            else{
                $map = array('art_status' => 1, 'art_type' => $type);
                $list = $article_table->field('id,art_title,art_type')->order('art_time desc')->where($map)->select();
                $this->assign('list', $list);
            }
            $this->display();

        }
    }

public function add_article_data()
    {
        if (!empty($_POST))
        {
            $year = date("Y");
            $month = date("m");
            $day = date("d");
            $end= mktime(23,59,59,$month,$day,$year);//当天结束时间戳
            $start = mktime(0,0,0,$month,$day,$year);//当天开始时间戳
            $where['time'] = array(array('egt',$start),array('elt',$end,'AND'));
            $subject = I('subject', '', 'htmlspecialchars');
            $content = I('content', '', 'htmlspecialchars');

            if (empty($subject) || empty($content))
            {
                $this->ajaxReturn(array('status'=>2, 'msg'=>'请输入留言'));
            }

            $message_table = M('message');
            $call=$message_table->where($where)->select();
            if(count($call)>4){
                $this->ajaxReturn(array('status'=>2,'msg'=>'每天最多添加10跳'));
            }

            $rel = $message_table->add(array('title' => $subject, 'content' => $content, 'time' => time()));
            if ($rel) {
                $this->ajaxReturn(array('status'=>1,'msg'=>'操作成功'));
            } else {
                $this->ajaxReturn(array('status'=>2,'msg'=>'操作失败'));
            }
        }
    }


    public function pagess() {
        if (IS_GET) {
            $id = I('get.ids', '', 'htmlspecialchars');
            $article_table = M('article');
            $relust = $article_table->where(array('id' => $id))->find();
            $this->assign('relust', $relust);
            $this->display();
        }
    }
     public function index_page() {
        if (IS_GET) {
            $id = I('get.ids', '', 'htmlspecialchars');
            $print_table = M('print');
            $relust = $print_table->where(array('id' => $id))->find();
            $this->assign('relust', $relust);
            $this->display();
        }
    }


public function pages_pp()
{
    if (IS_GET) {
        $article_table = M('article');
        $id = I('get.ids', '', 'htmlspecialchars');
        $data = M('power as p')
            ->group('p.name')
            ->join('web_article as a on p.son_id=a.art_type')
            ->field(array('p.pid','p.name','a.*'))
            ->where(array('p.pid=92','p.son_id<>13'))
            ->order('p.id')
            ->select();
        $this->assign('data', $data);
        $relust =
            M('power as p')
                ->group('p.name')
                ->join('web_article as a on p.son_id=a.art_type')
                ->field(array('p.pid','p.name','a.*'))
                ->where('a.id='.$id)
                ->order('id desc')
                ->find();
        $this->assign('relust', $relust);
        $this->display();
    }

}

    public function pages() {
        if (IS_GET) {
            $article_table = M('article');
            $id = I('get.ids', '', 'htmlspecialchars');
            $data = M('power as p')
                ->group('p.name')
                ->join('web_article as a on p.son_id=a.art_type')
                ->field(array('p.pid','p.name','p.son_id','a.*'))
                ->where(array('p.pid=86','p.son_id<>5','p.son_id<>1','p.son_id<>4'))
                ->order('p.id')
                ->select();
            $this->assign('data', $data);
            $data1 = M('power as p')
                ->join('web_article as a on p.son_id=a.art_type')
                ->field(array('p.pid','p.name','a.*'))
                ->where('a.id='.$id)
             
                ->find();
				
            $this->assign('data1', $data1);
            $this->display();
        }
    }

}