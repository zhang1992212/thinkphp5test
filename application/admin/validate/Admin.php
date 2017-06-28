<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/26
 * Time: 16:10
 */
namespace app\admin\validate;

use think\Validate;

class Admin extends Validate {
    protected $rule =   [
//        'account'  => 'require|max:25|token',
        'account'  => 'require|max:25',
        'password'   => 'require',
    ];

    protected $message  =   [
        'account.require' => '账号不能为空',
        'account.max'     => '名称最多不能超过25个字符',
        'password.require'   => '密码不能为空',
    ];

    protected $scene = [
        'add'  =>  ['password'],
        'select' => ['account','password'],
    ];
}