<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/23
 * Time: 17:44
 */
namespace app\index\behavior;
use think\Controller;
class CheckAuth extends Controller{
    public function run()
    {
        if (!session('id')) {
           return $this->redirect(url('login/login/loginView'));
        }
    }
}