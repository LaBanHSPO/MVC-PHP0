<?php 
include_once('models/StudentModel.php');
include_once('views/StudentView.php');	
class StudentController {

	public function listStudent(){  //Lay danh sach (tat ca) sinh vien
	// thuc hien truy van database (SELECT *
	include_once('models/StudentModel.php');
	$studentModel = new StudentModel();
	$dssv=$studentModel->listStudent();
	
	// Tao view va echo cho nguoi dung nhin thay danh sach
	 $studentView = new StudentView();
	 $studentView->showListStudent($dssv);
	}
	public function createStudent(){  
		include_once('views/StudentView.php');	
		$studentView = new StudentView();
		$studentView->showCreateStudentForm();
	}
	
	public function postCreateStudent(){  	
	$student = array();
	
		$student['MaSV']= $_POST['MaSV'];
		$student['HoTen']= $_POST['HoTen'];
		$student['GioiTinh']= $_POST['GioiTinh'];
		$student['QueQuan']= $_POST['QueQuan'];
		
		$studentModel = new StudentModel();
		$result = $studentModel->save($student);
		if ($result) header("location:index.php?controller=Student&action=getListStudent");
		else echo "THÊM BỊ LỖI";
	}
	public function deleteStudent(){  
	$id = $_GET['id'];	
	$studentModel = new StudentModel();
	$result=$studentModel->deleteById($id);
	if ($result) header("location:index.php?controller=Student&action=getListStudent");
		else echo "XÓA BỊ LỖI";
	}
	
	public function updateStudent() {
	$id = $_GET['id'];
	$studentModel = new StudentModel();
	$student=$studentModel->findStudentById($id); // tra ve 1 user co id la $id
	 $studentView = new StudentView();
	 $studentView->showUpdateStudentForm($student);
	}
	
	public function postUpdateStudent() {
		$student = array();
		$student['id']=$_GET['id'];
		$student['MaSV']= $_POST['MaSV'];
		$student['HoTen']= $_POST['HoTen'];
		$student['GioiTinh']= $_POST['GioiTinh'];
		$student['QueQuan']= $_POST['QueQuan'];
		
		
		$studentModel = new StudentModel();
		$result = $studentModel->update($student);
		if ($result) header("location:index.php?controller=Student&action=getListStudent");
		else echo "CẬP NHẬT BỊ LỖI";
	}
}
?>