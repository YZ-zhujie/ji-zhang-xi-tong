<?php 
namespace app\index\controller;


class IncomeController extends IndexController{
    public function index(){
        return $this->fetch();
    }

}