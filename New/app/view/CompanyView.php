<?php
require_once(__ROOT__ . "view/View.php");

class CompanyView extends View
{
  
  public function output()
  {
    $str = "";
    $str.="<table>";
    $str.="<tr><th>Name</th><th>Year</th><th>Action</th></tr>";
    foreach($this->model->getCompanys() as $Company)
    {
      $str.="<tr>";
       // $str.="<form href='Addcompany.php?action=editAction&id=".$Company->getLocalCompanyID()."' method='post'>";
         $str.="<td><input type='text' name='CompanyName' value='".$Company->getCompanyName()."'>  </td> ";
        $str.="<td><input type='text' name='email' value='".$Company->getemail()."'>  </td> ";
        $str.="<td><input type='text' name='phoneNumber' value='". $Company->getphoneNumber() ."'></td> ";
         $str.="<td><input type='text' name='RegisterSupplierNumber' value='". $Company->getRegisterSupplierNumber() ."'></td> ";
           $str.="<td><input type='text' name='CommercialRecord' value='". $Company->getCommercialRecord() ."'></td> ";
        $str.="<td>
        <a href='Addcompany.php?action=edit&id=".$Company->getLocalCompanyID()."'>Edit</a>
        <a href='Addcompany.php?action=delete&id=".$Company->getLocalCompanyID()."'>Delete</a>
        </td>";
        //$str.="</form>";
        $str.="</tr>";
    }
    $str.="<tr>";
    $str.="<form action='Addcompany.php?action=insert' method='post'>";
    $str.="<td><input type='text' name='CompanyName' placeholder='Enter name'/></td>";
    $str.="<td><input type='text' name='email' placeholder='Enter year'/></td>";
     $str.="<td><input type='text' name='phoneNumber' placeholder='Enter name'/></td>";
    $str.="<td><input type='text' name='RegisterSupplierNumber' placeholder='Enter year'/></td>";
     $str.="<td><input type='text' name='CommercialRecord' placeholder='Enter name'/></td>";
    $str.="<td><input type='submit' value='insert'/></td>";
    $str.="</form>";
    $str.="</tr>";
    $str.="</table>";
    $str.="<a href='welcome.php'>Back to home </a>";

    return $str;
  }



  public function View_editCompany($id)
  {
    $str = "";
    $str.="<table>";
    $str.="<tr><th>Company Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Register Supplier Number</th>
            <th>Commercial Record</th>
            </tr>";
    foreach($this->model->getCompanys() as $Company)
    {
      if($Company->getLocalCompanyID()===$id)  
      {
        $str.="<tr>";
        $str.="<form action='Addcompany.php?action=editAction&id=".$Company->getLocalCompanyID()."' method='post'>";
         $str.="<td><input type='text' name='CompanyName' value='".$Company->getCompanyName()."'>  </td> ";
        $str.="<td><input type='text' name='email' value='".$Company->getemail()."'></td> ";
        $str.="<td><input type='text' name='phoneNumber' value='". $Company->getphoneNumber() ."'></td> ";
         $str.="<td><input type='text' name='RegisterSupplierNumber' value='". $Company->getRegisterSupplierNumber() ."'></td> ";
           $str.="<td><input type='text' name='CommercialRecord' value='". $Company->getCommercialRecord() ."'></td> ";
        $str.="<td><input type='submit' value='Change'/></td>";
        $str.="</form>";
        $str.="</tr>";
      }
      else 
       {
        $str.="<tr>";
        $str.="<td>"
             .$Company->getCompanyName().
             "</td> ";
        $str.="<td>"
              .$Company->getemail().
              "</td> ";
        $str.="<td>"
              . $Company->getphoneNumber() .
              "</td> ";
        $str.="<td>"
              . $Company->getRegisterSupplierNumber() .
              "</td> ";
        $str.="<td>"
              . $Company->getCommercialRecord() .
              "</td> ";
        $str.="<td>
              <input type='submit' value='Change'/>
              </td>";
        $str.="<td>
              <a href='Addcompany.php?action=edit&id=".$Company->getLocalCompanyID()."'>Edit</a>
              </td>";
        $str.="</tr>";
      }
    }
    $str.="</table>";
    $str.="<a href='Addcompany.php'>Back to Companys </a>";
    return $str;
  }
} 

/*public function output()
{
   $str='
 <!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Auto spare parts</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="css/agency.min.css" rel="stylesheet">

</head>
  
 
      <div class="row">

        <div class="col-lg-12">

          
<form action="addcompany.php?action=Con_addCompany" method="post">
  <!-- Add Company -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Add Company</h2>
          <h3 class="section-subheading text-muted"> </h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form id="contactForm" name="sentMessage" novalidate="novalidate">
            <div class="row">
              <div class="col-md-6">
              <!--name--->
                <div class="form-group">
                <input class="form-control" id="CompanyName" name="CompanyName" "type="text" placeholder="Company Name *" required="required" data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
                </div>
                <!--Email--->
                <div class="form-group">
                <input class="form-control" id="email" name="email" type="email" placeholder="Email *" required="required" data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
                </div>
                <!--Phone Numbwer--->
                <div class="form-group">
                <input class="form-control" id="phone" name="phoneNumber"type="tel" placeholder="Phone Number*" required="required" data-validation-required-message="Please enter your phone number.">
                <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                <input class="form-control" id="RegisterSupplierNumber" name="RegisterSupplierNumber"type="number" placeholder="Register Supplier Number" required="required" data-validation-required-message="Please enter Register Supplier Number">
                <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                <input class="form-control" id="CommercialRecord" name="CommercialRecord"type="number" placeholder="Commercial Record" required="required" data-validation-required-message="Please enter Commercial Record.">
                <p class="help-block text-danger"></p>
                </div>
              </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button class="btn btn-primary btn-xl text-uppercase" type="submit" name="addcompany">Add New Company</button>  <br>
       <br>
              </div>
            </div>
          </form>

     <a"Addcompany.php?action=edit">Add User</a><br><br>
            <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button class="btn btn-primary btn-xl text-uppercase" type="submit" name="delete">delete New Company</button>
              </div>
            </div>
            <br>
            <br>
             
        </div>
      </div>
    </div>
  </section>
 ';

         
    return $str;
  }*/


/*
 <!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Auto spare parts</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="css/agency.min.css" rel="stylesheet">

</head>
  */

/*$str='
 
      <div class="row">

        <div class="col-lg-12">

  <!-- Add Company -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Add Company</h2>
          <h3 class="section-subheading text-muted"> </h3>
        </div>
      </div>';
      foreach ($this->model->getCompanys() as $Company)
        {
         if($Company->getLocalCompanyID() === $id)
         {
          $str.='
      <div class="row">
        <div class="col-lg-12">
          <form id="contactForm" name="sentMessage" novalidate="novalidate" action="addcompany.php?action=editAction" method="post">

            <div class="row">
              <div class="col-md-6">
              <!--name--->
                <div class="form-group">
                <input class="form-control" id="CompanyName" name="CompanyName" "type="text" value="'.$Company->getCompanyName().'" required="required" data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
                </div>


                <!--Email--->
                <div class="form-group">
                <input class="form-control" id="email" name="email" type="email" value="'.$Company->getemail().'" required="required" data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
                </div>


                <!--Phone Numbwer--->
                <div class="form-group">
                <input class="form-control" id="phone" name="phoneNumber"type="tel" 
                value="'.$Company->getphoneNumber(). '" required="required" data-validation-required-message="Please enter your phone number.">
                <p class="help-block text-danger"></p>
                </div>


                <div class="form-group">
                <input class="form-control" id="RegisterSupplierNumber" name="RegisterSupplierNumber"type="number" value="'.$Company->getRegisterSupplierNumber() .'"required="required" data-validation-required-message="Please enter Register Supplier Number">
                <p class="help-block text-danger"></p>
                </div>

                <div class="form-group">
                <input class="form-control" id="CommercialRecord" name="CommercialRecord"type="number" value="'.$Company->getCommercialRecord().'"required="required" data-validation-required-message="Please enter Commercial Record.">
                <p class="help-block text-danger"></p>
                </div>
              </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button class="btn btn-primary btn-xl text-uppercase" type="submit" name="edit">Edit Company</button>
                <br>
                <br>
              </div>
            </div>
          </form>';
         }

       }

           return $str;*/
?>