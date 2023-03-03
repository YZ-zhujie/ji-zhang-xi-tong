<?php
namespace app\index\controller;
use app\index\controller\IndexController;

class UserController extends IndexController{
    public function index(){
        return $this->fetch();
    }

}