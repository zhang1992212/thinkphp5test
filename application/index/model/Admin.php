<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/26
 * Time: 15:06
 */
namespace app\admin\Model;
use think\Db;
use think\Model;
class Admin extends Model{

    protected $auto = ['password'];
    protected function setPasswordAttr($value)
    {
        return md5($value);
    }



}