<?php

require_once(__ROOT__ . "controller/Controller.php");

class SparePartController extends Controller
{
	public function Con_addSparePart()
	{
		$PartNumber=$_REQUEST['PartNumber'];
		$PartName=$_REQUEST['PartName'];
		$partCountry=$_REQUEST['partCountry'];
		$carName=$_REQUEST['carName'];
		$partPrice=$_REQUEST['partPrice'];
		$partQuantity=$_REQUEST['partQuantity'];
		$image=$_REQUEST['image'];
		$this->model->addSparePart($PartNumber,$PartName,$partCountry,$carName,$partPrice,$partQuantity,$image);
	}

	public function editSparePart($PartNumber)
	 {
		$PartNumber=$_REQUEST['PartNumber'];
		$PartName=$_REQUEST['PartName'];
		$partCountry=$_REQUEST['partCountry'];
		$carName=$_REQUEST['carName'];
		$partPrice=$_REQUEST['partPrice'];
		$partQuantity=$_REQUEST['partQuantity'];
		$image=$_REQUEST['image'];
		$this->model->getSparePart($PartNumber)-> Model_editSparePart($PartNumber,$PartName,$partCountry,$carName,$partPrice,$partQuantity);
	}

	public function delete($PartNumber)
	{
		$this->model->getSparePart($PartNumber
		)->deleteSparePart();
	}
}
?>