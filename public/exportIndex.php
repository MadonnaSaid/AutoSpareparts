	<?php

define('__ROOT__', "../app/");
require_once(__ROOT__ . "model/Exports.php");
require_once(__ROOT__ . "controller/ExportController.php");
require_once(__ROOT__ . "view/ViewExport.php");
 
$model = new Exports();
$controller = new ExportController($model);
$view = new ViewExport($controller, $model);

if(isset($_POST["Export"]))
{
	$CompanyID=0;
	$CarID = $_REQUEST['hidden_CarID'];
	$CarName = $_REQUEST['hidden_CarName'];
	$PartNumber=$_REQUEST['hidden_PartNumber'];
	$PartName=$_REQUEST['hidden_name'];
	$Quantity = $_REQUEST['quantity'];
	$itemPrice = $_REQUEST['hidden_price'];
	$TotalCost = $itemPrice * $Quantity;
	$controller->Con_insertExport($CompanyID, $CarID, $PartNumber, $PartName,$Quantity, $itemPrice, $TotalCost);
	echo $view->output();
	}
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
			break;
		case'history':
			echo $view->ViewHistory();
		break;
		
	}
}
else
{

	echo $view->output();
}

?>
