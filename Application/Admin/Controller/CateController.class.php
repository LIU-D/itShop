<?php
namespace Admin\Controller;
//use Think\Controller;
class CateController extends CommonController {
    public function index(){
        $cate_model = D('cate');
        $cate_list = $cate_model->select();
        $this->assign('cate_list',$cate_list);
        $this->display();
    }

    public function addCate(){
        if(IS_POST){
            $cate_name = I('post.name');
            $cate_model = D('Cate');

            $data = array(
                'cate_name' => $cate_name
            );
            if($cate_model->add($data)){
                $this->success('添加商品分类成功！',U('index'),3);
            }else{
                $this->error('添加商品分类失败！',U('addCate'),3);
            }
        }else{
            $this->display();
        }
    }

    public function delCate(){
        $id = I('get.id');
        $cate_model = D('Cate');
        if($cate_model->delete($id)){
            $this->success('删除商品分类成功！',U('index'),3);
        }else{
                $this->error('删除商品分类失败！',U('index'),3);
        } 

    }
}