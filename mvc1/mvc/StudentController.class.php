<?php 
header("content-type:text/html;charset=utf8");
class StudentController{
	//取出学生列表
	public function index(){
		include_once 'StudentModel.class.php';
		$student=new StudentModel();
		$data=$student->getstudents();
		//加载smarty
		include_once 'libs/Smarty.class.php';
		$smarty=new Smarty();
		$smarty->assign('data',$data);
		$smarty->display('student.tpl');
	}
	public function add(){
		include_once 'libs/Smarty.class.php';
		$smarty=new Smarty();
		$smarty->display('studentAdd.tpl');
	}
	public function addHandle(){
		include_once 'StudentModel.class.php';
		$student=new StudentModel();
		$res=$student->addHandle();
		if ($res) {
			echo "<script>alert('添加成功');location.href='?index.php'</script>";
		} else {
			echo "<script>alert('添加失败');history.go(-1)</script>";
		}
		
	}
}
 ?>
