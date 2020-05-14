<?php
class Part_model
{
		
	function __construct()
	{
		 $con=new mysqli("localhost","root","","autosparecar");
	
	}
	function showPart()
	{
		 $con=new mysqli("localhost","root","","autosparecar");
		 
		$part="SELECT * From sparepart";
		return mysqli_query($con,$sql);
	}
}
?>