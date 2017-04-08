<?php
/* Smarty version 3.1.30, created on 2017-02-19 11:28:42
  from "E:\WAMP\Apache\mvc\smartykaifa\templates\studentAdd.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a910ea980f19_63052302',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e3017c70ae772fd6545e987bb82eabf589d7959' => 
    array (
      0 => 'E:\\WAMP\\Apache\\mvc\\smartykaifa\\templates\\studentAdd.tpl',
      1 => 1487474546,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a910ea980f19_63052302 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>添加学生</title>
</head>
<body>
	<form action="studentAddHandle.php" method="POST">
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
