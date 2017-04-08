<?php 
header("content-type:text/html;charset=utf8");
function stuIndex(){
	$dsn='mysql:host=localhost;dbname=anli;charset=utf8';
	$pdo=new PDO($dsn,'root','g616161');
	$sql="select*from student order by id desc";
	$PDOStatement=$pdo->query($sql);
	$data=$PDOStatement->fetchAll(PDO::FETCH_ASSOC);
	return $data;
}
function stuAddHandle(){
	$dsn='mysql:host=localhost;dbname=anli;charset=utf8';
	$pdo=new PDO($dsn,'root','g616161');
	$sql="insert into student(name,age,sex,edu,city) values(:name,:age,:sex,:edu,:city)";
	$PDOStatement=$pdo->prepare($sql);
	/*$data=$PDOStatement->fetchAll(PDO::FETCH_ASSOC);*/
	foreach ($_POST as $key=>$value){
		$PDOStatement->bindValue(':'.$key,$value);
	}
	if ($PDOStatement->execute()) {
		return true;
	}else{
		return false;
	}
}
 ?>
