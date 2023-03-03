<?php
namespace app\index\controller;
use app\common\model\User;
use think\Request;
class RegisterController extends IndexController {
    private function saveUser(User $User){
        $User->name = Request::instance()->post('name');
        $User->username = Request::instance()->post('username');
        $User->sex = input('post.sex/d');
        $User->email = input('post.email');
        $User->password = input('post.password');
        // 更新或保存
        return $User->validate(true)->save();
    }
    public function index(){
      return  $this->fetch();
    }
    public function insert(){
        $User = new User();
        if(!is_null(!$this->saveUser($User))){
            return $this->success('注册成功',url('Login_controller/index'));
        }else{
            return $this->error('注册失败', url('index'));
        }

    }

    
}
