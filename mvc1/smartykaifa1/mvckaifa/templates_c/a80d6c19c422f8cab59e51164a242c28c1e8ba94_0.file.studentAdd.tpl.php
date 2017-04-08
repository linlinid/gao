<?php
/* Smarty version 3.1.30, created on 2017-02-19 12:55:32
  from "E:\WAMP\Apache\mvc\smartykaifa 2\templates\studentAdd.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a92544850976_50443367',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a80d6c19c422f8cab59e51164a242c28c1e8ba94' => 
    array (
      0 => 'E:\\WAMP\\Apache\\mvc\\smartykaifa 2\\templates\\studentAdd.tpl',
      1 => 1487474546,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a92544850976_50443367 (Smarty_Internal_Template $_smarty_tpl) {
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
