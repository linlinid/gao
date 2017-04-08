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
 		{foreach $data as $value }
 		<tr>
 			<td>{$value.id}</td>
 			<td>{$value.name}</td>
 			<td>{$value.age}</td>
 			<td>{$value.sex}</td>
 			<td>{$value.edu}</td>
 			<td>{$value.city}</td>

 		</tr>
		{/foreach}
 	</table>
 </body>
 </html>