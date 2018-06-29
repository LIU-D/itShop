<?php
namespace Admin\Controller;
use Think\Controller;
class ShopController extends Controller {
    public function index(){
        echo "ShopController";
        echo "<br>";
        $this->display();
    }
}