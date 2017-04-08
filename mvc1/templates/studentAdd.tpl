<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>添加学生</title>
</head>
<body>
	<form action="studentController.class.php?a=addhandle" method="POST">
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
</html>