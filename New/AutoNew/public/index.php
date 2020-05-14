<?php

define('__ROOT__', "../app/");
require_once(__ROOT__ . "model/User.php");
require_once(__ROOT__ . "controller/UserController.php");
require_once(__ROOT__ . "view/ViewUser.php");

$model = new User($_SESSION["ID"]);
$controller = new UserController($model);
$view = new ViewUser($controller, $model);
 //echo $view->loginForm();



// if(isset($_POST['login']))	
// {
	
// 	$username=$_REQUEST["username"];
// 	$password=$_REQUEST["password"];
// 	$sql = "SELECT * FROM user where username='$username' and password='$password' ";
// 	$dbh = new Dbh();
// 	$result = $dbh->query($sql);
// 	if ($result->num_rows == 1)
// 	{
// 		$row = $dbh->fetchRow();
// 		$_SESSION["ID"]=$row["ID"];
// 		$_SESSION["username"]=$row["username"];
// 		$_SESSION["Role"]=$row["Role"];
//              if ($row["Role"]=="Manager") {
//            header("Location:ManagerView.php");
//         }
//         else{
//         	header("Location:EmployeeView.php");
//         }
// 	}
// }


// if (isset($_GET['action']) && !empty($_GET['action']))
//  {
// 	$controller->{$_GET['action']}();
// }
// else {
// 	echo $view->output();
//}

?>
<table width='100%' align='center' >
	<tr>
		<td width='40%' align="center"><?php echo $view->registerForm();?></td>
	</tr>
</table>