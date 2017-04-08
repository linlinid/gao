<?php 
header("content-type:text/html;charset=utf8");
include './studentModel.php';
if (isset($_GET['a'])) {
	$a=$_GET['a']?$_GET['a']:'index';
}else{
	$a='index';
}
if ($a=='index') {
	$data=stuIndex();
	include 'libs/Smarty.class.php';
	$smarty=new Smarty();
	$smarty->assign('data',$data);
	$smarty->display('student.tpl');
}elseif ($a=='add') {
	//添加模版调度页面 
	include 'libs/Smarty.class.php';
	$smarty=new Smarty();
	/*$smarty->assign('data',$data);*/
	$smarty->display('studentAdd.tpl');
}elseif ($a=='addhandle') {
	$res=stuAddHandle();
	if ($res) {
		echo "<script>alert('添加成功');location.href='studentController.php?a=index'</script>";
	} else {
		echo "<script>alert('添加失败');location.href='studentController.php?a=index'</script>";
	}
	
}

 ?>
