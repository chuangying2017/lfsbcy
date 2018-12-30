<?php

namespace Mobile\Controller;

use Mobile\Controller\CommonController;

class ArticleController extends CommonController {

    //活动分享
    public function activitylist() {
        
        $article_table = M('article');
        $id = I('get.id', '', 'htmlspecialchars');
        $map =$article_table->field(array('art_title','id','art_type'))->where( 'art_type='.$id)->select();
        $this->assign('map', $map);
        $count = $article_table->where($map)->count();
        $Page = new \Think\Pages($count, 12);
        $Page->setConfig('prev', '上一页');
        $Page->setConfig('next', '下一页');
        $Page->setConfig('last', '末页');
        $Page->setConfig('first', '首页');
        $show = $Page->show();
        $list = $article_table->field('id,art_title')->order('art_time desc')->where($map)->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('page', $show);
        $this->assign('list', $list);
		$arr = M('power as p')
				->join('web_article as a on p.son_id = a.art_type')
				->field('p.name')
				->where('son_id='.$id)
				->find();
		$this->assign('arr',$arr);	
        $this->display();
    }

    //品牌文化
       public function brand() {
        $id = I('get.id', '', 'htmlspecialchars');
        $article_table = M('article');
        $map1 = $article_table->field(array('art_title','id','art_type'))->where('art_type>=8 and art_type<13')->select();
        $this->assign('map1',$map1);
  $data = M('power as p')
            ->group('p.name')
            ->join('web_article as a on p.son_id=a.art_type')
            ->field(array('p.pid','p.name','a.*'))
            ->where(array('pid=92','a.art_type<>13'))
            ->order('p.id desc')
            ->select();
        $this->assign('data', $data);
        $relust = $article_table->where(array('id' => $id))->find();
        $this->assign('relust', $relust);
        $map =$article_table->field(array('art_title','id','art_type'))->where( 'art_type='.$id)->select();
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
            ->where('pid=92')
            ->order('id desc')
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
            ->where('p.pid=86')
            ->order('p.id')
            ->select();
        $this->assign('data', $data);
        if (in_array($id, array(1, 2, 3, 4, 5))) {
            $type = $id;
        } else {
            $type = array('in', '1,2,3,4,5');
        }
        $map = array('art_status' => 1, 'art_type' => $type);
        $count = $article_table->where($map)->count();

        $Page = new \Think\Pages($count,3);
        $Page->setConfig('prev', '上一页');
        $Page->setConfig('next', '下一页');
        $Page->setConfig('last', '末页');
        $Page->setConfig('first', '首页');
        $show = $Page->show();
        $list =M('power as p')
            ->join('web_article as a on p.son_id=a.art_type')
            ->field(array('p.pid','p.name','a.*'))
            ->where('pid=86')
            ->order('id desc')
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
            $Page = new \Think\Pages($count, 4);
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

    public function pages() {
        if (IS_GET) {
            $article_table = M('article');
            $id = I('get.ids', '', 'htmlspecialchars');
            $map1 = $article_table->field(array('art_title','id','art_type'))->where('art_type>=8 and art_type<13')->select();
            $this->assign('map1',$map1);
            $map2 = $article_table->field(array('art_title','id','art_type'))->where('art_type=1')->select();
            $this->assign('map2',$map2);
            $data = M('power as p')
                ->join('web_article as a on p.son_id=a.art_type')
                ->field(array('p.pid','p.name','a.*'))
                ->where(array('pid=92','a.art_type<>13'))
                ->group('p.name')
                ->order('id desc')
                ->select();
            $this->assign('data', $data);
$idd = I('get.ids', '', 'htmlspecialchars');
		$arr = M('power as p')
				->join('web_article as a on p.son_id = a.art_type')
				->field('p.name')
				->where('a.id='.$idd)
				->find();
		$this->assign('arr',$arr);	

            $data1 = M('power as p')
                ->join('web_article as a on p.son_id=a.art_type')
                ->field(array('p.pid','p.name','a.*'))
                ->where('a.art_type='.$id)
                ->order('id desc')
                ->select();

            $this->assign('data1', $data1);
            $relust = $article_table->where(array('id' => $id))->find();
            $this->assign('relust', $relust);
            $this->display();
        }
    }
    public function pageds() {
        if (IS_GET) {
            $article_table = M('article');
            $id = I('get.ids', '', 'htmlspecialchars');
            $map1 = $article_table->field(array('art_title','id','art_type'))->where('art_type>=8 and art_type<13')->select();
            $this->assign('map1',$map1);
            $map2 = $article_table->field(array('art_title','id','art_type'))->where('art_type=1')->select();
            $this->assign('map2',$map2);
            $data = M('power as p')
                ->join('web_article as a on p.son_id=a.art_type')
                ->field(array('p.pid','p.name','a.*'))
                ->where(array('pid=92','a.art_type<>13'))
                ->group('p.name')
                ->order('id desc')
                ->select();
            $this->assign('data', $data);
$idd = I('get.ids', '', 'htmlspecialchars');
		$arr = M('power as p')
				->join('web_article as a on p.son_id = a.art_type')
				->field('p.name')
				->where('a.id='.$idd)
				->find();
		$this->assign('arr',$arr);	

            $data1 = M('power as p')
                ->join('web_article as a on p.son_id=a.art_type')
                ->field(array('p.pid','p.name','a.*'))
                ->where('a.art_type='.$id)
                ->order('id desc')
                ->select();

            $this->assign('data1', $data1);
            $relust = $article_table->where(array('id' => $id))->find();
            $this->assign('relust', $relust);
            $this->display();
        }
    }
    public function Activity() {
        if (IS_GET) {
            $article_table = M('article');
            $id = I('get.ids', '', 'htmlspecialchars');
            $map1 = $article_table->field(array('art_title','id','art_type'))->where('art_type>=8 and art_type<13')->select();
            $this->assign('map1',$map1);
            $map2 = $article_table->field(array('art_title','id','art_type'))->where('art_type=1')->select();
            $this->assign('map2',$map2);
            $data = M('power as p')
                ->join('web_article as a on p.son_id=a.art_type')
                ->field(array('p.pid','p.name','a.*'))
                ->where(array('pid=92','a.art_type<>13'))
                ->group('p.name')
                ->order('id desc')
                ->select();
            $this->assign('data', $data);

			$arr = M('power as p')
				->join('web_article as a on p.son_id = a.art_type')
				->field('p.name')
				->where('a.id='.$id)
				->find();
		$this->assign('arr',$arr);	

            $data1 = M('power as p')
                ->join('web_article as a on p.son_id=a.art_type')
                ->field(array('p.pid','p.name','a.*'))
                ->where('a.art_type='.$id)
                ->order('id desc')
                ->select();

            $this->assign('data1', $data1);
            $relust = $article_table->where(array('id' => $id))->find();
            $this->assign('relust', $relust);
            $this->display();
        }
    }
    public function jieshao() {
        if (IS_GET) {
            $article_table = M('article');
            $id = I('get.ids', '', 'htmlspecialchars');
            $map1 = $article_table->field(array('art_title','id','art_type'))->where('art_type>=8 and art_type<13')->select();
            $this->assign('map1',$map1);
            $map2 = $article_table->field(array('art_title','id','art_type'))->where('art_type=1')->select();
            $this->assign('map2',$map2);
            $data = M('power as p')
                ->join('web_article as a on p.son_id=a.art_type')
                ->field(array('p.pid','p.name','a.*'))
                ->where(array('pid=86'))
                ->group('p.name')
                ->order('id desc')
                ->select();
            $this->assign('data', $data);


            $data1 = M('power as p')
                ->join('web_article as a on p.son_id=a.art_type')
                ->field(array('p.pid','p.name','a.*'))
                ->where('a.art_type='.$id)
                ->order('id desc')
                ->select();

            $this->assign('data1', $data1);
            $relust = $article_table->where(array('id' => $id))->find();
            $this->assign('relust', $relust);
            $this->display();
        }
    }
    public function pages_chanp() {
        if (IS_GET) {
            $article_table = M('article');
            $id = I('get.ids', '', 'htmlspecialchars');

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
            $map =$article_table->field(array('art_title','id','art_type'))->where( 'art_type=7')->select();
            $this->assign('map', $map);


            $relust = $article_table->where(array('id' => $id))->find();
            $this->assign('relust', $relust);
            $this->display();
        }
    }

    public function pagess() {
        if (IS_GET) {
            $id = I('get.ids', '', 'htmlspecialchars');
            $article_table = M('article');
            $map = $article_table->field(array('art_title','id'))->where('art_type=14')->select();
            $this->assign('map', $map);
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
            $id = I('get.id', '', 'htmlspecialchars');
            $data = M('power as p')
                ->group('p.name')
                ->join('web_article as a on p.son_id=a.art_type')
                ->field(array('p.pid','p.name','a.*'))
                ->where(array('pid=92','a.art_type<>13'))
                ->order('id desc')
                ->select();
            $this->assign('data', $data);
            $data1 = M('power as p')
                ->join('web_article as a on p.son_id=a.art_type')
                ->field(array('p.pid','p.name','a.*'))
                ->where('a.art_type='.$id)
                ->order('id desc')
                ->select();

            $this->assign('data1', $data1);
            $this->display();
        }

    }

    public function products() {
        $article_table = M('article');
        $id = I('get.id', '', 'htmlspecialchars');
        $map1 = $article_table->field('id,art_title,art_img,art_type,art_info')->where('art_type=1')->select();
        $this->assign('map1',$map1);
		$idd = I('get.ids', '', 'htmlspecialchars');
		$arr = M('power as p')
				->join('web_article as a on p.son_id = a.art_type')
				->field('p.name')
				->where('a.id='.$idd)
				->find();
		$this->assign('arr',$arr);	
		$data = M('power as p')
            ->group('p.name')
            ->join('web_article as a on p.son_id=a.art_type')
            ->field(array('p.pid','p.id','p.name','a.*'))
            ->where('p.pid=86')
            ->order('p.id')
            ->select();
        $this->assign('data', $data);
        if (in_array($id, array(1, 2, 3, 4, 5))) {
            $type = $id;
        } else {
            $type = array('in', '1,2,3,4,5');
        }
        $map = array('art_status' => 1, 'art_type' => $type);
        $count = $article_table->where($map)->count();

        $Page = new \Think\Pages($count,3);
        $Page->setConfig('prev', '上一页');
        $Page->setConfig('next', '下一页');
        $Page->setConfig('last', '末页');
        $Page->setConfig('first', '首页');
        $show = $Page->show();
         $data1 = M('power as p')
                ->join('web_article as a on p.son_id=a.art_type')
                ->field(array('p.pid','p.name','a.*'))
                ->where('a.art_type='.$id)
                ->order('id desc')
                ->select();

            $this->assign('data1', $data1);
         
        $this->display();
    }
}
