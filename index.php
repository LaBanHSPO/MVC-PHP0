<?php 
if (isset($_GET['controller'])){
	include_once('controllers/StudentController.php');
	include_once('controllers/AuthController.php');
	$controller= $_GET['controller'].'Controller';
	$action = $_GET['action'];	
	$controller = new $controller();
	switch ($action) {
		case "getListStudent": {
		  $controller->listStudent();
		  break;
		}
		case "create": {		
		 $controller->createStudent();
		  break;
		}
		case "postCreateStudent" : {
			$controller->postCreateStudent();
			break;
		}
		case "deleteStudent" : {
			$controller->deleteStudent();
			break;
		}
		case "updateStudent" : {
			$controller->updateStudent();
			break;
		}
		
		case "postUpdateStudent" : {
			$controller->postUpdateStudent();
			break;
		}
		case "getLogin":{
			$controller->getLogin(); //calling AuthController
            break;		
		}
		case "postLogin": {
			$controller->postLogin(); 
            break; 
		}				
		 default: {
			echo "404 - KHONG TIM THAY ".$action;
		 }
	}
}
else {
	 include_once ('views/StudentView.php');
	 $myView = new StudentView();
	 $myView->trangchu();
}	
?>