<?php

/**
 * 手续费账户设置表
 * @author gaoxiangyu@dycd.com
 */

namespace app\index\Model;

use think\Model;

class Test extends Model {

    protected $connection = 'database';
    protected $table = 'test';

    //自定义初始化
    public function initialize() {
        //需要调用`Model`的`initialize`方法
        parent::initialize();
        //TODO:自定义的初始化
    }
    public function getall(){
    	return $this->find();
    }
    
  }  
    
?>