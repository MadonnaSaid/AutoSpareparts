	<?php
define('__ROOT__', "../app/");
require_once(__ROOT__ . "model/CarsModel.php");
require_once(__ROOT__ . "controller/CarController.php");
require_once(__ROOT__ . "view/CarView.php");

$model = new Cars();
$controller = new CarController($model);
$view = new ViewCar($controller, $model);
//
/*/
*/

if (isset($_GET['action']) && !empty($_GET['action']))
 {

 	switch($_GET['action'])
	{
		case 'add':
			echo $view->addCar();
		case 'addAction':
			$controller->Con_addCar();
			echo $view->output();
			break;
		case 'edit':
			echo $view->viewEditCar($_GET['id']);
		case 'editAction':
			$controller->editCar($_GET['id']);
			echo $view->output();
			break;
		case'delete':
			$controller->delete($_GET['id']);
			echo $view->output();
	}

}
else
	echo $view->output();

if (isset($_POST['car']))
 {
 	$query = "SELECT * FROM sparepart INNER JOIN car ON sparepart.CarID=car.CarID ";

	$result = mysqli_query($conn, $query);

	if(mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_array($result))
		{
			if ($row["CarID"]==$_GET['id'])
			{
				header("Location:spareParts.php");
			}
		}
	}
}


?>
