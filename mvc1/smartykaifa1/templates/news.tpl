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
 		{foreach $data as $value }
 		<tr>
 			<td>{$value.id}</td>
 			<td>{$value.name}</td>
 			<td>{$value.sex}</td>
 		</tr>
		{/foreach}
 	</table>
 </body>
 </html>