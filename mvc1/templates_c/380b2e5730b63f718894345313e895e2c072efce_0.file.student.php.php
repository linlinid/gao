<?php
/* Smarty version 3.1.30, created on 2017-02-19 10:19:19
  from "E:\WAMP\Apache\mvc\student.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a900a792ae39_72161000',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '380b2e5730b63f718894345313e895e2c072efce' => 
    array (
      0 => 'E:\\WAMP\\Apache\\mvc\\student.php',
      1 => 1487470751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a900a792ae39_72161000 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php 
';?>header("content-type:text/html;charset=utf8");
$dsn='mysql:host=localhost;dbname=anli;charset=utf8';
$pdo=new PDO($dsn,'root','g616161');
$sql="select*from student order by id desc";
$PDOStatement=$pdo->query($sql);
$data=$PDOStatement->fetchAll(PDO::FETCH_ASSOC);
include 'libs/Smarty.class.php';
$smarty=new Smarty();
$smarty->assign('data',$data);
$smarty->display('student.php');
 <?php echo '?>';
}
}
