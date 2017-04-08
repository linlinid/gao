<?php 
//单一入口
$c=isset($_GET['c'])?$_GET['c']:'Student';//控制器
$a=isset($_GET['a'])?$_GET['a']:'index';
//组织一个要实例化的控制器
$controller=$c.'Controller';//StudentController
//加载控制器文件
require_once $controller.'.class.php';//
$obj=new $controller();
$obj->$a();
 ?>