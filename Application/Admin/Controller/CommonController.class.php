<?php 
namespace Admin\Controller;
use Think\Controller;

class CommonController extends Controller{
     function _initialize(){
        if(!session('?id')){
            $this->error('您尚未登陆！请登录后再访问此页面。',U('Index/index'),3);   
        }
    }
}

?>