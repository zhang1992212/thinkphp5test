<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/26
 * Time: 15:37
 */
namespace app\login\Service;

use app\login\Model\Admin;
class LoginApi {
    
    private $adminModel;
    public function __construct()
    {
        $this->adminModel = new Admin();
    }


    public function checkAdminLogin()
    {
        //  校验数据格式
        $validate = validate('admin/Admin')->scene('select');
        if (!$validate->check(input())) {
            return ['code' => '999999', 'msg' => $validate->getError()];
        }
        //  查询是否可以登录
        $admin_where = [
            'account' => input('account'),
            'password' => md5(input('password')),
            'deleted' => 1,
        ];
        $adminInfo = $this->adminModel->getAdminInfo($admin_where);
        if (empty($adminInfo)) {
            return ['code' => '999999', 'msg' => '用户名或密码错误'];
        } else if ($adminInfo['status'] == 0) {
            return ['code' => '999999', 'msg' => '该账户已被冻结'];
        }
        return ['code' => '000000', 'msg' => '登录成功', 'data' => $adminInfo];
    }

}