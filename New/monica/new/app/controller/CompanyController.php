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

	public function Con_edit($LocalCompanyID)
	{
		$LocalCompanyID=$_REQUEST['LocalCompanyID'];
		$CompanyName = $_REQUEST['CompanyName'];
		$email = $_REQUEST['email'];
        $phoneNumber = $_REQUEST['phoneNumber'];
		$RegisterSupplierNumber = $_REQUEST['RegisterSupplierNumber'];
		$CommercialRecord = $_REQUEST['CommercialRecord'];

		$this->model->getCompany($LocalCompanyID)->Model_editCompany($CompanyName, $email, $phoneNumber,$RegisterSupplierNumber, $CommercialRecord);
	}

	public function Con_delete($LocalCompanyID)
	{
		$this->model->getCompany($LocalCompanyID)->modeldeleteCompany();
	}
}
?>