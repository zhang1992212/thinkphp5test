<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/23
 * Time: 17:44
 */
namespace app\admin\behavior;
use think\Controller;
class CheckAuth extends Controller {
    public function run()
    {
        if (is_null(session('userInfo'))) {
           return $this->redirect(url('login/login/loginView'));
        }
    }
}