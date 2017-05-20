<?php 
include_once('models/AuthModel.php');
include_once('views/AuthView.php');
		
class AuthController {
	
	public function getLogin(){
		$authView = new AuthView();
		$authView->loginForm();
	}
	public function postLogin(){
		$username = $_POST['username'];
		$password = $_POST['password'];	
		$authModel = new AuthModel();
		$user = $authModel->findOne($username);
		if (!$user) echo 'Khong tim thay '.$username;
		else {
			if ($user['password']==$password) 
				echo 'Dang nhap thanh cong!';
			else 
				echo 'Sai mat khau';
		}
	}
   
}