<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Verify;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }

    public function verify(){
        $config = array(
            'useCurve' =>false,
            'useNoise' =>false,
            'length' =>4,
            'fontSize'=>18,
            'bg' => array(236,245,250),
        );
        $verify = new Verify($config);
        $verify->entry();
    }

    public function check(){
        $code = I('post.code');
        $verify = new Verify();
        if(!$verify ->check($code)){
            $this->error('您输入的验证码不正确！请重新输入。',U('index'),3);
        }

        $name = I('post.username');
        $password = md5(I('post.password'));
        $users_model = D('Users');
        if($users_model->checkLogin($name,$password)){
            $this->success('登陆成功！',U('Main/index'),3);
        }else{
            $this->error('用户名或密码错误，请重新登录！',U('index'),3);
        }        
    }

    function logout(){
        session(null);
        $this->success('退出成功！',U('index'),3);
    }
}