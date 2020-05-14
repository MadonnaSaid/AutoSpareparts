	<?php

define('__ROOT__', "../app/");
require_once(__ROOT__ . "model/Companys.php");
require_once(__ROOT__ . "controller/CompanyController.php");
require_once(__ROOT__ . "view/CompanyView.php");

$model = new Companys();
$controller = new CompanyController($model);
$view = new CompanyView($controller, $model);

if (isset($_GET['action']) && !empty($_GET['action']))
 {
 	$controller->{$_GET['action']}();
 	echo"done";
	/*switch($_GET['action'])
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
	}*/
}
else{
	echo $view->output();
}
?>