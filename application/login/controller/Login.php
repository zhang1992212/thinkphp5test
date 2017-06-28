<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/23
 * Time: 17:49
 */
namespace app\login\controller;

use think\Controller;
use app\login\Service\LoginApi;
use think\Session;

class Login extends Controller {

    private $loginApi;

    public function __construct() {
        parent::__construct();
        $this->loginApi = new LoginApi();
    }

    /**
     * @return mixed
     * 登录
     */
    public function loginView() {
        if ($this->request->isPost()) {
            //登录
            $res = $this->loginApi->checkAdminLogin();
            if ($res['code'] == '000000') {
                //将用户信息记录到session中
                session('userInfo', $res['data']);
                return $this->success($res['msg'], url('admin/Index/index'));
            } else {
                return $this->error($res['msg']);
            }
        } else {
            return $this->fetch('loginView');
        }
    }


}