
<?php
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
 include"menu.php";
define('__ROOT__', "../app/");
require_once(__ROOT__ . "model/Users.php");
require_once(__ROOT__ . "controller/UserController.php");
require_once(__ROOT__ . "view/ViewUser.php");


$model = new Users();
$controller = new UserController($model);
$view = new ViewUser($controller, $model);
 
if (isset($_GET['action']) && !empty($_GET['action']))
 {
	
			$controller->Con_insertUser();
			header("location:welcome.php");
}
else {
	echo $view->registerForm();
}

