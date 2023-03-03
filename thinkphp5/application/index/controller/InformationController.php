<?php
namespace app\index\controller;
use think\Controller;
use app\common\model\User;
use think\Request;
class InformationController extends Controller{
    public function commonSession(){
        $id = session('userId');
         return  User::get($id);
    }
    public function index(){
       $User = $this->commonSession();
       $this->assign('user',$User);
       return $this->fetch();
    }
    public function edit(){
        $User = $this->commonSession();
        $this->assign('user',$User);
        return $this->fetch();
    }
    public function updata(){

    }   
    public function 
}