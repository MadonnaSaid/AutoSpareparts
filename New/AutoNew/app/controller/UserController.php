<?php

require_once(__ROOT__ . "controller/Controller.php");
//"ID`, `FullName`, `username`, `email`, `password`, `Age`, `phoneNumber`, `Role`"
class UserController extends controller
{
	//Manger
	public function Con_insertUser()
	{
		$FullName = $_REQUEST['FullName'];
		$username=$_REQUEST['username'];
		$email=$_REQUEST['email'];
		$password = $_REQUEST['password'];
		$Age = $_REQUEST['Age'];
		$phoneNumber = $_REQUEST['phoneNumber'];
		$Role=$_REQUEST['Role'];

		$this->model->Model_insertUser($FullName,$username,$email,$password,$Age,$phoneNumber, $Role);
	}

	public function Con_editUser() 
	{
		$FullName = $_REQUEST['FullName'];
		$username=$_REQUEST['username'];
		$email=$_REQUEST['email'];
		$password = $_REQUEST['password'];
		$Age = $_REQUEST['Age'];
		$phoneNumber = $_REQUEST['phoneNumber'];
		$Role=$_REQUEST['Role'];
		
		$this->model->Model_editUser($FullName,$username,$email,$password,$Age,$phoneNumber,$Role);
	}
	
	public function Con_deleteUser()
	{
		$this->model->Model_deleteUser();
	}

	public function EmployeeUser(){
		  
		
	}
	public function ManagerUser(){



	}

	public function Con_login(){

		$UserName=$_REQUEST["username"];
		$password=$_REQUEST["password"];
		$this->model->ModelloginUser($username,$password);

	}
	//Employee
	// public function Con_insertEmployee() 
	// {
	// 	$EmployName = $_REQUEST['EmployName'];
	// 	$UserName = $_REQUEST['UserName'];
	// 	$Email=$_REQUEST['Email'];
	// 	$SocialID=$_REQUEST['SocailID'];
	// 	$age = $_REQUEST['age'];
	// 	$phoneNumber = $_REQUEST['phoneNumber'];
	// 	$address=$_REQUEST['address'];

	// 	$this->model->insertEmployee($EmployName,$UserName,$Email,$SocialID,$age,$phone);
	// }

	// public function Con_editEmployee() 
	// {
	// 	$EmployName = $_REQUEST['EmployName'];
	// 	$UserName = $_REQUEST['UserName'];
	// 	$Email=$_REQUEST['Email'];
	// 	$SocialID=$_REQUEST['SocailID'];
	// 	$age = $_REQUEST['age'];
	// 	$phoneNumber = $_REQUEST['phoneNumber'];
	// 	$address=$_REQUEST['address'];

	// 	$this->model->Model_editEmployee($name,$password,$age,$phone);
	// }
	// public function Con_delete()
	// {
	// 	$this->model->deleteUser();
	//}

	
}
?>
