	<?php

define('__ROOT__', "../app/");
require_once(__ROOT__ . "model/Manger.php");
require_once(__ROOT__ . "controller/MangerController.php");
require_once(__ROOT__ . "view/ViewManger.php");

$model = new Manger($_SESSION["MangerID"]);
$controller = new MangerController($model);
$view = new ViewManger($controller, $model);

if (isset($_GET['action']) && !empty($_GET['action']))
 {
	switch($_GET['action'])
	{
		//case 'edit':
			//echo $view->editForm();
			//break;
		//case 'editaction':
			//$controller->edit();
			//echo $view->output();
			//break;
		case 'movie':
			header("Location:Movies.php");
			break;
		case 'delete':
			$controller->delete();
			echo $view->output();
		case 'signOut':
			session_destroy();
			header("Location:index.php");
			break;
	}
}
else
	echo $view->output();

?>