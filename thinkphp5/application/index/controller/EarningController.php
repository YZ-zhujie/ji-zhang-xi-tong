<?php 
namespace  app\index\controller;

class EarningController extends IndexController{
    public function index(){
      return $this->fetch();  
    }
}