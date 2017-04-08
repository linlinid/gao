<?php 
header("content-type:text/html;charset=utf8");
class studentController{
	public function index(){
		$student=new studentModel();
		$data=$student->stuIndex();
		include 'libs/Smarty.class.php';
		$smarty=new Smarty();
		$smarty->assign('data',$data);
		$smarty->display('student.tpl');
	}
	public function add(){
		//添加模版调度页面 
		include 'libs/Smarty.class.php';
		$smarty=new Smarty();
		/*$smarty->assign('data',$data);*/
		$smarty->display('studentAdd.tpl');
	}
	public function addhandle(){
		$student=new studentModel();
		$res=$student->stuAddHandle();
		if ($res) {
			echo "<script>alert('添加成功');location.href='studentController.class.php?a=index'</script>";
		} else {
			echo "<script>alert('添加失败');location.href='studentController.class.php?a=index'</script>";
		}
	}
}
include './studentModel.class.php';
$obj=new studentController();
$a=isset($_GET['a'])?$_GET['a']:'index';
$obj->$a();
/*if (isset($_GET['a'])) {
	$a=$_GET['a']?$_GET['a']:'index';
}else{
	$a='index';
}
if ($a=='index') {
	
}elseif ($a=='add') {
	
}elseif ($a=='addhandle') {
	
	
}*/

 ?>
