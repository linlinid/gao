<?php 
define('TOKEN', true);
session_start();
$c=isset($_GET['c'])?$_GET['c']:'student';
include_once $c.'Controller.class.php';
$lei=$c.'Controller';
$obj=new $lei();
/*$a=isset($_GET['a'])?$_GET['a']:'index';
$obj->$a();*/
 ?>