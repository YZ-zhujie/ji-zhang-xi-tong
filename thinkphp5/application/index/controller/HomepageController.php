<?php
namespace app\index\controller;
use think\Controller;
class HomepageController extends Controller{
    public function index(){
        return $this->fetch();
    }
}