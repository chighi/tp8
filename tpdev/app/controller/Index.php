<?php

namespace app\controller;

use app\BaseController;

class Index extends BaseController
{
    public function index()
    {
        return "ThinkPHP8.x!!!";
        // return '<style>*{ padding: 0; margin: 0; }</style><iframe src="https://www.thinkphp.cn/welcome?version=' . \think\facade\App::version() . '" width="100%" height="100%" frameborder="0" scrolling="auto"></iframe>';
    }

    // 系统默认自带的Hello 方法，在路由文件设置后无效，需要前往config/app.php关闭路由设置 with_route： false
    // http://localhost:8000/index.php/index/hello?name=%E7%8E%8B%E4%BA%8C%E7%8B%97
    public function hello($name = 'ThinkPHP8')
    {
        return 'hello,' . $name;
    }

    public function test($info){
        return $info;
    }
}
