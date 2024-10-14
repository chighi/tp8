<?php

namespace app\controller;

use app\BaseController;
use think\facade\Db; //tp类库
// class User {
//     // 访问测试：http://localhost:8000/User/
//     public function index(){
//         return "用户类1";
//     }

//     // 访问测试：http://localhost:8000/User/Login

//     // 注意：配置域名访问 http://www.tp8cc.cc/User/login 报错—— No input file specified.
//     // 需要重写URL，所以需要配置伪静态规则
//     // 修改规则 RewriteRule ^(.*)$ index.php/$1 [QSA,PT,L]  为 RewriteRule ^(.*)$ index.php [L,E=PATH_INFO:$1] 即可

//     public function login(){
//         return "用户登录！";
//     }
// } 

// 继承基础控制器

class User extends BaseController
{
    public function index()
    {
        // return "用户";
        // 返回当前路径
        // return $this -> app ->getBasePath();

        // 返回当前方法
        return $this ->request -> action();
    }

    public function get()
    {
        $user = Db::table(table:"tpcc_user") -> select();
        return json($user);//返回数据集
    }


}