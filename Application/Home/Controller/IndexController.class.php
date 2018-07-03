<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $goods_tj = D('Goods')
                    ->where('goods_isdel="上架" and goods_tj=1')
                    ->select();
        $this->assign('goods_tj',$goods_tj);

        $goods_dn = D('Goods')
                    ->where('goods_isdel="上架" and goods_cateid=3')
                    ->limit(0,8)
                    ->select();
        $this->assign('goods_dn',$goods_dn);

        $this->display();
    
    }

    function detail(){
        $id = I('get.id');
        $goods_info = D('Goods')->find($id);
        $this->assign('goods_info',$goods_info);
        $this->display();
    }

    function search(){
        $keyword = I('post.key');
        $goods_list = D('Goods')
                    ->where("goods_name like '%$keyword%'")
                    ->select();
        $this->assign('goods_list',$goods_list);
        $this->display();

    }
}