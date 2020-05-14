	<?php
include "HomeView.php";
include "HomeModel.php";
//include ".php";

$conn = mysqli_connect("localhost","root","","autosparecar");
session_start();
$view= new Home_view();
$model= new Home_model();
//$model = new ();

  //$User_ID=$_SESSION['Customer_ID'];

 $view->htmlone();
$cars = $model-> getcars();

while ($row = mysqli_fetch_array($cars))
{
//	echo $row['name'] ;
	//echo 'start';
	$view -> htmltwo($row["CarID"],$row["CarName"],$row["name"],$row["CarType"]);
}
	https://stackoverflow.com/questions/15518294/how-to-return-inner-join-query-result
$view ->  htmlthree();
//deh el 3amleteha bs hya betetkarar 

$company=$model->getcompany();
while($row=mysqli_fetch_array($company))
{
	$view->Company($row["CompanyName"]);
}

//deh el fatora eli mafroud tetla3 bs hya msh betetla3 fe table
$ck=$model->getCheckout();
	while($row=mysqli_fetch_array($ck))
{
	$view->ckout($row["ExportID"], $row["localCompanyID"], $row["CarID"], $row["PartNumber"], $row["PartName"], $row["Quantity"], $row["itemPrice"], $row["TotalCost"]);
}

 if (isset($_POST['addcompany']))
{
	
	$Name=$_POST['CompanyName'];
	$email=$_POST['email'];
	$phoneNumber=$_POST['phoneNumber'];
	$RegisterSupplierNumber=$_POST['RegisterSupplierNumber'];
	$CommercialRecord=$_POST['CommercialRecord'];
	$model-> addcompany($Name, $email, $phoneNumber,
	 $RegisterSupplierNumber, $CommercialRecord); 


}
else if (isset($_POST['SubmitCheckout']))
{
	$companyID=$_POST['localCompanyID'];
	$CarID=$_POST['CarID'];
	$PartNumber=$_POST['PartNumber'];
	$PartName=$_POST['PartName'];
	$Quantity=$_POST['Quantity'];
	$itemPrice=$_POST['itemPrice'];
	$TotalCost=$_POST['TotalCost'];

	$model-> export($companyID, $CarID, $PartNumber, $PartName, $Quantity, $itemPrice, $TotalCost);
	echo"<script> alert('Thank You.');</script>";

}
else if (isset($_POST['car']))
{
	echo 'done ';
}
else if (isset($_POST['Import']))
{
	$PartNumber=$_POST['PartNumber'];
	$Quantity=$_POST['Quantity'];
	$model-> Import($PartNumber, $Quantity);

}
else if (isset($_POST['DisplayCheckout']))
{
	//$exportID=$_POST['ExportID'];
	//el mafroud hena hytala3 kol el data el fel table dah 
	// fa el mafroud the echo hatkon hena wla fel table el mafroud hykon ma3mol fel view ?
	
	 $results = $model-> DisplayCheckout($exportID);
	  while($row =mysqli_fetch_array($results))
  {
    echo $row["PartNumber"];
    $view-> cars($row["id"], $row["image"]);
  }


}
  //checkout table 
//ha3ml el 7eta deh ma3 mina..
else if (isset($_POST['Export']))
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
 

?>