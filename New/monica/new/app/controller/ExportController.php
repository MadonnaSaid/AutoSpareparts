<?php

require_once(__ROOT__ . "controller/Controller.php");

class ExportController extends controller
{
	public function Con_insertExport()
	{
		$CompanyID=$_REQUEST['companyID'];
		$CarID = $_REQUEST['CarID'];
		$PartNumber=$_REQUEST['PartNumber'];
		$PartName=$_REQUEST['PartName'];
		$Quantity = $_REQUEST['Quantity'];
		$itemPrice = $_REQUEST['itemPrice'];
		$TotalCost = $_REQUEST['TotalCost'];

		$this->model->Model_insertExport($companyID,$CarID,$PartNumber,$PartName, $Quantity, $itemPrice, $TotalCost);
	}

	public function Con_editExport($idExport) 
	{
		$CompanyID=$_REQUEST['companyID'];
		$CarID = $_REQUEST['CarID'];
		$PartNumber=$_REQUEST['PartNumber'];
		$PartName=$_REQUEST['PartName'];
		$Quantity = $_REQUEST['Quantity'];
		$itemPrice = $_REQUEST['itemPrice'];
		$TotalCost = $_REQUEST['TotalCost'];
		$this->model->getExport($idExport)->Model_editExport($companyID,$CarID,$PartNumber,$PartName,$Quantity,$itemPrice,$TotalCost);
	}

	public function Con_deleteExport($IDExport)
	{
		$this->model->getExport($IDExport)->Model_deleteExport();
	}
}




/*	else if (isset($_POST['Export']))
	{
	
	    if(isset($_SESSION["order"]))
    	{
        $array_id = array_column($_SESSION["order"], "partNumber");
        if(!in_array($_GET["id"], $array_id))
			{
			$count = count($_SESSION["order"]);
			$item_array = array(
			'partNumber'=>	$_GET["id"],
			'CarID' => $_POST["hidden_CarID"],
			'CarName' => $_POST["hidden_CarName"],
			'partName'	=>	$_POST["hidden_name"],
			'partPrice'	=>	$_POST["hidden_price"],	
			'partQuantity'	=>	$_POST["quantity"]
			);
            $_SESSION["order"][$count] = $item_array;
        	}
    }
    	else
    	{
        $array=array(
      'partNumber'=> $_GET["id"],
			'CarID'=> $_POST["hidden_CarID"],
			'CarName'=> $_POST["hidden_CarName"],
			'partName'=>$_POST["hidden_name"],
			'partPrice'	=>	$_POST["hidden_price"],	
			'partQuantity'=>	$_POST["quantity"]
        );
        $_SESSION["order"][0] = $array;
    	}
	}

	if(isset($_GET["action"]))
	{
		if($_GET["action"]=="delete")
		{
        	foreach($_SESSION["order"]as $keys => $values)
         	{
         		if($values["partNumber"]==$_GET["id"])
		   		{
			      unset($_SESSION["order"][$keys]);
				  echo '<script>alert("Item Removed")</script>';
			      echo '<script>window.location="index.php"</script>';
			    }
		  	}
		}
	}

*/
	

?>