<?php
/* Smarty version 3.1.30, created on 2017-02-19 16:49:13
  from "E:\WAMP\Apache\mvc\mvc\templates\student.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a95c09385029_58367816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5f708635c8dd593d6fa1e0d9172cc4640b3db98' => 
    array (
      0 => 'E:\\WAMP\\Apache\\mvc\\mvc\\templates\\student.tpl',
      1 => 1487494145,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a95c09385029_58367816 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>取出学生列表</title>
</head>
<body>
<h2 align="center">学生列表</h2>
<p align="center">
    <a href="?c=Student&a=add">添加学生</a>
</p>
<table border="1" width="600" align="center" cellspacing="0" cellpadding="2" rules="all">
    <tr>
        <td>ID</td>
        <td>姓名</td>
        <td>年龄</td>
        <td>性别</td>
        <td>学历</td>
        <td>城市</td>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['age'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['sex'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['edu'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['city'];?>
</td>
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>
</body>
</html><?php }
}
