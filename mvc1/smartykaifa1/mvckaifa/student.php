<?php 
header("content-type:text/html;charset=utf8");
$dsn='mysql:host=localhost;dbname=anli;charset=utf8';
$pdo=new PDO($dsn,'root','g616161');
$sql="select*from student order by id desc";
$PDOStatement=$pdo->query($sql);
$data=$PDOStatement->fetchAll(PDO::FETCH_ASSOC);
include 'libs/Smarty.class.php';
$smarty=new Smarty();
$smarty->assign('data',$data);
$smarty->display('student.tpl');
 ?>
