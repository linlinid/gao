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
    {foreach $data as $value}
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