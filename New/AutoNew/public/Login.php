<?php

define('__ROOT__', "../app/");
require_once(__ROOT__ . "model/Users.php");
require_once(__ROOT__ . "controller/UserController.php");
require_once(__ROOT__ . "view/ViewUser.php");

$model = new Users();
$controller = new UserController($model);
$view = new ViewUser($controller, $model);

if (isset($_GET['action']) && !empty($_GET['action']))
 {
	$controller->{$_GET['action']}();
}

?>
<table width='100%' align='center' >
	<tr>
		<td width='40%' align="center"><?php echo $view->loginForm();?></td>
		<td width='40%' align="center"><?php echo $view->registerForm();?></td>
	</tr>
</table>