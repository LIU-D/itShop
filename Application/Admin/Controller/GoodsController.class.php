<?php
namespace Admin\Controller;
//use Think\Controller;
class GoodsController extends CommonController {
    public function index(){
        $goods_model = D('Goods');
        $goods_list = $goods_model->select();
        $this->assign('goods_list',$goods_list);
        $this->display();
    }
    function addGoods(){
        $cate_list = D('Cate')->select();
        $this->assign('cate_list',$cate_list);
        $this->display();

    }
    function addOK(){
        $config = array(
            'maxSize' => 3000000,
            'exts' => array('jpg','png','gif'),
            'rootPath' => './Uploads/'
        );
        $uploader = new \Think\Upload();
        $upload_res = $uploader->upload();
        if(!$upload_res){
            echo $uploader->getError();
        }else{
            $img = new \Think\Image();
            $logo_path = $config['rootPath'].$upload_res['f']['savepath'].$upload_res['f']['savename'];
            $img->open($logo_path);
            $img->thumb(350,350);
            $small_logo_path = $config['rootPath'].$upload_res['f']['savepath'].'thumb_'.$upload_res['f']['savename'];
            $img->save($small_logo_path);
        }

        $data = array(
            'goods_name' => I('post.name'),
            'goods_price' => I('post.price'),
            'goods_vip_price' => I('post.price') * 0.8,
            'goods_num' => I('post.num'),
            'goods_addtime' => time(),
            'goods_desc' => I('post.desc'),
            'goods_logo' => $logo_path,
            'goods_small_logo' => $small_logo_path,
            'goods_cateid' => I('post.cateid'),
            'goods_isdel' => I('post.isdel')
        );

        if(D('Goods')->add($data)){
            $this->success('添加商品成功！',U('index'),3);
        }else{
            $this->error('添加商品失败！',U('addGoods'),3);
        }
    }
}