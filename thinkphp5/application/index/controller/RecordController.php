<?php 
namespace  app\index\controller;

class RecordController extends IndexController{
    public function index(){
      return $this->fetch();  
    }
}