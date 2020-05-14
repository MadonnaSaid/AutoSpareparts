	<?php

define('__ROOT__', "../app/");
require_once(__ROOT__ . "model/Exports.php");
require_once(__ROOT__ . "controller/ExportController.php");
require_once(__ROOT__ . "view/ViewExport.php");

$model = new Exports();
$controller = new ExportController($model);
$view = new ViewExport($controller, $model);




if (isset($_GET['action']) && !empty($_GET['action']))
 {
 	switch($_GET['action'])
	{
		case'export':
			$controller->Con_insertExport();
			break;
		case 'edit':
			echo $view->ViewExportEdit($_GET['id']);
		case 'editAction':
			$controller->Con_editExport($_GET['id']);
			echo $view->output();
			break;
		
		case 'delete':
			$controller->Con_deleteExport($_GET['id']);
			echo $view->output();
		
		}
}
else
	echo $view->output();

?>
