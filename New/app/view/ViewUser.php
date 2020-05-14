<?php

require_once(__ROOT__ . "view/View.php");

class ViewUser extends View
{	
	public function output()
	{
		$str="";
		$str.="<a href='registerForm.php?action=add'>Add User</a><br><br>";
		$str.="<a href='index.php?action=edit'> Edit User</a><br><br>";
		$str.="<a href='index.php?action=delete'>Delete User </a>";
		return $str;
	}
	
function loginForm(){
		$str='<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>Bootstrap Simple Registration Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
	body{
		color: #fff;
		background: #000000;
		font-family: "Roboto", sans-serif;
	}
    .form-control{
		height: 40px;
		box-shadow: none;
		color: #969fa4;
	}
	.form-control:focus{
		border-color: #e9d900;
	}
    .form-control, .btn{        
        border-radius: 3px;
    }
	.signup-form{
		width: 400px;
		margin: 0 auto;
		padding: 30px 0;
	}
	.signup-form h2{
		color: #e9d900;
        margin: 0 0 15px;
		position: relative;
		text-align: center;
    }
	.signup-form h2:before, .signup-form h2:after{
		content: "";
		height: 2px;
		width: 30%;
		background: #e9d900;
		position: absolute;
		top: 50%;
		z-index: 2;
	}	
	.signup-form h2:before{
		left: 0;
	}
	.signup-form h2:after{
		right: 0;
	}
    .signup-form .hint-text{
		color: #999;
		margin-bottom: 30px;
		text-align: center;
	}
    .signup-form form{
		color: #999;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #f2f3f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
	.signup-form .form-group{
		margin-bottom: 20px;
	}
	.signup-form input[type="checkbox"]{
		margin-top: 3px;
	}
	.signup-form .btn{        
        font-size: 16px;
        font-weight: bold;		
		min-width: 140px;
        outline: none !important;
    }
	.signup-form .row div:first-child{
		padding-right: 10px;
	}
	.signup-form .row div:last-child{
		padding-left: 10px;
	}    	
    .signup-form a{
		color: #fff;
		text-decoration: underline;
	}
    .signup-form a:hover{
		text-decoration: none;
	}
	.signup-form form a{
		color: #000000;
		text-decoration: none;
	}	
	.signup-form form a:hover{
		text-decoration: underline;
	} 
</style>
</head>
<body>
<div class="signup-form">
 
		<form action="login.php" method="post">
		<h2>Login</h2>
		<p class="hint-text">Please Login</p>
       
		<div>
		  	<div class="form-group">
				<input type="text" name="username" placeholder="Enter User Name"/>
			</div>
		</div>
		<br>
		<div>
		  	<div class="form-group">
				<input type="password" name="password" placeholder="Enter password"/>
			</div>
		</div>
		<br>
		<div>
		  	<div class="form-group">
				<input type="submit" name="login" value="Login"/>
			</div>
		</div>
		</form>';
		return $str;
	}

	function registerForm()
	{
		$str='
<body>
<div class="signup-form">';

$str='<form action="registerForm.php?action=insert" method="post">


	<h2>Add User</h2>
		<p class="hint-text">Edit User Information</p>

		<div class="form-group">
			<div>
				<input type="text" class="form-control" name="FullName" />
			</div>
		</div>
		<br>
		<div class="form-group">
			<div><input type="text" class="form-control" name="username" "/>
			</div>
			</div>
		<br>
		<div class="form-group">
			<div><input type="text" class="form-control" name="email" "/>
			</div>
			</div>
		<br>
		<div class="form-group">
			<div><input type="password" class="form-control" name="password" "/>
			</div>
			</div>
		<br>
		<div class="form-group">
			<div><input type="text"class="form-control" name="Age" "/>
			</div>
			</div>
		<br>
		<div class="form-group">
			<div><input type="text" class="form-control" name="phoneNumber" 
			"/>
			</div>
			</div>
		<br>
		
		<div class="form-group">
			<div><input type="text" class="form-control" name="Role" "/>
			</div>
			</div>
		<br>
		<div class="form-group">
			<div class="form-group">
				<button type="submit" class="btn btn-warning" name="Add">Add</button>
       		</div>
        </div>
		</form>
		</div>';
		return $str;
	}



/*	function addEmployee()
 	{
 		$str='<!DOCTYPE html>
 <html lang="en">
 <head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
 <title>Bootstrap Simple Registration Form</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
 <style type="text/css">
 	body{
		color: #fff;
 		background: #000000;
		
 	}
     .form-control{
 		height: 40px;
 		box-shadow: none;
		color: #969fa4;
 	}
 	.form-control:focus{
 		border-color: #e9d900;
 	}
     .form-control, .btn{        
         border-radius: 3px;
     }
 	.signup-form{
 		width: 400px;
 		margin: 0 auto;
 		padding: 30px 0;
 	}
 	.signup-form h2{
 		color: #e9d900;
 		         margin: 0 0 15px;
 		text-align: center;
 		position: relative;
     }
 	.signup-form h2:before, .signup-form h2:after{
 		content: "";
 		 		height: 2px;
 		width: 30%;
 		background: #e9d900;
 		position: absolute;
 		top: 50%;
 		z-index: 2;
 	}	 	.signup-form h2:before{
// 		left: 0;
// 	}
// 	.signup-form h2:after{
// 		right: 0;
// 	}
//     .signup-form .hint-text{
// 		color: #999;
// 		margin-bottom: 30px;
// 		text-align: center;
// 	}
//     .signup-form form{
// 		color: #999;
// 		border-radius: 3px;
//     	margin-bottom: 15px;
//         background: #f2f3f7;
//         box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
//         padding: 30px;
//     }
// 	.signup-form .form-group{
// 		margin-bottom: 20px;
// 	}
// 	.signup-form input[type="checkbox"]{
// 		margin-top: 3px;
// 	}
// 	.signup-form .btn{        
//         font-size: 16px;
//         font-weight: bold;		
// 		min-width: 140px;
//         outline: none !important;
//     }
// 	.signup-form .row div:first-child{
// 		padding-right: 10px;
// 	}
// 	.signup-form .row div:last-child{
// 		padding-left: 10px;
// 	}    	
//     .signup-form a{
// 		color: #fff;
// 		text-decoration: underline;
// 	}
//     .signup-form a:hover{
// 		text-decoration: none;
// 	}
// 	.signup-form form a{
// 		color: #000000;
// 		text-decoration: none;
// 	}	
// 	.signup-form form a:hover{
// 		text-decoration: underline;
// 	} 
// </style>
// </head>
// <body>
// <div class="signup-form">

<form action="index.php?action=Con_editUser" method="post">

 	<h2>Add Manger</h2>
 		<p class="hint-text">User Information</p>

 		<div class="form-group">
 		<div><input type="text" class="form-control" name="FullName" placeholder="Enter Manger Name"/>
 		</div>
 		</div>
 		<br>
 		<div class="form-group">
 		 			<div><input type="text" class="form-control" name="username" placeholder="Enter username"/>
// 			</div>
// 			</div>
// 		<br>
// 		<div class="form-group">
// 			<div><input type="text" class="form-control" name="email" placeholder="Enter email"/>
// 			</div>
// 			</div>
// 		<br>
// 		<div class="form-group">
// 			<div><input type="password" class="form-control" name="password" placeholder="Enter password"/>
 			</div>
 			</div>
 		<br>
 		<div class="form-group">
 			<div><input type="text"class="form-control" name="Age" placeholder="Enter age"/>
 			</div>
 			</div>
 		<br>
 		<div class="form-group">
 			<div><input type="text" class="form-control" name="phoneNumber" placeholder="Enter phone"/>
 			</div>
 			</div>
 		<br>
 		div class="form-group">
 			<div>
 				<input type="text" class="form-control" name="Role" placeholder="Enter Role"/>
 			</div>
 		</div>
 		<br>
 		<div class="form-group">
 			<div class="form-group">
 			<button type="submit" class="btn btn-warning" name="Add" id="Add">Add</button>
         </div>
         </div>
 		</form>';
// 		return $str;
// 	}


*/
	public function editForm()
	{
		$str='<!DOCTYPE html>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>Bootstrap Simple Registration Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
	body{
		color: #fff;
		background: #000000;
		
	}
    .form-control{
		height: 40px;
		box-shadow: none;
		color: #969fa4;
	}
	.form-control:focus{
		border-color: #e9d900;
	}
    .form-control, .btn{        
        border-radius: 3px;
    }
	.signup-form{
		width: 400px;
		margin: 0 auto;
		padding: 30px 0;
	}
	.signup-form h2{
		color: #e9d900;
        margin: 0 0 15px;
		position: relative;
		text-align: center;
    }
	.signup-form h2:before, .signup-form h2:after{
		content: "";
		height: 2px;
		width: 30%;
		background: #e9d900;
		position: absolute;
		top: 50%;
		z-index: 2;
	}	
	.signup-form h2:before{
		left: 0;
	}
	.signup-form h2:after{
		right: 0;
	}
    .signup-form .hint-text{
		color: #999;
		margin-bottom: 30px;
		text-align: center;
	}
    .signup-form form{
		color: #999;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #f2f3f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
	.signup-form .form-group{
		margin-bottom: 20px;
	}
	.signup-form input[type="checkbox"]{
		margin-top: 3px;
	}
	.signup-form .btn{        
        font-size: 16px;
        font-weight: bold;		
		min-width: 140px;
        outline: none !important;
    }
	.signup-form .row div:first-child{
		padding-right: 10px;
	}
	.signup-form .row div:last-child{
		padding-left: 10px;
	}    	
    .signup-form a{
		color: #fff;
		text-decoration: underline;
	}
    .signup-form a:hover{
		text-decoration: none;
	}
	.signup-form form a{
		color: #000000;
		text-decoration: none;
	}	
	.signup-form form a:hover{
		text-decoration: underline;
	} 
</style>
</head>
<body>
<div class="signup-form">';

$str='<form action="index.php?action=editaction" method="post">

	<h2>Add User</h2>
		<p class="hint-text">Edit User Information</p>

		<div class="form-group">
			<div>
				<input type="text" class="form-control" name="FullName" value="'.$this->model->getFullName().'"/>
			</div>
		</div>
		<br>
		<div class="form-group">
			<div><input type="text" class="form-control" name="username" value="'.$this->model-> getusername().'"/>
			</div>
			</div>
		<br>
		<div class="form-group">
			<div><input type="text" class="form-control" name="email" value="'.$this->model->getEmail().'"/>
			</div>
			</div>
		<br>
		<div class="form-group">
			<div><input type="password" class="form-control" name="password" value="'.$this->model->getpassword().'"/>
			</div>
			</div>
		<br>
		<div class="form-group">
			<div><input type="text"class="form-control" name="Age" value="'.$this->model->getAge().'"/>
			</div>
			</div>
		<br>
		<div class="form-group">
			<div><input type="text" class="form-control" name="phoneNumber" value="'.$this->model->getPhoneNumber().'"/>
			</div>
			</div>
		<br>
		
		<div class="form-group">
			<div><input type="text" class="form-control" name="Role" value="'.$this->model->getRole().'"/>
			</div>
			</div>
		<br>
		<div class="form-group">
			<div class="form-group">
			<button type="submit" class="btn btn-warning" name="edit">Edit</button>
        </div>
        </div>
		</form>';
		return $str;
	}
}
?>
