<?php
namespace app\controller;

class Error
{
   public function __call($name, $arguments)
   {
    // 返回后缀参数，不加默认index
    // return "不存在的控制器".$name;
    // 传递参数获取json
    return json($arguments);
    // 传递参数实例
    // http://www.tp8cc.cc:8000/ljlj/name?name=Jamechy&age=34&born=19900923
   }
}