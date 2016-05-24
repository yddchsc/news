<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){


      	/*$Web = M('set'); // 实例化Web 对象
        $data = $Web->find();
        $this->assign('data',$data);*/

        $num[0] = 7;
        $num[1] = 1;
        $this->assign('num',$num);

    	$news = M("news"); // 实例化news对象
        $list = $news->select();   	
		//var_dump($list);
        $this->assign('list',$list);
        $this->display();

    }
}