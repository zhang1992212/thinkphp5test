<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/26
 * Time: 15:06
 */
namespace app\login\Model;
use think\Db;
use think\Model;
class Admin extends Model{

    public function getAdminInfo($where)
    {
        $res = $this->where($where)->find();
        $result = [];
        if (!empty($res)) {
            $result = $res->toArray();
        }
        return $result;
    }



}