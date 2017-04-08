<?php 
header("content-type:text/html;charset=utf8");
/*echo "<pre>";
print_r($_POST);*/
$dsn='mysql:host=localhost;dbname=anli;charset=utf8';
$pdo=new PDO($dsn,'root','g616161');
$sql="insert into student(name,age,sex,edu,city) values(:name,:age,:sex,:edu,:city)";
$PDOStatement=$pdo->prepare($sql);
/*$data=$PDOStatement->fetchAll(PDO::FETCH_ASSOC);*/
foreach ($_POST as $key=>$value){
	$PDOStatement->bindValue(':'.$key,$value);
}
if ($PDOStatement->execute()) {
	echo "<script>alert('添加成功');location.href='student.php'</script>";
}else{
	echo "<script>alert('添加失败');";
}
 ?>
