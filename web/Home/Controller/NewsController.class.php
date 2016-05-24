<?php
namespace Home\Controller;
use Think\Controller;
class NewsController extends Controller {
    
	
public function Index(){
    	
    	$Article = M('news'); // 实例化Data数据对象
    	$count = $Article->count();// 查询满足要求的总记录数 $map表示查询条件
    	//传入总记录数和每页显示的记录数
        $Page = new  \Think\Page($count, 10);// 实例化分页类 
        //传入总记录数（这是根据@979137的意见修改的，这个建议非常好！）
    	$show = $Page->show();// 分页显示输出
    	// 进行分页数据查询
    	$orderby['id']='desc';
    	$list = $Article->order($orderby)->limit($Page->firstRow.','.$Page->listRows)->select();
    	$this->assign('list',$list);// 赋值数据集
    	$this->assign('page',$show);// 赋值分页输出
    	$this->display(); // 输出模板
    
    }
    
    public function Edit(){
    	 
    	    	$id = _safe($_GET['id']);//获取get变量 	
			    //  var_dump(isset($id));
			   //   var_dump(empty($id));
			   
    	    	$act['title']= "";
                $act['author']= "";
    	    	$act['content']= "";
    	    	$act['date']= "";
    	    	
    	    	$act['actstr']= "添加";
    	    	$act['actlx']= "add";
    	    	
			if ( isset($id)){
				$view = M('news');
 				$map['id'] = $id;
				$newview = $view->where($map)->find();
			//	var_dump($newview);
				if($newview){
					$act['title'] = $newview['title'];
                    $act['author'] = $newview['author'];
					$act['content'] = $newview['content'];				
 					$act['actstr']= "修改";
 					$act['actlx']= "edit";
 					$act['actid'] = $id;
						
				}
			}
			
			$this->assign('act',$act);
			$this->display();
}


public function del(){

	$id = _safe($_GET['id']);//获取get变量
	
	if ( isset($id)){
		$view = M('news');
		$map['id'] = $id;
		$newview = $view->where($map)->delete();
		//	var_dump($newview);
		if($newview){
		

	
     	$tishi['xinxi']= "删除数据id 为：$id";
     	$tishi['tishi']="删除成功";
     }else{
     	$tishi['xinxi']=$view->getError();
     	$tishi['tishi']="操作失败 ";
     }
	}
     $tishi['time']=3;
     $tishi['url']= $_SERVER['SERVER_NAME']."/news/home/News";
     
     $this->assign('tishi',$tishi);
     $this->display('save');
}
    
    
public function Save(){
	
	$id = _safe($_POST['actid']);//获取get变量
	$actlx= _safe($_POST['actlx']);
	$view = M("news"); // 实例化news对象

	// 要修改的数据对象属性赋值
	$data['title'] = _safe($_POST['acttitle']);
    $data['author'] = _safe($_POST['actauthor']);
	$data['content'] = contentfilter($_POST['actcontent']);
	$data['date'] = date("Y-m-d H:i:s");
	if($actlx=='add'){
	$lastid=	$view->data($data)->add(); // 根据条件增加的数据
		$ACTSTR="插入";
	}else{
		$ACTSTR="修改";
	$lastid= $view->where('id='.$id)->save($data); // 根据条件保存修改的数据
	}
	
 if($lastid){  //$lastid为最新插入数据的id
 			//echo "插入数据 id 为：$lastid";
 	   // $this->success(3,"__APP__/news","插入数据id 为：$lastid");
 	  //  $this->assign(3."__APP__/news","","插入数据id 为：$lastid");
 	  $tishi['xinxi']=$ACTSTR."数据id 为：$lastid";
 	  $tishi['tishi']="操作成功";
     } else {
 		//	$this->error('数据写入错误！');
     	//header("Content-Type:text/html; charset=utf-8");
     	//exit($Dao->getError().'[<AHREF="javascript:history.back()">返回</A>]');
     	$tishi['xinxi']=$data->getError();
     	$tishi['tishi']="操作失败 ";
     }
     $tishi['time']=3;
     $tishi['url']= $_SERVER['SERVER_NAME']."/news/home/News";
     
     $this->assign('tishi',$tishi);
     $this->display();
     
}
    
    public function View(){
    	$id = _safe($_GET['id']);//获取get变量
    	//echo "test view controller";
     	$view = M("news"); // 实例化User对象
       // 查找status值为1name值为think的用户数据
     	//print_r($Web);
     	$map['id'] = $id;
     	$newview = $view->where($map)->find();
     	//var_dump($list);
     	//$this->assign('newview',$newview);
     	//$this->display();
        $this->ajaxReturn($newview,'JSON');
    } 
}
function _safe($str){
    $html_string = array("&amp;", "&nbsp;", "'", '"', "<", ">", "\t", "\r");
    $html_clear = array("&", " ", "&#39;", "&quot;", "&lt;", "&gt;", "&nbsp; &nbsp; ", "");
    $js_string = array("/<script(.*)<\/script>/isU");
    $js_clear = array("");
    $frame_string = array("/<frame(.*)>/isU", "/<\/fram(.*)>/isU", "/<iframe(.*)>/isU", "/<\/ifram(.*)>/isU",);
    $frame_clear = array("", "", "", "");
    $style_string = array("/<style(.*)<\/style>/isU", "/<link(.*)>/isU", "/<\/link>/isU");
    $style_clear = array("", "", "");
    $str = trim($str);
    //过滤字符串
    $str = str_replace($html_string, $html_clear, $str);
    //过滤JS
    $str = preg_replace($js_string, $js_clear, $str);
    //过滤ifram
    $str = preg_replace($frame_string, $frame_clear, $str);
    //过滤style
    $str = preg_replace($style_string, $style_clear, $str);
    return $str;
}
function contentfilter($str){
    $html_string = array(" ","\n", "\t", "\r", "'");
    $html_clear = array("&nbsp;","<br/>", "&nbsp; &nbsp; ", "","&quot;");
    $js_string = array("/<script(.*)<\/script>/isU");
    $js_clear = array("");
    $frame_string = array("/<frame(.*)>/isU", "/<\/fram(.*)>/isU", "/<iframe(.*)>/isU", "/<\/ifram(.*)>/isU",);
    $frame_clear = array("", "", "", "");
    $str = trim($str);
    //过滤字符串
    $str = str_replace($html_string, $html_clear, $str);
    //过滤JS
    $str = preg_replace($js_string, $js_clear, $str);
    //过滤ifram
    $str = preg_replace($frame_string, $frame_clear, $str);
    return $str;
}   