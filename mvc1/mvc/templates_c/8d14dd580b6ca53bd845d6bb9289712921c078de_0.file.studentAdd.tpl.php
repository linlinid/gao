<?php
/* Smarty version 3.1.30, created on 2017-02-19 16:55:05
  from "E:\WAMP\Apache\mvc\mvc\templates\studentAdd.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a95d69904d63_77443420',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d14dd580b6ca53bd845d6bb9289712921c078de' => 
    array (
      0 => 'E:\\WAMP\\Apache\\mvc\\mvc\\templates\\studentAdd.tpl',
      1 => 1487494282,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a95d69904d63_77443420 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>添加学生</title>
</head>
<body>
<form action="?c=Student&a=addHandle" method="post">
<table border="1" rules="all" width="500" align="center" cellpadding="2" cellspacing="0">
    <tr>
        <td>姓名：</td>
        <td><input type="text" name="name"></td>
    </tr>
    <tr>
        <td>年龄：</td>
        <td><input type="text" name="age" size="4"></td>
    </tr>
    <tr>
        <td>性别：</td>
        <td>
            <input type="radio" name="sex" value="男" checked>男
            <input type="radio" name="sex" value="女">女
        </td>
    </tr>
    <tr>
        <td>学历：</td>
        <td>
            <select name="edu">
                <option value="大专">大专</option>
                <option value="大本">大本</option>
                <option value="研究生">研究生</option>
                <option value="高中">高中</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>城市</td>
        <td><input type="text" name="city"></td>
    </tr>
    <tr>
        <td colspan="2">
            <input type="submit" value="添加">
        </td>
    </tr>
</table>
</form>
</body>
</html><?php }
}
