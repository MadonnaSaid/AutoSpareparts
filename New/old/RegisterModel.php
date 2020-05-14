<?php

class Registration_Model
{
		
	function __construct()
	{
	}
	function signup($first,$last,$email,$password)
	{
		$con=new mysqli("localhost","root","","autosparecar");
	
		$sql="INSERT INTO `username` ( `firstname`, `lastname`, `email`, `password`) VALUES ( '$first','$last','$email','$password' )";

		mysqli_query($con,$sql);
		
	}

}
?>
