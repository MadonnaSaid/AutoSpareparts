	<?php

define('__ROOT__', "../app/");
require_once(__ROOT__ . "model/spareParts.php");
require_once(__ROOT__ . "controller/sparePartController.php");
require_once(__ROOT__ . "view/sparePartView.php");

$model = new SpareParts();
$controller = new SparePartController($model);
$view = new ViewSparePart($controller, $model);

if (isset($_GET['action']) && !empty($_GET['action']))
 {
	switch($_GET['action'])
	{
		case'add':
		$view->addSparePart();
		case'addAction':
		$controller->Con_addSparePart();
		$view->output();
	}
}
else
	echo $view->output();
	
?>