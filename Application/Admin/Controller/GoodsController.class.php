<?php
namespace Admin\Controller;
//use Think\Controller;
class GoodsController extends CommonController {
    public function index(){
        $this->display();
    }
    function addGoods(){
        $cate_list = D('Cate')->select();
        $this->assign('cate_list',$cate_list);
        $this->display();

    }
}