<?php
require_once(__ROOT__ . "model/Model.php");
require_once(__ROOT__ . "model/SparePart.php");

class SpareParts extends Model 
{
	private $SpareParts;
	
	function __construct()
	{
		$this->fillArray();
	}

function fillArray() 
	{
		$this->SpareParts = array();
		$this->db = $this->connect();
		$result = $this->readSpareParts();
		while ($row = $result->fetch_assoc()) 
		{
			array_push($this->SpareParts, new SparePart($row["PartNumber"]));
		}
	}

	function getSpareParts() 
	{
		$this->fillArray();  
		return $this->SpareParts;
	}

	function getSparePart($PartNumber)
	{
		foreach($this->SpareParts as $SparePart)
		{
			if ($PartNumber == $SparePart->getPartNumber()) 
			{
				return $SparePart;
			}
		}
	}

	function readSpareParts()
	{
		$Parts="SELECT * FROM `sparepart`";
		
		$result=$this->db->query($Parts);
		if ($result->num_rows > -1){
			return $result;
		}
		else
		{
			return false;
		}
	}

	function addSparePart($PartNumber,$PartName,$partCountry,$carName,$partPrice,$partQuantity,$image,$CarID)
	{
		$sql="INSERT INTO `sparepart`
		(
		PartNumber,
		PartName,
		partCountry,
		carName,
		partPrice,
		partQuantity,
		image,CarID
		)
	 	VALUES 
	 	(
	 	'$PartNumber',
	 	'$PartName',
	 	'$partCountry',
	 	'$carName',
	 	'$partPrice',
	 	'$partQuantity',
	 	'$image',
	 	'$CarID')";
		if($this->db->query($sql) === true)
		{
			echo "Records inserted successfully.";
			$this->fillArray();
		} 
		else
		{
			echo "ERROR: Could not able to execute $sql. " . $conn->error ;
		}
	}
}
?>