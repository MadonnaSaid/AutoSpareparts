<?php
  require_once(__ROOT__ . "model/Model.php");
?>

<?php

class User extends Model 
{
    private $ID;
    private $FullName;
    private $username;
    private $email;
	  private $password;
    private $Age; 
    private $phoneNumber;
    private $Role;

 function __construct($ID,$FullName="",$username="",$email="",$password="",$Age="",$phoneNumber="",$Role="")
  {
    $this->ID = $ID;
	    $this->db = $this->connect();

    if(""===$FullName)
    {
      $this->readUser($ID);
    }
    else
    {
      $this->FullName = $FullName;
      $this->username=$username;
      $this->email=$email;
	    $this->password=$password;
      $this->Age = $Age;
      $this->phoneNumber = $phoneNumber;
      $this->Role=$Role;
    }
  }
  function getFullName()
  {
  	return $this->FullName;
  }
  function setFullName($FullName)
  {
  	 return $this->FullName = $FullName;
  }
  function getusername()
  {
  	return $this->username;
  }
  function setusername($username)
  {
  	return $this->username = $username; 
  }
  function getEmail()
  {
  	return  $this->email;
  }
  function setEmail($email)
  {
  	return  $this->email=$email;
  }
  function getpassword()
  {
  	 $this->password;
  }
  function setPassword($password)
  {
  	 $this->password=$password;
  }
  function getAge() 
  {
    return $this->Age;
  }
  function setAge($Age)
  {
    return $this->Age = $Age;
  }
  
  function getPhoneNumber()
  {
    return $this->phoneNumber;
  }
  
  function setphoneNumber($phoneNumber) 
  {
    return $this->phoneNumber = $phoneNumber;
  }

  function getRole()
  {
    return $this->Role;
  }
  function setRole($Role)
  {
    return $this->Role=$Role;
  }

  function getID() 
  {
    return $this->ID;
  }

  function readUser($ID)
  {
  	$user=" SELECT * FROM user where ID=".$ID;
  	$db = $this->connect();

    $result = $db->query($user);

    if ($result->num_rows == 1)
    {
        $row = $db->fetchRow();
        $this->FullName = $row["FullName"];
		    $_SESSION["FullName"]=$row["FullName"];
		    $this->username=$row["username"];
		    $this->email=$row["email"];
		    $this->password=$row["password"];
        $this->Age = $row["Age"];
		    $this->phoneNumber = $row["phoneNumber"];
        $this->Role=$row["Role"];
    }
    else 
    {
    	$this->FullName="";
    	$this->username="";
    	$this->email="";
    	$this->password="";
    	$this->Age="";
    	$this->phoneNumber="";
      $this->Role="";
    }
  }

  function Model_editUser($FullName,$username,$email,$password,$Age,$phoneNumber, $Role)
	{
    $editUser="UPDATE `user` SET `FullName`='$FullName', `username`='$username',`email`='$email',`password`='$password' , `Age`='$Age', `phoneNumber`='$phoneNumber' , `Role`='$Role' WHERE ID=$this->ID;";	
		if($this->db->query($editUser)===true)
		{
			echo"updated successfully.";
			$this->readUser($this->ID);
		}
		else
		{
            echo "ERROR: Could not able to execute $editUser. " . $conn->error;
    }

	}

	function Model_deleteUser()
	{
		$deleteUser="DELETE FROM user WHERE ID=$this->ID;";
		if($this->db->query($deleteUser)===true)
		{
			 echo "deletet successfully.";
		}
		else
		{
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }
	}

}
?>