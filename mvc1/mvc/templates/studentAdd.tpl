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
</html>