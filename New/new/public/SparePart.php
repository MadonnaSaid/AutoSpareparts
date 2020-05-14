<?php

define('__ROOT__', "../app/");
require_once(__ROOT__ . "model/SpareParts.php");
require_once(__ROOT__ . "controller/SparePartController.php");
require_once(__ROOT__ . "view/SparePartView.php");

$model = new SpareParts($_GET["CarID"]);
$controller = new SparePartController($model);
$view = new ViewSparePart($controller, $model);


 if (isset($_GET['action']) && !empty($_GET['action']))
  {
  	switch($_GET['action'])
 	{
 		case 'add':
 			echo $view->addSparePart();
 		case 'addAction':
 			$controller->Con_addSparePart();
 			echo $view->output();
 			break;
 			/*case"Import":
 			echo $controller->import();
 			echo $view->output();
 			break;*/

// 		case 'edit':
// 			echo $view->viewEditSparePart($_GET['id']);
// 		case 'editAction':
// 			$controller->editSparePart($_GET['id']);
// 			echo $view->output();
 	}
 }
 else
	echo $view->output();
?>