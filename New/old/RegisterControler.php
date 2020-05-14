<?php
include "RegisterView.php";
include "RegisterModel.php";


session_start();
$view= new Registration_View();
$model = new Registration_Model();

  //$User_ID=$_SESSION['Customer_ID'];

 $view->html();

if(isset($_POST['submit']))
{

  $first=$_POST['FirstName'];
  $last=$_POST['LastName'];
  $email=$_POST['email'];
  $password=$_POST['password'];

  $Cpassword=$_POST['confirmpassword'];
  
if($password == $Cpassword)
{

$temp = hash('sha512',$password);
  $model->signup($first,$last,$email,$temp);

  header("location: HomeControler.php");
}
else
	$view->Confrimerror();
  
}

?>