<?php


include"View.php";

class ViewSparePart extends View
{	
	public function output()
	{
		$str = "";
		$str.="<table>";
		$str.="<tr>
				<th>image</th>
				<th>PartNumber</th>
				<th>PartName</th>
				<th>partCountry</th>
				<th>carName</th>
				<th>partPrice</th>
				<th>partQuantity</th>
				<th>Action</th>
			  </tr>";
		foreach($this->model->getSpareParts() as $SparePart)
		{
			$str.="<tr>";
			$str.="<td>
			<img src='img/portfolio/".$SparePart->getimage() ."</td> ";
			$str.="<td>".$SparePart->getPartNumber() ."  </td> ";
			$str.="<td>".$SparePart->getPartName() ."</td> ";
			$str.="<td>".$SparePart->getpartCountry() ."</td> ";
			$str.="<td>".$SparePart->getcarName() ."  </td> ";
			$str.="<td>".$SparePart->getpartPrice() ."</td> ";
			$str.="<td>".$SparePart->getpartQuantity() ."</td> ";
			$str.="<td>
			";

			$str.="</tr>";
		}
		
		return $str;
	}

	function addSparePart()
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

<form action="spareParts.php?action=addAction" method="post">

	<h2>Add Spare Parts</h2>
		<p class="hint-text">Spare Parts Infromation</p>

		<div class="form-group">
		<div><input type="text" class="form-control" name="PartNumber"  placeholder="Enter Part Number"/>
		</div>
		</div>
		<br>
		<div class="form-group">
			<div><input type="text" class="form-control" name="PartName"  placeholder="Enter Part Name"/>
			</div>
			</div>
		<br>
		<div class="form-group">
			<div><input type="text" class="form-control" name="partCountry" placeholder="Enter Country"/>
			</div>
			</div>
		<br>
		<div class="form-group">
			<div>
				<input type="text" class="form-control" name="carName"   placeholder="Car Name"/>
			</div>
		</div>
		<br>
		<div class="form-group">
			<div>
				<input type="text" class="form-control" name="partPrice" placeholder="Price"/>
			</div>
		</div>
		<br>
		<div class="form-group">
			<div>
				<input type="text" class="form-control" name="partQuantity" placeholder="Quantity"/>
			</div>
		</div>
		<br>
		<div class="form-group">
			<div>
				<input type="text" class="form-control" name="image" placeholder="Imge Name"/>
			</div>
		</div>
		<br>
		<div class="form-group">
			<div>
				<input type="text" class="form-control" name="carName"  id="imgName" placeholder="Imge Name"/>
			</div>
		</div>
		<br>
		<div class="form-group">
			<div class="form-group">
				<button type="submit" class="btn btn-warning" name="Add" id="Add">Add</button>
        	</div>
        </div>
		</form>';
		return $str;
	}

	public function viewEditSparePart($id)
	{
		$str = "";
		$str.="<table>";
		$str.="<tr><th>Name</th><th>Model</th><th>Year</th><th>Action</th></tr>";
		foreach($this->model->getSpareParts() as $SparePart){
			if($SparePart->getCarID()===$id) 	{
				$str.="<tr>";
				$str.="<form 
				action='SparePart.php?action=editAction&id=".$SparePart->getCarID()."' method='post'>";
				$str.="<td><input type='text' name='PartName' value='".$SparePart->getPartName() ."'>  </td> ";
				$str.="<td><input type='text' name='partCountry' value='".$SparePart->getpartCountry() ."'></td> ";
				$str.="<td><input type='text' name='carName' value='".$SparePart->getcarName() ."'></td> ";
				$str.="<td><input type='text' name='partPrice' value='".$SparePart->getpartPrice() ."'>  </td> ";
				$str.="<td><input type='text' name='partQuantity' value='".$SparePart->getpartQuantity() ."'></td> ";
				$str.="<td><input type='submit' value='Change'/></td>";
				$str.="</form>";
				$str.="</tr>";
			}
		}
		$str.="<a href='SparePart.php'>Back to Home </a>";
		return $str;
	}
}