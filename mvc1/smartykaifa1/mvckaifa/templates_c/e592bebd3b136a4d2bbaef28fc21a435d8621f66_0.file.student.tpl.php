<?php
/* Smarty version 3.1.30, created on 2017-02-19 12:55:31
  from "E:\WAMP\Apache\mvc\smartykaifa 2\templates\student.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a9254325af24_66703269',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e592bebd3b136a4d2bbaef28fc21a435d8621f66' => 
    array (
      0 => 'E:\\WAMP\\Apache\\mvc\\smartykaifa 2\\templates\\student.tpl',
      1 => 1487471261,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a9254325af24_66703269 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>取出学生信息</title>
 </head>
 <body>
 <h2 align="center">学生列表</h2>
 <p align="center"><a href='studentAdd.php'>添加学生</a></p>
 	<table border="1" width="600" align="center" cellpadding="5" cellspacing="0" rules="all">
 		<tr>
 			<th>ID</th>
 			<th>姓名</th>
 			<th>年龄</th>
 			<th>性别</th>
 			<th>学历</th>
 			<th>城市</th>
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
