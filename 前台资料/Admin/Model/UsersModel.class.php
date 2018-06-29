<?php 
namespace Admin\Model;
use Think\Model;

class UsersModel extends Model{
    function checkLogin($name, $pwd){
        $info = $this->where("user_name='$name' and user_pwd='$pwd'")->find();
        if(empty($info)){
          return false;
        } else {
            //将用户信息记录到session当中
            session('id', $info['user_id']);
            session('name', $info['user_name']);

            return true;
        }
    }
}

?>