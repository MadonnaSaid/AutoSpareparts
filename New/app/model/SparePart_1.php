<?php
require_once(__ROOT__ . "model/Model.php");

class SparePart extends Model
{
	private $PartNumber;
	private $PartName;
	private $partCountry;
	private $carName;
	private $partPrice;
	private $partQuantity;
	private $image;
	private $CarID;
	
	function __construct($PartNumber,$PartName="",$partCountry="",$carName="",$partPrice="",$partQuantity="",$image="",$CarID="")
	{
		$this->PartNumber = $PartNumber;
		$this->db = $this->connect();

		if(""===$PartName)
		{
			$this->readSparePart($PartNumber);
		}
		else
		{
			$this->PartNumber = $PartNumber;
			$this->PartName = $PartName;
			$this->partCountry = $partCountry;
			$this->carName = $carName;
			$this->partPrice = $partPrice;
			$this->partQuantity = $partQuantity;
			$this->image = $image;
			$this->CarID=$CarID;
		}
	}

	function getPartNumber() 
	{
		return $this->PartNumber;
	}	
	function setPartNumber($PartNumber)
	{
		return $this->PartNumber = $PartNumber;
	}

	function getPartName() 
	{
		return $this->PartName;
	}
	function setPartName($PartName) 
	{
		return $this->PartName = $PartName;
	}

	function getpartCountry() 
	{
		return $this->partCountry;
	}
	function setpartCountry($partCountry) 
	{
		return $this->partCountry = $partCountry;
	}
	function getcarName() 
	{
		return $this->carName;
	}	
	function setcarName($carName)
	{
		return $this->carName = $carName;
	}
	
	function getpartPrice() 
	{
		return $this->partPrice;
	}
	function setpartPrice($partPrice) 
	{
		return $this->partPrice = $partPrice;
	}

	function getpartQuantity() 
	{
		return $this->partQuantity;
	}
	function setpartQuantity($partQuantity) 
	{
		return $this->partQuantity = $partQuantity;
	}
	function getimage() 
	{
		return $this->image;
	}	
	function setimage($image)
	{
		return $this->image = $image;
	}
	function getCarID()
	{
		return $this->CarID;
	}

	function setCarID($CarID)
	{
		return $this->CarID=$CarID;
	}
	function readSparePart($PartNumber)
	{
		$sql = "SELECT * FROM `sparepart` WHERE PartNumber=".$PartNumber;
		$db = $this->connect();
		$result = $db->query($sql);
		if ($result->num_rows == 1){
			$row = $db->fetchRow();

			$this->PartNumber = $row['PartNumber'];
			$this->PartName = $row['PartName'];
			$this->partCountry = $row['partCountry'];
			$this->carName=$row['carName'];
			$this->partPrice = $row['partPrice'];
			$this->partQuantity = $row['partQuantity'];
			$this->image = $row['image'];
			$this->CarID=$row['CarID'];
		}
		else 
		{

			$this->PartNumber = "";
			$this->PartName = "";
			$this->partCountry ="";
			$this->carName = "";
			$this->partPrice = "";
			$this->partQuantity = "";
			$this->image = "";
			$this->CarID = "";

		}	
	}

	function Model_editSparePart($PartNumber,$PartName,$partCountry,$carName,$partPrice,$partQuantity,$image, $CarID)
	{
		/*$edit = "UPDATE `sparepart` SET PartNumber='$PartNumber',PartName='$PartName',partCountry='$partCountry',carName='$carName',partPrice='$partPrice',partQuantity='$partQuantity' where 
		(SELECT * from `car` where CarID=$this->CarID)" ;*/
	$edit = "UPDATE `sparepart` SET PartName='$PartName',partCountry='$partCountry',carName='$carName',partPrice='$partPrice',partQuantity='$partQuantity' where  PartNumber=$this->PartNumber";
		if($this->db->query($sql) === true)
		{
			echo "updated successfully.";
			$this->readCar($this->CarID);
		} 
		else
		{
			echo "ERROR: Could not able to execute $sql. " . $conn->error;
		}
	}

	function deleteSparePart($PartNumber)
	{
		$sqlCar="DELETE FROM sparepart WHERE PartNumber=$this->PartNumber";
		
		if($this->db->query($sql) === true)
		{
			//$sqlSP="delete from sparepart where id=$this->CarID;";;
			//echo "deleted successfully.";
			echo"Deleted the spare parts of this car successfully.";
		} 
		else
		{
			echo "ERROR: Could not able to execute $sqlCar. " . $conn->error;
		}
	}

	function Model_decreseQty( $PartNumber, $partQuantity)
	{
		
	$edit = "UPDATE `sparepart` SET partQuantity=$this->partQuantity - $partQuantity' where  PartNumber=$this->PartNumber";
		if($this->db->query($sql) === true)
		{
			echo "updated successfully.";
			$this->readCar($this->CarID);
		} 
		else
		{
			echo "ERROR: Could not able to execute $sql. " . $conn->error;
		}
	}
	function Model_IncQty( $PartNumber,$partQuantity)
	{
		
	$inc = "UPDATE `sparepart` SET partQuantity=$this->partQuantity + $partQuantity' where  PartNumber=$this->PartNumber";
		if($this->db->query($inc) === true)
		{
			echo "updated successfully.";
			$this->readCar($this->CarID);
		} 
		else
		{
			echo "ERROR: Could not able to execute $inc. " . $conn->error;
		}
	}
	// 	function imageSparePart($image)
	// {
	// 	$sql="INSERT INTO image (name)values ($image)";
	// 	if($this->db->query($sql) === true)
	// 	{
	// 		echo "added successfully.";
	// 	} 
	// 	else
	// 	{
	// 		echo "ERROR: Could not able to execute $sql. " . $conn->error;
	// 	}
		
	// }
}