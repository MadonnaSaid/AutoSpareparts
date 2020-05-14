<?php
class Home_model
{
		
	function __construct()
	{
		 $con=new mysqli("localhost","root","","autosparecar");
	
	}
	function addcompany($Name,$email,$phoneNumber,$RegisterSupplierNumber, $CommercialRecord)
	{

		
		 $con=new mysqli("localhost","root","","autosparecar");

		$sql="INSERT INTO `localcompany`
	( `CompanyName`, 
	`email`, 
	`phoneNumber`,
	`RegisterSupplierNumber`, 
	`CommercialRecord`) 
	VALUES (
		'$Name',
		'$email',
		'$phoneNumber',
		'$RegisterSupplierNumber', 
		'$CommercialRecord')";

		mysqli_query($con,$sql);
		
	}
	//function bt3raf el part number da 3andy meno kam item
	//a3mleha fe nafes el function wla a3ml function gedida?
	function export($companyID, $CarID, $PartNumber, $PartName, $Quantity, $itemPrice, $TotalCost)
	{
			$checkout="INSERT INTO `export`
				(
				`localCompanyID`,
				`CarID`,
				`PartNumber`, 
				`PartName`, 
				`Quantity`, 
				`itemPrice`,
				`TotalCost`
				)
				VALUES (
				`$companyID`,
				`$CarID`,
				`$PartNumber,
				`$PartName`,
				`$Quantity `,
				`$itemPrice`,
				`$TotalCost`)";
	
		//el mafroud a3ml else hena 3shn law mafish el quantity el ana 3yza?
		mysqli_query($this->$con,$checkout);
		
	}

	function getcars()
	{
		 $con=new mysqli("localhost","root","","autosparecar");
		 $sql ="SELECT * FROM `car` INNER JOIN `image` ON car.imgID = image.imgID";
		return mysqli_query($con,$sql);
	}
	function getcompany()
	{
		$con=new mysqli("localhost","root","","autosparecar");
		$company="SELECT * FROM `localcompany` ";
		return mysqli_query($con, $company);
	}
	

	function Import($PartNumber,$Quantity )
	{
		$import="UPDATE 
		`sparepart`
		 SET 
		 `partQuantity`=` $Quantity`
		  WHERE 
		  `PartNumber`=	`$PartNumber`" ;
		  mysqli_query($this->$con,$import);
	}

	function DisplayCheckout()
	{
		$sql="SELECT * FROM `export`  ";
		return mysqli_query($this->$con,$import);
	}


//ma3 mina
	//get the checkput to be printed
	
	function getCheckout()
	{

		$con=new mysqli("localhost","root","","autosparecar");
		$checkout="SELECT * FROM `export` ";
		return mysqli_query($con, $checkout);
	}

	function Service()
	{
		
	}
	function Export_Import()
	{}
	function Check_Out()
	{}
	function History_module()
	{}
	function Add_Company()
	{}


}


/*if(isset($_POST['submit']))
{


  header("location: .php");
}
else
{

	//$view->Confrimerror();
}
//Add company table 
//na2es eno redirect in the same page ll product parts 
/*if (isset($_POST['']))//add new company
{
 echo "<script>alert('done');
		 </script>";
	$sql="INSERT INTO `localcompany`
	( `CompanyName`, 
	`email`, 
	`phoneNumber`,
	`RegisterSupplierNumber`, 
	`CommercialRecord`) 
	VALUES ('".$_POST['CompanyName']."',
	'".$_POST['email']."',
	'".$_POST['phoneNumber']."',
	'".$_POST['RegisterSupplierNumber']."',
	'".$_POST['CommercialRecord']."'
	)";
	$result=mysqli_query($conn,$sql);
	
	if ($result==true)
	{
		echo "doneeeee";
		//header("location:HomeControler .php")
	}
	else
	{
		echo $sql;
	}
}*/




//check out insert
//ana msh fakra fain el attruibutes bet3et el checkout table 

/*if(isset($_POST['SubmitCheckout']))
{

	
	//htrga3ly el quantity
	//function tania fl model
	//compare by the required quantity 
	// validation
	//update el qunatity bta3et el part da fl tabel el awalany
	// done or error
	/*$checkout="INSERT INTO `export`
	(
	`localCompanyID`,
	`CarID`,
	`PartNumber`, 
	`PartName`, 
	`Quantity`, 
	`itemPrice`,
	`TotalCost`
	)
	VALUES (
	'".$_POST['localCompanyID']."',
	'".$_POST['CarID']."',
	'".$_POST['PartNumber']."',
	'".$_POST['PartName']."',
	'".$_POST['Quantity']."',
	'".$_POST['itemPrice']."',
	'".$_POST['TotalCost']."'
	)";
}*/
/*
if (isset($_POST['Export']))
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
          //  else
          //  {
            //    echo '<script>alert("Item Already Added")</script>';
            //    echo '<script>window.location="index.php"</script>';
           // }
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
}
//ana 7aset en table imoprt dah malosh lazma la2n ana lma agy 3aml import ,ana ba3ml edit fel data base fa leh ykon mawgod asln 
//ana ha3milo 3al ana shaifah delwa2et w law fe 7gat msh zabteha ha3mleha ma3 mina

/*if(isset($_POST['Import']))
{
	$import="UPDATE `sparepart` SET `partQuantity`='".$_POST['quantity']."' WHERE `PartNumber`='".$_POST['PartNumber']."'  " ;
}*/

/*if(isset($_POST['DisplayCheckout']))
{
	$sql="SELECT * FROM `export` WHERE `ExportID`='".$_POST['ExportID']."' ";
}
*/

?>