<?php
namespace app\admin\controller;

use app\admin\controller\BaseController;

class Index extends BaseController {
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->assign('userInfo', session('userInfo'));
        return $this->fetch('index');
    }

    public function welcome() {
        return $this->fetch();
    }
}
