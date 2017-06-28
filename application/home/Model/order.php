<?php

/**
 * 手续费账户设置表
 * @author gaoxiangyu@dycd.com
 */

namespace app\index\Model;

use think\Model;
use think\db;

class Order extends Model {

    protected $connection = 'database';
    protected $table = 'orders';

    //自定义初始化
    public function initialize() {
        //需要调用`Model`的`initialize`方法
        parent::initialize();
        //TODO:自定义的初始化
    }
    public function getall(){
    	$res =  $this->select();
        $a = [];
        foreach ($res as $v) {
            $a[] = $v->toArray();
        }
        return $a;
    }


    
  }  
    
?>