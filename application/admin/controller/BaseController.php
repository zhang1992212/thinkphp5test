<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/27
 * Time: 17:43
 */
namespace app\admin\controller;

use think\Controller;
use think\Debug;
use think\Log;

class BaseController extends Controller {
    private $_return;

    public function __construct() {
        parent::__construct();
        Debug::remark('_start');
        //        $request='';
        //        $request.='HTTP_USER_AGENT:'. $_SERVER['HTTP_USER_AGENT'].';';
        //        $request.='HTTP_ACCEPT:'. $_SERVER['HTTP_ACCEPT'].';';
        //        //$request.='HTTP_COOKIE:'. $_SERVER['HTTP_COOKIE'].';';
        //        $request.='SERVER_ADDR:'. $_SERVER['SERVER_ADDR'].';';
        //        $request.='REMOTE_ADDR:'. $_SERVER['REMOTE_ADDR'].';';
        //        $this->reqtype = strtolower(request::instance()->controller() . '/' . request::instance()->action());
        //        Log::write('---- '.$this->reqtype.' 请求 ------开始--------','info');
        //        Log::write('请求头：'.json_encode($request),'info');
        //        $this->param = request()->post();
//        $this->_return->setRequest($this->param);
//        $this->_return->setTimeStart(date('Y-m-d H:i:s'));
//        $this->_return->setSourceIp(get_client_ip());
//        $this->_return->setSourceUrl("http://{$_SERVER['SERVER_NAME']}{$_SERVER['REQUEST_URI']}");
//        $this->_return->setServerVersion(phpversion());
//        $this->_return->setMaxFileSize(ini_get('upload_max_filesize'));
//        $this->_return->setMaxPostSize(ini_get('post_max_size'));
        //        Log::write('请求参数：'.json_encode($this->param),'info');
        //        $this->param['page'] = !empty($this->param['page'])  ? $this->param['page'] : config('DEFAULT_PAGE');
        //        $this->param['rows'] = !empty($this->param['rows'])  ? $this->param['rows'] : config('DEFAULT_ROWS');
        //        $this->param['_start'] = ( $this->param['page'] - 1 ) * $this->param['rows'];
        //        $this->param['_limit'] = $this->param['rows'];


    }

    protected function output($param) {
        $data = $param['data'];
        //        $code =
        //        return $this->result($data)
    }
}