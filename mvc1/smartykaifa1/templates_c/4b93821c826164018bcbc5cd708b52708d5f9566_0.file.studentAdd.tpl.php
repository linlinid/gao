<?php
/* Smarty version 3.1.30, created on 2017-02-19 14:48:24
  from "E:\WAMP\Apache\mvc\smartykaifa1\templates\studentAdd.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a93fb8d223d4_75479509',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b93821c826164018bcbc5cd708b52708d5f9566' => 
    array (
      0 => 'E:\\WAMP\\Apache\\mvc\\smartykaifa1\\templates\\studentAdd.tpl',
      1 => 1487486865,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a93fb8d223d4_75479509 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>添加学生</title>
</head>
<body>
	<form action="studentController.php?a=addhandle" method="POST">
 		<table width="240" border="1" bordercolor="#ccc" align="center" rules="all" cellpadding="5">
		 	<tr>
		 		<th>姓名</th>
		 		<td><input type="text" name="name"></input></td>
		 	</tr>
		 	<tr>
		 		<th>年龄</th>
		 		<td><input type="text" name="age"></input></td>
		 	</tr>
		 	<tr>
		 		<th>性别</th>
		 		<td><input type="text" name="sex"></input></td>
		 	</tr>
		 	<tr>
		 		<th>学历</th>
		 		<td><input type="text" name="edu"></input></td>
		 	</tr>
		 	<tr>
		 		<th>籍贯</th>
		 		<td><input type="text" name="city"></input></td>
		 	</tr>
		 	<tr>
		 		<td colspan="2"><input type="submit"  value="提交"></input></td>
		 	</tr>
 		</table>
 	</form>
</body>
</html><?php }
}
