<?php

require_once(__ROOT__ . "controller/Controller.php");

class CompanyController extends Controller
{
	public function Con_addCompany()
	{
		$CompanyName=$_REQUEST['CompanyName'];
		$email=$_REQUEST['email'];
		$phoneNumber=$_REQUEST['phoneNumber'];
		$RegisterSupplierNumber=$_REQUEST['RegisterSupplierNumber'];
		$CommercialRecord=$_REQUEST['CommercialRecord'];
		
		$this->model->addcompany($CompanyName, $email, $phoneNumber, $RegisterSupplierNumber, $CommercialRecord);
	}

	public function Con_edit()
	{
		$CompanyName = $_REQUEST['CompanyName'];
		$email = $_REQUEST['email'];
        $phoneNumber = $_REQUEST['phoneNumber'];
		$RegisterSupplierNumber = $_REQUEST['RegisterSupplierNumber'];
		$CommercialRecord = $_REQUEST['CommercialRecord'];

		$this->model->Model_editCompany($CompanyName, $email, $phoneNumber,$RegisterSupplierNumber, $CommercialRecord);
	}

	public function Con_delete()
	{
		$this->deleteCompany();
	}
}
?>