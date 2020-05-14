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

    public function __construct($ID, $FullName="", $username="", $email="", $password="", $Age="", $phoneNumber="", $Role="")
    {
        $this->ID = $ID;
        $this->db = $this->connect();

        if (""===$FullName) {
            $this->readUser($ID);
        } else {
            $this->FullName = $FullName;
            $this->username=$username;
            $this->email=$email;
            $this->password=$password;
            $this->Age = $Age;
            $this->phoneNumber = $phoneNumber;
            $this->Role=$Role;
        }
    }
    public function getFullName()
    {
        return $this->FullName;
    }
    public function setFullName($FullName)
    {
        return $this->FullName = $FullName;
    }
    public function getusername()
    {
        return $this->username=$username;
    }
    public function setusername($username)
    {
        return $this->username=$username;
    }
    public function getemail()
    {
        return  $this->email=$email;
    }
    public function setemail($email)
    {
        return  $this->email=$email;
    }
    public function getPassword()
    {
        $this->password=$password;
    }
    public function setPassword($password)
    {
        $this->password=$password;
    }
    public function getAge()
    {
        return $this->Age;
    }
    public function setAge($Age)
    {
        return $this->Age = $Age;
    }
  
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }
  
    public function setphoneNumber($phoneNumber)
    {
        return $this->phoneNumber = $phoneNumber;
    }

    public function getRole()
    {
        return $this->Role;
    }
    public function setRole($Role)
    {
        return $this->Role=$Role;
    }

    public function getID()
    {
        return $this->ID;
    }

    public function readUser($ID)
    {
        $user=" SELECT * FROM user where ID=".$ID;
        $db = $this->connect();

        $result = $db->query($user);

        if ($result->num_rows == 1) {
            $row = $db->fetchRow();
            $this->FullName = $row["FullName"];
            $_SESSION["FullName"]=$row["FullName"];
            $this->username=$row["username"];
            $this->email=$row["email"];
            $this->password=$row["password"];
            $this->Age = $row["Age"];
            $this->phoneNumber = $row["phoneNumber"];
            $this->Role=$row["Role"];
        } else {
            $this->FullName="";
            $this->username="";
            $this->email="";
            $this->password="";
            $this->Age="";
            $this->phoneNumber="";
            $this->Role="";
        }
    }

    public function Model_editUser($FullName, $username, $email, $password, $Age, $phoneNumber, $Role)
    {
        $editUser="UPDATE user SET FullName='$FullName', username='$username',email='$email',password='$password , Age='$Age', phoneNumber='$phoneNumber' WHERE ID=$this->ID; ";
        if ($this->db->query($editUser)===true) {
            echo"updated successfully.";
            $this->readUser($this->ID);
        } else {
            echo "ERROR: Could not able to execute $editUser. " . $conn->error;
        }
    }

    public function Model_deleteUser()
    {
        $deleteUser="DELETE FROM user WHERE ID=$this->ID;";
        if ($this->db->query($deleteUser)===true) {
            echo "delete successfully.";
        } else {
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }
    }
    // public function ModelloginUser()
    // {
    //     $loginUser="SELECT * FROM user where username='$UserName' and password='$password' ";
    //     $db = $this->connect();
    //     $result = $db->query($sql);
    //     if ($result->num_rows == 1) {
    //         $row = $db->fetchRow();
    //         $_SESSION["ID"]=$row["ID"];
    //         $_SESSION["username"]=$row["username"];
   
   
    //     }
    // }
}
?>