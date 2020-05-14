<?php

define('__ROOT__', "../app/");
require_once(__ROOT__ . "model/Users.php");
require_once(__ROOT__ . "controller/UserController.php");
require_once(__ROOT__ . "view/ViewUser.php");

$model = new Users();
$controller = new UserController($model);
$view = new ViewUser($controller, $model);




 if (isset($_GET['action']) && !empty($_GET['action']))
 {
	switch($_GET['action'])
	{
			case'insert':
			$controller->Con_insertUser();
			echo $view->registerForm();
			break;
		}
}
else {
	echo $view->registerForm();
}

?>