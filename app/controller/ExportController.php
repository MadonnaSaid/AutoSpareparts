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

		if(empty($_REQUEST['companyID']) || empty($_REQUEST['CarID'])|| empty($_REQUEST['PartNumber'])||empty($_REQUEST['PartName'])||empty($_REQUEST['Quantity'])||empty($_REQUEST['itemPrice'])||empty($_REQUEST['TotalCost']))	
	    {
		 echo "<script>alert('Please Fill The empty space');
		 </script>";
	    }

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

		if(empty($_REQUEST['companyID']) || empty($_REQUEST['CarID'])|| empty($_REQUEST['PartNumber'])||empty($_REQUEST['PartName'])||empty($_REQUEST['Quantity'])||empty($_REQUEST['itemPrice'])||empty($_REQUEST['TotalCost']))	
	    {
		 echo "<script>alert('Please Fill The empty space');
		 </script>";
	    }
	    else
		$this->model->getExport($idExport)->Model_editExport($companyID,$CarID,$PartNumber,$PartName,$Quantity,$itemPrice,$TotalCost);
	}

	public function Con_deleteExport($IDExport)
	{

		
		$this->model->getExport($IDExport)->Model_deleteExport();
	}
}
?>