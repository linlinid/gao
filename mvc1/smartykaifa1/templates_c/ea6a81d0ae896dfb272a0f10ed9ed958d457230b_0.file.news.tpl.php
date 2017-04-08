<?php
/* Smarty version 3.1.30, created on 2017-02-19 10:22:58
  from "E:\WAMP\Apache\mvc\templates\news.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a90182e5d7d3_95463962',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea6a81d0ae896dfb272a0f10ed9ed958d457230b' => 
    array (
      0 => 'E:\\WAMP\\Apache\\mvc\\templates\\news.tpl',
      1 => 1487470944,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a90182e5d7d3_95463962 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>取出学生信息</title>
 </head>
 <body>
 	<table border="1" width="600" align="center" cellpadding="5" cellspacing="0" rules="all">
 		<tr>
 			<th>ID</th>
 			<th>姓名</th>
 			<th>性别</th>
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
 			<td><?php echo $_smarty_tpl->tpl_vars['value']->value['sex'];?>
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
